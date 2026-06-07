<?php
/**
 * Custom post types and taxonomies for the car catalog.
 *
 * @package AutoImport
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Register CPT «Автомобили» and related taxonomies.
 */
function autoimport_register_post_types(): void {
	register_post_type(
		'car',
		array(
			'labels'              => array(
				'name'                  => __( 'Автомобили', 'autoimport' ),
				'singular_name'         => __( 'Автомобиль', 'autoimport' ),
				'menu_name'             => __( 'Каталог', 'autoimport' ),
				'name_admin_bar'        => __( 'Автомобиль', 'autoimport' ),
				'add_new'               => __( 'Добавить', 'autoimport' ),
				'add_new_item'          => __( 'Добавить автомобиль', 'autoimport' ),
				'edit_item'             => __( 'Редактировать автомобиль', 'autoimport' ),
				'new_item'              => __( 'Новый автомобиль', 'autoimport' ),
				'view_item'             => __( 'Просмотр автомобиля', 'autoimport' ),
				'search_items'          => __( 'Искать автомобили', 'autoimport' ),
				'not_found'             => __( 'Автомобили не найдены', 'autoimport' ),
				'not_found_in_trash'    => __( 'В корзине нет автомобилей', 'autoimport' ),
				'all_items'             => __( 'Все автомобили', 'autoimport' ),
				'archives'              => __( 'Каталог автомобилей', 'autoimport' ),
				'featured_image'        => __( 'Главное фото', 'autoimport' ),
				'set_featured_image'    => __( 'Установить главное фото', 'autoimport' ),
				'remove_featured_image' => __( 'Удалить главное фото', 'autoimport' ),
				'use_featured_image'    => __( 'Использовать как главное фото', 'autoimport' ),
			),
			'public'              => true,
			'publicly_queryable'  => true,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'show_in_rest'        => true,
			'menu_position'       => 5,
			'menu_icon'           => 'dashicons-car',
			'has_archive'         => 'catalog',
			'rewrite'             => array(
				'slug'       => 'catalog',
				'with_front' => false,
			),
			'capability_type'     => 'post',
			'map_meta_cap'        => true,
			'hierarchical'        => false,
			'supports'            => array(
				'title',
				'editor',
				'thumbnail',
				'excerpt',
				'revisions',
				'page-attributes',
			),
			'taxonomies'          => array( 'car_category', 'car_brand', 'car_country' ),
		)
	);

	register_taxonomy(
		'car_category',
		array( 'car' ),
		array(
			'labels'            => array(
				'name'              => __( 'Категории', 'autoimport' ),
				'singular_name'     => __( 'Категория', 'autoimport' ),
				'search_items'      => __( 'Искать категории', 'autoimport' ),
				'all_items'         => __( 'Все категории', 'autoimport' ),
				'parent_item'       => __( 'Родительская категория', 'autoimport' ),
				'parent_item_colon' => __( 'Родитель:', 'autoimport' ),
				'edit_item'         => __( 'Редактировать категорию', 'autoimport' ),
				'update_item'       => __( 'Обновить категорию', 'autoimport' ),
				'add_new_item'      => __( 'Добавить категорию', 'autoimport' ),
				'new_item_name'     => __( 'Название категории', 'autoimport' ),
				'menu_name'         => __( 'Категории', 'autoimport' ),
			),
			'hierarchical'      => true,
			'public'            => true,
			'show_ui'           => true,
			'show_admin_column' => true,
			'show_in_rest'      => true,
			'rewrite'           => array(
				'slug'         => 'catalog/category',
				'with_front'   => false,
				'hierarchical' => true,
			),
		)
	);

	register_taxonomy(
		'car_brand',
		array( 'car' ),
		array(
			'labels'            => array(
				'name'                       => __( 'Марки', 'autoimport' ),
				'singular_name'              => __( 'Марка', 'autoimport' ),
				'search_items'               => __( 'Искать марки', 'autoimport' ),
				'all_items'                  => __( 'Все марки', 'autoimport' ),
				'edit_item'                  => __( 'Редактировать марку', 'autoimport' ),
				'update_item'                => __( 'Обновить марку', 'autoimport' ),
				'add_new_item'               => __( 'Добавить марку', 'autoimport' ),
				'new_item_name'              => __( 'Название марки', 'autoimport' ),
				'menu_name'                  => __( 'Марки', 'autoimport' ),
				'popular_items'              => __( 'Популярные марки', 'autoimport' ),
				'separate_items_with_commas' => __( 'Марки через запятую', 'autoimport' ),
				'add_or_remove_items'        => __( 'Добавить или удалить марки', 'autoimport' ),
				'choose_from_most_used'      => __( 'Выбрать из часто используемых', 'autoimport' ),
				'not_found'                  => __( 'Марки не найдены', 'autoimport' ),
			),
			'hierarchical'      => false,
			'public'            => true,
			'show_ui'           => true,
			'show_admin_column' => true,
			'show_in_rest'      => true,
			'rewrite'           => array(
				'slug'       => 'catalog/brand',
				'with_front' => false,
			),
		)
	);

	register_taxonomy(
		'car_country',
		array( 'car' ),
		array(
			'labels'            => array(
				'name'          => __( 'Страны импорта', 'autoimport' ),
				'singular_name' => __( 'Страна импорта', 'autoimport' ),
				'search_items'  => __( 'Искать страны', 'autoimport' ),
				'all_items'     => __( 'Все страны', 'autoimport' ),
				'edit_item'     => __( 'Редактировать страну', 'autoimport' ),
				'update_item'   => __( 'Обновить страну', 'autoimport' ),
				'add_new_item'  => __( 'Добавить страну', 'autoimport' ),
				'new_item_name' => __( 'Название страны', 'autoimport' ),
				'menu_name'     => __( 'Страны', 'autoimport' ),
			),
			'hierarchical'      => true,
			'public'            => true,
			'show_ui'           => true,
			'show_admin_column' => true,
			'show_in_rest'      => true,
			'rewrite'           => array(
				'slug'       => 'catalog/country',
				'with_front' => false,
			),
		)
	);
}
add_action( 'init', 'autoimport_register_post_types' );

