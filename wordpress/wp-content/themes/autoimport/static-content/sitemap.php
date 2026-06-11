<?php
/** Static markup from sitemap.html */
if ( ! defined( 'ABSPATH' ) ) { exit; }
$autoimport_page_meta = array( 'title' => 'Карта сайта — AutoImport', 'description' => null, 'extra_head' => '', 'has_quiz' => false, 'has_swiper' => false );
?>
<div class="page-hero">
        <div class="container">
          <h1>Карта сайта</h1>
          <p class="subtitle mb-0">
            Все страницы статической вёрстки. Для WordPress ЧПУ см. колонку «URL по ТЗ».
          </p>
        </div>
      </div>

      <section class="section">
        <div class="container">
          <h2 class="mt-0">Основные разделы</h2>
          <ul class="sitemap-list">
            <li>
              <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Главная</a>
              <code>/</code>
            </li>
            <li>
              <a href="<?php echo esc_url( home_url( '/catalog' ) ); ?>">Каталог автомобилей</a>
              <code>/catalog</code>
            </li>
            <li>
              <a href="<?php echo esc_url( home_url( '/catalog/hyundai-tucson-2022' ) ); ?>">Карточка автомобиля (пример)</a>
              <code>/catalog/{slug}</code>
            </li>
            <li>
              <a href="<?php echo esc_url( home_url( '/korea' ) ); ?>">Авто из Кореи</a>
              <code>/korea</code>
            </li>
            <li>
              <a href="<?php echo esc_url( home_url( '/china' ) ); ?>">Авто из Китая</a>
              <code>/china</code>
            </li>
            <li>
              <a href="<?php echo esc_url( home_url( '/europe' ) ); ?>">Авто из Европы</a>
              <code>/europe</code>
            </li>
            <li>
              <a href="<?php echo esc_url( home_url( '/usa' ) ); ?>">Авто из США</a>
              <code>/usa</code>
            </li>
            <li>
              <a href="<?php echo esc_url( home_url( '/podbor' ) ); ?>">Подбор авто под ключ</a>
              <code>/podbor</code>
            </li>
            <li>
              <a href="<?php echo esc_url( home_url( '/remote' ) ); ?>">Дистанционная покупка</a>
              <code>/remote</code>
            </li>
            <li>
              <a href="<?php echo esc_url( home_url( '/payment' ) ); ?>">Оплата</a>
              <code>/payment</code>
            </li>
            <li>
              <a href="<?php echo esc_url( home_url( '/delivery' ) ); ?>">Доставка</a>
              <code>/delivery</code>
            </li>
            <li>
              <a href="<?php echo esc_url( home_url( '/reviews' ) ); ?>">Отзывы</a>
              <code>/reviews</code>
            </li>
            <li>
              <a href="<?php echo esc_url( home_url( '/about' ) ); ?>">О компании</a>
              <code>/about</code>
            </li>
            <li>
              <a href="<?php echo esc_url( home_url( '/documents' ) ); ?>">Документы и сертификаты</a>
              <code>/documents</code>
            </li>
            <li>
              <a href="<?php echo esc_url( home_url( '/guarantees' ) ); ?>">Гарантии</a>
              <code>/guarantees</code>
            </li>
            <li>
              <a href="<?php echo esc_url( home_url( '/faq' ) ); ?>">Частые вопросы (FAQ)</a>
              <code>/faq</code>
            </li>
            <li>
              <a href="<?php echo esc_url( home_url( '/blog' ) ); ?>">Блог</a>
              <code>/blog</code>
            </li>
            <li>
              <a href="<?php echo esc_url( home_url( '/contacts' ) ); ?>">Контакты</a>
              <code>/contacts</code>
            </li>
            <li>
              <a href="<?php echo esc_url( home_url( '/quiz' ) ); ?>">Квиз «Подбор авто за 1 минуту»</a>
              <code>/quiz</code>
            </li>
            <li>
              <a href="<?php echo esc_url( home_url( '/cars/power-up-to-160' ) ); ?>">Подборка: до 160 л.с. (льготный утильсбор)</a>
              <code>/cars/power-up-to-160</code>
            </li>
            <li>
              <a href="<?php echo esc_url( home_url( '/sitemap' ) ); ?>">Карта сайта (этот файл)</a>
              <code>/sitemap</code>
            </li>
          </ul>

          <h2>Статьи блога</h2>
          <?php
          $sitemap_blog_query = autoimport_get_blog_posts_query( -1 );
          if ( $sitemap_blog_query->have_posts() ) :
            ?>
            <ul class="sitemap-list">
              <?php
              while ( $sitemap_blog_query->have_posts() ) :
                $sitemap_blog_query->the_post();
                ?>
                <li>
                  <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </li>
              <?php endwhile; ?>
              <?php wp_reset_postdata(); ?>
            </ul>
          <?php endif; ?>
        </div>
      </section>
