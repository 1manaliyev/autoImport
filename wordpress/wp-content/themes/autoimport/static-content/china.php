<?php
/** Static markup from china.html */
if ( ! defined( 'ABSPATH' ) ) { exit; }
$autoimport_page_meta = array( 'title' => 'Автомобили из Китая под ключ — AutoImport', 'description' => null, 'extra_head' => '', 'has_quiz' => false, 'has_swiper' => false );
?>
<section class="country-hero">
        <div class="container country-hero__grid">
          <div class="country-hero__content">
            <p class="eyebrow">Авто из Китая</p>
            <h1>Автомобили из Китая под ключ</h1>
            <p class="subtitle">
              Привезём современный автомобиль из Китая под ключ за 30–60 дней — максимум технологий и комплектаций с выгодой до 1&nbsp;500&nbsp;000&nbsp;₽.
            </p>
            <div class="btn-row">
              <button type="button" class="btn btn--primary" data-open-form data-form-title="Подобрать авто из Китая" data-form-source="Страница / Китай" data-form-country="Китай" data-form-button-text="Подобрать авто">
                Подобрать авто из Китая
              </button>
              <a class="btn btn--outline" href="#country-catalog">Смотреть каталог</a>
            </div>
            <div class="country-stats">
              <div><strong>30–60</strong><span>дней в среднем</span></div>
              <div><strong>до 1,5 млн ₽</strong><span>выгоды</span></div>
              <div><strong>от 250 тыс ₽</strong><span>логистика</span></div>
            </div>
          </div>
          <div class="country-hero__media">
            <img src="<?php echo esc_url( autoimport_asset_uri( 'assets/Lixiang_L7.jpg' ) ); ?>" alt="Автомобиль из Китая" />
          </div>
        </div>
      </section>

      <section id="country-catalog" class="section section--tight-top country-catalog section-anchor" data-country-catalog data-country="Китай" data-country-page-size="3">
        <div class="container">
          <div class="section-heading-row">
            <div>
              <p class="eyebrow">Каталог</p>
              <h2>Каталог автомобилей из Китая</h2>
            </div>
            <p style="color: var(--text-muted); max-width: 520px">Современные кроссоверы, гибриды и электромобили из КНР с фильтрами под ваш запрос.</p>
          </div>

          <p class="eyebrow">Фильтр по марке</p>
          <div class="brands-scroll-wrap" aria-label="Марки Китай">
            <div class="brands-scroll country-brands">
              <button type="button" class="country-brand-chip is-active" data-country-brand="">Все марки</button>
              <button type="button" class="country-brand-chip" data-country-brand="Geely">Geely</button>
              <button type="button" class="country-brand-chip" data-country-brand="Haval">Haval</button>
              <button type="button" class="country-brand-chip" data-country-brand="Changan">Changan</button>
              <button type="button" class="country-brand-chip" data-country-brand="Li Auto">Li Auto</button>
              <button type="button" class="country-brand-chip" data-country-brand="Zeekr">Zeekr</button>
            </div>
          </div>

          <div class="filters-grid country-filters" data-country-filters>
            <div class="country-catalog__locked">
              <label>Страна</label>
              <select data-country-filter="country" disabled>
                <option selected>Китай</option>
              </select>
            </div>
            <div>
              <label>Марка</label>
              <select data-country-filter="brand">
                <option value="">Любая</option>
                <option>Geely</option><option>Haval</option><option>Changan</option><option>Li Auto</option><option>Zeekr</option>
              </select>
            </div>
            <div>
              <label>Модель</label>
              <select data-country-filter="model">
                <option value="">Любая</option>
                <option>Monjaro</option><option>Jolion</option><option>L7</option><option>001</option><option>CS75 Plus</option><option>H6</option>
              </select>
            </div>
            <div>
              <label>Цена, ₽</label>
              <select data-country-filter="price">
                <option value="">Любая</option>
                <option value="to-3">до 3 млн</option>
                <option value="3-5">3–5 млн</option>
                <option value="5+">от 5 млн</option>
              </select>
            </div>
            <div>
              <label>Год</label>
              <select data-country-filter="year">
                <option value="">Любой</option>
                <option value="2023-2025">2023–2025</option>
                <option value="2020-2022">2020–2022</option>
              </select>
            </div>
            <div>
              <label>Пробег</label>
              <select data-country-filter="mileage">
                <option value="">Любой</option>
                <option value="30">до 30 000 км</option>
                <option value="80">до 80 000 км</option>
              </select>
            </div>
            <div>
              <label>Кузов</label>
              <select data-country-filter="body">
                <option value="">Любой</option>
                <option value="Кроссовер">Кроссовер</option>
                <option value="Седан">Седан</option>
              </select>
            </div>
            <div>
              <label>Привод</label>
              <select data-country-filter="drive">
                <option value="">Любой</option>
                <option value="Передний">Передний</option>
                <option value="Задний">Задний</option>
                <option value="Полный">Полный</option>
              </select>
            </div>
            <div>
              <label>Топливо</label>
              <select data-country-filter="fuel">
                <option value="">Любое</option>
                <option value="Бензин">Бензин</option>
                <option value="Дизель">Дизель</option>
                <option value="Гибрид">Гибрид</option>
                <option value="Электро">Электро</option>
              </select>
            </div>
            <div>
              <label>Мощность</label>
              <select data-country-filter="power">
                <option value="">Любая</option>
                <option value="160-">до 160 л.с.</option>
                <option value="160-250">160–250 л.с.</option>
                <option value="250+">от 250 л.с.</option>
              </select>
            </div>
            <div>
              <label>Объём двигателя</label>
              <select data-country-filter="volume">
                <option value="">Любой</option>
                <option value="2-">до 2.0 л</option>
                <option value="2+">от 2.0 л</option>
              </select>
            </div>
          </div>
          <div class="country-catalog__toolbar">
            <p class="country-catalog__note">Фильтры на статике работают в пределах подборки на странице. В CMS — полная выдача каталога.</p>
            <button type="button" class="btn btn--outline btn--sm" data-country-filter-reset>Сбросить фильтры</button>
          </div>
          <p class="country-catalog__count" data-country-catalog-count></p>

          <div class="cards-grid country-catalog__grid" data-country-catalog-grid style="grid-template-columns: repeat(auto-fill, minmax(300px, 1fr))">
            <article class="car-card" data-catalog-car
              data-brand="Geely"
              data-model="Monjaro"
              data-price="3-5"
              data-year="2023-2025"
              data-mileage="30"
              data-body="Кроссовер"
              data-drive="Полный"
              data-fuel="Бензин"
              data-power="160-250"
              data-volume="2-">
              <div class="car-card__img">
                <span class="car-badge car-badge--china">Из Китая</span>
                <img src="<?php echo esc_url( autoimport_asset_uri( 'assets/Geely-Monjaro.jpg' ) ); ?>" alt="Geely Monjaro" loading="lazy" />
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
                <p class="car-card__desc">Технологии и комфорт уровня премиум</p>
                <span class="tag">Технологии</span>
                <div class="car-card__actions">
                  <a class="btn btn--outline" href="<?php echo esc_url( home_url( '/catalog' ) ); ?>">Подробнее</a>
                  <button type="button" class="btn btn--primary" data-open-form data-form-title="Рассчитаем стоимость Geely Monjaro под ключ" data-form-type="Расчёт" data-form-source="Страница / Китай / Каталог" data-form-car="Geely Monjaro" data-form-country="Китай" data-form-button-text="Получить расчёт по авто">Получить расчёт по авто</button>
                </div>
              </div>
            </article>
            <article class="car-card" data-catalog-car
              data-brand="Haval"
              data-model="Jolion"
              data-price="to-3"
              data-year="2023-2025"
              data-mileage="30"
              data-body="Кроссовер"
              data-drive="Передний"
              data-fuel="Бензин"
              data-power="160-"
              data-volume="2-">
              <div class="car-card__img">
                <span class="car-badge car-badge--china">Из Китая</span>
                <img src="<?php echo esc_url( autoimport_asset_uri( 'assets/bmw-x3.jpg' ) ); ?>" alt="Haval Jolion" loading="lazy" />
              </div>
              <div class="car-card__body">
                <h3 class="mt-0">Haval Jolion</h3>
                <p class="car-card__price"><strong>от 2&nbsp;100&nbsp;000&nbsp;₽ под ключ</strong></p>
                <ul class="car-specs" aria-label="Характеристики">
                  <li class="car-specs__item" title="Год выпуска">
                    <span class="car-specs__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><rect x="3" y="4" width="18" height="18" rx="2"/><path d="M16 2v4M8 2v4M3 10h18"/></svg></span>
                    <span class="car-specs__value">2023</span>
                  </li>
                  <li class="car-specs__item" title="Пробег">
                    <span class="car-specs__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/></svg></span>
                    <span class="car-specs__value">12&nbsp;000 км</span>
                  </li>
                  <li class="car-specs__item" title="Тип КПП">
                    <span class="car-specs__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><circle cx="12" cy="12" r="3"/><path d="M12 2v2M12 20v2M4.9 4.9l1.4 1.4M17.7 17.7l1.4 1.4M2 12h2M20 12h2M4.9 19.1l1.4-1.4M17.7 6.3l1.4-1.4"/></svg></span>
                    <span class="car-specs__value">Робот</span>
                  </li>
                  <li class="car-specs__item" title="Привод">
                    <span class="car-specs__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><circle cx="7" cy="17" r="2"/><circle cx="17" cy="17" r="2"/><path d="M5 17h2l2-7h6l2 7h2M9 10l1-4h4l1 4"/></svg></span>
                    <span class="car-specs__value">Передний</span>
                  </li>
                  <li class="car-specs__item" title="Объём двигателя (л.с.)">
                    <span class="car-specs__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><path d="M8 10h8v8H8z"/><path d="M6 10V7h12v3M10 6V4M14 6V4M10 18v2M14 18v2"/></svg></span>
                    <span class="car-specs__value">1.5 л (143 л.с.)</span>
                  </li>
                  <li class="car-specs__item" title="Тип топлива">
                    <span class="car-specs__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><path d="M6 3h8v18H6z"/><path d="M14 7h2l2 4v10h-4"/></svg></span>
                    <span class="car-specs__value">Бензин</span>
                  </li>
                </ul>
                <p class="car-card__desc">Компактный кроссовер с выгодной стоимостью ввоза</p>
                <span class="tag">Городской</span>
                <div class="car-card__actions">
                  <a class="btn btn--outline" href="<?php echo esc_url( home_url( '/catalog' ) ); ?>">Подробнее</a>
                  <button type="button" class="btn btn--primary" data-open-form data-form-title="Рассчитаем стоимость Haval Jolion под ключ" data-form-type="Расчёт" data-form-source="Страница / Китай / Каталог" data-form-car="Haval Jolion" data-form-country="Китай" data-form-button-text="Получить расчёт по авто">Получить расчёт по авто</button>
                </div>
              </div>
            </article>
            <article class="car-card" data-catalog-car
              data-brand="Li Auto"
              data-model="L7"
              data-price="5+"
              data-year="2023-2025"
              data-mileage="30"
              data-body="Кроссовер"
              data-drive="Полный"
              data-fuel="Гибрид"
              data-power="250+"
              data-volume="2-">
              <div class="car-card__img">
                <span class="car-badge car-badge--china">Из Китая</span>
                <img src="<?php echo esc_url( autoimport_asset_uri( 'assets/Lixiang_L7.jpg' ) ); ?>" alt="Li Xiang L7" loading="lazy" />
              </div>
              <div class="car-card__body">
                <h3 class="mt-0">Li Xiang L7</h3>
                <p class="car-card__price"><strong>от 5&nbsp;200&nbsp;000&nbsp;₽ под ключ</strong></p>
                <ul class="car-specs" aria-label="Характеристики">
                  <li class="car-specs__item" title="Год выпуска">
                    <span class="car-specs__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><rect x="3" y="4" width="18" height="18" rx="2"/><path d="M16 2v4M8 2v4M3 10h18"/></svg></span>
                    <span class="car-specs__value">2024</span>
                  </li>
                  <li class="car-specs__item" title="Пробег">
                    <span class="car-specs__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/></svg></span>
                    <span class="car-specs__value">8&nbsp;000 км</span>
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
                    <span class="car-specs__value">1.5 л (449 л.с.)</span>
                  </li>
                  <li class="car-specs__item" title="Тип топлива">
                    <span class="car-specs__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><path d="M6 3h8v18H6z"/><path d="M14 7h2l2 4v10h-4"/></svg></span>
                    <span class="car-specs__value">Гибрид</span>
                  </li>
                </ul>
                <p class="car-card__desc">Семейный гибрид с просторным салоном</p>
                <span class="tag">Гибрид</span>
                <div class="car-card__actions">
                  <a class="btn btn--outline" href="<?php echo esc_url( home_url( '/catalog' ) ); ?>">Подробнее</a>
                  <button type="button" class="btn btn--primary" data-open-form data-form-title="Рассчитаем стоимость Li Xiang L7 под ключ" data-form-type="Расчёт" data-form-source="Страница / Китай / Каталог" data-form-car="Li Xiang L7" data-form-country="Китай" data-form-button-text="Получить расчёт по авто">Получить расчёт по авто</button>
                </div>
              </div>
            </article>
            <article class="car-card" data-catalog-car
              data-brand="Zeekr"
              data-model="001"
              data-price="3-5"
              data-year="2023-2025"
              data-mileage="30"
              data-body="Седан"
              data-drive="Полный"
              data-fuel="Электро"
              data-power="250+"
              data-volume="2-">
              <div class="car-card__img">
                <span class="car-badge car-badge--china">Из Китая</span>
                <img src="<?php echo esc_url( autoimport_asset_uri( 'assets/bmw-x3.jpg' ) ); ?>" alt="Zeekr 001" loading="lazy" />
              </div>
              <div class="car-card__body">
                <h3 class="mt-0">Zeekr 001</h3>
                <p class="car-card__price"><strong>от 4&nbsp;900&nbsp;000&nbsp;₽ под ключ</strong></p>
                <ul class="car-specs" aria-label="Характеристики">
                  <li class="car-specs__item" title="Год выпуска">
                    <span class="car-specs__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><rect x="3" y="4" width="18" height="18" rx="2"/><path d="M16 2v4M8 2v4M3 10h18"/></svg></span>
                    <span class="car-specs__value">2024</span>
                  </li>
                  <li class="car-specs__item" title="Пробег">
                    <span class="car-specs__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/></svg></span>
                    <span class="car-specs__value">5&nbsp;000 км</span>
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
                    <span class="car-specs__value">Электро (544 л.с.)</span>
                  </li>
                  <li class="car-specs__item" title="Тип топлива">
                    <span class="car-specs__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><path d="M6 3h8v18H6z"/><path d="M14 7h2l2 4v10h-4"/></svg></span>
                    <span class="car-specs__value">Электро</span>
                  </li>
                </ul>
                <p class="car-card__desc">Премиальный электромобиль с большим запасом хода</p>
                <span class="tag">Электро</span>
                <div class="car-card__actions">
                  <a class="btn btn--outline" href="<?php echo esc_url( home_url( '/catalog' ) ); ?>">Подробнее</a>
                  <button type="button" class="btn btn--primary" data-open-form data-form-title="Рассчитаем стоимость Zeekr 001 под ключ" data-form-type="Расчёт" data-form-source="Страница / Китай / Каталог" data-form-car="Zeekr 001" data-form-country="Китай" data-form-button-text="Получить расчёт по авто">Получить расчёт по авто</button>
                </div>
              </div>
            </article>
            <article class="car-card" data-catalog-car
              data-brand="Changan"
              data-model="CS75 Plus"
              data-price="3-5"
              data-year="2023-2025"
              data-mileage="30"
              data-body="Кроссовер"
              data-drive="Передний"
              data-fuel="Бензин"
              data-power="160-250"
              data-volume="2-">
              <div class="car-card__img">
                <span class="car-badge car-badge--china">Из Китая</span>
                <img src="<?php echo esc_url( autoimport_asset_uri( 'assets/family-car.jpg' ) ); ?>" alt="Changan CS75 Plus" loading="lazy" />
              </div>
              <div class="car-card__body">
                <h3 class="mt-0">Changan CS75 Plus</h3>
                <p class="car-card__price"><strong>от 2&nbsp;450&nbsp;000&nbsp;₽ под ключ</strong></p>
                <ul class="car-specs" aria-label="Характеристики">
                  <li class="car-specs__item" title="Год выпуска">
                    <span class="car-specs__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><rect x="3" y="4" width="18" height="18" rx="2"/><path d="M16 2v4M8 2v4M3 10h18"/></svg></span>
                    <span class="car-specs__value">2023</span>
                  </li>
                  <li class="car-specs__item" title="Пробег">
                    <span class="car-specs__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/></svg></span>
                    <span class="car-specs__value">14&nbsp;000 км</span>
                  </li>
                  <li class="car-specs__item" title="Тип КПП">
                    <span class="car-specs__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><circle cx="12" cy="12" r="3"/><path d="M12 2v2M12 20v2M4.9 4.9l1.4 1.4M17.7 17.7l1.4 1.4M2 12h2M20 12h2M4.9 19.1l1.4-1.4M17.7 6.3l1.4-1.4"/></svg></span>
                    <span class="car-specs__value">Автомат</span>
                  </li>
                  <li class="car-specs__item" title="Привод">
                    <span class="car-specs__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><circle cx="7" cy="17" r="2"/><circle cx="17" cy="17" r="2"/><path d="M5 17h2l2-7h6l2 7h2M9 10l1-4h4l1 4"/></svg></span>
                    <span class="car-specs__value">Передний</span>
                  </li>
                  <li class="car-specs__item" title="Объём двигателя (л.с.)">
                    <span class="car-specs__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><path d="M8 10h8v8H8z"/><path d="M6 10V7h12v3M10 6V4M14 6V4M10 18v2M14 18v2"/></svg></span>
                    <span class="car-specs__value">1.5 л (188 л.с.)</span>
                  </li>
                  <li class="car-specs__item" title="Тип топлива">
                    <span class="car-specs__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><path d="M6 3h8v18H6z"/><path d="M14 7h2l2 4v10h-4"/></svg></span>
                    <span class="car-specs__value">Бензин</span>
                  </li>
                </ul>
                <p class="car-card__desc">Популярный кроссовер с современным дизайном</p>
                <span class="tag">Городской</span>
                <div class="car-card__actions">
                  <a class="btn btn--outline" href="<?php echo esc_url( home_url( '/catalog' ) ); ?>">Подробнее</a>
                  <button type="button" class="btn btn--primary" data-open-form data-form-title="Рассчитаем стоимость Changan CS75 Plus под ключ" data-form-type="Расчёт" data-form-source="Страница / Китай / Каталог" data-form-car="Changan CS75 Plus" data-form-country="Китай" data-form-button-text="Получить расчёт по авто">Получить расчёт по авто</button>
                </div>
              </div>
            </article>
            <article class="car-card" data-catalog-car
              data-brand="Haval"
              data-model="H6"
              data-price="3-5"
              data-year="2020-2022"
              data-mileage="30"
              data-body="Кроссовер"
              data-drive="Передний"
              data-fuel="Бензин"
              data-power="160-250"
              data-volume="2-">
              <div class="car-card__img">
                <span class="car-badge car-badge--china">Из Китая</span>
                <img src="<?php echo esc_url( autoimport_asset_uri( 'assets/hyundai-tucson.png' ) ); ?>" alt="Haval H6" loading="lazy" />
              </div>
              <div class="car-card__body">
                <h3 class="mt-0">Haval H6</h3>
                <p class="car-card__price"><strong>от 2&nbsp;350&nbsp;000&nbsp;₽ под ключ</strong></p>
                <ul class="car-specs" aria-label="Характеристики">
                  <li class="car-specs__item" title="Год выпуска">
                    <span class="car-specs__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><rect x="3" y="4" width="18" height="18" rx="2"/><path d="M16 2v4M8 2v4M3 10h18"/></svg></span>
                    <span class="car-specs__value">2022</span>
                  </li>
                  <li class="car-specs__item" title="Пробег">
                    <span class="car-specs__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/></svg></span>
                    <span class="car-specs__value">28&nbsp;000 км</span>
                  </li>
                  <li class="car-specs__item" title="Тип КПП">
                    <span class="car-specs__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><circle cx="12" cy="12" r="3"/><path d="M12 2v2M12 20v2M4.9 4.9l1.4 1.4M17.7 17.7l1.4 1.4M2 12h2M20 12h2M4.9 19.1l1.4-1.4M17.7 6.3l1.4-1.4"/></svg></span>
                    <span class="car-specs__value">Робот</span>
                  </li>
                  <li class="car-specs__item" title="Привод">
                    <span class="car-specs__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><circle cx="7" cy="17" r="2"/><circle cx="17" cy="17" r="2"/><path d="M5 17h2l2-7h6l2 7h2M9 10l1-4h4l1 4"/></svg></span>
                    <span class="car-specs__value">Передний</span>
                  </li>
                  <li class="car-specs__item" title="Объём двигателя (л.с.)">
                    <span class="car-specs__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><path d="M8 10h8v8H8z"/><path d="M6 10V7h12v3M10 6V4M14 6V4M10 18v2M14 18v2"/></svg></span>
                    <span class="car-specs__value">2.0 л (204 л.с.)</span>
                  </li>
                  <li class="car-specs__item" title="Тип топлива">
                    <span class="car-specs__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><path d="M6 3h8v18H6z"/><path d="M14 7h2l2 4v10h-4"/></svg></span>
                    <span class="car-specs__value">Бензин</span>
                  </li>
                </ul>
                <p class="car-card__desc">Бестселлер с просторным салоном и богатой комплектацией</p>
                <span class="tag">Семейный</span>
                <div class="car-card__actions">
                  <a class="btn btn--outline" href="<?php echo esc_url( home_url( '/catalog' ) ); ?>">Подробнее</a>
                  <button type="button" class="btn btn--primary" data-open-form data-form-title="Рассчитаем стоимость Haval H6 под ключ" data-form-type="Расчёт" data-form-source="Страница / Китай / Каталог" data-form-car="Haval H6" data-form-country="Китай" data-form-button-text="Получить расчёт по авто">Получить расчёт по авто</button>
                </div>
              </div>
            </article>
          </div>
          <nav class="country-catalog__pagination" data-country-pagination aria-label="Навигация по страницам каталога" hidden>
            <button type="button" class="country-page-btn country-page-btn--nav" data-country-page-prev aria-label="Предыдущая страница">Назад</button>
            <div class="country-page-list" data-country-page-list></div>
            <button type="button" class="country-page-btn country-page-btn--nav" data-country-page-next aria-label="Следующая страница">Вперёд</button>
          </nav>
        </div>
      </section>

      <section class="section">
        <div class="container">
          <p class="eyebrow">Преимущества направления</p>
          <h2>Почему выбирают Китай</h2>
          <div class="country-benefits">
            <article>
              <span>01</span>
              <h3>Современные модели</h3>
              <p>На рынке много новых автомобилей с актуальным дизайном и свежими платформами.</p>
            </article>
            <article>
              <span>02</span>
              <h3>Богатые комплектации</h3>
              <p>Даже средние версии часто оснащены лучше европейских аналогов за тот же бюджет.</p>
            </article>
            <article>
              <span>03</span>
              <h3>Гибриды и электромобили</h3>
              <p>Большой выбор современных гибридных и электрических моделей.</p>
            </article>
            <article>
              <span>04</span>
              <h3>Много технологий</h3>
              <p>Ассистенты, мультимедиа, комфортные опции и умные системы уже в доступных версиях.</p>
            </article>
            <article>
              <span>05</span>
              <h3>Выгоднее аналогов</h3>
              <p>Часто можно получить больше автомобиля, чем у европейских моделей за похожий бюджет.</p>
            </article>
          </div>
        </div>
      </section>

      <section class="section country-process">
        <div class="container">
          <div class="section-heading-row">
            <div>
              <p class="eyebrow">Важно до покупки</p>
              <h2>Что важно знать перед покупкой</h2>
            </div>
            <p>
              Вы понимаете не только “что купить”, но и “что будет потом”.
            </p>
          </div>
          <div class="inspection-list">
            <div class="inspection-item">
              <span class="inspection-item__icon" aria-hidden="true">✓</span>
              <div>
                <strong>Обслуживание</strong>
                <p>Заранее объясняем особенности сервиса выбранной модели.</p>
              </div>
            </div>
            <div class="inspection-item">
              <span class="inspection-item__icon" aria-hidden="true">✓</span>
              <div>
                <strong>Запчасти</strong>
                <p>Проверяем доступность расходников и базовых комплектующих.</p>
              </div>
            </div>
            <div class="inspection-item inspection-item--wide">
              <span class="inspection-item__icon" aria-hidden="true">✓</span>
              <div>
                <strong>Ликвидность</strong>
                <p>Подбираем модели, которые легче продать на вторичном рынке.</p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="section">
        <div class="container">
          <div class="section-heading-row">
            <div>
              <p class="eyebrow">Процесс</p>
              <h2>Как покупают автомобили в Китае</h2>
            </div>
            <p>Покупка у дилеров и поставщиков внутри страны.</p>
          </div>
          <div class="steps">
            <article class="step-card">
              <span class="step-card__num">1</span>
              <h3>Подбор модели</h3>
              <p>Подбираем модель и комплектацию под бюджет и задачи.</p>
            </article>
            <article class="step-card">
              <span class="step-card__num">2</span>
              <h3>Проверка информации</h3>
              <p>Проверяем данные по автомобилю, комплектации и доступности.</p>
            </article>
            <article class="step-card">
              <span class="step-card__num">3</span>
              <h3>Согласование</h3>
              <p>Показываем итоговую стоимость и условия покупки.</p>
            </article>
            <article class="step-card">
              <span class="step-card__num">4</span>
              <h3>Выкуп</h3>
              <p>Выкупаем автомобиль после вашего подтверждения.</p>
            </article>
          </div>
        </div>
      </section>

      <section class="section">
        <div class="container delivery-panel">
          <div>
            <p class="eyebrow">Доставка</p>
            <h2>Как доставляют из Китая</h2>
            <p>
              Используем несколько маршрутов в зависимости от региона.
            </p>
          </div>
          <div class="delivery-panel__list">
            <span>Доставка до границы или порта</span>
            <span>Перевозка морем, ЖД контейнером или автотранспортом</span>
            <span>Таможенное оформление</span>
            <span>Доставка по России</span>
          </div>
          <div class="delivery-panel__meta">
            <div>
              <strong>Сроки</strong>
              <span>30–60 дней</span>
            </div>
            <div>
              <strong>Стоимость</strong>
              <span>Логистика — от 250&nbsp;000&nbsp;₽</span>
            </div>
          </div>
        </div>
      </section>

      <section class="section section--tight-top">
        <div class="container">
          <div class="split-2 fit-grid">
            <div class="fit-card fit-card--yes">
              <div class="fit-card__head">
                <span class="fit-card__icon" aria-hidden="true">✓</span>
                <h3>Гарантии</h3>
              </div>
              <ul>
                <li>объясняем все нюансы до покупки</li>
                <li>считаем итоговую стоимость заранее</li>
                <li>страхование на этапе доставки</li>
              </ul>
            </div>
            <div class="fit-card fit-card--no">
              <div class="fit-card__head">
                <span class="fit-card__icon" aria-hidden="true">✓</span>
                <h3>Кому подходит</h3>
              </div>
              <ul>
                <li>тем, кто хочет современные технологии</li>
                <li>тем, кто выбирает новые модели</li>
                <li>гибриды и электромобили</li>
              </ul>
            </div>
          </div>
          <div class="country-cta">
            <h2>Подберём автомобиль из Китая под ваш бюджет</h2>
            <p>Покажем современные модели, сравним комплектации и заранее рассчитаем итоговую стоимость.</p>
            <button type="button" class="btn btn--primary" data-open-form data-form-title="Получить подборку из Китая" data-form-source="Страница / Китай / CTA" data-form-country="Китай" data-form-button-text="Получить подборку">
              Получить подборку
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
