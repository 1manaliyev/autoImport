<?php
/**
 * Catalog page helpers for ACF fields.
 *
 * @package AutoImport
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Get catalog WordPress page ID.
 */
function autoimport_get_catalog_page_id(): int {
	static $page_id = null;

	if ( null !== $page_id ) {
		return $page_id;
	}

	$page    = get_page_by_path( 'catalog' );
	$page_id = $page ? (int) $page->ID : 0;

	return $page_id;
}

/**
 * Read an ACF field from the catalog page with a static fallback.
 *
 * @param mixed $default Default when field is empty or ACF is unavailable.
 */
function autoimport_get_catalog_field( string $field, $default = '' ) {
	if ( ! function_exists( 'get_field' ) ) {
		return $default;
	}

	$page_id = autoimport_get_catalog_page_id();
	if ( ! $page_id ) {
		return $default;
	}

	$value = get_field( $field, $page_id );
	if ( null === $value || false === $value || '' === $value ) {
		return $default;
	}

	return $value;
}
