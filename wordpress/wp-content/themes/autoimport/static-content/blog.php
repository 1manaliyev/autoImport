<?php
/** Static markup from blog.html */
if ( ! defined( 'ABSPATH' ) ) { exit; }
$autoimport_page_meta = array( 'title' => 'Блог — AutoImport', 'description' => null, 'extra_head' => '', 'has_quiz' => false, 'has_swiper' => false );
?>
<div class="page-hero">
        <div class="container">
          <h1>Блог и полезные материалы</h1>
        </div>
      </div>
      <section class="section">
        <div class="container">
          <ul class="sitemap-list">
            <li><a href="<?php echo esc_url( home_url( '/blog/kak-kupit-avto-kitaya' ) ); ?>">Как купить автомобиль из Китая: пошаговый разбор</a></li>
            <li><a href="<?php echo esc_url( home_url( '/blog/kak-kupit-avto-ssha' ) ); ?>">Как купить автомобиль из США: пошаговый разбор</a></li>
            <li><a href="<?php echo esc_url( home_url( '/blog/kak-kupit-avto-evropy' ) ); ?>">Как купить автомобиль из Европы: пошаговый разбор</a></li>
            <li><a href="<?php echo esc_url( home_url( '/blog/kak-kupit-avto-korei' ) ); ?>">Как купить автомобиль из Кореи: пошаговый разбор</a></li>
            <li><a href="<?php echo esc_url( home_url( '/blog/semeynyy-krossover' ) ); ?>">Как не ошибиться при выборе семейного кроссовера</a></li>
            <li><a href="<?php echo esc_url( home_url( '/blog/luchshie-avto-budget' ) ); ?>">Лучшие авто до 3 / 4 / 5 млн рублей</a></li>
            <li><a href="<?php echo esc_url( home_url( '/blog/kitayskie-gibridy' ) ); ?>">Что важно знать про китайские гибриды</a></li>
          </ul>
        </div>
      </section>
      <section class="section">
        <div class="container country-cta">
          <h2>Подберём автомобиль под ваш бюджет</h2>
          <p>Не нашли ответ в статьях — оставьте заявку, менеджер поможет с подбором.</p>
          <button type="button" class="btn btn--primary" data-open-form data-form-title="Подберём автомобиль под ваш бюджет" data-form-source="Страница / Блог" data-form-button-text="Подобрать авто">Подобрать авто</button>
        </div>
      </section>
