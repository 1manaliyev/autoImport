<?php
/**
 * Catalog block with filters, sorting and pagination.
 *
 * @package AutoImport
 *
 * @var array $args {
 *     @type WP_Query|null $cars_query   Cars query. Defaults to all published cars.
 *     @type string        $form_source  Lead form source label.
 *     @type string        $field_prefix Unique prefix for filter field IDs.
 *     @type string        $preset_power Fixed power filter bucket, e.g. "160-".
 *     @type string        $filter_scope "all" or "query" — where to load filter terms from.
 *     @type string        $empty_message Message when no cars are found.
 * }
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$args          = isset( $args ) && is_array( $args ) ? $args : array();
$form_source   = $args['form_source'] ?? 'Каталог / Карточка';
$field_prefix  = $args['field_prefix'] ?? 'f';
$preset_power  = $args['preset_power'] ?? '';
$filter_scope  = $args['filter_scope'] ?? 'all';
$empty_message = $args['empty_message'] ?? __( 'В каталоге пока нет автомобилей.', 'autoimport' );
$cars_query    = $args['cars_query'] ?? null;

if ( ! $cars_query instanceof WP_Query ) {
	$cars_query = new WP_Query(
		array(
			'post_type'      => 'car',
			'post_status'    => 'publish',
			'posts_per_page' => -1,
			'orderby'        => 'date',
			'order'          => 'DESC',
		)
	);
}

$car_ids = wp_list_pluck( $cars_query->posts, 'ID' );

if ( 'query' === $filter_scope ) {
	$catalog_country_names = autoimport_get_car_taxonomy_names_for_car_ids( $car_ids, 'car_country' );
	$catalog_brand_names   = autoimport_get_car_taxonomy_names_for_car_ids( $car_ids, 'car_brand' );
	$catalog_model_names   = autoimport_get_car_taxonomy_names_for_car_ids( $car_ids, 'car_model' );
	$catalog_body_names    = autoimport_get_car_taxonomy_names_for_car_ids( $car_ids, 'car_body' );
} else {
	$catalog_countries = get_terms(
		array(
			'taxonomy'   => 'car_country',
			'hide_empty' => true,
		)
	);
	$catalog_brands = get_terms(
		array(
			'taxonomy'   => 'car_brand',
			'hide_empty' => true,
		)
	);
	$catalog_models = get_terms(
		array(
			'taxonomy'   => 'car_model',
			'hide_empty' => true,
		)
	);
	$catalog_body_types = get_terms(
		array(
			'taxonomy'   => 'car_body',
			'hide_empty' => true,
		)
	);
}

$catalog_current_year   = (int) wp_date( 'Y' );
$catalog_recent_year_to = $catalog_current_year - 1;
$section_attrs          = 'data-catalog data-catalog-page-size="' . esc_attr( (string) autoimport_catalog_page_size() ) . '"';

if ( $preset_power ) {
	$section_attrs .= ' data-catalog-preset-power="' . esc_attr( $preset_power ) . '"';
}
?>
<section class="section section--tight-top" <?php echo $section_attrs; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>>
	<div class="container">
		<p class="eyebrow"><?php esc_html_e( 'Фильтр по марке', 'autoimport' ); ?></p>
		<div class="brands-scroll-wrap" aria-label="<?php esc_attr_e( 'Популярные марки', 'autoimport' ); ?>">
			<div class="brands-scroll">
				<a href="#" class="is-active" data-brand-filter=""><?php esc_html_e( 'Все марки', 'autoimport' ); ?></a>
				<?php if ( 'query' === $filter_scope ) : ?>
					<?php foreach ( $catalog_brand_names as $brand_name ) : ?>
						<a href="#" data-brand-filter="<?php echo esc_attr( $brand_name ); ?>"><?php echo esc_html( $brand_name ); ?></a>
					<?php endforeach; ?>
				<?php elseif ( ! is_wp_error( $catalog_brands ) ) : ?>
					<?php foreach ( $catalog_brands as $brand_term ) : ?>
						<a href="#" data-brand-filter="<?php echo esc_attr( $brand_term->name ); ?>"><?php echo esc_html( $brand_term->name ); ?></a>
					<?php endforeach; ?>
				<?php endif; ?>
			</div>
		</div>

		<div class="filters-grid" aria-label="<?php esc_attr_e( 'Фильтры каталога', 'autoimport' ); ?>">
			<div>
				<label for="<?php echo esc_attr( $field_prefix ); ?>-country"><?php esc_html_e( 'Страна', 'autoimport' ); ?></label>
				<select id="<?php echo esc_attr( $field_prefix ); ?>-country" data-catalog-filter="country">
					<option value=""><?php esc_html_e( 'Любая', 'autoimport' ); ?></option>
					<?php if ( 'query' === $filter_scope ) : ?>
						<?php foreach ( $catalog_country_names as $country_name ) : ?>
							<option value="<?php echo esc_attr( $country_name ); ?>"><?php echo esc_html( $country_name ); ?></option>
						<?php endforeach; ?>
					<?php elseif ( ! is_wp_error( $catalog_countries ) ) : ?>
						<?php foreach ( $catalog_countries as $country_term ) : ?>
							<option value="<?php echo esc_attr( $country_term->name ); ?>"><?php echo esc_html( $country_term->name ); ?></option>
						<?php endforeach; ?>
					<?php endif; ?>
				</select>
			</div>
			<div>
				<label for="<?php echo esc_attr( $field_prefix ); ?>-brand"><?php esc_html_e( 'Марка', 'autoimport' ); ?></label>
				<select id="<?php echo esc_attr( $field_prefix ); ?>-brand" data-catalog-filter="brand">
					<option value=""><?php esc_html_e( 'Любая', 'autoimport' ); ?></option>
					<?php if ( 'query' === $filter_scope ) : ?>
						<?php foreach ( $catalog_brand_names as $brand_name ) : ?>
							<option value="<?php echo esc_attr( $brand_name ); ?>"><?php echo esc_html( $brand_name ); ?></option>
						<?php endforeach; ?>
					<?php elseif ( ! is_wp_error( $catalog_brands ) ) : ?>
						<?php foreach ( $catalog_brands as $brand_term ) : ?>
							<option value="<?php echo esc_attr( $brand_term->name ); ?>"><?php echo esc_html( $brand_term->name ); ?></option>
						<?php endforeach; ?>
					<?php endif; ?>
				</select>
			</div>
			<div>
				<label for="<?php echo esc_attr( $field_prefix ); ?>-model"><?php esc_html_e( 'Модель', 'autoimport' ); ?></label>
				<select id="<?php echo esc_attr( $field_prefix ); ?>-model" data-catalog-filter="model">
					<option value=""><?php esc_html_e( 'Любая', 'autoimport' ); ?></option>
					<?php if ( 'query' === $filter_scope ) : ?>
						<?php foreach ( $catalog_model_names as $model_name ) : ?>
							<option value="<?php echo esc_attr( $model_name ); ?>"><?php echo esc_html( $model_name ); ?></option>
						<?php endforeach; ?>
					<?php elseif ( ! is_wp_error( $catalog_models ) ) : ?>
						<?php foreach ( $catalog_models as $model_term ) : ?>
							<option value="<?php echo esc_attr( $model_term->name ); ?>"><?php echo esc_html( $model_term->name ); ?></option>
						<?php endforeach; ?>
					<?php endif; ?>
				</select>
			</div>
			<div>
				<label for="<?php echo esc_attr( $field_prefix ); ?>-price"><?php esc_html_e( 'Цена, ₽', 'autoimport' ); ?></label>
				<select id="<?php echo esc_attr( $field_prefix ); ?>-price" data-catalog-filter="price">
					<option value=""><?php esc_html_e( 'Любая', 'autoimport' ); ?></option>
					<option value="to-3"><?php esc_html_e( 'до 3 млн', 'autoimport' ); ?></option>
					<option value="3-5"><?php esc_html_e( '3–5 млн', 'autoimport' ); ?></option>
					<option value="5+"><?php esc_html_e( 'от 5 млн', 'autoimport' ); ?></option>
				</select>
			</div>
			<div>
				<label for="<?php echo esc_attr( $field_prefix ); ?>-year"><?php esc_html_e( 'Год', 'autoimport' ); ?></label>
				<select id="<?php echo esc_attr( $field_prefix ); ?>-year" data-catalog-filter="year">
					<option value=""><?php esc_html_e( 'Любой', 'autoimport' ); ?></option>
					<option value="before-2020"><?php esc_html_e( 'до 2020 года', 'autoimport' ); ?></option>
					<?php if ( $catalog_recent_year_to >= 2020 ) : ?>
						<option value="<?php echo esc_attr( '2020-' . $catalog_recent_year_to ); ?>">2020–<?php echo esc_html( (string) $catalog_recent_year_to ); ?></option>
					<?php endif; ?>
					<option value="<?php echo esc_attr( (string) $catalog_current_year ); ?>"><?php echo esc_html( (string) $catalog_current_year ); ?></option>
				</select>
			</div>
			<div>
				<label for="<?php echo esc_attr( $field_prefix ); ?>-mileage"><?php esc_html_e( 'Пробег', 'autoimport' ); ?></label>
				<select id="<?php echo esc_attr( $field_prefix ); ?>-mileage" data-catalog-filter="mileage">
					<option value=""><?php esc_html_e( 'Любой', 'autoimport' ); ?></option>
					<option value="to-30"><?php esc_html_e( 'до 30 000 км', 'autoimport' ); ?></option>
					<option value="to-80"><?php esc_html_e( 'до 80 000 км', 'autoimport' ); ?></option>
					<option value="from-80"><?php esc_html_e( 'от 80 000 км', 'autoimport' ); ?></option>
				</select>
			</div>
			<div>
				<label for="<?php echo esc_attr( $field_prefix ); ?>-body"><?php esc_html_e( 'Кузов', 'autoimport' ); ?></label>
				<select id="<?php echo esc_attr( $field_prefix ); ?>-body" data-catalog-filter="body">
					<option value=""><?php esc_html_e( 'Любой', 'autoimport' ); ?></option>
					<?php if ( 'query' === $filter_scope ) : ?>
						<?php foreach ( $catalog_body_names as $body_name ) : ?>
							<option value="<?php echo esc_attr( $body_name ); ?>"><?php echo esc_html( $body_name ); ?></option>
						<?php endforeach; ?>
					<?php elseif ( ! is_wp_error( $catalog_body_types ) ) : ?>
						<?php foreach ( $catalog_body_types as $body_term ) : ?>
							<option value="<?php echo esc_attr( $body_term->name ); ?>"><?php echo esc_html( $body_term->name ); ?></option>
						<?php endforeach; ?>
					<?php endif; ?>
				</select>
			</div>
			<div>
				<label for="<?php echo esc_attr( $field_prefix ); ?>-drive"><?php esc_html_e( 'Привод', 'autoimport' ); ?></label>
				<select id="<?php echo esc_attr( $field_prefix ); ?>-drive" data-catalog-filter="drive">
					<option value=""><?php esc_html_e( 'Любой', 'autoimport' ); ?></option>
					<option value="Передний"><?php esc_html_e( 'Передний', 'autoimport' ); ?></option>
					<option value="Задний"><?php esc_html_e( 'Задний', 'autoimport' ); ?></option>
					<option value="Полный"><?php esc_html_e( 'Полный', 'autoimport' ); ?></option>
				</select>
			</div>
			<div>
				<label for="<?php echo esc_attr( $field_prefix ); ?>-fuel"><?php esc_html_e( 'Топливо', 'autoimport' ); ?></label>
				<select id="<?php echo esc_attr( $field_prefix ); ?>-fuel" data-catalog-filter="fuel">
					<option value=""><?php esc_html_e( 'Любое', 'autoimport' ); ?></option>
					<option value="Бензин"><?php esc_html_e( 'Бензин', 'autoimport' ); ?></option>
					<option value="Дизель"><?php esc_html_e( 'Дизель', 'autoimport' ); ?></option>
					<option value="Газ"><?php esc_html_e( 'Газ', 'autoimport' ); ?></option>
					<option value="Электро"><?php esc_html_e( 'Электро', 'autoimport' ); ?></option>
					<option value="Гибрид"><?php esc_html_e( 'Гибрид', 'autoimport' ); ?></option>
				</select>
			</div>
			<div class="<?php echo $preset_power ? 'country-catalog__locked' : ''; ?>">
				<label for="<?php echo esc_attr( $field_prefix ); ?>-power"><?php esc_html_e( 'Мощность', 'autoimport' ); ?></label>
				<select id="<?php echo esc_attr( $field_prefix ); ?>-power" data-catalog-filter="power"<?php echo $preset_power ? ' disabled' : ''; ?>>
					<?php if ( ! $preset_power ) : ?>
						<option value=""><?php esc_html_e( 'Любая', 'autoimport' ); ?></option>
					<?php endif; ?>
					<option value="160-"<?php selected( $preset_power, '160-' ); ?>><?php esc_html_e( 'до 160 л.с.', 'autoimport' ); ?></option>
					<?php if ( ! $preset_power ) : ?>
						<option value="160-250"><?php esc_html_e( '160–250 л.с.', 'autoimport' ); ?></option>
						<option value="250+"><?php esc_html_e( 'от 250 л.с.', 'autoimport' ); ?></option>
					<?php endif; ?>
				</select>
			</div>
			<div>
				<label for="<?php echo esc_attr( $field_prefix ); ?>-volume"><?php esc_html_e( 'Объём двигателя', 'autoimport' ); ?></label>
				<select id="<?php echo esc_attr( $field_prefix ); ?>-volume" data-catalog-filter="volume">
					<option value=""><?php esc_html_e( 'Любой', 'autoimport' ); ?></option>
					<option value="2-"><?php esc_html_e( 'до 2.0 л', 'autoimport' ); ?></option>
					<option value="2+"><?php esc_html_e( 'от 2.0 л', 'autoimport' ); ?></option>
				</select>
			</div>
		</div>

		<div class="country-catalog__toolbar">
			<p class="country-catalog__count" data-catalog-count></p>
			<div class="catalog-toolbar__actions">
				<?php
				get_template_part(
					'template-parts/catalog',
					'sort',
					array(
						'field_id' => $field_prefix . '-sort',
					)
				);
				?>
				<button type="button" class="btn btn--outline btn--sm" data-catalog-filter-reset><?php esc_html_e( 'Сбросить фильтры', 'autoimport' ); ?></button>
			</div>
		</div>

		<div class="cards-grid" data-catalog-grid style="grid-template-columns: repeat(auto-fill, minmax(300px, 1fr))">
			<?php
			if ( $cars_query->have_posts() ) :
				$catalog_card_index = 0;
				while ( $cars_query->have_posts() ) :
					$cars_query->the_post();
					get_template_part(
						'template-parts/car',
						'card',
						array(
							'car'         => get_the_ID(),
							'form_source' => $form_source,
							'page_hidden' => $catalog_card_index >= autoimport_catalog_page_size(),
						)
					);
					++$catalog_card_index;
				endwhile;
				wp_reset_postdata();
			else :
				?>
				<p style="color: var(--text-muted); margin: 0"><?php echo esc_html( $empty_message ); ?></p>
			<?php endif; ?>
		</div>

		<nav class="country-catalog__pagination" data-catalog-pagination aria-label="<?php esc_attr_e( 'Навигация по страницам каталога', 'autoimport' ); ?>" hidden>
			<button type="button" class="country-page-btn country-page-btn--nav" data-catalog-page-prev aria-label="<?php esc_attr_e( 'Предыдущая страница', 'autoimport' ); ?>"><?php esc_html_e( 'Назад', 'autoimport' ); ?></button>
			<div class="country-page-list" data-catalog-page-list></div>
			<button type="button" class="country-page-btn country-page-btn--nav" data-catalog-page-next aria-label="<?php esc_attr_e( 'Следующая страница', 'autoimport' ); ?>"><?php esc_html_e( 'Вперёд', 'autoimport' ); ?></button>
		</nav>
	</div>
</section>
