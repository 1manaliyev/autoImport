<?php
/**
 * Single blog post.
 *
 * @package AutoImport
 */

get_header();
?>
<main class="page-main article-page">
	<?php
	while ( have_posts() ) :
		the_post();
		get_template_part( 'template-parts/article', 'single' );
	endwhile;
	?>
</main>
<?php
get_footer();
