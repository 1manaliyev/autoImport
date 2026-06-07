<?php
/** Static markup from documents.html */
if ( ! defined( 'ABSPATH' ) ) { exit; }
$autoimport_page_meta = array( 'title' => 'Документы и сертификаты — AutoImport', 'description' => null, 'extra_head' => '<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>', 'has_quiz' => false, 'has_swiper' => true );
?>
<section class="page-hero documents-hero">
        <div class="container">
          <p class="eyebrow">Документы</p>
          <h1>Документы и подтверждения</h1>
          <p class="subtitle mb-0">
            Реквизиты, образец договора, официальные документы компании и сертификаты. Все изображения увеличиваются при
            клике.
          </p>
        </div>
      </section>

      <section class="section">
        <div class="container">
          <div class="documents-slider">
            <div class="swiper documents-swiper" data-documents-swiper>
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <article class="document-card">
                    <button class="document-card__preview" type="button" data-review-lightbox>
                      <img src="<?php echo esc_url( autoimport_asset_uri( 'assets/auto-transport-hero.png' ) ); ?>" alt="Реквизиты компании" loading="lazy" />
                    </button>
                    <div>
                      <span>Реквизиты</span>
                      <h2>Реквизиты компании</h2>
                      <p>Карточка компании, ИНН, ОГРН, юридический адрес и банковские реквизиты.</p>
                    </div>
                  </article>
                </div>
                <div class="swiper-slide">
                  <article class="document-card">
                    <button class="document-card__preview" type="button" data-review-lightbox>
                      <img src="<?php echo esc_url( autoimport_asset_uri( 'assets/car-select.avif' ) ); ?>" alt="Образец договора" loading="lazy" />
                    </button>
                    <div>
                      <span>Договор</span>
                      <h2>Образец договора</h2>
                      <p>Пример договора на подбор, покупку и доставку автомобиля под ключ.</p>
                    </div>
                  </article>
                </div>
                <div class="swiper-slide">
                  <article class="document-card">
                    <button class="document-card__preview" type="button" data-review-lightbox>
                      <img src="<?php echo esc_url( autoimport_asset_uri( 'assets/family-car.jpg' ) ); ?>" alt="Официальные документы компании" loading="lazy" />
                    </button>
                    <div>
                      <span>Компания</span>
                      <h2>Официальные документы</h2>
                      <p>Регистрационные и подтверждающие документы компании.</p>
                    </div>
                  </article>
                </div>
                <div class="swiper-slide">
                  <article class="document-card">
                    <button class="document-card__preview" type="button" data-review-lightbox>
                      <img src="<?php echo esc_url( autoimport_asset_uri( 'assets/hyundai-tucson.png' ) ); ?>" alt="Сертификаты и разрешительные документы" loading="lazy" />
                    </button>
                    <div>
                      <span>Сертификаты</span>
                      <h2>Сертификаты / разрешения</h2>
                      <p>Сертификаты и разрешительные документы, если они есть.</p>
                    </div>
                  </article>
                </div>
                <div class="swiper-slide">
                  <article class="document-card">
                    <button class="document-card__preview" type="button" data-review-lightbox>
                      <img src="<?php echo esc_url( autoimport_asset_uri( 'assets/bmw-x3.jpg' ) ); ?>" alt="Таможенные документы" loading="lazy" />
                    </button>
                    <div>
                      <span>Таможня</span>
                      <h2>Таможенная декларация</h2>
                      <p>Образец ГТД и сопроводительные документы при ввозе автомобиля в РФ.</p>
                    </div>
                  </article>
                </div>
                <div class="swiper-slide">
                  <article class="document-card">
                    <button class="document-card__preview" type="button" data-review-lightbox>
                      <img src="<?php echo esc_url( autoimport_asset_uri( 'assets/toyota.webp' ) ); ?>" alt="ПТС и СБКТС" loading="lazy" />
                    </button>
                    <div>
                      <span>Регистрация</span>
                      <h2>ПТС и СБКТС</h2>
                      <p>Пример комплекта для постановки автомобиля на учёт после растаможки.</p>
                    </div>
                  </article>
                </div>
              </div>
            </div>
            <div class="documents-slider__controls">
              <button type="button" class="documents-slider__btn" data-documents-prev aria-label="Предыдущий документ">‹</button>
              <div class="documents-slider__pagination" data-documents-pagination></div>
              <button type="button" class="documents-slider__btn" data-documents-next aria-label="Следующий документ">›</button>
            </div>
          </div>
          <div class="country-cta documents-cta">
            <h2>Нужна консультация по документам?</h2>
            <p>Ответим на вопросы по договору, таможне и комплекту бумаг при покупке.</p>
            <button type="button" class="btn btn--primary" data-open-form data-form-title="Ответим на ваш вопрос" data-form-type="Консультация" data-form-source="Страница / Документы" data-form-button-text="Получить консультацию">Получить консультацию</button>
          </div>
        </div>
      </section>
      <section class="section related-blog">
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
