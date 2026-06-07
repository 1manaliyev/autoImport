<?php
/**
 * Car catalog archive — static catalog markup for now.
 *
 * @package AutoImport
 */

get_header();
?>
<main>
<?php autoimport_load_static( 'catalog' ); ?>
</main>
<?php
get_footer();
