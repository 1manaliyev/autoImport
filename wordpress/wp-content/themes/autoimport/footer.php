<?php
/**
 * Site footer and modal.
 *
 * @package AutoImport
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
$info = get_field('общая_информация', 23);
?>
<footer class="site-footer">
	<div class="container footer-grid">
		<div class="footer-col">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="site-logo">
				<img src="<?php echo esc_url( autoimport_asset_uri( 'assets/logo.png' ) ); ?>" alt="">
				<p>Auto<span>Import</span></p>
			</a>
			<p><?php esc_html_e( 'Импорт автомобилей из Кореи, Китая, Европы и США под ключ', 'autoimport' ); ?></p>
			<button
				type="button"
				class="btn btn--primary"
				data-open-form
				data-form-title="<?php esc_attr_e( 'Подберём автомобиль под ваш бюджет', 'autoimport' ); ?>"
				data-form-button-text="<?php esc_attr_e( 'Подобрать авто', 'autoimport' ); ?>"
				data-form-source="<?php esc_attr_e( 'Подвал', 'autoimport' ); ?>"
			>
				<?php esc_html_e( 'Подобрать авто', 'autoimport' ); ?>
			</button>
		</div>
		<div class="footer-col">
			<h3 class="mt-0"><?php esc_html_e( 'Навигация', 'autoimport' ); ?></h3>
			<ul class="footer-nav">
				<li><a href="<?php echo esc_url( home_url( '/catalog' ) ); ?>"><?php esc_html_e( 'Каталог', 'autoimport' ); ?></a></li>
				<li><a href="<?php echo esc_url( home_url( '/podbor' ) ); ?>"><?php esc_html_e( 'Подбор под ключ', 'autoimport' ); ?></a></li>
				<li><a href="<?php echo esc_url( home_url( '/delivery' ) ); ?>"><?php esc_html_e( 'Доставка', 'autoimport' ); ?></a></li>
				<li><a href="<?php echo esc_url( home_url( '/payment' ) ); ?>"><?php esc_html_e( 'Оплата', 'autoimport' ); ?></a></li>
				<li><a href="<?php echo esc_url( home_url( '/guarantees' ) ); ?>"><?php esc_html_e( 'Гарантии', 'autoimport' ); ?></a></li>
				<li><a href="<?php echo esc_url( home_url( '/reviews' ) ); ?>"><?php esc_html_e( 'Отзывы', 'autoimport' ); ?></a></li>
				<li><a href="<?php echo esc_url( home_url( '/faq' ) ); ?>"><?php esc_html_e( 'FAQ', 'autoimport' ); ?></a></li>
				<li><a href="<?php echo esc_url( home_url( '/about' ) ); ?>"><?php esc_html_e( 'О компании', 'autoimport' ); ?></a></li>
				<li><a href="<?php echo esc_url( home_url( '/documents' ) ); ?>"><?php esc_html_e( 'Документы', 'autoimport' ); ?></a></li>
				<li><a href="<?php echo esc_url( home_url( '/contacts' ) ); ?>"><?php esc_html_e( 'Контакты', 'autoimport' ); ?></a></li>
				<li><a href="<?php echo esc_url( home_url( '/remote' ) ); ?>"><?php esc_html_e( 'Дистанционно', 'autoimport' ); ?></a></li>
				<li><a href="<?php echo esc_url( home_url( '/quiz' ) ); ?>"><?php esc_html_e( 'Квиз', 'autoimport' ); ?></a></li>
				<li><a href="<?php echo esc_url( home_url( '/cars/power-up-to-160' ) ); ?>"><?php esc_html_e( 'До 160 л.с.', 'autoimport' ); ?></a></li>
				<li><a href="<?php echo esc_url( home_url( '/blog' ) ); ?>"><?php esc_html_e( 'Блог', 'autoimport' ); ?></a></li>
			</ul>
		</div>
		<div class="footer-col">
			<h3 class="mt-0"><?php esc_html_e( 'Контакты', 'autoimport' ); ?></h3>
			<ul class="footer-nav">
				<li><a href="tel:<?=$info['телефон'];?>"><?=$info['телефон'];?></a></li>
				<li>
					<div class="messengers footer-messengers" aria-label="<?php esc_attr_e( 'Мессенджеры', 'autoimport' ); ?>">
						<a href="<?=$info['ссылка_телеграм'];?>" target="_blank" rel="noopener noreferrer" title="Telegram">
							<svg viewBox="0 0 240.1 240.1" aria-hidden="true" focusable="false">
								<circle fill="#2AABEE" cx="120.1" cy="120.1" r="120.1" />
								<path fill="#FFFFFF" d="M54.3,118.8c35-15.2,58.3-25.3,70-30.2c33.3-13.9,40.3-16.3,44.8-16.4c1,0,3.2,0.2,4.7,1.4c1.2,1,1.5,2.3,1.7,3.3s0.4,3.1,0.2,4.7c-1.8,19-9.6,65.1-13.6,86.3c-1.7,9-5,12-8.2,12.3c-7,0.6-12.3-4.6-19-9c-10.6-6.9-16.5-11.2-26.8-18c-11.9-7.8-4.2-12.1,2.6-19.1c1.8-1.8,32.5-29.8,33.1-32.3c0.1-0.3,0.1-1.5-0.6-2.1c-0.7-0.6-1.7-0.4-2.5-0.2c-1.1,0.2-17.9,11.4-50.6,33.5c-4.8,3.3-9.1,4.9-13,4.8c-4.3-0.1-12.5-2.4-18.7-4.4c-7.5-2.4-13.5-3.7-13-7.9C45.7,123.3,48.7,121.1,54.3,118.8z" />
							</svg>
						</a>
						<a href="<?=$info['ссылка_max'];?>" target="_blank" rel="noopener noreferrer" title="WhatsApp">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 500 485">
								<path class="cls-1" d="M255.3712323,483.6158512c-49.0681808,0-71.8712149-6.9794583-111.5081916-34.8926949-25.0716665,31.4037029-104.4648546,55.944679-107.9271298,13.9573555,0-31.5204054-7.163332-58.1559851-15.281666-87.2332404C10.9837282,339.6239917,0,299.7297395,0,241.923862,0,103.8644842,116.2842508,0,254.0591208,0c137.8924176,0,245.9394213,108.9821369,245.9394213,243.2030512.4620986,132.1457298-108.9848703,239.7080174-244.6273098,240.4128ZM257.4015473,119.3336967c-67.0969908-3.3728676-119.3886633,41.8710763-130.9692616,112.8204559-9.5510636,58.7364912,7.4021173,130.266348,21.8480303,133.9887161,6.9242397,1.6277935,24.3545467-12.0961859,35.2197014-22.6797776,17.965145,12.0901151,38.8848455,19.3514575,60.6484901,21.052013,69.5227194,3.2570612,128.9272713-48.3059686,133.5969814-115.9618915,2.7166716-67.7984116-50.8121189-125.2232641-120.3439416-129.103117v-.116399Z" />
							</svg>
						</a>
					</div>
				</li>
				<li><a href="mailto:<?=$info['email'];?>"><?=$info['email'];?></a></li>
				<li><?php esc_html_e( $info['адрес'] ); ?></li>
			</ul>
		</div>
	</div>
	<div class="container footer-bottom">
		<div>
			<a href="#"><?php esc_html_e( 'Политика конфиденциальности', 'autoimport' ); ?></a>
			·
			<a href="#"><?php esc_html_e( 'Пользовательское соглашение', 'autoimport' ); ?></a>
		</div>
		<div>© AutoImport</div>
	</div>
</footer>

<?php get_template_part( 'template-parts/modal' ); ?>

<?php wp_footer(); ?>
</body>
</html>
