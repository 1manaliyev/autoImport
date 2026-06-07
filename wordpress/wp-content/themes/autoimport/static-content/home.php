<?php
/** Static markup from index.html */
if ( ! defined( 'ABSPATH' ) ) { exit; }
$autoimport_page_meta = array( 'title' => 'Импорт автомобилей из Кореи, Китая, Европы и США под ключ', 'description' => 'Подбор, проверка, выкуп и доставка автомобилей под ключ. Экономия от 500 000 до 1 500 000 ₽ по сравнению с рынком РФ.', 'extra_head' => '', 'has_quiz' => false, 'has_swiper' => false );
?>
<!-- 3.1 Первый экран -->
      <section class="hero">
        <div class="container hero__grid">
          <div>
            <h1>
              Автомобили из Кореи, Китая, Европы и США дешевле рынка РФ на
              500&nbsp;000 – 1&nbsp;500&nbsp;000&nbsp;₽
            </h1>
            <p class="subtitle mb-0">
              Подберём автомобиль под ваш бюджет — от практичных семейных до
              премиальных и современных моделей за 30–60 дней под ключ
            </p>
            <div class="btn-row" style="margin-top: 24px">
              <button
                type="button"
                class="btn btn--primary"
                data-open-form
                data-form-title="Подберём автомобиль под ваш бюджет"
                data-form-source="Главная / Первый экран"
                data-form-button-text="Подобрать авто"
              >
                Подобрать авто под мой бюджет
              </button>
              <button
                type="button"
                class="btn btn--outline"
                data-open-form
                data-form-title="Рассчитаем стоимость автомобиля под ключ"
                data-form-type="Расчёт"
                data-form-source="Главная / Первый экран"
                data-form-button-text="Рассчитать стоимость"
              >
                Рассчитать стоимость авто
              </button>
            </div>
          </div>
          <div class="hero__media">
            <img
              src="<?php echo esc_url( autoimport_asset_uri( 'assets/auto-transport-hero.png' ) ); ?>"
              width="900"
              height="675"
              alt="Автомобиль на транспортере — логистика и доставка"
              loading="eager"
            />
          </div>
          <div class="hero__bullets">
              <div class="hero-bullet">
                <span class="hero-bullet__icon" aria-hidden="true">
                  <svg viewBox="0 0 24 24" focusable="false">
                    <path d="M2.5 12s3.5-6 9.5-6 9.5 6 9.5 6-3.5 6-9.5 6-9.5-6-9.5-6Z" />
                    <circle cx="12" cy="12" r="2.5" />
                  </svg>
                </span>
                <p>Вы видите автомобиль до покупки</p>
              </div>
              <div class="hero-bullet">
                <span class="hero-bullet__icon" aria-hidden="true">
                  <svg viewBox="0 0 24 24" focusable="false">
                    <path d="M5 19V10" />
                    <path d="M12 19V5" />
                    <path d="M19 19v-7" />
                    <path d="M3 19h18" />
                  </svg>
                </span>
                <p>Понимаете все расходы заранее</p>
              </div>
              <div class="hero-bullet">
                <span class="hero-bullet__icon" aria-hidden="true">
                  <svg viewBox="0 0 24 24" focusable="false">
                    <path d="M20 6 9 17l-5-5" />
                  </svg>
                </span>
                <p>Контролируете каждый этап сделки</p>
              </div>
              <div class="hero-bullet">
                <span class="hero-bullet__icon" aria-hidden="true">
                  <svg viewBox="0 0 24 24" focusable="false">
                    <path d="M4 15h16l-1.5-5.5A2 2 0 0 0 16.6 8H7.4a2 2 0 0 0-1.9 1.5L4 15Z" />
                    <path d="M5 15v3" />
                    <path d="M19 15v3" />
                    <circle cx="7" cy="18" r="1.5" />
                    <circle cx="17" cy="18" r="1.5" />
                  </svg>
                </span>
                <p>Получаете авто в своём городе</p>
              </div>
            </div>
        </div>
      </section>

      <!-- 4.5 Марки на главной (после первого экрана) -->
      <section class="section section--tight-top brands-section" id="brands">
        <div class="container">
          <p class="eyebrow">Каталог</p>
          <h2>Выберите марку автомобиля</h2>
          <p class="subtitle">
            Нажмите на марку — откроется каталог с фильтром (после интеграции в
            WordPress).
          </p>
          <div class="brands-grid">
            <a class="brand-tile" href="#" data-brand-filter="Kia">
              <span class="brand-logo" aria-hidden="true">
                <img class="brand-logo__img brand-logo__img--base" src="<?php echo esc_url( autoimport_asset_uri( 'assets/car-icons/KIA.png' ) ); ?>" alt="" />
                <img class="brand-logo__img brand-logo__img--gold" src="<?php echo esc_url( autoimport_asset_uri( 'assets/car-icons/KIA-gold.png' ) ); ?>" alt="" />
              </span>
            </a>
            <a class="brand-tile" href="#" data-brand-filter="Kia">
              <span class="brand-logo" aria-hidden="true">
                <img class="brand-logo__img brand-logo__img--base" src="<?php echo esc_url( autoimport_asset_uri( 'assets/car-icons/huyndai.png' ) ); ?>" alt="" />
                <img class="brand-logo__img brand-logo__img--gold" src="<?php echo esc_url( autoimport_asset_uri( 'assets/car-icons/huyndai-gold.png' ) ); ?>" alt="" />
              </span>
            </a>
            <a class="brand-tile" href="#" data-brand-filter="Kia">
              <span class="brand-logo" aria-hidden="true">
                <img class="brand-logo__img brand-logo__img--base" src="<?php echo esc_url( autoimport_asset_uri( 'assets/car-icons/toyota.png' ) ); ?>" alt="" />
                <img class="brand-logo__img brand-logo__img--gold" src="<?php echo esc_url( autoimport_asset_uri( 'assets/car-icons/toyota-gold.png' ) ); ?>" alt="" />
              </span>
            </a>
            <a class="brand-tile" href="#" data-brand-filter="Kia">
              <span class="brand-logo" aria-hidden="true">
                <img class="brand-logo__img brand-logo__img--base" src="<?php echo esc_url( autoimport_asset_uri( 'assets/car-icons/bmw.png' ) ); ?>" alt="" />
                <img class="brand-logo__img brand-logo__img--gold" src="<?php echo esc_url( autoimport_asset_uri( 'assets/car-icons/bmw-gold.png' ) ); ?>" alt="" />
              </span>
            </a>
            <a class="brand-tile" href="#" data-brand-filter="Kia">
              <span class="brand-logo" aria-hidden="true">
                <img class="brand-logo__img brand-logo__img--base" src="<?php echo esc_url( autoimport_asset_uri( 'assets/car-icons/mercedes.png' ) ); ?>" alt="" />
                <img class="brand-logo__img brand-logo__img--gold" src="<?php echo esc_url( autoimport_asset_uri( 'assets/car-icons/mercedes-gold.png' ) ); ?>" alt="" />
              </span>
            </a>
            <a class="brand-tile" href="#" data-brand-filter="Kia">
              <span class="brand-logo" aria-hidden="true">
                <img class="brand-logo__img brand-logo__img--base" src="<?php echo esc_url( autoimport_asset_uri( 'assets/car-icons/volkswagen.png' ) ); ?>" alt="" />
                <img class="brand-logo__img brand-logo__img--gold" src="<?php echo esc_url( autoimport_asset_uri( 'assets/car-icons/volkswagen-gold.png' ) ); ?>" alt="" />
              </span>
            </a>
            <a class="brand-tile" href="#" data-brand-filter="Kia">
              <span class="brand-logo" aria-hidden="true">
                <img class="brand-logo__img brand-logo__img--base" src="<?php echo esc_url( autoimport_asset_uri( 'assets/car-icons/audi.png' ) ); ?>" alt="" />
                <img class="brand-logo__img brand-logo__img--gold" src="<?php echo esc_url( autoimport_asset_uri( 'assets/car-icons/audi-gold.png' ) ); ?>" alt="" />
              </span>
            </a>
            <a class="brand-tile" href="#" data-brand-filter="Kia">
              <span class="brand-logo" aria-hidden="true">
                <img class="brand-logo__img brand-logo__img--base" src="<?php echo esc_url( autoimport_asset_uri( 'assets/car-icons/lexus.png' ) ); ?>" alt="" />
                <img class="brand-logo__img brand-logo__img--gold" src="<?php echo esc_url( autoimport_asset_uri( 'assets/car-icons/lexus-gold.png' ) ); ?>" alt="" />
              </span>
            </a>
            <a class="brand-tile" href="#" data-brand-filter="Kia">
              <span class="brand-logo" aria-hidden="true">
                <img class="brand-logo__img brand-logo__img--base" src="<?php echo esc_url( autoimport_asset_uri( 'assets/car-icons/honda.png' ) ); ?>" alt="" />
                <img class="brand-logo__img brand-logo__img--gold" src="<?php echo esc_url( autoimport_asset_uri( 'assets/car-icons/honda-gold.png' ) ); ?>" alt="" />
              </span>
            </a>
            <a class="brand-tile" href="#" data-brand-filter="Kia">
              <span class="brand-logo" aria-hidden="true">
                <img class="brand-logo__img brand-logo__img--base" src="<?php echo esc_url( autoimport_asset_uri( 'assets/car-icons/Nissan.png' ) ); ?>" alt="" />
                <img class="brand-logo__img brand-logo__img--gold" src="<?php echo esc_url( autoimport_asset_uri( 'assets/car-icons/Nissan-gold.png' ) ); ?>" alt="" />
              </span>
            </a>
            <a class="brand-tile" href="#" data-brand-filter="Kia">
              <span class="brand-logo" aria-hidden="true">
                <img class="brand-logo__img brand-logo__img--base" src="<?php echo esc_url( autoimport_asset_uri( 'assets/car-icons/mazda.png' ) ); ?>" alt="" />
                <img class="brand-logo__img brand-logo__img--gold" src="<?php echo esc_url( autoimport_asset_uri( 'assets/car-icons/mazda-gold.png' ) ); ?>" alt="" />
              </span>
            </a>
            <a class="brand-tile" href="#" data-brand-filter="Kia">
              <span class="brand-logo" aria-hidden="true">
                <img class="brand-logo__img brand-logo__img--base" src="<?php echo esc_url( autoimport_asset_uri( 'assets/car-icons/skoda.png' ) ); ?>" alt="" />
                <img class="brand-logo__img brand-logo__img--gold" src="<?php echo esc_url( autoimport_asset_uri( 'assets/car-icons/skoda-gold.png' ) ); ?>" alt="" />
              </span>
            </a>
            <a class="brand-tile" href="#" data-brand-filter="Kia">
              <span class="brand-logo" aria-hidden="true">
                <img class="brand-logo__img brand-logo__img--base" src="<?php echo esc_url( autoimport_asset_uri( 'assets/car-icons/ford.png' ) ); ?>" alt="" />
                <img class="brand-logo__img brand-logo__img--gold" src="<?php echo esc_url( autoimport_asset_uri( 'assets/car-icons/ford-gold.png' ) ); ?>" alt="" />
              </span>
            </a>
            <a class="brand-tile" href="#" data-brand-filter="Kia">
              <span class="brand-logo" aria-hidden="true">
                <img class="brand-logo__img brand-logo__img--base" src="<?php echo esc_url( autoimport_asset_uri( 'assets/car-icons/geely.png' ) ); ?>" alt="" />
                <img class="brand-logo__img brand-logo__img--gold" src="<?php echo esc_url( autoimport_asset_uri( 'assets/car-icons/geely-gold.png' ) ); ?>" alt="" />
              </span>
            </a>
            <a class="brand-tile" href="#" data-brand-filter="Kia">
              <span class="brand-logo" aria-hidden="true">
                <img class="brand-logo__img brand-logo__img--base" src="<?php echo esc_url( autoimport_asset_uri( 'assets/car-icons/changan.png' ) ); ?>" alt="" />
                <img class="brand-logo__img brand-logo__img--gold" src="<?php echo esc_url( autoimport_asset_uri( 'assets/car-icons/changan-gold.png' ) ); ?>" alt="" />
              </span>
            </a>
            <a class="brand-tile" href="#" data-brand-filter="Kia">
              <span class="brand-logo" aria-hidden="true">
                <img class="brand-logo__img brand-logo__img--base" src="<?php echo esc_url( autoimport_asset_uri( 'assets/car-icons/li-auto.png' ) ); ?>" alt="" />
                <img class="brand-logo__img brand-logo__img--gold" src="<?php echo esc_url( autoimport_asset_uri( 'assets/car-icons/li-auto-gold.png' ) ); ?>" alt="" />
              </span>
            </a>
            <a class="brand-tile" href="#" data-brand-filter="Kia">
              <span class="brand-logo" aria-hidden="true">
                <img class="brand-logo__img brand-logo__img--base" src="<?php echo esc_url( autoimport_asset_uri( 'assets/car-icons/zeekr.png' ) ); ?>" alt="" />
                <img class="brand-logo__img brand-logo__img--gold" src="<?php echo esc_url( autoimport_asset_uri( 'assets/car-icons/zeekr-gold.png' ) ); ?>" alt="" />
              </span>
            </a>
            <a class="brand-tile" href="#" data-brand-filter="Kia">
              <span class="brand-logo" aria-hidden="true">
                <img class="brand-logo__img brand-logo__img--base" src="<?php echo esc_url( autoimport_asset_uri( 'assets/car-icons/haval.png' ) ); ?>" alt="" />
                <img class="brand-logo__img brand-logo__img--gold" src="<?php echo esc_url( autoimport_asset_uri( 'assets/car-icons/haval-gold.png' ) ); ?>" alt="" />
              </span>
            </a>
          </div>
        </div>
      </section>

      <!-- 4.6 Баннер подборки до 160 л.с. -->
      <section class="section section--tight-top banner-160-section">
        <div class="container">
          <div class="banner-160">
            <div>
              <span class="banner-160__badge">Льготный утильсбор</span>
              <h3>Автомобили до 160 л.с. с льготным утильсбором</h3>
              <p>
                С 1 декабря 2025 года для автомобилей с мощностью до 160 лошадиных сил сохраняется льготный утильсбор. Это делает их ввоз в Россию максимально выгодным.
              </p>
            </div>
            <a class="btn btn--primary" href="<?php echo esc_url( home_url( '/cars/power-up-to-160' ) ); ?>">Смотреть подборку до 160 л.с.</a>
          </div>
        </div>
      </section>

      <!-- 3.2 Почему рынок РФ проигрывает -->
      <section class="section" id="why-rf">
        <div class="container">
          <h2>Почему на рынке РФ за тот же бюджет часто сложно найти хороший автомобиль</h2>
          <p class="subtitle">
            Многие приходят к покупке из-за границы после попыток найти нормальный
            вариант на рынке РФ
          </p>
          <div class="cards-grid">
            <article class="card">
              <h3>Скрученный пробег</h3>
              <p>Заявлено одно, по факту — совсем другой реальный пробег</p>
            </article>
            <article class="card">
              <h3>Скрытые ДТП</h3>
              <p>Автомобиль выглядит нормально, но был в серьёзных повреждениях</p>
            </article>
            <article class="card">
              <h3>Слабые комплектации</h3>
              <p>За те же деньги — более пустые и старые версии</p>
            </article>
            <article class="card">
              <h3>Цена выше реального качества</h3>
              <p>Платите как за хороший авто, а получаете средний вариант</p>
            </article>
          </div>
          <div class="conclusion-box">
            <p>
              Поэтому всё больше людей выбирают авто из Кореи, Китая, Европы и США —
              там можно взять свежее и лучше без переплаты рынку РФ
            </p>
            <a class="btn btn--primary" href="#economy">Посмотреть реальные примеры экономии</a>
          </div>
        </div>
      </section>

      <!-- 3.3 Почему через нас -->
      <section class="section" style="background: var(--bg-card); border-block: 1px solid var(--border)">
        <div class="container">
          <h2>Понятный и контролируемый процесс покупки</h2>
          <p class="subtitle">
            Вы понимаете, что происходит на каждом этапе — от подбора до получения
            автомобиля
          </p>
          <div class="cards-grid">
            <article class="card">
              <h3>Подбор под бюджет, задачи и реальные условия эксплуатации</h3>
              <p>
                Не предлагаем случайные варианты — работаем под бюджет, цели и
                приоритеты
              </p>
            </article>
            <article class="card">
              <h3>Показываем реальные варианты</h3>
              <p>Вы видите доступные автомобили, а не абстрактные предложения</p>
            </article>
            <article class="card">
              <h3>Объясняем каждый этап</h3>
              <p>Просто и без сложных терминов — что происходит и зачем</p>
            </article>
            <article class="card">
              <h3>Персональный менеджер</h3>
              <p>Можно задать любой вопрос и получить понятный ответ</p>
            </article>
            <article class="card">
              <h3>Без лишней сложности</h3>
              <p>Без лишних действий и непонятных этапов</p>
            </article>
            <article class="card">
              <h3>Доставка в ваш город</h3>
              <p>Получаете автомобиль там, где вам удобно</p>
            </article>
          </div>
        </div>
      </section>

      <!-- 3.4 Подберём под задачу -->
      <section class="section" id="segments">
        <div class="container">
          <h2>Вы получаете автомобиль, который подходит вам, а не просто доступный вариант</h2>
          <p class="subtitle">
            Выберите сценарий — покажем реальные варианты и рассчитаем стоимость под
            ключ
          </p>
          <div class="cards-grid" style="grid-template-columns: repeat(auto-fill, minmax(300px, 1fr))">
            <article class="segment-card">
              <div class="segment-card__img">
                <img src="<?php echo esc_url( autoimport_asset_uri( 'assets/family-car.jpg' ) ); ?>" alt="" loading="lazy" />
              </div>
              <div class="segment-card__body">
                <h3>Семейный автомобиль</h3>
                <p class="mb-0" style="color: var(--text-muted); font-size: 0.95rem">
                  Надёжные и комфортные варианты для семьи
                </p>
                <p class="segment-card__offer">Выгода от 500&nbsp;000&nbsp;₽</p>
                <button type="button" class="btn btn--primary" data-open-segment="family">
                  Получить подборку
                </button>
              </div>
            </article>
            <article class="segment-card">
              <div class="segment-card__img">
                <img src="<?php echo esc_url( autoimport_asset_uri( 'assets/toyota.webp' ) ); ?>" alt="" loading="lazy" />
              </div>
              <div class="segment-card__body">
                <h3>Выгодный вариант без переплаты</h3>
                <p class="mb-0" style="color: var(--text-muted); font-size: 0.95rem">
                  Максимум автомобиля за ваш бюджет
                </p>
                <p class="segment-card__offer">Экономия до 1&nbsp;500&nbsp;000&nbsp;₽</p>
                <button type="button" class="btn btn--primary" data-open-segment="value">
                  Получить подборку
                </button>
              </div>
            </article>
            <article class="segment-card">
              <div class="segment-card__img">
                <img src="<?php echo esc_url( autoimport_asset_uri( 'assets/Lixiang_L7.jpg' ) ); ?>" alt="" loading="lazy" />
              </div>
              <div class="segment-card__body">
                <h3>Современный автомобиль с технологиями</h3>
                <p class="mb-0" style="color: var(--text-muted); font-size: 0.95rem">
                  Свежие модели с максимальной комплектацией
                </p>
                <p class="segment-card__offer">Выгода от 500&nbsp;000&nbsp;₽</p>
                <button type="button" class="btn btn--primary" data-open-segment="modern">
                  Получить подборку
                </button>
              </div>
            </article>
            <article class="segment-card">
              <div class="segment-card__img">
                <img src="<?php echo esc_url( autoimport_asset_uri( 'assets/rolls-royce.jpg' ) ); ?>" alt="" loading="lazy" />
              </div>
              <div class="segment-card__body">
                <h3>Премиум-класс</h3>
                <p class="mb-0" style="color: var(--text-muted); font-size: 0.95rem">
                  Статусные автомобили с минимальным пробегом
                </p>
                <p class="segment-card__offer">Без переплаты рынку РФ</p>
                <button type="button" class="btn btn--primary" data-open-segment="premium">
                  Получить подборку
                </button>
              </div>
            </article>
            <article class="segment-card">
              <div class="segment-card__img">
                <img src="<?php echo esc_url( autoimport_asset_uri( 'assets/Ferrari-Enzo.jpg' ) ); ?>" alt="" loading="lazy" />
              </div>
              <div class="segment-card__body">
                <h3>Мощные и редкие версии</h3>
                <p class="mb-0" style="color: var(--text-muted); font-size: 0.95rem">
                  Авто для эмоций и редких комплектаций
                </p>
                <p class="segment-card__offer">Выгода до 680&nbsp;000&nbsp;₽</p>
                <button type="button" class="btn btn--primary" data-open-segment="power">
                  Получить подборку
                </button>
              </div>
            </article>
            <article class="segment-card">
              <div class="segment-card__img">
                <img src="<?php echo esc_url( autoimport_asset_uri( 'assets/car-select.avif' ) ); ?>" alt="" loading="lazy" />
              </div>
              <div class="segment-card__body">
                <h3>Поможем выбрать автомобиль</h3>
                <p class="mb-0" style="color: var(--text-muted); font-size: 0.95rem">
                  Подбор под задачу и бюджет
                </p>
                <p class="segment-card__offer">Бесплатная консультация</p>
                <button type="button" class="btn btn--outline" data-open-segment="quiz">
                  Пройти квиз
                </button>
              </div>
            </article>
          </div>
        </div>
      </section>

      <!-- 3.5 Как проходит покупка -->
      <section class="section" style="background: var(--bg-card); border-block: 1px solid var(--border)">
        <div class="container">
          <h2>Покупка автомобиля по шагам — с понятными сроками</h2>
          <p class="subtitle">
            Вы заранее понимаете, сколько занимает каждый этап — от заявки до
            получения автомобиля
          </p>
          <div class="steps">
            <article class="step-card">
              <span class="step-card__num">1</span>
              <h3>Заявка и консультация</h3>
              <p>Уточняем бюджет, задачи и параметры автомобиля</p>
              <p class="step-card__term">Срок: до 1 дня</p>
            </article>
            <article class="step-card">
              <span class="step-card__num">2</span>
              <h3>Подбор вариантов</h3>
              <p>Предлагаем реальные автомобили под ваш запрос</p>
              <p class="step-card__term">Срок: до согласования</p>
            </article>
            <article class="step-card">
              <span class="step-card__num">3</span>
              <h3>Проверка автомобиля</h3>
              <p>Проверка состояния, истории и комплектации</p>
              <p class="step-card__term">Срок: 1–2 дня</p>
            </article>
            <article class="step-card">
              <span class="step-card__num">4</span>
              <h3>Согласование и покупка</h3>
              <p>Выкуп только после подтверждения клиента</p>
              <p class="step-card__term">Срок: 1 день</p>
            </article>
            <article class="step-card">
              <span class="step-card__num">5</span>
              <h3>Доставка в РФ</h3>
              <p>Логистика, таможня и контроль этапов</p>
              <p class="step-card__term">Срок: 20–60 дней (США до 80 дней)</p>
            </article>
            <article class="step-card">
              <span class="step-card__num">6</span>
              <h3>Доставка по России</h3>
              <p>Автовоз или контейнер до вашего города</p>
              <p class="step-card__term">Срок: 3–12 дней</p>
            </article>
            <article class="step-card">
              <span class="step-card__num">7</span>
              <h3>Передача автомобиля</h3>
              <p>Передаём авто с полным пакетом документов</p>
              <p class="step-card__term">Срок: 1 день</p>
            </article>
          </div>
          <div class="text-center" style="margin-top: 28px">
            <button
              type="button"
              class="btn btn--primary"
              data-open-form
              data-form-title="Покажем реальные варианты под ваш запрос"
              data-form-source="Главная / Блок 3.5"
              data-form-button-text="Получить варианты"
            >
              Получить варианты
            </button>
          </div>
        </div>
      </section>

      <!-- 3.6 Из чего складывается стоимость -->
      <section class="section">
        <div class="container">
          <h2>Сразу показываем, из чего состоит итоговая цена</h2>
          <div class="cost-cards">
            <div class="cost-card">
              <span class="cost-card__num">01</span>
              <strong>Стоимость авто</strong>
              <p>Цена автомобиля в стране покупки</p>
            </div>
            <div class="cost-card">
              <span class="cost-card__num">02</span>
              <strong>Подбор и проверка</strong>
              <p>Осмотр, история, состояние и комплектация</p>
            </div>
            <div class="cost-card">
              <span class="cost-card__num">03</span>
              <strong>Логистика до России</strong>
              <p>Доставка из страны покупки до РФ</p>
            </div>
            <div class="cost-card">
              <span class="cost-card__num">04</span>
              <strong>Таможня</strong>
              <p>Пошлины, утильсбор и обязательные платежи</p>
            </div>
            <div class="cost-card">
              <span class="cost-card__num">05</span>
              <strong>Документы</strong>
              <p>Оформление полного пакета для передачи</p>
            </div>
            <div class="cost-card">
              <span class="cost-card__num">06</span>
              <strong>Доставка по России</strong>
              <p>Автовоз или контейнер до вашего города</p>
            </div>
            <div class="cost-card">
              <span class="cost-card__num">07</span>
              <strong>Услуги компании</strong>
              <p>Сопровождение сделки на всех этапах</p>
            </div>
          </div>
          <p class="cost-summary">
            Итоговая стоимость рассчитывается заранее до покупки — без неожиданных
            доплат в процессе
          </p>
        </div>
      </section>

      <!-- 3.7 Страхи -->
      <section class="section" style="background: var(--bg-card); border-block: 1px solid var(--border)">
        <div class="container">
          <h2>Что обычно пугает при покупке авто из-за границы — и как мы это решаем</h2>
          <div class="fears-list">
            <div class="fear-row">
              <div class="fear-row__fear">Я боюсь перевести деньги и остаться ни с чем</div>
              <div class="fear-row__sol">
                Работаем по договору с фиксированными условиями и этапами оплаты
              </div>
            </div>
            <div class="fear-row">
              <div class="fear-row__fear">Я не понимаю, что мне реально привезут</div>
              <div class="fear-row__sol">
                До покупки вы получаете фото, видео и данные по автомобилю
              </div>
            </div>
            <div class="fear-row">
              <div class="fear-row__fear">Я боюсь скрытых платежей</div>
              <div class="fear-row__sol">
                Заранее показываем структуру цены и все обязательные расходы
              </div>
            </div>
            <div class="fear-row">
              <div class="fear-row__fear">Я боюсь, что доставка затянется или что-то случится в пути</div>
              <div class="fear-row__sol">
                Объясняем этапы, сроки и сопровождаем логистику до получения
              </div>
            </div>
            <div class="fear-row">
              <div class="fear-row__fear">Я боюсь проблем с документами</div>
              <div class="fear-row__sol">
                Берём на себя сопровождение оформления и подготовку нужного пакета
                документов
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- 3.8 Экономия -->
      <section class="section section-anchor" id="economy">
        <div class="container">
          <h2>Сколько вы экономите по сравнению с рынком РФ</h2>
          <p class="subtitle">
            Показываем реальные примеры автомобилей и разницу в цене при покупке
            через нас
          </p>
          <div class="cards-grid">
            <article class="savings-card">
              <div class="savings-card__img">
                <img src="<?php echo esc_url( autoimport_asset_uri( 'assets/family-car.jpg' ) ); ?>" alt="Kia Sorento 2022" loading="lazy" />
              </div>
              <h3 class="mt-0">Kia Sorento 2022</h3>
              <p style="color: var(--text-muted); margin: 0">Семейный кроссовер с хорошей комплектацией</p>
              <div class="savings-card__prices">
                <span><strong>РФ:</strong> 4&nbsp;200&nbsp;000&nbsp;₽</span>
                <span><strong>Под ключ:</strong> 3&nbsp;540&nbsp;000&nbsp;₽</span>
              </div>
              <p class="savings-card__save">Экономия: 660&nbsp;000&nbsp;₽</p>
            </article>
            <article class="savings-card">
              <div class="savings-card__img">
                <img src="<?php echo esc_url( autoimport_asset_uri( 'assets/Geely-Monjaro.jpg' ) ); ?>" alt="Geely Monjaro 2023" loading="lazy" />
              </div>
              <h3 class="mt-0">Geely Monjaro 2023</h3>
              <p style="color: var(--text-muted); margin: 0">Современный кроссовер, максимум технологий</p>
              <div class="savings-card__prices">
                <span><strong>РФ:</strong> 4&nbsp;300&nbsp;000&nbsp;₽</span>
                <span><strong>Под ключ:</strong> 3&nbsp;650&nbsp;000&nbsp;₽</span>
              </div>
              <p class="savings-card__save">Экономия: 650&nbsp;000&nbsp;₽</p>
            </article>
            <article class="savings-card">
              <div class="savings-card__img">
                <img src="<?php echo esc_url( autoimport_asset_uri( 'assets/bmw-x3.jpg' ) ); ?>" alt="BMW X3 2021" loading="lazy" />
              </div>
              <h3 class="mt-0">BMW X3 2021</h3>
              <p style="color: var(--text-muted); margin: 0">Премиальный кроссовер с пробегом до 30&nbsp;000 км</p>
              <div class="savings-card__prices">
                <span><strong>РФ:</strong> 5&nbsp;500&nbsp;000&nbsp;₽</span>
                <span><strong>Под ключ:</strong> 4&nbsp;350&nbsp;000&nbsp;₽</span>
              </div>
              <p class="savings-card__save">Экономия: 1&nbsp;150&nbsp;000&nbsp;₽</p>
            </article>
          </div>
          <h3 style="margin-top: 32px">Почему так дешевле</h3>
          <ul class="why-list">
            <li>Покупаем напрямую на рынках Кореи, Китая, Европы и США</li>
            <li>Вы не платите наценки дилеров в РФ</li>
            <li>Заранее показываем полную стоимость без скрытых платежей</li>
            <li>Оплата проходит по этапам</li>
          </ul>
          <div class="text-center" style="margin-top: 28px">
            <p class="subtitle" style="margin-inline: auto">
              Подберём варианты и покажем разницу с рынком РФ по конкретным
              автомобилям.
            </p>
            <button
              type="button"
              class="btn btn--primary"
              data-open-form
              data-form-title="Рассчитаем вашу экономию"
              data-form-type="Расчёт"
              data-form-source="Главная / Блок 3.8"
              data-form-button-text="Рассчитать экономию"
            >
              Рассчитать экономию
            </button>
          </div>
        </div>
      </section>

      <!-- 3.9 Популярные -->
      <section class="section popular-section" style="background: var(--bg-card); border-block: 1px solid var(--border)">
        <div class="container">
          <h2>Популярные варианты, которые выбирают наши клиенты</h2>
          <div class="cards-grid" style="grid-template-columns: repeat(auto-fill, minmax(300px, 1fr))">
            <article class="car-card">
              <div class="car-card__img">
                <span class="car-badge car-badge--korea">Из Кореи</span>
                <img src="<?php echo esc_url( autoimport_asset_uri( 'assets/hyundai-tucson.png' ) ); ?>" alt="" loading="lazy" />
              </div>
              <div class="car-card__body">
                <h3 class="mt-0">Hyundai Tucson</h3>
                <p class="car-card__price"><strong>от 2&nbsp;890&nbsp;000&nbsp;₽ под ключ</strong></p>
                <ul class="car-specs" aria-label="Характеристики">
                  <li class="car-specs__item" title="Год выпуска">
                    <span class="car-specs__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><rect x="3" y="4" width="18" height="18" rx="2"/><path d="M16 2v4M8 2v4M3 10h18"/></svg></span>
                    <span class="car-specs__value">2022</span>
                  </li>
                  <li class="car-specs__item" title="Пробег">
                    <span class="car-specs__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/></svg></span>
                    <span class="car-specs__value">42&nbsp;000 км</span>
                  </li>
                  <li class="car-specs__item" title="Тип КПП">
                    <span class="car-specs__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><circle cx="12" cy="12" r="3"/><path d="M12 2v2M12 20v2M4.9 4.9l1.4 1.4M17.7 17.7l1.4 1.4M2 12h2M20 12h2M4.9 19.1l1.4-1.4M17.7 6.3l1.4-1.4"/></svg></span>
                    <span class="car-specs__value">Автомат</span>
                  </li>
                  <li class="car-specs__item" title="Привод">
                    <span class="car-specs__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><circle cx="7" cy="17" r="2"/><circle cx="17" cy="17" r="2"/><path d="M5 17h2l2-7h6l2 7h2M9 10l1-4h4l1 4"/></svg></span>
                    <span class="car-specs__value">Полный</span>
                  </li>
                  <li class="car-specs__item" title="Объём двигателя (л.с.)">
                    <span class="car-specs__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><path d="M8 10h8v8H8z"/><path d="M6 10V7h12v3M10 6V4M14 6V4M10 18v2M14 18v2"/></svg></span>
                    <span class="car-specs__value">2.0 л (150 л.с.)</span>
                  </li>
                  <li class="car-specs__item" title="Тип топлива">
                    <span class="car-specs__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><path d="M6 3h8v18H6z"/><path d="M14 7h2l2 4v10h-4"/></svg></span>
                    <span class="car-specs__value">Бензин</span>
                  </li>
                </ul>
                <p class="car-card__desc">
                  Универсальный кроссовер с богатой комплектацией
                </p>
                <span class="tag">Семейный</span>
                <div class="car-card__actions">
                  <a class="btn btn--outline" href="<?php echo esc_url( home_url( '/catalog/hyundai-tucson-2022' ) ); ?>">Подробнее</a>
                  <button
                    type="button"
                    class="btn btn--primary"
                    data-open-form
                    data-form-title="Рассчитаем стоимость Hyundai Tucson под ключ"
                    data-form-type="Расчёт"
                    data-form-source="Главная / Популярные"
                    data-form-car="Hyundai Tucson"
                    data-form-button-text="Получить расчёт по авто"
                  >
                    Получить расчёт по авто
                  </button>
                </div>
              </div>
            </article>
            <article class="car-card">
              <div class="car-card__img">
                <span class="car-badge car-badge--china">Из Китая</span>
                <img src="<?php echo esc_url( autoimport_asset_uri( 'assets/Geely-Monjaro.jpg' ) ); ?>" alt="" loading="lazy" />
              </div>
              <div class="car-card__body">
                <h3 class="mt-0">Geely Monjaro</h3>
                <p class="car-card__price"><strong>от 3&nbsp;650&nbsp;000&nbsp;₽ под ключ</strong></p>
                <ul class="car-specs" aria-label="Характеристики">
                  <li class="car-specs__item" title="Год выпуска">
                    <span class="car-specs__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><rect x="3" y="4" width="18" height="18" rx="2"/><path d="M16 2v4M8 2v4M3 10h18"/></svg></span>
                    <span class="car-specs__value">2023</span>
                  </li>
                  <li class="car-specs__item" title="Пробег">
                    <span class="car-specs__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/></svg></span>
                    <span class="car-specs__value">15&nbsp;000 км</span>
                  </li>
                  <li class="car-specs__item" title="Тип КПП">
                    <span class="car-specs__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><circle cx="12" cy="12" r="3"/><path d="M12 2v2M12 20v2M4.9 4.9l1.4 1.4M17.7 17.7l1.4 1.4M2 12h2M20 12h2M4.9 19.1l1.4-1.4M17.7 6.3l1.4-1.4"/></svg></span>
                    <span class="car-specs__value">Автомат</span>
                  </li>
                  <li class="car-specs__item" title="Привод">
                    <span class="car-specs__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><circle cx="7" cy="17" r="2"/><circle cx="17" cy="17" r="2"/><path d="M5 17h2l2-7h6l2 7h2M9 10l1-4h4l1 4"/></svg></span>
                    <span class="car-specs__value">Полный</span>
                  </li>
                  <li class="car-specs__item" title="Объём двигателя (л.с.)">
                    <span class="car-specs__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><path d="M8 10h8v8H8z"/><path d="M6 10V7h12v3M10 6V4M14 6V4M10 18v2M14 18v2"/></svg></span>
                    <span class="car-specs__value">2.0 л (218 л.с.)</span>
                  </li>
                  <li class="car-specs__item" title="Тип топлива">
                    <span class="car-specs__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><path d="M6 3h8v18H6z"/><path d="M14 7h2l2 4v10h-4"/></svg></span>
                    <span class="car-specs__value">Бензин</span>
                  </li>
                </ul>
                <p class="car-card__desc">
                  Технологии и комфорт уровня премиум
                </p>
                <span class="tag">Технологии</span>
                <div class="car-card__actions">
                  <a class="btn btn--outline" href="<?php echo esc_url( home_url( '/catalog' ) ); ?>">Подробнее</a>
                  <button
                    type="button"
                    class="btn btn--primary"
                    data-open-form
                    data-form-title="Рассчитаем стоимость Geely Monjaro под ключ"
                    data-form-type="Расчёт"
                    data-form-source="Главная / Популярные"
                    data-form-car="Geely Monjaro"
                    data-form-button-text="Получить расчёт по авто"
                  >
                    Получить расчёт по авто
                  </button>
                </div>
              </div>
            </article>
            <article class="car-card">
              <div class="car-card__img">
                <span class="car-badge car-badge--europe">Из Европы</span>
                <img src="<?php echo esc_url( autoimport_asset_uri( 'assets/bmw-x3.jpg' ) ); ?>" alt="" loading="lazy" />
              </div>
              <div class="car-card__body">
                <h3 class="mt-0">BMW X3</h3>
                <p class="car-card__price"><strong>от 4&nbsp;350&nbsp;000&nbsp;₽ под ключ</strong></p>
                <ul class="car-specs" aria-label="Характеристики">
                  <li class="car-specs__item" title="Год выпуска">
                    <span class="car-specs__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><rect x="3" y="4" width="18" height="18" rx="2"/><path d="M16 2v4M8 2v4M3 10h18"/></svg></span>
                    <span class="car-specs__value">2021</span>
                  </li>
                  <li class="car-specs__item" title="Пробег">
                    <span class="car-specs__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/></svg></span>
                    <span class="car-specs__value">28&nbsp;000 км</span>
                  </li>
                  <li class="car-specs__item" title="Тип КПП">
                    <span class="car-specs__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><circle cx="12" cy="12" r="3"/><path d="M12 2v2M12 20v2M4.9 4.9l1.4 1.4M17.7 17.7l1.4 1.4M2 12h2M20 12h2M4.9 19.1l1.4-1.4M17.7 6.3l1.4-1.4"/></svg></span>
                    <span class="car-specs__value">Автомат</span>
                  </li>
                  <li class="car-specs__item" title="Привод">
                    <span class="car-specs__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><circle cx="7" cy="17" r="2"/><circle cx="17" cy="17" r="2"/><path d="M5 17h2l2-7h6l2 7h2M9 10l1-4h4l1 4"/></svg></span>
                    <span class="car-specs__value">Полный</span>
                  </li>
                  <li class="car-specs__item" title="Объём двигателя (л.с.)">
                    <span class="car-specs__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><path d="M8 10h8v8H8z"/><path d="M6 10V7h12v3M10 6V4M14 6V4M10 18v2M14 18v2"/></svg></span>
                    <span class="car-specs__value">2.0 л (249 л.с.)</span>
                  </li>
                  <li class="car-specs__item" title="Тип топлива">
                    <span class="car-specs__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><path d="M6 3h8v18H6z"/><path d="M14 7h2l2 4v10h-4"/></svg></span>
                    <span class="car-specs__value">Бензин</span>
                  </li>
                </ul>
                <p class="car-card__desc">
                  Премиальный SUV без переплаты рынку РФ
                </p>
                <span class="tag">Премиум</span>
                <div class="car-card__actions">
                  <a class="btn btn--outline" href="<?php echo esc_url( home_url( '/catalog' ) ); ?>">Подробнее</a>
                  <button
                    type="button"
                    class="btn btn--primary"
                    data-open-form
                    data-form-title="Рассчитаем стоимость BMW X3 под ключ"
                    data-form-type="Расчёт"
                    data-form-source="Главная / Популярные"
                    data-form-car="BMW X3"
                    data-form-button-text="Получить расчёт по авто"
                  >
                    Получить расчёт по авто
                  </button>
                </div>
              </div>
            </article>
          </div>
        </div>
      </section>

      <!-- 3.10 Финальная форма -->
      <section class="section cta-section" id="lead">
        <div class="container cta-section__grid">
          <div class="cta-section__content">
            <p class="eyebrow">Заявка</p>
            <h2>Покажем реальные варианты под ваш бюджет — без обязательств</h2>
            <p class="subtitle">
              Вы заранее поймёте, что можно купить, сколько это стоит и из какой
              страны выгоднее
            </p>
            <p>
              Оставьте заявку — подберём реальные автомобили, объясним разницу по
              странам и рассчитаем итоговую стоимость под ключ. Вы спокойно изучаете
              варианты и принимаете решение.
            </p>
          </div>
          <div class="form-block">
            <form class="form-main" data-lead-form data-form-main>
              <input type="hidden" name="lead_source" value="Главная / Блок 3.10" />
              <input type="hidden" name="lead_type" value="Подбор" />
              <input type="hidden" name="lead_segment" value="" />
              <div class="form-row">
                <label for="inline-name">Имя</label>
                <input id="inline-name" name="name" type="text" required autocomplete="name" />
              </div>
              <div class="form-row">
                <label for="inline-phone">Телефон</label>
                <input
                  id="inline-phone"
                  name="phone"
                  type="tel"
                  required
                  autocomplete="tel"
                  inputmode="tel"
                  placeholder="+7 (___) ___-__-__"
                />
              </div>
              <div class="form-row">
                <label for="inline-budget">Бюджет</label>
                <input id="inline-budget" name="budget" type="text" placeholder="Например, до 3 млн ₽" />
              </div>
              <div class="form-row">
                <label for="inline-need">Что ищете</label>
                <textarea id="inline-need" name="need" rows="3"></textarea>
              </div>
              <div class="form-row">
                <label for="inline-city">Город</label>
                <input id="inline-city" name="city" type="text" autocomplete="address-level2" />
              </div>
              <div class="form-consent">
                <input id="inline-consent" name="consent" type="checkbox" required />
                <label for="inline-consent">
                  Согласен на обработку персональных данных в соответствии с политикой
                  конфиденциальности
                </label>
              </div>
              <button type="submit" class="btn btn--primary" data-submit-label="Получить варианты">Получить варианты</button>
            </form>
            <div class="form-success" data-form-success role="status">
              Спасибо! Мы получили заявку и скоро свяжемся с вами.
            </div>
          </div>
        </div>
      </section>
