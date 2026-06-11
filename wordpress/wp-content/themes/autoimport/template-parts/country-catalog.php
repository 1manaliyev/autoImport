<?php
/**
 * Country page catalog block with brand filter and car cards.
 *
 * @package AutoImport
 *
 * @var array $args {
 *     @type string $country      Country taxonomy name.
 *     @type string $form_source Lead form source label.
 *     @type string $brands_label Accessible label for brand chips.
 * }
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$args         = isset( $args ) && is_array( $args ) ? $args : array();
$country      = $args['country'] ?? '';
$form_source  = $args['form_source'] ?? 'Каталог';
$brands_label = $args['brands_label'] ?? __( 'Фильтр по марке', 'autoimport' );

if ( ! $country ) {
	return;
}

$country_brands = autoimport_get_car_taxonomy_names_for_country( $country, 'car_brand' );
$country_models = autoimport_get_car_taxonomy_names_for_country( $country, 'car_model' );

$cars_query = new WP_Query(
	array(
		'post_type'      => 'car',
		'post_status'    => 'publish',
		'posts_per_page' => -1,
		'orderby'        => 'date',
		'order'          => 'DESC',
		'tax_query'      => array(
			array(
				'taxonomy' => 'car_country',
				'field'    => 'name',
				'terms'    => $country,
			),
		),
	)
);
?>
<p class="eyebrow"><?php esc_html_e( 'Фильтр по марке', 'autoimport' ); ?></p>
<div class="brands-scroll-wrap" aria-label="<?php echo esc_attr( $brands_label ); ?>">
	<div class="brands-scroll country-brands">
		<button type="button" class="country-brand-chip is-active" data-country-brand=""><?php esc_html_e( 'Все марки', 'autoimport' ); ?></button>
		<?php foreach ( $country_brands as $brand_name ) : ?>
			<button type="button" class="country-brand-chip" data-country-brand="<?php echo esc_attr( $brand_name ); ?>"><?php echo esc_html( $brand_name ); ?></button>
		<?php endforeach; ?>
	</div>
</div>

<div class="filters-grid country-filters" data-country-filters>
	<div class="country-catalog__locked">
		<label><?php esc_html_e( 'Страна', 'autoimport' ); ?></label>
		<select data-country-filter="country" disabled>
			<option selected><?php echo esc_html( $country ); ?></option>
		</select>
	</div>
	<div>
		<label for="f-brand-<?php echo esc_attr( sanitize_title( $country ) ); ?>"><?php esc_html_e( 'Марка', 'autoimport' ); ?></label>
		<select id="f-brand-<?php echo esc_attr( sanitize_title( $country ) ); ?>" data-country-filter="brand">
			<option value=""><?php esc_html_e( 'Любая', 'autoimport' ); ?></option>
			<?php foreach ( $country_brands as $brand_name ) : ?>
				<option value="<?php echo esc_attr( $brand_name ); ?>"><?php echo esc_html( $brand_name ); ?></option>
			<?php endforeach; ?>
		</select>
	</div>
	<div>
		<label for="f-model-<?php echo esc_attr( sanitize_title( $country ) ); ?>"><?php esc_html_e( 'Модель', 'autoimport' ); ?></label>
		<select id="f-model-<?php echo esc_attr( sanitize_title( $country ) ); ?>" data-country-filter="model">
			<option value=""><?php esc_html_e( 'Любая', 'autoimport' ); ?></option>
			<?php foreach ( $country_models as $model_name ) : ?>
				<option value="<?php echo esc_attr( $model_name ); ?>"><?php echo esc_html( $model_name ); ?></option>
			<?php endforeach; ?>
		</select>
	</div>
</div>

<div class="country-catalog__toolbar">
	<div class="catalog-toolbar__actions">
		<?php
		get_template_part(
			'template-parts/catalog',
			'sort',
			array(
				'field_id' => 'f-sort-' . sanitize_title( $country ),
			)
		);
		?>
		<button type="button" class="btn btn--outline btn--sm" data-country-filter-reset><?php esc_html_e( 'Сбросить фильтры', 'autoimport' ); ?></button>
	</div>
</div>
<p class="country-catalog__count" data-country-catalog-count></p>

<div class="cards-grid country-catalog__grid" data-country-catalog-grid style="grid-template-columns: repeat(auto-fill, minmax(300px, 1fr))">
	<?php
	if ( $cars_query->have_posts() ) :
		$country_card_index = 0;
		while ( $cars_query->have_posts() ) :
			$cars_query->the_post();
			get_template_part(
				'template-parts/car',
				'card',
				array(
					'car'         => get_the_ID(),
					'form_source' => $form_source,
					'page_hidden' => $country_card_index >= autoimport_catalog_page_size(),
				)
			);
			++$country_card_index;
		endwhile;
		wp_reset_postdata();
	else :
		?>
		<p style="color: var(--text-muted); margin: 0"><?php esc_html_e( 'В этой категории пока нет автомобилей.', 'autoimport' ); ?></p>
	<?php endif; ?>
</div>

<nav class="country-catalog__pagination" data-country-pagination aria-label="<?php esc_attr_e( 'Навигация по страницам каталога', 'autoimport' ); ?>" hidden>
	<button type="button" class="country-page-btn country-page-btn--nav" data-country-page-prev aria-label="<?php esc_attr_e( 'Предыдущая страница', 'autoimport' ); ?>"><?php esc_html_e( 'Назад', 'autoimport' ); ?></button>
	<div class="country-page-list" data-country-page-list></div>
	<button type="button" class="country-page-btn country-page-btn--nav" data-country-page-next aria-label="<?php esc_attr_e( 'Следующая страница', 'autoimport' ); ?>"><?php esc_html_e( 'Вперёд', 'autoimport' ); ?></button>
</nav>
