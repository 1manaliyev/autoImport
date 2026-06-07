#!/usr/bin/env bash
set -euo pipefail

# Git Bash on Windows rewrites /var/www/html — disable path conversion.
export MSYS_NO_PATHCONV=1

ROOT="$(cd "$(dirname "$0")/.." && pwd)"
PROJECT="$(cd "$ROOT/.." && pwd)"
WP_PORT="${WP_PORT:-8080}"
WP_URL="http://localhost:${WP_PORT}"

echo "==> Converting static HTML to theme partials..."
python3 "$PROJECT/scripts/convert_html_to_wp.py" || python "$PROJECT/scripts/convert_html_to_wp.py"

echo "==> Starting Docker containers..."
cd "$ROOT"
docker compose up -d

echo "==> Waiting for database..."
for i in $(seq 1 30); do
  if docker compose ps db --format json 2>/dev/null | grep -q '"Health":"healthy"'; then
    break
  fi
  sleep 2
done

echo "==> Waiting for WordPress..."
for i in $(seq 1 30); do
  if curl -sf "$WP_URL/" >/dev/null 2>&1; then
    break
  fi
  sleep 2
done

if ! docker compose run --rm wpcli core is-installed --path=/var/www/html 2>/dev/null; then
  echo "==> Installing WordPress..."
  docker compose run --rm wpcli core install \
    --path=/var/www/html \
    --url="$WP_URL" \
    --title="AutoImport" \
    --admin_user="admin" \
    --admin_password="admin" \
    --admin_email="admin@autoimport.local" \
    --skip-email
fi

echo "==> Activating theme and flushing permalinks..."
docker compose run --rm wpcli theme activate autoimport --path=/var/www/html
docker compose run --rm wpcli rewrite structure '/blog/%postname%/' --path=/var/www/html
docker compose run --rm wpcli rewrite flush --path=/var/www/html

echo ""
echo "Done! Open $WP_URL"
echo "Admin: $WP_URL/wp-admin  (login: admin / admin)"
