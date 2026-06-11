<?php
/**
 * Blog post card.
 *
 * @package AutoImport
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<a class="related-blog__card blog-card" href="<?php the_permalink(); ?>">
	<h3 class="blog-card__title"><?php the_title(); ?></h3>
	<?php if ( has_excerpt() ) : ?>
		<p class="blog-card__excerpt"><?php echo esc_html( get_the_excerpt() ); ?></p>
	<?php endif; ?>
	<span><?php esc_html_e( 'Читать статью', 'autoimport' ); ?></span>
</a>
