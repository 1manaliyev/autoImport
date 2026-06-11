<?php
/**
 * Single blog article layout.
 *
 * @package AutoImport
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$blog_url = get_permalink( get_option( 'page_for_posts' ) ) ?: home_url( '/blog/' );
?>
<section class="page-hero">
	<div class="container">
		<p class="eyebrow"><?php esc_html_e( 'Блог', 'autoimport' ); ?></p>
		<h1><?php the_title(); ?></h1>
	</div>
</section>
<section class="section">
	<div class="container article-shell">
		<a class="article-back" href="<?php echo esc_url( $blog_url ); ?>">← <?php esc_html_e( 'Блог', 'autoimport' ); ?></a>
		<article class="article-content">
			<?php the_content(); ?>
		</article>
		<div class="article-cta">
			<h2><?php esc_html_e( 'Подберём автомобиль под ваш бюджет', 'autoimport' ); ?></h2>
			<p><?php esc_html_e( 'Покажем реальные варианты, рассчитаем итоговую стоимость и объясним, что выгоднее именно в вашем случае.', 'autoimport' ); ?></p>
			<button
				type="button"
				class="btn btn--primary"
				data-open-form
				data-form-title="<?php esc_attr_e( 'Подберём автомобиль под ваш бюджет', 'autoimport' ); ?>"
				data-form-source="<?php esc_attr_e( 'Блог / Статья', 'autoimport' ); ?>"
				data-form-button-text="<?php esc_attr_e( 'Получить подборку', 'autoimport' ); ?>"
			>
				<?php esc_html_e( 'Получить подборку', 'autoimport' ); ?>
			</button>
		</div>
	</div>
</section>
