<?php
/**
 * Single blog post — static markup when available.
 *
 * @package AutoImport
 */

get_header();

$slug = get_post_field( 'post_name', get_the_ID() );
$loaded = autoimport_load_static( 'blog-' . $slug );
?>
<main>
<?php
if ( empty( $loaded ) ) {
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
				<div class="container entry-content">
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
