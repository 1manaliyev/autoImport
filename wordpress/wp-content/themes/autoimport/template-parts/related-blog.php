<?php
/**
 * Related blog posts section.
 *
 * @package AutoImport
 *
 * @var array $args {
 *     @type string $section_modifiers Extra section classes, e.g. "section--tight-top".
 *     @type int    $limit             Number of posts to show.
 *     @type int[]  $exclude           Post IDs to exclude.
 * }
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$args              = isset( $args ) && is_array( $args ) ? $args : array();
$section_modifiers = trim( (string) ( $args['section_modifiers'] ?? '' ) );
$limit             = isset( $args['limit'] ) ? max( 1, (int) $args['limit'] ) : 7;
$exclude           = isset( $args['exclude'] ) && is_array( $args['exclude'] ) ? $args['exclude'] : array();

$blog_query = autoimport_get_blog_posts_query( $limit, $exclude );

if ( ! $blog_query->have_posts() ) {
	return;
}

$section_class = 'section related-blog';
if ( $section_modifiers ) {
	$section_class .= ' ' . $section_modifiers;
}
?>
<section class="<?php echo esc_attr( $section_class ); ?>">
	<div class="container">
		<div class="section-heading-row">
			<div>
				<p class="eyebrow"><?php esc_html_e( 'Блог', 'autoimport' ); ?></p>
				<h2><?php esc_html_e( 'Полезные статьи', 'autoimport' ); ?></h2>
			</div>
			<p><?php esc_html_e( 'Разборы по странам, бюджету и выбору автомобиля.', 'autoimport' ); ?></p>
		</div>
		<div class="related-blog__grid">
			<?php
			while ( $blog_query->have_posts() ) :
				$blog_query->the_post();
				get_template_part( 'template-parts/blog', 'card' );
			endwhile;
			wp_reset_postdata();
			?>
		</div>
		<div class="related-blog__actions">
			<a class="btn btn--outline" href="<?php echo esc_url( get_permalink( get_option( 'page_for_posts' ) ) ?: home_url( '/blog/' ) ); ?>">
				<?php esc_html_e( 'Все статьи', 'autoimport' ); ?>
			</a>
		</div>
	</div>
</section>
