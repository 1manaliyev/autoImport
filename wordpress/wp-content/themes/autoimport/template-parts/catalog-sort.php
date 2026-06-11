<?php
/**
 * Catalog sort dropdown.
 *
 * @package AutoImport
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$args     = isset( $args ) && is_array( $args ) ? $args : array();
$field_id = $args['field_id'] ?? 'f-sort';

$catalog_sort_options = array(
	''            => __( 'По умолчанию', 'autoimport' ),
	'year-desc'   => __( 'Год: сначала новые', 'autoimport' ),
	'year-asc'    => __( 'Год: сначала старые', 'autoimport' ),
	'price-asc'   => __( 'Цена: сначала дешёвые', 'autoimport' ),
	'price-desc'  => __( 'Цена: сначала дорогие', 'autoimport' ),
	'mileage-asc' => __( 'Пробег: сначала меньше', 'autoimport' ),
	'mileage-desc'=> __( 'Пробег: сначала больше', 'autoimport' ),
	'volume-asc'  => __( 'Объём: сначала меньше', 'autoimport' ),
	'volume-desc' => __( 'Объём: сначала больше', 'autoimport' ),
	'power-asc'   => __( 'Мощность: сначала меньше', 'autoimport' ),
	'power-desc'  => __( 'Мощность: сначала больше', 'autoimport' ),
);
?>
<div class="catalog-sort" data-catalog-sort-wrap>
	<span class="catalog-sort__label"><?php esc_html_e( 'Сортировка:', 'autoimport' ); ?></span>
	<button
		type="button"
		class="catalog-sort__trigger"
		data-catalog-sort-trigger
		aria-haspopup="listbox"
		aria-expanded="false"
		aria-controls="<?php echo esc_attr( $field_id ); ?>-menu"
	>
		<span data-catalog-sort-label><?php echo esc_html( $catalog_sort_options[''] ); ?></span>
		<svg class="catalog-sort__chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M6 9l6 6 6-6"/></svg>
	</button>
	<select id="<?php echo esc_attr( $field_id ); ?>" data-catalog-sort class="catalog-sort__native" tabindex="-1" aria-hidden="true">
		<?php foreach ( $catalog_sort_options as $value => $label ) : ?>
			<option value="<?php echo esc_attr( $value ); ?>"><?php echo esc_html( $label ); ?></option>
		<?php endforeach; ?>
	</select>
	<div
		id="<?php echo esc_attr( $field_id ); ?>-menu"
		class="catalog-sort__menu"
		data-catalog-sort-menu
		role="listbox"
		aria-label="<?php esc_attr_e( 'Сортировка каталога', 'autoimport' ); ?>"
		hidden
	>
		<?php foreach ( $catalog_sort_options as $value => $label ) : ?>
			<button
				type="button"
				class="catalog-sort__option<?php echo '' === $value ? ' is-active' : ''; ?>"
				data-catalog-sort-option
				data-value="<?php echo esc_attr( $value ); ?>"
				role="option"
				aria-selected="<?php echo '' === $value ? 'true' : 'false'; ?>"
			>
				<?php echo esc_html( $label ); ?>
			</button>
		<?php endforeach; ?>
	</div>
</div>
