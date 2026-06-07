<?php
/**
 * Fallback template.
 *
 * @package AutoImport
 */

get_header();
?>
<main class="page-main">
	<div class="container section">
		<?php
		if ( have_posts() ) {
			while ( have_posts() ) {
				the_post();
				?>
				<article>
					<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
					<?php the_excerpt(); ?>
				</article>
				<?php
			}
		}
		?>
	</div>
</main>
<?php
get_footer();
