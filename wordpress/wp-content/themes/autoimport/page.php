<?php
/**
 * Default page template — loads static markup by slug.
 *
 * @package AutoImport
 */

get_header();

$static_slug = autoimport_resolve_static_slug();
$loaded      = $static_slug ? autoimport_load_static( $static_slug ) : array();
?>
<main>
<?php
if ( ! empty( $loaded ) ) {
	// Markup already echoed by include.
} else {
	while ( have_posts() ) {
		the_post();
		?>
		<div class="page-main">
			<div class="page-hero">
				<div class="container">
					<h1><?php the_title(); ?></h1>
				</div>
			</div>
			<section class="section">
				<div class="container">
					<?php the_content(); ?>
				</div>
			</section>
		</div>
		<?php
	}
}
?>
</main>
<?php
get_footer();
