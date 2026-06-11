<?php
/**
 * Blog post helpers and content sync from static markup.
 *
 * @package AutoImport
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'AUTOIMPORT_BLOG_SYNC_VERSION', 4 );

/**
 * Path to legacy static blog partial in the theme.
 */
function autoimport_get_blog_static_path( string $slug ): string {
	return get_template_directory() . '/static-content/blog-' . $slug . '.php';
}

/**
 * Parse article fields from a static blog partial.
 *
 * @return array{seo_title: string, title: string, subtitle: string, content: string}
 */
function autoimport_parse_blog_static_file( string $file_content ): array {
	$result = array(
		'seo_title' => '',
		'title'     => '',
		'subtitle'  => '',
		'content'   => '',
	);

	if ( preg_match( "/'title'\s*=>\s*'([^']+)'/", $file_content, $match ) ) {
		$result['seo_title'] = trim( html_entity_decode( $match[1], ENT_QUOTES, 'UTF-8' ) );
	}

	if ( preg_match( '/<section class="page-hero">.*?<h1>(.*?)<\/h1>/is', $file_content, $match ) ) {
		$result['title'] = trim( html_entity_decode( wp_strip_all_tags( $match[1] ), ENT_QUOTES, 'UTF-8' ) );
	}

	if ( preg_match( '/<p class="subtitle[^"]*">(.*?)<\/p>/is', $file_content, $match ) ) {
		$result['subtitle'] = trim( html_entity_decode( wp_strip_all_tags( $match[1] ), ENT_QUOTES, 'UTF-8' ) );
	}

	if ( preg_match( '/<article class="article-content">(.*)<\/article>/is', $file_content, $match ) ) {
		$result['content'] = trim( $match[1] );
	}

	return $result;
}

/**
 * Replace PHP asset helpers with real URLs inside article HTML.
 */
function autoimport_convert_static_blog_markup( string $html ): string {
	$html = preg_replace_callback(
		"/<\?php echo esc_url\( autoimport_asset_uri\( '([^']+)' \) \); \?>/",
		static function ( array $matches ): string {
			return esc_url( autoimport_asset_uri( $matches[1] ) );
		},
		$html
	);

	return trim( $html );
}

/**
 * Convert legacy article markup to editor-friendly semantic HTML.
 */
function autoimport_normalize_blog_article_content( string $html ): string {
	$html = autoimport_convert_static_blog_markup( $html );

	$html = preg_replace( '/<div class="article-cta">[\s\S]*?<\/div>\s*/i', '', $html );
	$html = preg_replace(
		'/<p class="article-callout">(.*?)<\/p>/is',
		'<blockquote><p>$1</p></blockquote>',
		$html
	);
	$html = preg_replace( '/<p class="article-lead">/i', '<p>', $html );
	$html = preg_replace( '/<figure class="article-cover">/i', '<figure>', $html );
	$html = preg_replace( '/<figure class="article-figure">/i', '<figure>', $html );
	$html = preg_replace(
		'/<div class="table-wrap article-table">\s*(<table class="table-simple">[\s\S]*?<\/table>)\s*<\/div>/i',
		'<figure>$1</figure>',
		$html
	);
	$html = str_replace( ' class="table-simple"', '', $html );
	$html = preg_replace( '/\sclass=""/', '', $html );
	$html = preg_replace( '/\sclass="[^"]*"/i', '', $html );

	return trim( $html );
}

/**
 * Import static markup into existing WordPress blog posts.
 */
function autoimport_sync_blog_posts_content(): void {
	foreach ( autoimport_get_blog_post_map() as $slug => $fallback_title ) {
		$post = get_page_by_path( $slug, OBJECT, 'post' );
		if ( ! $post ) {
			continue;
		}

		$static_path = autoimport_get_blog_static_path( $slug );
		if ( ! is_readable( $static_path ) ) {
			continue;
		}

		$parsed  = autoimport_parse_blog_static_file( (string) file_get_contents( $static_path ) );
		$content = autoimport_normalize_blog_article_content( $parsed['content'] );

		if ( '' === $content ) {
			continue;
		}

		wp_update_post(
			array(
				'ID'           => $post->ID,
				'post_title'   => $parsed['title'] ?: $fallback_title,
				'post_excerpt' => $parsed['subtitle'],
				'post_content' => $content,
			)
		);

		update_post_meta( $post->ID, '_autoimport_article_html', '1' );

		if ( $parsed['seo_title'] ) {
			update_post_meta( $post->ID, '_autoimport_seo_title', $parsed['seo_title'] );
		}
	}
}

