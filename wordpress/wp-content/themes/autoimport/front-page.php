<?php
/**
 * Front page — static home markup.
 *
 * @package AutoImport
 */

get_header();
?>
<main>
<?php autoimport_load_static( 'home' ); ?>
</main>
<?php
get_footer();
