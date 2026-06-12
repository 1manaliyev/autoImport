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
 * Map review platform label from ACF to filter slug.
 */
function autoimport_get_review_platform_slug( string $platform ): string {
	$map = array(
		'Яндекс'  => 'yandex',
		'2ГИС'    => '2gis',
		'Google'  => 'google',
		'Соцсети' => 'social',
	);
	return $map[ trim( $platform ) ] ?? sanitize_title( $platform );
}

/**
 * Resolve ACF image field to URL.
 */
function autoimport_get_acf_image_url( $image ): string {
	if ( is_array( $image ) ) {
		return (string) ( $image['url'] ?? '' );
	}
	if ( is_numeric( $image ) ) {
		return (string) wp_get_attachment_image_url( (int) $image, 'thumbnail' );
	}
	return is_string( $image ) ? trim( $image ) : '';
}

/**
 * First letter of a person's name for avatar fallback.
 */
function autoimport_get_name_initial( string $name ): string {
	$name = trim( $name );
	if ( '' === $name ) {
		return '';
	}
	if ( function_exists( 'mb_substr' ) && function_exists( 'mb_strtoupper' ) ) {
		return mb_strtoupper( mb_substr( $name, 0, 1 ) );
	}
	return strtoupper( substr( $name, 0, 1 ) );
}

/**
 * Map turnkey price to catalog filter bucket.
 */
function autoimport_get_price_filter_bucket( $price ): string {
	$price = (int) $price;

	if ( $price <= 0 ) {
		return '';
	}

	if ( $price < 3000000 ) {
		return 'to-3';
	}

	if ( $price < 5000000 ) {
		return '3-5';
	}

	return '5+';
}

/**
 * Map production year to catalog filter bucket.
 */
function autoimport_get_year_filter_bucket( $year ): string {
	$year = (int) $year;

	if ( $year <= 0 ) {
		return '';
	}

	$current_year = (int) wp_date( 'Y' );

	if ( $year < 2020 ) {
		return 'before-2020';
	}

	if ( $year < $current_year ) {
		return '2020-' . ( $current_year - 1 );
	}

	return (string) $current_year;
}

/**
 * Map mileage to catalog filter bucket.
 */
function autoimport_get_mileage_filter_bucket( $mileage ): string {
	if ( $mileage === null || $mileage === '' ) {
		return '';
	}

	$mileage = (int) $mileage;

	if ( $mileage < 0 ) {
		return '';
	}

	if ( $mileage <= 30000 ) {
		return 'to-30';
	}

	if ( $mileage <= 80000 ) {
		return 'to-80';
	}

	return 'from-80';
}

/**
 * Normalize drive type to catalog filter value.
 */
function autoimport_get_drive_filter_bucket( $drive ): string {
	$drive = mb_strtolower( trim( (string) $drive ) );

	if ( $drive === '' ) {
		return '';
	}

	if ( preg_match( '/задн|rwd/u', $drive ) ) {
		return 'Задний';
	}

	if ( preg_match( '/полн|4wd|htrac|awd/u', $drive ) ) {
		return 'Полный';
	}

	if ( preg_match( '/перед|fwd/u', $drive ) ) {
		return 'Передний';
	}

	return '';
}

/**
 * Normalize fuel type to catalog filter value.
 */
function autoimport_get_fuel_filter_bucket( $fuel ): string {
	$fuel = mb_strtolower( trim( (string) $fuel ) );

	if ( $fuel === '' ) {
		return '';
	}

	if ( preg_match( '/гибрид|hybrid|phev|mhev/u', $fuel ) ) {
		return 'Гибрид';
	}

	if ( preg_match( '/электр|electric|\bev\b/u', $fuel ) ) {
		return 'Электро';
	}

	if ( preg_match( '/дизел|diesel/u', $fuel ) ) {
		return 'Дизель';
	}

	if ( preg_match( '/газ|lpg|cng|пропан|метан/u', $fuel ) ) {
		return 'Газ';
	}

	if ( preg_match( '/бензин|petrol|gasoline/u', $fuel ) ) {
		return 'Бензин';
	}

	return '';
}

/**
 * Map engine power to catalog filter bucket.
 */
function autoimport_get_power_filter_bucket( $power ): string {
	$power = (int) $power;

	if ( $power <= 0 ) {
		return '';
	}

	if ( $power <= 160 ) {
		return '160-';
	}

	if ( $power <= 250 ) {
		return '160-250';
	}

	return '250+';
}

/**
 * Map engine volume to catalog filter bucket.
 */
function autoimport_get_volume_filter_bucket( $volume ): string {
	$volume = (float) str_replace( ',', '.', trim( (string) $volume ) );

	if ( $volume <= 0 ) {
		return '';
	}

	if ( $volume <= 2.0 ) {
		return '2-';
	}

	return '2+';
}

/**
 * Normalize ACF value for client-side catalog sorting.
 */
function autoimport_get_catalog_sort_int( $value ): string {
	$number = (int) preg_replace( '/[^\d]/', '', (string) $value );

	return $number > 0 ? (string) $number : '';
}

/**
 * Normalize mileage for client-side catalog sorting (0 is valid).
 */