/**
 * Seed default taxonomy terms on theme activation.
 */
function autoimport_seed_default_terms(): void {
	$countries = array( 'Корея', 'Китай', 'Европа', 'США' );
	foreach ( $countries as $country ) {
		if ( ! term_exists( $country, 'car_country' ) ) {
			wp_insert_term( $country, 'car_country', array( 'slug' => sanitize_title( $country ) ) );
		}
	}

	$brands = array(
		'Kia', 'Hyundai', 'Toyota', 'BMW', 'Mercedes', 'Volkswagen', 'Audi',
		'Lexus', 'Honda', 'Nissan', 'Mazda', 'Skoda', 'Ford', 'Geely',
		'Changan', 'Li Auto', 'Zeekr', 'Haval',
	);
	foreach ( $brands as $brand ) {
		if ( ! term_exists( $brand, 'car_brand' ) ) {
			wp_insert_term( $brand, 'car_brand', array( 'slug' => sanitize_title( $brand ) ) );
		}
	}

	$categories = array(
		'Кроссоверы',
		'Седаны',
		'До 160 л.с.',
		'Гибриды',
		'Премиум',
	);
	foreach ( $categories as $category ) {
		if ( ! term_exists( $category, 'car_category' ) ) {
			wp_insert_term( $category, 'car_category', array( 'slug' => sanitize_title( $category ) ) );
		}
	}
}

/**
 * Flush rewrite rules after registering CPT.
 */
function autoimport_after_switch_theme(): void {
	autoimport_register_post_types();
	autoimport_seed_default_terms();
	flush_rewrite_rules();
}
add_action( 'after_switch_theme', 'autoimport_after_switch_theme' );

/**
 * Admin columns for car list table.
 *
 * @param array<string, string> $columns Columns.
 * @return array<string, string>
 */
function autoimport_car_columns( array $columns ): array {
	$new = array();
	foreach ( $columns as $key => $label ) {
		$new[ $key ] = $label;
		if ( 'title' === $key ) {
			$new['car_country'] = __( 'Страна', 'autoimport' );
			$new['car_brand']   = __( 'Марка', 'autoimport' );
		}
	}
	return $new;
}
add_filter( 'manage_car_posts_columns', 'autoimport_car_columns' );

/**
 * Render custom admin columns.
 *
 * @param string $column  Column key.
 * @param int    $post_id Post ID.
 */
function autoimport_car_column_content( string $column, int $post_id ): void {
	if ( 'car_country' === $column ) {
		echo esc_html( implode( ', ', wp_list_pluck( wp_get_post_terms( $post_id, 'car_country' ), 'name' ) ) );
	}
	if ( 'car_brand' === $column ) {
		echo esc_html( implode( ', ', wp_list_pluck( wp_get_post_terms( $post_id, 'car_brand' ), 'name' ) ) );
	}
}
add_action( 'manage_car_posts_custom_column', 'autoimport_car_column_content', 10, 2 );
