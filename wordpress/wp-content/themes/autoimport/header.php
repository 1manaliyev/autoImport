<?php
/**
 * Site header.
 *
 * @package AutoImport
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header class="site-header">
	<div class="container site-header__inner">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="site-logo" aria-label="<?php esc_attr_e( 'На главную', 'autoimport' ); ?>">
			<img src="<?php echo esc_url( autoimport_asset_uri( 'assets/logo.png' ) ); ?>" alt="">
			<p>Auto<span>Import</span></p>
		</a>
		<button
			type="button"
			class="burger"
			data-burger
			aria-label="<?php esc_attr_e( 'Меню', 'autoimport' ); ?>"
			aria-expanded="false"
		>
			<span></span><span></span><span></span>
		</button>
		<div class="site-nav-wrap" data-nav-wrap>
			<nav class="site-nav" aria-label="<?php esc_attr_e( 'Основное меню', 'autoimport' ); ?>">
				<a href="<?php echo esc_url( home_url( '/catalog' ) ); ?>"><?php esc_html_e( 'Каталог', 'autoimport' ); ?></a>
				<a href="<?php echo esc_url( home_url( '/korea' ) ); ?>"><?php esc_html_e( 'Корея', 'autoimport' ); ?></a>
				<a href="<?php echo esc_url( home_url( '/china' ) ); ?>"><?php esc_html_e( 'Китай', 'autoimport' ); ?></a>
				<a href="<?php echo esc_url( home_url( '/europe' ) ); ?>"><?php esc_html_e( 'Европа', 'autoimport' ); ?></a>
				<a href="<?php echo esc_url( home_url( '/usa' ) ); ?>"><?php esc_html_e( 'США', 'autoimport' ); ?></a>
				<a href="<?php echo esc_url( home_url( '/podbor' ) ); ?>"><?php esc_html_e( 'Подбор под ключ', 'autoimport' ); ?></a>
				<a href="<?php echo esc_url( home_url( '/cars/power-up-to-160' ) ); ?>"><?php esc_html_e( 'До 160 л.с.', 'autoimport' ); ?></a>
			</nav>
			<div class="site-header__right">
				<div class="city-picker">
					<span data-city-display></span>
					<button type="button" data-city-change><?php esc_html_e( 'сменить', 'autoimport' ); ?></button>
				</div>
				<a class="phone-link" href="tel:+78001234567">+7 (800) 123-45-67</a>
				<div class="messengers" aria-label="<?php esc_attr_e( 'Мессенджеры', 'autoimport' ); ?>">
					<a href="https://t.me/" target="_blank" rel="noopener noreferrer" title="Telegram">
						<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 240.1 240.1">
							<linearGradient id="Oval_1_" gradientUnits="userSpaceOnUse" x1="-838.041" y1="660.581" x2="-838.041" y2="660.3427"
								gradientTransform="matrix(1000 0 0 -1000 838161 660581)">
								<stop offset="0" style="stop-color:#2AABEE" />
								<stop offset="1" style="stop-color:#229ED9" />
							</linearGradient>
							<circle fill-rule="evenodd" clip-rule="evenodd" fill="url(#Oval_1_)" cx="120.1" cy="120.1" r="120.1" />
							<path fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF"
								d="M54.3,118.8c35-15.2,58.3-25.3,70-30.2 c33.3-13.9,40.3-16.3,44.8-16.4c1,0,3.2,0.2,4.7,1.4c1.2,1,1.5,2.3,1.7,3.3s0.4,3.1,0.2,4.7c-1.8,19-9.6,65.1-13.6,86.3 c-1.7,9-5,12-8.2,12.3c-7,0.6-12.3-4.6-19-9c-10.6-6.9-16.5-11.2-26.8-18c-11.9-7.8-4.2-12.1,2.6-19.1c1.8-1.8,32.5-29.8,33.1-32.3 c0.1-0.3,0.1-1.5-0.6-2.1c-0.7-0.6-1.7-0.4-2.5-0.2c-1.1,0.2-17.9,11.4-50.6,33.5c-4.8,3.3-9.1,4.9-13,4.8 c-4.3-0.1-12.5-2.4-18.7-4.4c-7.5-2.4-13.5-3.7-13-7.9C45.7,123.3,48.7,121.1,54.3,118.8z" />
						</svg>
					</a>
					<a href="#" title="Max">
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 500 485">
							<path class="cls-1"
								d="M255.3712323,483.6158512c-49.0681808,0-71.8712149-6.9794583-111.5081916-34.8926949-25.0716665,31.4037029-104.4648546,55.944679-107.9271298,13.9573555,0-31.5204054-7.163332-58.1559851-15.281666-87.2332404C10.9837282,339.6239917,0,299.7297395,0,241.923862,0,103.8644842,116.2842508,0,254.0591208,0c137.8924176,0,245.9394213,108.9821369,245.9394213,243.2030512.4620986,132.1457298-108.9848703,239.7080174-244.6273098,240.4128ZM257.4015473,119.3336967c-67.0969908-3.3728676-119.3886633,41.8710763-130.9692616,112.8204559-9.5510636,58.7364912,7.4021173,130.266348,21.8480303,133.9887161,6.9242397,1.6277935,24.3545467-12.0961859,35.2197014-22.6797776,17.965145,12.0901151,38.8848455,19.3514575,60.6484901,21.052013,69.5227194,3.2570612,128.9272713-48.3059686,133.5969814-115.9618915,2.7166716-67.7984116-50.8121189-125.2232641-120.3439416-129.103117v-.116399Z" />
						</svg>
					</a>
				</div>
			</div>
		</div>
	</div>
</header>
