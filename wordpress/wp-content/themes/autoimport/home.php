<?php
/**
 * Blog posts index at /blog.
 *
 * @package AutoImport
 */

get_header();

$loaded = autoimport_load_static( 'blog' );
?>
<main>
<?php
if ( empty( $loaded ) ) {
	?>
	<div class="page-main">
		<div class="page-hero">
			<div class="container">
				<h1><?php esc_html_e( 'Блог и полезные материалы', 'autoimport' ); ?></h1>
			</div>
		</div>
		<section class="section">
			<div class="container">
				<ul class="sitemap-list">
					<?php
					while ( have_posts() ) {
						the_post();
						echo '<li><a href="' . esc_url( get_permalink() ) . '">' . esc_html( get_the_title() ) . '</a></li>';
					}
					?>
				</ul>
			</div>
		</section>
	</div>
	<?php
}
?>
</main>
<?php
get_footer();
