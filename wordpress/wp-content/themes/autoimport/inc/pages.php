<?php
/**
 * Auto-create site pages with correct slugs on theme activation.
 *
 * @package AutoImport
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Page definitions: slug => title.
 *
 * @return array<string, string>
 */
function autoimport_get_page_map(): array {
	return array(
		'korea'              => 'Авто из Кореи',
		'china'              => 'Авто из Китая',
		'europe'             => 'Авто из Европы',
		'usa'                => 'Авто из США',
		'podbor'             => 'Подбор авто под ключ',
		'remote'             => 'Дистанционная покупка',
		'payment'            => 'Оплата',
		'delivery'           => 'Доставка',
		'reviews'            => 'Отзывы',
		'about'              => 'О компании',
		'documents'          => 'Документы и сертификаты',
		'guarantees'         => 'Гарантии',
		'faq'                => 'Частые вопросы (FAQ)',
		'contacts'           => 'Контакты',
		'quiz'               => 'Квиз «Подбор авто за 1 минуту»',
		'power-up-to-160'     => 'Автомобили до 160 л.с.',
		'sitemap'            => 'Карта сайта',
	);
}

/**
 * Blog post definitions for static articles.
 *
 * @return array<string, string> slug => title
 */
function autoimport_get_blog_post_map(): array {
	return array(
		'kak-kupit-avto-kitaya'  => 'Как купить автомобиль из Китая: пошаговый разбор',
		'kak-kupit-avto-ssha'    => 'Как купить автомобиль из США: пошаговый разбор',
		'kak-kupit-avto-evropy'  => 'Как купить автомобиль из Европы: пошаговый разбор',
		'kak-kupit-avto-korei'   => 'Как купить автомобиль из Кореи: пошаговый разбор',
		'semeynyy-krossover'     => 'Как не ошибиться при выборе семейного кроссовера',
		'luchshie-avto-budget'   => 'Лучшие авто до 3 / 4 / 5 млн',
		'kitayskie-gibridy'      => 'Что важно знать про китайские гибриды',
	);
}

/**
 * Create pages and blog posts if missing.
 */
function autoimport_create_pages(): void {
	$home_id = (int) get_option( 'page_on_front' );

	$cars_parent_id = 0;
	$cars_parent    = get_page_by_path( 'cars' );
	if ( ! $cars_parent ) {
		$cars_parent_id = wp_insert_post(
			array(
				'post_title'  => 'Автомобили',
				'post_name'   => 'cars',
				'post_status' => 'publish',
				'post_type'   => 'page',
			)
		);
		if ( is_wp_error( $cars_parent_id ) ) {
			$cars_parent_id = 0;
		}
	} else {
		$cars_parent_id = (int) $cars_parent->ID;
	}

	foreach ( autoimport_get_page_map() as $slug => $title ) {
		$parent_id = ( 'power-up-to-160' === $slug ) ? $cars_parent_id : 0;
		$path      = $parent_id ? 'cars/' . $slug : $slug;
		$existing  = get_page_by_path( $path );
		if ( $existing ) {
			continue;
		}

		wp_insert_post(
			array(
				'post_title'   => $title,
				'post_name'    => $slug,
				'post_status'  => 'publish',
				'post_type'    => 'page',
				'post_parent'  => $parent_id,
				'post_content' => '',
			)
		);
	}

	$blog_page = get_page_by_path( 'blog' );
	if ( ! $blog_page ) {
		$blog_id = wp_insert_post(
			array(
				'post_title'  => 'Блог',
				'post_name'   => 'blog',
				'post_status' => 'publish',
				'post_type'   => 'page',
			)
		);
		if ( $blog_id && ! is_wp_error( $blog_id ) ) {
			update_option( 'page_for_posts', $blog_id );
		}
	} else {
		update_option( 'page_for_posts', $blog_page->ID );
	}

	if ( ! $home_id ) {
		$front = get_page_by_path( 'home' );
		if ( ! $front ) {
			$home_id = wp_insert_post(
				array(
					'post_title'  => 'Главная',
					'post_name'   => 'home',
					'post_status' => 'publish',
					'post_type'   => 'page',
				)
			);
		} else {
			$home_id = $front->ID;
		}
		if ( $home_id && ! is_wp_error( $home_id ) ) {
			update_option( 'show_on_front', 'page' );
			update_option( 'page_on_front', $home_id );
		}
	}

	foreach ( autoimport_get_blog_post_map() as $slug => $title ) {
		$existing = get_page_by_path( $slug, OBJECT, 'post' );
		if ( $existing ) {
			continue;
		}
		wp_insert_post(
			array(
				'post_title'  => $title,
				'post_name'   => $slug,
				'post_status' => 'publish',
				'post_type'   => 'post',
			)
		);
	}

	$demo_car = get_page_by_path( 'hyundai-tucson-2022', OBJECT, 'car' );
	if ( ! $demo_car ) {
		$car_id = wp_insert_post(
			array(
				'post_title'  => 'Hyundai Tucson 2022',
				'post_name'   => 'hyundai-tucson-2022',
				'post_status' => 'publish',
				'post_type'   => 'car',
				'post_excerpt' => 'Пример карточки автомобиля из статической вёрстки.',
			)
		);
		if ( $car_id && ! is_wp_error( $car_id ) ) {
			wp_set_object_terms( $car_id, array( 'Корея' ), 'car_country' );
			wp_set_object_terms( $car_id, array( 'Hyundai' ), 'car_brand' );
			wp_set_object_terms( $car_id, array( 'Кроссоверы' ), 'car_category' );
		}
	}
}
add_action( 'after_switch_theme', 'autoimport_create_pages' );
