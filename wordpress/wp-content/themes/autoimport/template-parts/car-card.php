<?php
/**
 * Car catalog card.
 *
 * @package AutoImport
 *
 * @var array $args {
 *     @type int|string|WP_Post $car         Post ID or object.
 *     @type string             $form_source  Lead form source label.
 *     @type bool               $page_hidden  Hide card until pagination JS runs.
 * }
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$args        = isset( $args ) && is_array( $args ) ? $args : array();
$car         = $args['car'] ?? get_the_ID();
$form_source = $args['form_source'] ?? 'Каталог';
$page_hidden = ! empty( $args['page_hidden'] );

$car_title = get_the_title( $car );
$car_link  = get_permalink( $car );

$countries    = wp_get_post_terms( $car, 'car_country' );
$country      = ! empty( $countries ) && ! is_wp_error( $countries ) ? $countries[0]->name : '';
$badge_class  = autoimport_country_badge_class( $country );

$brands = wp_get_post_terms( $car, 'car_brand' );
$brand  = ! empty( $brands ) && ! is_wp_error( $brands ) ? $brands[0]->name : '';

$models = wp_get_post_terms( $car, 'car_model' );
$model  = ! empty( $models ) && ! is_wp_error( $models ) ? $models[0]->name : '';

$bodies = wp_get_post_terms( $car, 'car_body' );
$body   = ! empty( $bodies ) && ! is_wp_error( $bodies ) ? $bodies[0]->name : '';

$gallery      = get_field( 'галерея', $car );
$image        = ! empty( $gallery[0]['картинка'] ) ? $gallery[0]['картинка'] : '';
$price        = get_field( 'цена_под_ключ', $car );
$year         = get_field( 'год', $car );
$mileage      = get_field( 'пробег', $car );
$transmission = get_field( 'привод', $car );
$gearbox      = get_field( 'коробка_передач', $car );
$power        = get_field( 'мощность', $car );
$fuel_type    = get_field( 'тип_топлива', $car ) ?: get_field( 'топливо', $car );
$engine_volume = get_field( 'объем_двигателя', $car );
$description  = get_field( 'текст_карточки', $car );
$car_type     = get_field( 'тип_автомобиля', $car );
$type_class   = $car_type ? autoimport_car_type_tag_class( (string) $car_type ) : '';
$price_bucket = autoimport_get_price_filter_bucket( $price );
$year_bucket     = autoimport_get_year_filter_bucket( $year );
$mileage_bucket  = autoimport_get_mileage_filter_bucket( $mileage );
$drive_bucket    = autoimport_get_drive_filter_bucket( $transmission );
$fuel_bucket     = autoimport_get_fuel_filter_bucket( $fuel_type );
$power_bucket    = autoimport_get_power_filter_bucket( $power );
$volume_bucket   = autoimport_get_volume_filter_bucket( $engine_volume );
$sort_price      = autoimport_get_catalog_sort_int( $price );
$sort_year       = autoimport_get_catalog_sort_int( $year );
$sort_mileage    = autoimport_get_catalog_sort_mileage( $mileage );
$sort_power      = autoimport_get_catalog_sort_int( $power );
$sort_volume     = autoimport_get_catalog_sort_volume( $engine_volume );

$form_title = sprintf( 'Рассчитаем стоимость %s под ключ', $car_title );
?>
<article
	class="car-card<?php echo $page_hidden ? ' is-page-hidden' : ''; ?>"
	data-catalog-car
	data-country="<?php echo esc_attr( $country ); ?>"
	data-brand="<?php echo esc_attr( $brand ); ?>"
	data-model="<?php echo esc_attr( $model ); ?>"
	data-price="<?php echo esc_attr( $price_bucket ); ?>"
	data-year="<?php echo esc_attr( $year_bucket ); ?>"
	data-mileage="<?php echo esc_attr( $mileage_bucket ); ?>"
	data-drive="<?php echo esc_attr( $drive_bucket ); ?>"
	data-fuel="<?php echo esc_attr( $fuel_bucket ); ?>"
	data-power="<?php echo esc_attr( $power_bucket ); ?>"
	data-volume="<?php echo esc_attr( $volume_bucket ); ?>"
	data-body="<?php echo esc_attr( $body ); ?>"
	data-sort-price="<?php echo esc_attr( $sort_price ); ?>"
	data-sort-year="<?php echo esc_attr( $sort_year ); ?>"
	data-sort-mileage="<?php echo esc_attr( $sort_mileage ); ?>"
	data-sort-power="<?php echo esc_attr( $sort_power ); ?>"
	data-sort-volume="<?php echo esc_attr( $sort_volume ); ?>"
>
	<div class="car-card__img">
		<?php if ( $country ) : ?>
			<span class="car-badge <?php echo esc_attr( $badge_class ); ?>"><?php echo esc_html( $country ); ?></span>
		<?php endif; ?>
		<?php if ( $image ) : ?>
			<img src="<?php echo esc_url( $image ); ?>" alt="<?php echo esc_attr( $car_title ); ?>" loading="lazy" />
		<?php endif; ?>
	</div>
	<div class="car-card__body">
		<h3 class="mt-0"><?php echo esc_html( $car_title ); ?></h3>
		<?php if ( $price ) : ?>
			<p class="car-card__price"><strong>от <?php echo esc_html( number_format_i18n( $price ) ); ?> ₽ под ключ</strong></p>
		<?php endif; ?>
		<ul class="car-specs" aria-label="Характеристики">
			<?php if ( $year ) : ?>
				<li class="car-specs__item" title="Год выпуска">
					<span class="car-specs__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><rect x="3" y="4" width="18" height="18" rx="2"/><path d="M16 2v4M8 2v4M3 10h18"/></svg></span>
					<span class="car-specs__value"><?php echo esc_html( $year ); ?></span>
				</li>
			<?php endif; ?>
			<?php if ( trim( (string) $mileage ) !== '' ) : ?>
				<li class="car-specs__item" title="Пробег">
					<span class="car-specs__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/></svg></span>
					<span class="car-specs__value"><?php echo esc_html( number_format_i18n( $mileage ) ); ?> км</span>
				</li>
			<?php endif; ?>
			<?php if ( $gearbox ) : ?>
				<li class="car-specs__item" title="Тип КПП">
					<span class="car-specs__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><circle cx="12" cy="12" r="3"/><path d="M12 2v2M12 20v2M4.9 4.9l1.4 1.4M17.7 17.7l1.4 1.4M2 12h2M20 12h2M4.9 19.1l1.4-1.4M17.7 6.3l1.4-1.4"/></svg></span>
					<span class="car-specs__value"><?php echo esc_html( $gearbox ); ?></span>
				</li>
			<?php endif; ?>
			<?php if ( $transmission ) : ?>
				<li class="car-specs__item" title="Привод">
					<span class="car-specs__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><circle cx="7" cy="17" r="2"/><circle cx="17" cy="17" r="2"/><path d="M5 17h2l2-7h6l2 7h2M9 10l1-4h4l1 4"/></svg></span>
					<span class="car-specs__value"><?php echo esc_html( $transmission ); ?></span>
				</li>
			<?php endif; ?>
			<?php if ( $power || $engine_volume ) : ?>
				<li class="car-specs__item" title="Объём двигателя (л.с.)">
					<span class="car-specs__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><path d="M8 10h8v8H8z"/><path d="M6 10V7h12v3M10 6V4M14 6V4M10 18v2M14 18v2"/></svg></span>
					<span class="car-specs__value"><?php echo esc_html( $engine_volume ); ?> л (<?php echo esc_html( $power ); ?> л.с.)</span>
				</li>
			<?php endif; ?>
			<?php if ( $fuel_type ) : ?>
				<li class="car-specs__item" title="Тип топлива">
					<span class="car-specs__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><path d="M6 3h8v18H6z"/><path d="M14 7h2l2 4v10h-4"/></svg></span>
					<span class="car-specs__value"><?php echo esc_html( $fuel_type ); ?></span>
				</li>
			<?php endif; ?>
		</ul>
		<?php if ( $description ) : ?>
			<p class="car-card__desc"><?php echo esc_html( $description ); ?></p>
		<?php endif; ?>
		<?php if ( $car_type ) : ?>
			<span class="tag <?php echo esc_attr( $type_class ); ?>"><?php echo esc_html( $car_type ); ?></span>
		<?php endif; ?>
		<div class="car-card__actions">
			<a class="btn btn--outline" href="<?php echo esc_url( $car_link ); ?>">Подробнее</a>
			<button
				type="button"
				class="btn btn--primary"
				data-open-form
				data-form-title="<?php echo esc_attr( $form_title ); ?>"
				data-form-type="Расчёт"
				data-form-source="<?php echo esc_attr( $form_source ); ?>"
				data-form-car="<?php echo esc_attr( $car_title ); ?>"
				data-form-button-text="Получить расчёт по авто"
			>
				Получить расчёт по авто
			</button>
		</div>
	</div>
</article>
