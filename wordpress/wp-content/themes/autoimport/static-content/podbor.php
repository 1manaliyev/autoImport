<?php
/** Static markup from podbor.html */
if ( ! defined( 'ABSPATH' ) ) { exit; }
$autoimport_page_meta = array( 'title' => 'Подбор авто под ключ — AutoImport', 'description' => null, 'extra_head' => '', 'has_quiz' => false, 'has_swiper' => false );
?>
<section class="page-hero">
        <div class="container">
          <p class="eyebrow">Подбор под ключ</p>
          <h1>Вы рассказываете, какой автомобиль нужен</h1>
          <p class="subtitle mb-0">
            Мы берём на себя поиск, проверку, покупку, логистику, оформление и передачу автомобиля.
          </p>
          <div class="btn-row">
            <button type="button" class="btn btn--primary" data-open-form data-form-title="Подберём автомобиль под ваш бюджет" data-form-source="Страница / Подбор / Hero" data-form-button-text="Подобрать авто">
              Подобрать авто
            </button>
            <a class="btn btn--outline" href="<?php echo esc_url( home_url( '/catalog' ) ); ?>">Смотреть примеры авто</a>
          </div>
          <div class="page-hero__highlights">
            <div class="hero-bullet">
              <span class="hero-bullet__icon ui-icon" aria-hidden="true">
                <svg viewBox="0 0 24 24"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8Z"/><path d="M14 2v6h6M8 13h8M8 17h5"/></svg>
              </span>
              <p>1 заявка на весь процесс</p>
            </div>
            <div class="hero-bullet">
              <span class="hero-bullet__icon ui-icon" aria-hidden="true">
                <svg viewBox="0 0 24 24"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10Z"/><path d="m9 12 2 2 4-4"/></svg>
              </span>
              <p>Проверяем авто до покупки</p>
            </div>
            <div class="hero-bullet">
              <span class="hero-bullet__icon ui-icon" aria-hidden="true">
                <svg viewBox="0 0 24 24"><path d="M19 17h2c.6 0 1-.4 1-1v-3c0-.9-.7-1.7-1.5-1.9L18 10l-2.7-5.4A2 2 0 0 0 13.7 3H10.3a2 2 0 0 0-1.8 1.1L6 10l-2.5 1.1C2.7 11.3 2 12.1 2 13v3c0 .6.4 1 1 1h2"/><circle cx="7" cy="17" r="2"/><circle cx="17" cy="17" r="2"/></svg>
              </span>
              <p>Под ключ — до передачи авто</p>
            </div>
          </div>
        </div>
      </section>

      <section class="section">
        <div class="container">
          <p class="eyebrow">Сравнение</p>
          <h2>Самостоятельно или с сопровождением</h2>
          <div class="split-2 fit-grid">
            <div class="fit-card fit-card--no">
              <div class="fit-card__head">
                <span class="fit-card__icon" aria-hidden="true">−</span>
                <h3>Самостоятельно</h3>
              </div>
              <ul>
                <li>риск ошибки при выборе</li>
                <li>сложная логистика</li>
                <li>непредсказуемые расходы</li>
                <li>нет сопровождения</li>
              </ul>
            </div>
            <div class="fit-card fit-card--yes">
              <div class="fit-card__head">
                <span class="fit-card__icon" aria-hidden="true">✓</span>
                <h3>С нами</h3>
              </div>
              <ul>
                <li>проверка до покупки</li>
                <li>понятная схема сделки</li>
                <li>расчёт всех расходов заранее</li>
                <li>сопровождение до получения авто</li>
              </ul>
            </div>
          </div>
          <div class="country-cta">
            <h2>Оставьте заявку на подбор под ключ</h2>
            <p>Расскажите, какой автомобиль нужен, а мы подберём варианты и покажем понятный расчёт под ваш бюджет.</p>
            <button type="button" class="btn btn--primary" data-open-form data-form-title="Покажем реальные варианты под ваш запрос" data-form-source="Страница / Подбор / CTA" data-form-button-text="Получить варианты">
              Получить варианты
            </button>
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
