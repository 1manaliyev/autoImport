<?php
/** Static markup from reviews.html */
if ( ! defined( 'ABSPATH' ) ) { exit; }
$autoimport_page_meta = array( 'title' => 'Отзывы — AutoImport', 'description' => null, 'extra_head' => '', 'has_quiz' => false, 'has_swiper' => false );
?>
<section class="page-hero reviews-hero">
        <div class="container">
          <p class="eyebrow">Отзывы</p>
          <h1>Что говорят клиенты после получения автомобиля</h1>
          <p class="subtitle mb-0">
            Здесь можно выводить общий рейтинг, отзывы с площадок, видео, скриншоты переписок и текстовые отзывы.
          </p>
        </div>
      </section>

      <section class="section">
        <div class="container">
          <div class="reviews-summary">
            <div class="reviews-rating">
              <strong>4.9</strong>
              <span>общий рейтинг</span>
              <p>на основе отзывов из Яндекса, 2ГИС, Google и соцсетей</p>
            </div>
            <div class="reviews-count">
              <strong>120+</strong>
              <span>отзывов</span>
              <p>пример значения, редактируется в админке</p>
            </div>
          </div>

          <div class="reviews-section">
            <div class="section-heading-row">
              <div>
                <p class="eyebrow">Видео</p>
                <h2>Видеоотзывы</h2>
              </div>
              <p>Блок для видеоотзывов клиентов после получения автомобиля.</p>
            </div>
            <div class="video-reviews">
              <article class="video-review">
                <div class="video-review__media">
                  <video controls preload="metadata" poster="assets/auto-transport-hero.png">
                    <source src="<?php echo esc_url( autoimport_asset_uri( 'assets/reviews/video-review-1.mp4' ) ); ?>" type="video/mp4" />
                    Ваш браузер не поддерживает воспроизведение видео.
                  </video>
                </div>
                <h3>Видеоотзыв после получения автомобиля</h3>
                <p>Клиент рассказывает о подборе, оплате и доставке автомобиля.</p>
              </article>
              <article class="video-review">
                <div class="video-review__media">
                  <video controls preload="metadata" poster="assets/car-select.avif">
                    <source src="<?php echo esc_url( autoimport_asset_uri( 'assets/reviews/video-review-2.mp4' ) ); ?>" type="video/mp4" />
                    Ваш браузер не поддерживает воспроизведение видео.
                  </video>
                </div>
                <h3>Выдача автомобиля клиенту</h3>
                <p>Видео с моментом получения авто и коротким отзывом владельца.</p>
              </article>
              <article class="video-review review-extra is-hidden">
                <div class="video-review__media">
                  <video controls preload="metadata" poster="assets/auto-transport-hero.png">
                    <source src="<?php echo esc_url( autoimport_asset_uri( 'assets/reviews/video-review-3.mp4' ) ); ?>" type="video/mp4" />
                    Ваш браузер не поддерживает воспроизведение видео.
                  </video>
                </div>
                <h3>Отзыв о дистанционной покупке</h3>
                <p>Клиент делится опытом покупки автомобиля без визита в офис.</p>
              </article>
              <article class="video-review review-extra is-hidden">
                <div class="video-review__media">
                  <video controls preload="metadata" poster="assets/car-select.avif">
                    <source src="<?php echo esc_url( autoimport_asset_uri( 'assets/reviews/video-review-4.mp4' ) ); ?>" type="video/mp4" />
                    Ваш браузер не поддерживает воспроизведение видео.
                  </video>
                </div>
                <h3>Отзыв после доставки</h3>
                <p>Короткое видео после получения автомобиля в своём городе.</p>
              </article>
            </div>
            <div class="reviews-more">
              <button class="btn btn--outline" type="button" data-review-show-more>Смотреть ещё видеоотзывы</button>
            </div>
          </div>

          <div class="reviews-section client-reviews" data-client-reviews>
            <h2 class="client-reviews__title">Отзывы наших клиентов</h2>
            <div class="client-reviews__toolbar">
              <div class="client-reviews__summary">
                <strong>4.9</strong>
                <span>из 5</span>
                <p>На основе 120+ оценок</p>
              </div>
              <div class="client-reviews__filters" role="tablist" aria-label="Фильтр отзывов по площадкам">
                <button type="button" class="client-reviews__filter is-active" data-review-filter="all" role="tab" aria-selected="true">Все</button>
                <button type="button" class="client-reviews__filter" data-review-filter="yandex" role="tab" aria-selected="false">Яндекс <span>4.9</span></button>
                <button type="button" class="client-reviews__filter" data-review-filter="2gis" role="tab" aria-selected="false">2ГИС <span>5.0</span></button>
                <button type="button" class="client-reviews__filter" data-review-filter="google" role="tab" aria-selected="false">Google <span>4.8</span></button>
                <button type="button" class="client-reviews__filter" data-review-filter="social" role="tab" aria-selected="false">Соцсети</button>
              </div>
            </div>
            <div class="client-reviews__grid">
              <article class="client-review-card" data-review-platform="yandex">
                <div class="client-review-card__head">
                  <span class="client-review-card__avatar" aria-hidden="true">А</span>
                  <div class="client-review-card__meta">
                    <strong>Алексей Морозов</strong>
                    <time datetime="2026-03-12">12 марта 2026</time>
                  </div>
                  <span class="client-review-card__platform client-review-card__platform--yandex">Яндекс</span>
                </div>
                <p class="client-review-card__text">Привезли Hyundai Tucson из Кореи за 38 дней. Все этапы прозрачные: сначала расчёт, потом проверка, только после этого выкуп. Машина пришла в том виде, как на фото.</p>
              </article>
              <article class="client-review-card" data-review-platform="2gis">
                <div class="client-review-card__head">
                  <span class="client-review-card__avatar" aria-hidden="true">Е</span>
                  <div class="client-review-card__meta">
                    <strong>Екатерина Соколова</strong>
                    <time datetime="2026-02-28">28 февраля 2026</time>
                  </div>
                  <span class="client-review-card__platform client-review-card__platform--2gis">2ГИС</span>
                </div>
                <p class="client-review-card__text">Боялась покупать авто дистанционно, но менеджер на связи был постоянно. Прислали видео с проверки, помогли с таможней и доставкой до Казани.</p>
              </article>
              <article class="client-review-card" data-review-platform="google">
                <div class="client-review-card__head">
                  <span class="client-review-card__avatar" aria-hidden="true">Д</span>
                  <div class="client-review-card__meta">
                    <strong>Дмитрий Кузнецов</strong>
                    <time datetime="2026-02-15">15 февраля 2026</time>
                  </div>
                  <span class="client-review-card__platform client-review-card__platform--google">Google</span>
                </div>
                <p class="client-review-card__text">Сравнивал Geely Monjaro с дилерами в РФ — через импорт вышло заметно выгоднее. Договор понятный, без скрытых доплат в процессе.</p>
              </article>
              <article class="client-review-card" data-review-platform="social">
                <div class="client-review-card__head">
                  <span class="client-review-card__avatar" aria-hidden="true">М</span>
                  <div class="client-review-card__meta">
                    <strong>Марина Волкова</strong>
                    <time datetime="2026-01-30">30 января 2026</time>
                  </div>
                  <span class="client-review-card__platform client-review-card__platform--social">ВКонтакте</span>
                </div>
                <p class="client-review-card__text">Спасибо за сопровождение сделки под ключ. Получили Kia Sportage, всё оформили, привезли в наш город — осталось только забрать ключи.</p>
              </article>
              <article class="client-review-card" data-review-platform="yandex">
                <div class="client-review-card__head">
                  <span class="client-review-card__avatar" aria-hidden="true">И</span>
                  <div class="client-review-card__meta">
                    <strong>Игорь Панов</strong>
                    <time datetime="2026-01-18">18 января 2026</time>
                  </div>
                  <span class="client-review-card__platform client-review-card__platform--yandex">Яндекс</span>
                </div>
                <p class="client-review-card__text">Заказывал BMW X3 из Европы. Понравилось, что до оплаты показали полный расчёт и историю авто. Сроки уложились в обещанные.</p>
              </article>
              <article class="client-review-card" data-review-platform="2gis">
                <div class="client-review-card__head">
                  <span class="client-review-card__avatar" aria-hidden="true">О</span>
                  <div class="client-review-card__meta">
                    <strong>Ольга Романова</strong>
                    <time datetime="2025-12-22">22 декабря 2025</time>
                  </div>
                  <span class="client-review-card__platform client-review-card__platform--2gis">2ГИС</span>
                </div>
                <p class="client-review-card__text">Второй автомобиль берём через AutoImport. Как и в первый раз — чётко, без сюрпризов по деньгам, с нормальной коммуникацией на каждом шаге.</p>
              </article>
              <article class="client-review-card review-extra is-hidden" data-review-platform="google">
                <div class="client-review-card__head">
                  <span class="client-review-card__avatar" aria-hidden="true">С</span>
                  <div class="client-review-card__meta">
                    <strong>Сергей Никифоров</strong>
                    <time datetime="2025-12-05">5 декабря 2025</time>
                  </div>
                  <span class="client-review-card__platform client-review-card__platform--google">Google</span>
                </div>
                <p class="client-review-card__text">Брал Toyota Camry из США. Долго выбирали вариант по аукционам, но ребята терпеливо присылали отчёты, пока не нашли нужную комплектацию.</p>
              </article>
              <article class="client-review-card review-extra is-hidden" data-review-platform="social">
                <div class="client-review-card__head">
                  <span class="client-review-card__avatar" aria-hidden="true">Н</span>
                  <div class="client-review-card__meta">
                    <strong>Наталья Громова</strong>
                    <time datetime="2025-11-19">19 ноября 2025</time>
                  </div>
                  <span class="client-review-card__platform client-review-card__platform--social">Telegram</span>
                </div>
                <p class="client-review-card__text">Оставила заявку в Telegram, дальше всё вела переписка. Подобрали кроссовер из Китая, расчёт не меняли после согласования — рекомендую.</p>
              </article>
              <article class="client-review-card review-extra is-hidden" data-review-platform="yandex">
                <div class="client-review-card__head">
                  <span class="client-review-card__avatar" aria-hidden="true">В</span>
                  <div class="client-review-card__meta">
                    <strong>Виктор Лебедев</strong>
                    <time datetime="2025-11-02">2 ноября 2025</time>
                  </div>
                  <span class="client-review-card__platform client-review-card__platform--yandex">Яндекс</span>
                </div>
                <p class="client-review-card__text">Нужен был семейный минивэн из Кореи. Помогли с выбором, проверкой и логистикой до Новосибирска. Итоговая цена совпала с первоначальным расчётом.</p>
              </article>
            </div>
            <div class="reviews-more">
              <button class="btn btn--outline" type="button" data-review-show-more>Показать ещё отзывы</button>
            </div>
          </div>

          <div class="reviews-section">
            <p class="eyebrow">Переписки</p>
            <h2>Скриншоты переписок</h2>
            <div class="message-strip">
              <article class="message-card">
                <button class="message-card__shot" type="button" data-review-lightbox>
                  <img src="<?php echo esc_url( autoimport_asset_uri( 'assets/auto-transport-hero.png' ) ); ?>" alt="Временный скрин переписки с клиентом" loading="lazy" />
                </button>
                <span>Переписка с клиентом</span>
              </article>
              <article class="message-card">
                <button class="message-card__shot" type="button" data-review-lightbox>
                  <img src="<?php echo esc_url( autoimport_asset_uri( 'assets/auto-transport-hero.png' ) ); ?>" alt="Временный скрин переписки по доставке" loading="lazy" />
                </button>
                <span>Переписка по доставке</span>
              </article>
              <article class="message-card">
                <button class="message-card__shot" type="button" data-review-lightbox>
                  <img src="<?php echo esc_url( autoimport_asset_uri( 'assets/auto-transport-hero.png' ) ); ?>" alt="Временный скрин переписки по подбору" loading="lazy" />
                </button>
                <span>Переписка по подбору</span>
              </article>
              <article class="message-card review-extra is-hidden">
                <button class="message-card__shot" type="button" data-review-lightbox>
                  <img src="<?php echo esc_url( autoimport_asset_uri( 'assets/auto-transport-hero.png' ) ); ?>" alt="Временный скрин переписки по оплате" loading="lazy" />
                </button>
                <span>Переписка по оплате</span>
              </article>
              <article class="message-card review-extra is-hidden">
                <button class="message-card__shot" type="button" data-review-lightbox>
                  <img src="<?php echo esc_url( autoimport_asset_uri( 'assets/auto-transport-hero.png' ) ); ?>" alt="Временный скрин переписки после получения автомобиля" loading="lazy" />
                </button>
                <span>Переписка после получения авто</span>
              </article>
              <article class="message-card review-extra is-hidden">
                <button class="message-card__shot" type="button" data-review-lightbox>
                  <img src="<?php echo esc_url( autoimport_asset_uri( 'assets/auto-transport-hero.png' ) ); ?>" alt="Временный скрин переписки с отзывом клиента" loading="lazy" />
                </button>
                <span>Отзыв в переписке</span>
              </article>
            </div>
            <div class="reviews-more">
              <button class="btn btn--outline" type="button" data-review-show-more>Смотреть ещё скриншоты</button>
            </div>
          </div>

          <div class="reviews-section">
            <p class="eyebrow">Текстовые отзывы</p>
            <h2>Отзывы клиентов</h2>
            <div class="text-reviews">
              <article>
                <p>“Прошли под ключ покупку авто из Кореи за 35 дней. Все расходы были понятны заранее, машину получили в своём городе.”</p>
                <strong>Клиент AutoImport</strong>
              </article>
              <article>
                <p>“Сравнивали Geely Monjaro с рынком РФ. Через импорт получилось выгоднее, при этом комплектация лучше.”</p>
                <strong>Клиент AutoImport</strong>
              </article>
              <article>
                <p>“Боялся удалённой покупки, но по каждому этапу были фото, видео и объяснения. Всё прошло спокойно.”</p>
                <strong>Клиент AutoImport</strong>
              </article>
              <article class="review-extra is-hidden">
                <p>“Понравилось, что заранее показали полный расчёт и не меняли условия в процессе.”</p>
                <strong>Клиент AutoImport</strong>
              </article>
              <article class="review-extra is-hidden">
                <p>“Машину проверили до выкупа, прислали фото и видео. Получил именно тот вариант, который согласовали.”</p>
                <strong>Клиент AutoImport</strong>
              </article>
              <article class="review-extra is-hidden">
                <p>“Доставку до города организовали без моего участия, оставалось только приехать на получение.”</p>
                <strong>Клиент AutoImport</strong>
              </article>
            </div>
            <div class="reviews-more">
              <button class="btn btn--outline" type="button" data-review-show-more>Смотреть ещё текстовые отзывы</button>
            </div>
          </div>
        </div>
      </section>
      <section class="section">
        <div class="container country-cta">
          <h2>Готовы подобрать автомобиль?</h2>
          <p>Покажем реальные варианты под ваш запрос и рассчитаем стоимость под ключ.</p>
          <button type="button" class="btn btn--primary" data-open-form data-form-title="Покажем реальные варианты под ваш запрос" data-form-source="Страница / Отзывы" data-form-button-text="Получить варианты">Получить варианты</button>
        </div>
      </section>
      <?php get_template_part( 'template-parts/related', 'blog' ); ?>
