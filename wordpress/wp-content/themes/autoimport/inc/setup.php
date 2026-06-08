<?php
/**
 * Theme setup and asset enqueue.
 *
 * @package AutoImport
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Theme supports and menus.
 */
function autoimport_setup(): void {
	load_theme_textdomain( 'autoimport', get_template_directory() . '/languages' );

	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' ) );

	register_nav_menus(
		array(
			'primary' => __( 'Основное меню', 'autoimport' ),
			'footer'  => __( 'Меню в подвале', 'autoimport' ),
		)
	);

	add_image_size( 'car-card', 600, 400, true );
	add_image_size( 'car-gallery', 1200, 900, false );
}
add_action( 'after_setup_theme', 'autoimport_setup' );

/**
 * Asset URI helper for theme static files.
 */
function autoimport_asset_uri( string $path ): string {
	return trailingslashit( get_template_directory_uri() ) . ltrim( $path, '/' );
}

/**
 * Map country name to badge CSS class.
 */
function autoimport_country_badge_class( string $country ): string {
	$map = array(
		'Корея'  => 'car-badge--korea',
		'Китай'  => 'car-badge--china',
		'Европа' => 'car-badge--europe',
		'США'    => 'car-badge--usa',
	);
	return $map[ $country ] ?? 'car-badge--korea';
}

/**
 * Map car type to tag CSS class.
 */
function autoimport_car_type_tag_class( string $type ): string {
	$map = array(
		'Семейный'      => 'tag--family',
		'Премиум'       => 'tag--premium',
		'Экономия'      => 'tag--economy',
		'Технологичный' => 'tag--tech',
		'Мощный'        => 'tag--power',
	);
	return $map[ trim( $type ) ] ?? '';
}

/**
 * Enqueue styles and scripts.
 */
function autoimport_enqueue_assets(): void {
	$theme_version     = wp_get_theme()->get( 'Version' );
	$main_css_path     = get_template_directory() . '/css/main.css';
	$main_css_version  = file_exists( $main_css_path ) ? (string) filemtime( $main_css_path ) : $theme_version;

	wp_enqueue_style(
		'autoimport-fonts',
		'https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap',
		array(),
		null
	);

	wp_enqueue_style(
		'autoimport-main',
		autoimport_asset_uri( 'css/main.css' ),
		array( 'autoimport-fonts' ),
		$main_css_version
	);

	$needs_swiper = is_singular( 'car' ) || autoimport_page_needs_swiper();
	if ( $needs_swiper ) {
		wp_enqueue_style(
			'swiper',
			'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css',
			array(),
			'11'
		);
		wp_enqueue_script(
			'swiper',
			'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js',
			array(),
			'11',
			true
		);
	}

	wp_enqueue_script(
		'autoimport-main',
		autoimport_asset_uri( 'js/main.js' ),
		array(),
		$theme_version,
		true
	);

	if ( is_page( 'quiz' ) || autoimport_page_needs_quiz() ) {
		wp_enqueue_script(
			'autoimport-quiz',
			autoimport_asset_uri( 'js/quiz.js' ),
			array( 'autoimport-main' ),
			$theme_version,
			true
		);
	}
}
add_action( 'wp_enqueue_scripts', 'autoimport_enqueue_assets' );

/**
 * Check static page meta for swiper flag.
 */
function autoimport_page_needs_swiper(): bool {
	global $autoimport_page_meta;
	return ! empty( $autoimport_page_meta['has_swiper'] );
}

/**
 * Check static page meta for quiz flag.
 */
function autoimport_page_needs_quiz(): bool {
	global $autoimport_page_meta;
	return ! empty( $autoimport_page_meta['has_quiz'] );
}

/**
 * Include static markup partial and return meta.
 *
 * @return array<string, mixed>
 */
function autoimport_load_static( string $slug ): array {
	$file = get_template_directory() . '/static-content/' . $slug . '.php';
	if ( ! file_exists( $file ) ) {
		return array();
	}

	global $autoimport_page_meta;
	$autoimport_page_meta = array();
	include $file;
	return is_array( $autoimport_page_meta ) ? $autoimport_page_meta : array();
}

/**
 * Filter document title from static meta when needed.
 */
function autoimport_document_title( array $title ): array {
	global $autoimport_page_meta;
	if ( ! empty( $autoimport_page_meta['title'] ) ) {
		$title['title'] = $autoimport_page_meta['title'];
	}
	return $title;
}
add_filter( 'document_title_parts', 'autoimport_document_title' );

/**
 * Output meta description from static content.
 */
function autoimport_meta_description(): void {
	global $autoimport_page_meta;
	if ( empty( $autoimport_page_meta['description'] ) ) {
		return;
	}
	printf(
		'<meta name="description" content="%s" />' . "\n",
		esc_attr( $autoimport_page_meta['description'] )
	);
}
add_action( 'wp_head', 'autoimport_meta_description', 1 );

/**
 * Output extra head tags from static content (e.g. swiper).
 */
function autoimport_extra_head(): void {
	global $autoimport_page_meta;
	if ( empty( $autoimport_page_meta['extra_head'] ) ) {
		return;
	}
	// phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- trusted static markup.
	echo $autoimport_page_meta['extra_head'] . "\n";
}
add_action( 'wp_head', 'autoimport_extra_head', 5 );
