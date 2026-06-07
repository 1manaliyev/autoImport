<?php
/**
 * AutoImport theme bootstrap.
 *
 * @package AutoImport
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'AUTOIMPORT_VERSION', '1.0.0' );

require get_template_directory() . '/inc/setup.php';
require get_template_directory() . '/inc/post-types.php';
require get_template_directory() . '/inc/pages.php';

/**
 * Blog permalink structure: /blog/%postname%/
 */
function autoimport_rewrite_blog_permalink(): void {
	global $wp_rewrite;
	if ( $wp_rewrite ) {
		$wp_rewrite->set_permalink_structure( '/blog/%postname%/' );
	}
}
add_action( 'after_switch_theme', 'autoimport_rewrite_blog_permalink', 20 );
