<?php
/** Static markup from about.html */
if ( ! defined( 'ABSPATH' ) ) { exit; }
$autoimport_page_meta = array( 'title' => 'О компании — AutoImport', 'description' => null, 'extra_head' => '<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>', 'has_quiz' => false, 'has_swiper' => true );
?>
<section class="page-hero about-hero">
        <div class="container">
          <p class="eyebrow">О компании</p>
          <h1>О компании</h1>
          <p class="subtitle mb-0">
            Мы занимаемся подбором, покупкой и доставкой автомобилей из Кореи, Китая, Европы и США. Наша задача - сделать
            этот процесс понятным, безопасным и выгодным для клиента.
          </p>
        </div>
      </section>

      <section class="section section--tight-bottom">
        <div class="container">
          <div class="about-stats">
            <article>
              <strong>&gt;10 лет</strong>
              <span>на рынке</span>
            </article>
            <article>
              <strong>98%</strong>
              <span>успешных сделок</span>
            </article>
            <article>
              <strong>850&nbsp;000&nbsp;₽</strong>
              <span>средняя экономия</span>
            </article>
            <article>
              <strong>30+ городов</strong>
              <span>доставка по РФ</span>
            </article>
          </div>
        </div>
      </section>

      <section class="section section--tight-top">
        <div class="container">
          <div class="section-heading-row">
            <div>
              <p class="eyebrow">Команда</p>
              <h2>Наши сотрудники</h2>
            </div>
          </div>
          <div class="team-slider">
            <div class="swiper team-swiper" data-team-swiper>
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <article class="team-card">
                    <img src="<?php echo esc_url( autoimport_asset_uri( 'assets/family-car.jpg' ) ); ?>" alt="Фото руководителя отдела подбора" loading="lazy" />
                    <div>
                      <h3>Александр</h3>
                      <p>Руководитель отдела подбора</p>
                    </div>
                  </article>
                </div>
                <div class="swiper-slide">
                  <article class="team-card">
                    <img src="<?php echo esc_url( autoimport_asset_uri( 'assets/hyundai-tucson.png' ) ); ?>" alt="Фото менеджера по подбору автомобилей" loading="lazy" />
                    <div>
                      <h3>Мария</h3>
                      <p>Менеджер по подбору</p>
                    </div>
                  </article>
                </div>
                <div class="swiper-slide">
                  <article class="team-card">
                    <img src="<?php echo esc_url( autoimport_asset_uri( 'assets/car-select.avif' ) ); ?>" alt="Фото специалиста по логистике" loading="lazy" />
                    <div>
                      <h3>Игорь</h3>
                      <p>Специалист по логистике</p>
                    </div>
                  </article>
                </div>
                <div class="swiper-slide">
                  <article class="team-card">
                    <img src="<?php echo esc_url( autoimport_asset_uri( 'assets/auto-transport-hero.png' ) ); ?>" alt="Фото специалиста по документам" loading="lazy" />
                    <div>
                      <h3>Екатерина</h3>
                      <p>Специалист по документам</p>
                    </div>
                  </article>
                </div>
                <div class="swiper-slide">
                  <article class="team-card">
                    <img src="<?php echo esc_url( autoimport_asset_uri( 'assets/bmw-x3.jpg' ) ); ?>" alt="Фото менеджера по работе с клиентами" loading="lazy" />
                    <div>
                      <h3>Дмитрий</h3>
                      <p>Менеджер по работе с клиентами</p>
                    </div>
                  </article>
                </div>
                <div class="swiper-slide">
                  <article class="team-card">
                    <img src="<?php echo esc_url( autoimport_asset_uri( 'assets/toyota.webp' ) ); ?>" alt="Фото эксперта по проверке автомобилей" loading="lazy" />
                    <div>
                      <h3>Сергей</h3>
                      <p>Эксперт по проверке авто</p>
                    </div>
                  </article>
                </div>
              </div>
            </div>
            <div class="team-slider__controls">
              <button type="button" class="team-slider__btn" data-team-prev aria-label="Предыдущий сотрудник">‹</button>
              <div class="team-slider__pagination" data-team-pagination></div>
              <button type="button" class="team-slider__btn" data-team-next aria-label="Следующий сотрудник">›</button>
            </div>
          </div>
          <div class="country-cta about-cta">
            <h2>Подберём автомобиль под ваш бюджет</h2>
            <p>Расскажите, что ищете — покажем варианты и рассчитаем стоимость под ключ.</p>
            <button type="button" class="btn btn--primary" data-open-form data-form-title="Подберём автомобиль под ваш бюджет" data-form-source="Страница / О компании" data-form-button-text="Подобрать авто">Подобрать авто</button>
          </div>
        </div>
      </section>
      <section class="section section--tight-top related-blog">
        <div class="container">
          <div class="section-heading-row">
            <div>
              <p class="eyebrow">Блог</p>
              <h2>Полезные статьи</h2>
            </div>
            <p>Разборы по странам, бюджету и выбору автомобиля.</p>
          </div>
          <div class="related-blog__grid">
            <a class="related-blog__card" href="<?php echo esc_url( home_url( '/blog/kak-kupit-avto-korei' ) ); ?>">Как купить авто из Кореи<span>Читать статью</span></a>
            <a class="related-blog__card" href="<?php echo esc_url( home_url( '/blog/kak-kupit-avto-kitaya' ) ); ?>">Как купить авто из Китая<span>Читать статью</span></a>
            <a class="related-blog__card" href="<?php echo esc_url( home_url( '/blog/kak-kupit-avto-evropy' ) ); ?>">Как купить авто из Европы<span>Читать статью</span></a>
            <a class="related-blog__card" href="<?php echo esc_url( home_url( '/blog/kak-kupit-avto-ssha' ) ); ?>">Как купить авто из США<span>Читать статью</span></a>
            <a class="related-blog__card" href="<?php echo esc_url( home_url( '/blog/semeynyy-krossover' ) ); ?>">Как не ошибиться при выборе семейного кроссовера<span>Читать статью</span></a>
            <a class="related-blog__card" href="<?php echo esc_url( home_url( '/blog/luchshie-avto-budget' ) ); ?>">Лучшие авто до 3 / 4 / 5 млн рублей<span>Читать статью</span></a>
            <a class="related-blog__card" href="<?php echo esc_url( home_url( '/blog/kitayskie-gibridy' ) ); ?>">Что важно знать про китайские гибриды<span>Читать статью</span></a>
          </div>
          <div class="related-blog__actions">
            <a class="btn btn--outline" href="<?php echo esc_url( home_url( '/blog' ) ); ?>">Все статьи</a>
          </div>
        </div>
      </section>