/**
 * Run blog content sync once per version.
 */
function autoimport_maybe_sync_blog_posts(): void {
	if ( (int) get_option( 'autoimport_blog_sync_version', 0 ) >= AUTOIMPORT_BLOG_SYNC_VERSION ) {
		return;
	}

	autoimport_sync_blog_posts_content();
	update_option( 'autoimport_blog_sync_version', AUTOIMPORT_BLOG_SYNC_VERSION );
}
add_action( 'admin_init', 'autoimport_maybe_sync_blog_posts' );

/**
 * Disable wpautop for imported HTML articles.
 */
function autoimport_disable_wpautop_for_articles(): void {
	if ( ! is_singular( 'post' ) ) {
		return;
	}

	if ( ! get_post_meta( get_queried_object_id(), '_autoimport_article_html', true ) ) {
		return;
	}

	remove_filter( 'the_content', 'wpautop' );
	remove_filter( 'the_content', 'shortcode_unautop' );
}
add_action( 'wp', 'autoimport_disable_wpautop_for_articles' );

/**
 * Use stored SEO title for blog posts when available.
 */
function autoimport_blog_document_title( array $title ): array {
	if ( ! is_singular( 'post' ) ) {
		return $title;
	}

	$seo_title = get_post_meta( get_queried_object_id(), '_autoimport_seo_title', true );
	if ( $seo_title ) {
		$title['title'] = $seo_title;
	} elseif ( ! empty( $title['title'] ) ) {
		$title['title'] .= ' — блог AutoImport';
	}

	return $title;
}
add_filter( 'document_title_parts', 'autoimport_blog_document_title', 20 );

/**
 * Register pagination rewrite for the posts page when permalinks use /blog/%postname%/.
 */
function autoimport_register_blog_index_pagination_rewrite(): void {
	$posts_page_id = (int) get_option( 'page_for_posts' );
	if ( ! $posts_page_id ) {
		return;
	}

	$blog_slug = get_post_field( 'post_name', $posts_page_id );
	if ( ! $blog_slug ) {
		return;
	}

	add_rewrite_rule(
		$blog_slug . '/page/?([0-9]{1,})/?$',
		'index.php?pagename=' . $blog_slug . '&paged=$matches[1]',
		'top'
	);
}
add_action( 'init', 'autoimport_register_blog_index_pagination_rewrite' );

/**
 * Remap /blog/page/N/ from a fake post slug "page" to the blog index page.
 *
 * @param array<string, string> $query_vars Request query vars.
 * @return array<string, string>
 */
function autoimport_fix_blog_index_pagination_request( array $query_vars ): array {
	$posts_page_id = (int) get_option( 'page_for_posts' );
	if ( ! $posts_page_id ) {
		return $query_vars;
	}

	$blog_slug = get_post_field( 'post_name', $posts_page_id );
	if ( ! $blog_slug ) {
		return $query_vars;
	}

	if (
		isset( $query_vars['name'] ) &&
		'page' === $query_vars['name'] &&
		! empty( $query_vars['paged'] )
	) {
		unset( $query_vars['name'] );
		$query_vars['pagename'] = $blog_slug;
	}

	return $query_vars;
}
add_filter( 'request', 'autoimport_fix_blog_index_pagination_request' );

/**
 * Always render the posts page with home.php (blog index markup).
 *
 * @param string $template Current template path.
 */
function autoimport_blog_index_template( string $template ): string {
	$posts_page_id = (int) get_option( 'page_for_posts' );
	if ( ! $posts_page_id ) {
		return $template;
	}

	if ( is_home() || (int) get_queried_object_id() === $posts_page_id ) {
		$home_template = locate_template( 'home.php' );
		if ( $home_template ) {
			return $home_template;
		}
	}

	return $template;
}
add_filter( 'template_include', 'autoimport_blog_index_template', 20 );

/**
 * Prevent false 404 on /blog/page/N/ when post permalinks also live under /blog/.
 *
 * @param bool     $preempt Whether to short-circuit 404 handling.
 * @param WP_Query $query   Main query.
 */
