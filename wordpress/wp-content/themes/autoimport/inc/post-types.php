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
			'has_archive'         => false,
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
			'taxonomies'          => array( 'car_body', 'car_brand', 'car_model', 'car_country' ),
		)
	);

	register_taxonomy(
		'car_body',
		array( 'car' ),
		array(
			'labels'            => array(
				'name'              => __( 'Тип кузова', 'autoimport' ),
				'singular_name'     => __( 'Тип кузова', 'autoimport' ),
				'search_items'      => __( 'Искать типы кузова', 'autoimport' ),
				'all_items'         => __( 'Все типы кузова', 'autoimport' ),
				'parent_item'       => __( 'Родительский тип', 'autoimport' ),
				'parent_item_colon' => __( 'Родитель:', 'autoimport' ),
				'edit_item'         => __( 'Редактировать тип кузова', 'autoimport' ),
				'update_item'       => __( 'Обновить тип кузова', 'autoimport' ),
				'add_new_item'      => __( 'Добавить тип кузова', 'autoimport' ),
				'new_item_name'     => __( 'Название типа кузова', 'autoimport' ),
				'menu_name'         => __( 'Тип кузова', 'autoimport' ),
			),
			'hierarchical'      => true,
			'public'            => true,
			'show_ui'           => true,
			'show_admin_column' => true,
			'show_in_rest'      => true,
			'rewrite'           => array(
				'slug'         => 'catalog/body',
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
		'car_model',
		array( 'car' ),
		array(
			'labels'            => array(
				'name'                       => __( 'Модели', 'autoimport' ),
				'singular_name'              => __( 'Модель', 'autoimport' ),
				'search_items'               => __( 'Искать модели', 'autoimport' ),
				'all_items'                  => __( 'Все модели', 'autoimport' ),
				'edit_item'                  => __( 'Редактировать модель', 'autoimport' ),
				'update_item'                => __( 'Обновить модель', 'autoimport' ),
				'add_new_item'               => __( 'Добавить модель', 'autoimport' ),
				'new_item_name'              => __( 'Название модели', 'autoimport' ),
				'menu_name'                  => __( 'Модели', 'autoimport' ),
				'popular_items'              => __( 'Популярные модели', 'autoimport' ),
				'separate_items_with_commas' => __( 'Модели через запятую', 'autoimport' ),
				'add_or_remove_items'        => __( 'Добавить или удалить модели', 'autoimport' ),
				'choose_from_most_used'      => __( 'Выбрать из часто используемых', 'autoimport' ),
				'not_found'                  => __( 'Модели не найдены', 'autoimport' ),
			),
			'hierarchical'      => false,
			'public'            => true,
			'show_ui'           => true,
			'show_admin_column' => true,
			'show_in_rest'      => true,
			'rewrite'           => array(
				'slug'       => 'catalog/model',
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

	$models = array(
		'Tucson',
		'Santa Fe',
		'Palisade',
		'Elantra',
		'Sportage',
		'Sorento',
		'Monjaro',
		'X3',
		'X5',
		'Camry',
		'RAV4',
		'CR-V',
		'Q5',
		'GLC',
		'Model Y',
		'Mustang',
	);
	foreach ( $models as $model ) {
		if ( ! term_exists( $model, 'car_model' ) ) {
			wp_insert_term( $model, 'car_model', array( 'slug' => sanitize_title( $model ) ) );
		}
	}

	autoimport_seed_body_type_terms();
}

/**
 * Seed default body type taxonomy terms.
 */
function autoimport_seed_body_type_terms(): void {
	$body_types = array(
		'Седан',
		'Хэтчбек',
		'Лифтбек',
		'Универсал',
		'Купе',
		'Кроссовер',
		'Внедорожник',
		'Минивэн',
		'Пикап',
		'Кабриолет',
	);
	foreach ( $body_types as $body_type ) {
		if ( ! term_exists( $body_type, 'car_body' ) ) {
			wp_insert_term( $body_type, 'car_body', array( 'slug' => sanitize_title( $body_type ) ) );
		}
	}
}

/**
 * Migrate legacy car_category taxonomy to car_body.
 */
function autoimport_migrate_car_category_to_body(): void {
	if ( get_option( 'autoimport_body_taxonomy_migrated' ) ) {
		return;
	}

	global $wpdb;

	$wpdb->update(
		$wpdb->term_taxonomy,
		array( 'taxonomy' => 'car_body' ),
		array( 'taxonomy' => 'car_category' ),
		array( '%s' ),
		array( '%s' )
	);

	$term_map = array(
		'Кроссоверы' => 'Кроссовер',
		'Седаны'     => 'Седан',
	);
	$obsolete_terms = array( 'До 160 л.с.', 'Гибриды', 'Премиум', 'Кроссоверы', 'Седаны' );

	foreach ( $term_map as $old_name => $new_name ) {
		$old_term = get_term_by( 'name', $old_name, 'car_body' );
		if ( ! $old_term ) {
			continue;
		}

		$new_term = term_exists( $new_name, 'car_body' );
		if ( ! $new_term ) {
			$new_term = wp_insert_term( $new_name, 'car_body', array( 'slug' => sanitize_title( $new_name ) ) );
		}
		if ( is_wp_error( $new_term ) ) {
			continue;
		}

		$new_term_id = is_array( $new_term ) ? (int) $new_term['term_id'] : (int) $new_term;
		$cars        = get_objects_in_term( (int) $old_term->term_id, 'car_body' );
		if ( ! is_wp_error( $cars ) ) {
			foreach ( $cars as $car_id ) {
				wp_set_object_terms( (int) $car_id, array( $new_term_id ), 'car_body' );
			}
		}
	}

	foreach ( $obsolete_terms as $obsolete_name ) {
		$term = get_term_by( 'name', $obsolete_name, 'car_body' );
		if ( $term ) {
			wp_delete_term( (int) $term->term_id, 'car_body' );
		}
	}

	autoimport_seed_body_type_terms();
	update_option( 'autoimport_body_taxonomy_migrated', 1 );
	flush_rewrite_rules();
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
			$new['car_model']   = __( 'Модель', 'autoimport' );
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
	if ( 'car_model' === $column ) {
		echo esc_html( implode( ', ', wp_list_pluck( wp_get_post_terms( $post_id, 'car_model' ), 'name' ) ) );
	}
}
add_action( 'manage_car_posts_custom_column', 'autoimport_car_column_content', 10, 2 );

/**
 * Get taxonomy term names used by cars in a country.
 *
 * @return string[]
 */
function autoimport_get_car_taxonomy_names_for_country( string $country, string $taxonomy ): array {
	$cars_query = new WP_Query(
		array(
			'post_type'              => 'car',
			'post_status'            => 'publish',
			'posts_per_page'         => -1,
			'fields'                 => 'ids',
			'no_found_rows'          => true,
			'update_post_meta_cache' => false,
			'update_post_term_cache' => false,
			'tax_query'              => array(
				array(
					'taxonomy' => 'car_country',
					'field'    => 'name',
					'terms'    => $country,
				),
			),
		)
	);

	$names = array();
	foreach ( $cars_query->posts as $car_id ) {
		$terms = wp_get_post_terms( (int) $car_id, $taxonomy );
		if ( is_wp_error( $terms ) || empty( $terms ) ) {
			continue;
		}
		foreach ( $terms as $term ) {
			$names[ $term->slug ] = $term->name;
		}
	}

	natcasesort( $names );
	return array_values( $names );
}

/**
 * Assign model terms to cars by matching model name in the post title.
 */
function autoimport_sync_existing_car_models(): void {
	if ( get_option( 'autoimport_car_models_synced' ) ) {
		return;
	}

	$model_terms = get_terms(
		array(
			'taxonomy'   => 'car_model',
			'hide_empty' => false,
		)
	);

	if ( is_wp_error( $model_terms ) || empty( $model_terms ) ) {
		return;
	}

	$cars = get_posts(
		array(
			'post_type'      => 'car',
			'post_status'    => 'publish',
			'posts_per_page' => -1,
			'fields'         => 'ids',
		)
	);

	foreach ( $cars as $car_id ) {
		$existing_models = wp_get_post_terms( $car_id, 'car_model', array( 'fields' => 'ids' ) );
		if ( ! empty( $existing_models ) && ! is_wp_error( $existing_models ) ) {
			continue;
		}

		$title = get_the_title( $car_id );
		foreach ( $model_terms as $model_term ) {
			if ( stripos( $title, $model_term->name ) !== false ) {
				wp_set_object_terms( $car_id, array( (int) $model_term->term_id ), 'car_model' );
				break;
			}
		}
	}

	update_option( 'autoimport_car_models_synced', 1 );
}

/**
 * Ensure default taxonomy terms exist (including newly added taxonomies).
 */
function autoimport_maybe_seed_default_terms(): void {
	if ( ! get_option( 'autoimport_taxonomies_seeded_v2' ) ) {
		autoimport_seed_default_terms();
		update_option( 'autoimport_taxonomies_seeded_v2', 1 );
	}

	autoimport_migrate_car_category_to_body();
	autoimport_sync_existing_car_models();
}
add_action( 'admin_init', 'autoimport_maybe_seed_default_terms' );