function autoimport_get_catalog_sort_mileage( $value ): string {
	if ( trim( (string) $value ) === '' ) {
		return '';
	}

	return (string) max( 0, (int) preg_replace( '/[^\d]/', '', (string) $value ) );
}

/**
 * Normalize engine volume for client-side catalog sorting.
 */
function autoimport_get_catalog_sort_volume( $value ): string {
	$normalized = str_replace( ',', '.', preg_replace( '/[^\d.,]/', '', (string) $value ) );

	if ( $normalized === '' ) {
		return '';
	}

	$number = (float) $normalized;

	return $number > 0 ? (string) $number : '';
}

/**
 * Cars per page in catalog grids.
 */
function autoimport_catalog_page_size(): int {
	return 9;
}

/**
 * Enqueue styles and scripts.
 */
function autoimport_enqueue_assets(): void {
	$theme_version     = wp_get_theme()->get( 'Version' );
	$main_css_path     = get_template_directory() . '/css/main.css';
	$main_js_path      = get_template_directory() . '/js/main.js';
	$main_css_version  = file_exists( $main_css_path ) ? (string) filemtime( $main_css_path ) : $theme_version;
	$main_js_version   = file_exists( $main_js_path ) ? (string) filemtime( $main_js_path ) : $theme_version;

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
	$main_deps    = array();
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
		$main_deps[] = 'swiper';
	}

	wp_enqueue_script(
		'autoimport-main',
		autoimport_asset_uri( 'js/main.js' ),
		$main_deps,
		$main_js_version,
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
 * Resolve static template slug for the current page request.
 */
function autoimport_resolve_static_slug( ?int $queried_id = null ): string {
	$queried_id = $queried_id ?? (int) get_queried_object_id();
	if ( ! $queried_id ) {
		return '';
	}

	$posts_page_id = (int) get_option( 'page_for_posts' );
	$slug          = (string) get_post_field( 'post_name', $queried_id );
	$static_slug   = $slug;

	if ( $posts_page_id && $queried_id === $posts_page_id ) {
		$static_slug = 'blog';
	}

	$parent_id = wp_get_post_parent_id( $queried_id );
	if ( $parent_id ) {
		$parent = get_post( $parent_id );
		if ( $parent && 'cars' === $parent->post_name && 'power-up-to-160' === $slug ) {
			$static_slug = 'cars-power-up-to-160';
		}
	}

	$file = get_template_directory() . '/static-content/' . $static_slug . '.php';

	return file_exists( $file ) ? $static_slug : '';
}

/**
 * Read static page meta without rendering markup.
 *
 * @return array<string, mixed>
 */
function autoimport_peek_static_meta( string $slug ): array {
	static $cache = array();

	if ( isset( $cache[ $slug ] ) ) {
		return $cache[ $slug ];
	}

	$file = get_template_directory() . '/static-content/' . $slug . '.php';
	if ( ! file_exists( $file ) ) {
		$cache[ $slug ] = array();
		return $cache[ $slug ];
	}

	global $autoimport_page_meta;
	$autoimport_page_meta = array();
	ob_start();
	include $file;
	ob_end_clean();

	$cache[ $slug ] = is_array( $autoimport_page_meta ) ? $autoimport_page_meta : array();
	$autoimport_page_meta = array();

	return $cache[ $slug ];
}

/**
 * Static meta for the current request (global or peeked).
 *
 * @return array<string, mixed>
 */
function autoimport_get_current_static_meta(): array {
	global $autoimport_page_meta;

	if ( is_array( $autoimport_page_meta ) && ! empty( $autoimport_page_meta ) ) {
		return $autoimport_page_meta;
	}

	static $peeked = null;
	if ( null !== $peeked ) {
		return $peeked;
	}

	$slug   = autoimport_resolve_static_slug();
	$peeked = $slug ? autoimport_peek_static_meta( $slug ) : array();

	return $peeked;
}

/**
 * Check static page meta for swiper flag.
 */
function autoimport_page_needs_swiper(): bool {
	$meta = autoimport_get_current_static_meta();
	return ! empty( $meta['has_swiper'] );
}

/**
 * Check static page meta for quiz flag.
 */
function autoimport_page_needs_quiz(): bool {
	$meta = autoimport_get_current_static_meta();
	return ! empty( $meta['has_quiz'] );
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
	$meta = autoimport_get_current_static_meta();
	if ( ! empty( $meta['title'] ) ) {
		$title['title'] = $meta['title'];
	}
	return $title;
}
add_filter( 'document_title_parts', 'autoimport_document_title' );

/**
 * Output meta description from static content.
 */
function autoimport_meta_description(): void {
	$meta = autoimport_get_current_static_meta();
	if ( empty( $meta['description'] ) ) {
		return;
	}
	printf(
		'<meta name="description" content="%s" />' . "\n",
		esc_attr( $meta['description'] )
	);
}
add_action( 'wp_head', 'autoimport_meta_description', 1 );

/**
 * Output extra head tags from static content (e.g. swiper).
 */
function autoimport_extra_head(): void {
	$meta = autoimport_get_current_static_meta();
	if ( empty( $meta['extra_head'] ) ) {
		return;
	}
	// phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- trusted static markup.
	echo $meta['extra_head'] . "\n";
}
add_action( 'wp_head', 'autoimport_extra_head', 5 );