function autoimport_prevent_blog_index_pagination_404( bool $preempt, WP_Query $query ): bool {
	$posts_page_id = (int) get_option( 'page_for_posts' );
	if ( ! $posts_page_id ) {
		return $preempt;
	}

	$paged = max( 1, (int) $query->get( 'paged' ), (int) $query->get( 'page' ) );
	if ( $paged < 2 ) {
		return $preempt;
	}

	if ( (int) $query->get_queried_object_id() === $posts_page_id ) {
		$query->is_404      = false;
		$query->is_page     = true;
		$query->is_singular = false;
		$query->is_home     = false;
		status_header( 200 );
		return true;
	}

	return $preempt;
}
add_filter( 'pre_handle_404', 'autoimport_prevent_blog_index_pagination_404', 10, 2 );

/**
 * Flush rewrite rules after adding blog pagination rewrite.
 */
function autoimport_maybe_flush_blog_pagination_rewrite(): void {
	if ( get_option( 'autoimport_blog_pagination_rewrite' ) ) {
		return;
	}

	autoimport_register_blog_index_pagination_rewrite();
	flush_rewrite_rules( false );
	update_option( 'autoimport_blog_pagination_rewrite', 1 );
}
add_action( 'admin_init', 'autoimport_maybe_flush_blog_pagination_rewrite' );

/**
 * Posts per page on the blog index.
 */
function autoimport_get_blog_posts_per_page(): int {
	return 16;
}

/**
 * Query for the paginated blog index.
 */
function autoimport_get_blog_index_query(): WP_Query {
	$paged = max( 1, (int) get_query_var( 'paged' ), (int) get_query_var( 'page' ) );

	return new WP_Query(
		array(
			'post_type'           => 'post',
			'post_status'         => 'publish',
			'posts_per_page'      => autoimport_get_blog_posts_per_page(),
			'paged'               => $paged,
			'orderby'             => 'date',
			'order'               => 'DESC',
			'ignore_sticky_posts' => true,
		)
	);
}

/**
 * Build pagination URL for the blog posts page.
 */
function autoimport_get_blog_pagenum_link( int $pagenum ): string {
	$posts_page_id = (int) get_option( 'page_for_posts' );

	if ( ! $posts_page_id ) {
		return (string) get_pagenum_link( $pagenum );
	}

	$base_url = get_permalink( $posts_page_id );
	if ( ! $base_url || $pagenum <= 1 ) {
		return (string) $base_url;
	}

	return user_trailingslashit( trailingslashit( (string) $base_url ) . 'page/' . $pagenum );
}

/**
 * Render numbered pagination for custom queries.
 */
function autoimport_render_posts_pagination( WP_Query $query, string $aria_label ): void {
	$max_pages = (int) $query->max_num_pages;

	if ( $max_pages <= 1 ) {
		return;
	}

	$paged = max( 1, (int) get_query_var( 'paged' ), (int) get_query_var( 'page' ) );
	?>
	<nav class="country-catalog__pagination blog-pagination" aria-label="<?php echo esc_attr( $aria_label ); ?>">
		<?php if ( $paged > 1 ) : ?>
			<a class="country-page-btn country-page-btn--nav" href="<?php echo esc_url( autoimport_get_blog_pagenum_link( $paged - 1 ) ); ?>"><?php esc_html_e( 'Назад', 'autoimport' ); ?></a>
		<?php else : ?>
			<span class="country-page-btn country-page-btn--nav is-disabled" aria-disabled="true"><?php esc_html_e( 'Назад', 'autoimport' ); ?></span>
		<?php endif; ?>

		<div class="country-page-list">
			<?php for ( $page = 1; $page <= $max_pages; $page++ ) : ?>
				<?php if ( $page === $paged ) : ?>
					<span class="country-page-btn is-active" aria-current="page"><?php echo esc_html( (string) $page ); ?></span>
				<?php else : ?>
					<a class="country-page-btn" href="<?php echo esc_url( autoimport_get_blog_pagenum_link( $page ) ); ?>" aria-label="<?php echo esc_attr( sprintf( __( 'Страница %d', 'autoimport' ), $page ) ); ?>">
						<?php echo esc_html( (string) $page ); ?>
					</a>
				<?php endif; ?>
			<?php endfor; ?>
		</div>

		<?php if ( $paged < $max_pages ) : ?>
			<a class="country-page-btn country-page-btn--nav" href="<?php echo esc_url( autoimport_get_blog_pagenum_link( $paged + 1 ) ); ?>"><?php esc_html_e( 'Вперёд', 'autoimport' ); ?></a>
		<?php else : ?>
			<span class="country-page-btn country-page-btn--nav is-disabled" aria-disabled="true"><?php esc_html_e( 'Вперёд', 'autoimport' ); ?></span>
		<?php endif; ?>
	</nav>
	<?php
}
