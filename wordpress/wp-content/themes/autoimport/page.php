<?php
/**
 * Default page template — loads static markup by slug.
 *
 * @package AutoImport
 */

get_header();

$queried_id    = (int) get_queried_object_id();
$posts_page_id = (int) get_option( 'page_for_posts' );
$slug          = $queried_id ? get_post_field( 'post_name', $queried_id ) : '';
$static_slug   = $slug;
$parent_id     = $queried_id ? wp_get_post_parent_id( $queried_id ) : 0;

if ( $posts_page_id && $queried_id === $posts_page_id ) {
	$static_slug = 'blog';
}
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
