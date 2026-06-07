<?php
/**
 * Default page template — loads static markup by slug.
 *
 * @package AutoImport
 */

get_header();

$slug        = get_post_field( 'post_name', get_the_ID() );
$static_slug = $slug;
$parent_id   = wp_get_post_parent_id( get_the_ID() );
if ( $parent_id ) {
	$parent = get_post( $parent_id );
	if ( $parent && 'cars' === $parent->post_name && 'power-up-to-160' === $slug ) {
		$static_slug = 'cars-power-up-to-160';
	}
}

$loaded = autoimport_load_static( $static_slug );
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
