#!/usr/bin/env python3
"""Convert static HTML pages to WordPress theme static-content PHP partials."""

from __future__ import annotations

import re
import shutil
from pathlib import Path

ROOT = Path(__file__).resolve().parent.parent
THEME = ROOT / "wordpress" / "wp-content" / "themes" / "autoimport"
STATIC = THEME / "static-content"

LINK_MAP = {
    "index.html": "/",
    "catalog.html": "/catalog",
    "korea.html": "/korea",
    "china.html": "/china",
    "europe.html": "/europe",
    "usa.html": "/usa",
    "podbor.html": "/podbor",
    "remote.html": "/remote",
    "payment.html": "/payment",
    "delivery.html": "/delivery",
    "reviews.html": "/reviews",
    "about.html": "/about",
    "documents.html": "/documents",
    "guarantees.html": "/guarantees",
    "faq.html": "/faq",
    "blog.html": "/blog",
    "contacts.html": "/contacts",
    "quiz.html": "/quiz",
    "cars-power-up-to-160.html": "/cars/power-up-to-160",
    "sitemap.html": "/sitemap",
}

BLOG_SLUGS = {
    "blog/kak-kupit-avto-kitaya.html": "kak-kupit-avto-kitaya",
    "blog/kak-kupit-avto-ssha.html": "kak-kupit-avto-ssha",
    "blog/kak-kupit-avto-evropy.html": "kak-kupit-avto-evropy",
    "blog/kak-kupit-avto-korei.html": "kak-kupit-avto-korei",
    "blog/semeynyy-krossover.html": "semeynyy-krossover",
    "blog/luchshie-avto-budget.html": "luchshie-avto-budget",
    "blog/kitayskie-gibridy.html": "kitayskie-gibridy",
}

OUTPUT_MAP = {
    "index.html": "home.php",
    "catalog.html": "catalog.php",
    **{k: Path(k).stem + ".php" for k in LINK_MAP if k != "index.html"},
    **{k: f"blog-{v}.php" for k, v in BLOG_SLUGS.items()},
}


def to_php_array(data: dict) -> str:
    parts: list[str] = []
    for key, value in data.items():
        if value is None:
            php_value = "null"
        elif isinstance(value, bool):
            php_value = "true" if value else "false"
        elif isinstance(value, str):
            escaped = value.replace("\\", "\\\\").replace("'", "\\'")
            php_value = f"'{escaped}'"
        else:
            php_value = repr(value)
        parts.append(f"'{key}' => {php_value}")
    return "array( " + ", ".join(parts) + " )"


def extract_main(html: str) -> str:
    match = re.search(r"<main[^>]*>(.*)</main>", html, re.DOTALL | re.IGNORECASE)
    if not match:
        raise ValueError("No <main> block found")
    return match.group(1).strip()


def extract_title(html: str) -> str:
    match = re.search(r"<title>([^<]+)</title>", html, re.IGNORECASE)
    return match.group(1).strip() if match else "AutoImport"


def extract_description(html: str) -> str | None:
    match = re.search(
        r'<meta\s+name="description"\s+content="([^"]*)"',
        html,
        re.IGNORECASE,
    )
    return match.group(1) if match else None


def extract_extra_head(html: str) -> str:
    extras: list[str] = []
    for pattern in (
        r'<link[^>]+swiper[^>]+>',
        r'<script[^>]+swiper[^>]+></script>',
    ):
        extras.extend(re.findall(pattern, html, re.IGNORECASE))
    return "\n".join(extras)


def depth_prefix(relative_path: str) -> str:
    return "../" * relative_path.count("/")


def convert_paths(content: str, source: str) -> str:
    prefix = depth_prefix(source)

    def assets_repl(match: re.Match[str]) -> str:
        path = match.group(1)
        if path.startswith(("http://", "https://", "//", "data:", "<?php")):
            return match.group(0)
        clean = path
        if clean.startswith(prefix):
            clean = clean[len(prefix) :]
        if clean.startswith("assets/"):
            return match.group(0).replace(path, "<?php echo esc_url( autoimport_asset_uri( '" + clean + "' ) ); ?>")
        if clean.startswith("css/"):
            return match.group(0)
        if clean.startswith("js/"):
            return match.group(0)
        return match.group(0)

    content = re.sub(
        r'(?:src|href)=["\']([^"\']+)["\']',
        assets_repl,
        content,
    )

    for html_name, wp_path in LINK_MAP.items():
        for variant in (html_name, prefix + html_name):
            php = "<?php echo esc_url( home_url( '" + wp_path + "' ) ); ?>"
            content = content.replace(f'href="{variant}"', f'href="{php}"')
            content = content.replace(f"href='{variant}'", f"href='{php}'")

    for html_name, slug in BLOG_SLUGS.items():
        wp_path = f"/blog/{slug}"
        for variant in (html_name, prefix + html_name):
            php = "<?php echo esc_url( home_url( '" + wp_path + "' ) ); ?>"
            content = content.replace(f'href="{variant}"', f'href="{php}"')
            content = content.replace(f"href='{variant}'", f"href='{php}'")

    car_link = prefix + "catalog/hyundai-tucson-2022.html"
    car_php = "<?php echo esc_url( home_url( '/catalog/hyundai-tucson-2022' ) ); ?>"
    content = content.replace(f'href="{car_link}"', f'href="{car_php}"')
    content = content.replace(f"href='{car_link}'", f"href='{car_php}'")

    return content


def convert_file(source_rel: str) -> None:
    source = ROOT / source_rel
    html = source.read_text(encoding="utf-8")
    main = extract_main(html)
    main = convert_paths(main, source_rel)
    output_name = OUTPUT_MAP[source_rel]
    output = STATIC / output_name
    output.parent.mkdir(parents=True, exist_ok=True)

    meta = {
        "title": extract_title(html),
        "description": extract_description(html),
        "extra_head": extract_extra_head(html),
        "has_quiz": "quiz.js" in html,
        "has_swiper": "swiper" in html.lower(),
    }

    php = "<?php\n"
    php += "/** Static markup from " + source_rel.replace("\\", "/") + " */\n"
    php += "if ( ! defined( 'ABSPATH' ) ) { exit; }\n"
    php += "$autoimport_page_meta = " + to_php_array(meta) + ";\n"
    php += "?>\n"
    php += main + "\n"
    output.write_text(php, encoding="utf-8")
    print(f"  {source_rel} -> static-content/{output_name}")


def copy_assets() -> None:
    for folder in ("css", "js", "assets"):
        src = ROOT / folder
        dst = THEME / folder
        if dst.exists():
            shutil.rmtree(dst)
        shutil.copytree(src, dst)
    print("Copied css/, js/, assets/ into theme")


def main() -> None:
    STATIC.mkdir(parents=True, exist_ok=True)
    if STATIC.exists():
        for item in STATIC.glob("*.php"):
            item.unlink()

    print("Copying assets...")
    copy_assets()

    print("Converting HTML...")
    for source_rel in OUTPUT_MAP:
        convert_file(source_rel)

    print("Done.")


if __name__ == "__main__":
    main()
