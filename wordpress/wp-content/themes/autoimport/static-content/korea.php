<?php
/** Static markup from korea.html */
if ( ! defined( 'ABSPATH' ) ) { exit; }
$autoimport_page_meta = array( 'title' => 'Автомобили из Кореи под ключ — AutoImport', 'description' => null, 'extra_head' => '', 'has_quiz' => false, 'has_swiper' => false );
?>
<section class="country-hero">
        <div class="container country-hero__grid">
          <div class="country-hero__content">
            <p class="eyebrow">Авто из Кореи</p>
            <h1>Автомобили из Кореи под ключ</h1>
            <p class="subtitle">
              Привезём надёжный и комфортный автомобиль из Кореи под ключ за 20–45 дней — с проверкой перед покупкой и экономией до 1&nbsp;500&nbsp;000&nbsp;₽.
            </p>
            <div class="btn-row">
              <button type="button" class="btn btn--primary" data-open-form data-form-title="Подобрать авто из Кореи" data-form-source="Страница / Корея" data-form-country="Корея" data-form-button-text="Подобрать авто">
                Подобрать авто из Кореи
              </button>
              <a class="btn btn--outline" href="#country-catalog">Смотреть каталог</a>
            </div>
            <div class="country-stats">
              <div><strong>20–45</strong><span>дней в среднем</span></div>
              <div><strong>до 1,5 млн ₽</strong><span>экономии</span></div>
              <div><strong>от 200 тыс ₽</strong><span>логистика</span></div>
            </div>
          </div>
          <div class="country-hero__media">
            <img src="<?php echo esc_url( autoimport_asset_uri( 'assets/family-car.jpg' ) ); ?>" alt="Автомобиль из Кореи" />
          </div>
        </div>
      </section>

      <section id="country-catalog" class="section section--tight-top country-catalog section-anchor" data-country-catalog data-country="Корея" data-country-page-size="3">
        <div class="container">
          <div class="section-heading-row">
            <div>
              <p class="eyebrow">Каталог</p>
              <h2>Каталог автомобилей из Кореи</h2>
            </div>
            <p style="color: var(--text-muted); max-width: 520px">Актуальные кроссоверы и седаны с корейского рынка — с фильтрами по марке, цене и характеристикам.</p>
          </div>

          <p class="eyebrow">Фильтр по марке</p>
          <div class="brands-scroll-wrap" aria-label="Марки Корея">
            <div class="brands-scroll country-brands">
              <button type="button" class="country-brand-chip is-active" data-country-brand="">Все марки</button>
              <button type="button" class="country-brand-chip" data-country-brand="Hyundai">Hyundai</button>
              <button type="button" class="country-brand-chip" data-country-brand="Kia">Kia</button>
              <button type="button" class="country-brand-chip" data-country-brand="Genesis">Genesis</button>
              <button type="button" class="country-brand-chip" data-country-brand="Toyota">Toyota</button>
            </div>
          </div>

          <div class="filters-grid country-filters" data-country-filters>
            <div class="country-catalog__locked">
              <label>Страна</label>
              <select data-country-filter="country" disabled>
                <option selected>Корея</option>
              </select>
            </div>
            <div>
              <label>Марка</label>
              <select data-country-filter="brand">
                <option value="">Любая</option>
                <option>Hyundai</option><option>Kia</option><option>Genesis</option><option>Toyota</option>
              </select>
            </div>
            <div>
              <label>Модель</label>
              <select data-country-filter="model">
                <option value="">Любая</option>
                <option>Tucson</option><option>Sportage</option><option>RAV4</option><option>GV70</option><option>Sorento</option><option>Santa Fe</option>
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
              data-brand="Hyundai"
              data-model="Tucson"
              data-price="3-5"
              data-year="2020-2022"
              data-mileage="80"
              data-body="Кроссовер"
              data-drive="Полный"
              data-fuel="Бензин"
              data-power="160-"
              data-volume="2-">
              <div class="car-card__img">
                <span class="car-badge car-badge--korea">Из Кореи</span>
                <img src="<?php echo esc_url( autoimport_asset_uri( 'assets/hyundai-tucson.png' ) ); ?>" alt="Hyundai Tucson" loading="lazy" />
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
                <p class="car-card__desc">Универсальный кроссовер с богатой комплектацией</p>
                <span class="tag">Семейный</span>
                <div class="car-card__actions">
                  <a class="btn btn--outline" href="<?php echo esc_url( home_url( '/catalog/hyundai-tucson-2022' ) ); ?>">Подробнее</a>
                  <button type="button" class="btn btn--primary" data-open-form data-form-title="Рассчитаем стоимость Hyundai Tucson под ключ" data-form-type="Расчёт" data-form-source="Страница / Корея / Каталог" data-form-car="Hyundai Tucson" data-form-country="Корея" data-form-button-text="Получить расчёт по авто">Получить расчёт по авто</button>
                </div>
              </div>
            </article>
            <article class="car-card" data-catalog-car
              data-brand="Kia"
              data-model="Sportage"
              data-price="3-5"
              data-year="2020-2022"
              data-mileage="80"
              data-body="Кроссовер"
              data-drive="Полный"
              data-fuel="Бензин"
              data-power="160-"
              data-volume="2-">
              <div class="car-card__img">
                <span class="car-badge car-badge--korea">Из Кореи</span>
                <img src="<?php echo esc_url( autoimport_asset_uri( 'assets/family-car.jpg' ) ); ?>" alt="Kia Sportage" loading="lazy" />
              </div>
              <div class="car-card__body">
                <h3 class="mt-0">Kia Sportage</h3>
                <p class="car-card__price"><strong>от 2&nbsp;750&nbsp;000&nbsp;₽ под ключ</strong></p>
                <ul class="car-specs" aria-label="Характеристики">
                  <li class="car-specs__item" title="Год выпуска">
                    <span class="car-specs__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><rect x="3" y="4" width="18" height="18" rx="2"/><path d="M16 2v4M8 2v4M3 10h18"/></svg></span>
                    <span class="car-specs__value">2022</span>
                  </li>
                  <li class="car-specs__item" title="Пробег">
                    <span class="car-specs__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/></svg></span>
                    <span class="car-specs__value">38&nbsp;000 км</span>
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
                <p class="car-card__desc">Практичный семейный кроссовер с выгодной ценой ввоза</p>
                <span class="tag">Семейный</span>
                <div class="car-card__actions">
                  <a class="btn btn--outline" href="<?php echo esc_url( home_url( '/catalog' ) ); ?>">Подробнее</a>
                  <button type="button" class="btn btn--primary" data-open-form data-form-title="Рассчитаем стоимость Kia Sportage под ключ" data-form-type="Расчёт" data-form-source="Страница / Корея / Каталог" data-form-car="Kia Sportage" data-form-country="Корея" data-form-button-text="Получить расчёт по авто">Получить расчёт по авто</button>
                </div>
              </div>
            </article>
            <article class="car-card" data-catalog-car
              data-brand="Toyota"
              data-model="RAV4"
              data-price="3-5"
              data-year="2020-2022"
              data-mileage="80"
              data-body="Кроссовер"
              data-drive="Полный"
              data-fuel="Бензин"
              data-power="160-"
              data-volume="2-">
              <div class="car-card__img">
                <span class="car-badge car-badge--korea">Из Кореи</span>
                <img src="<?php echo esc_url( autoimport_asset_uri( 'assets/toyota.webp' ) ); ?>" alt="Toyota RAV4" loading="lazy" />
              </div>
              <div class="car-card__body">
                <h3 class="mt-0">Toyota RAV4</h3>
                <p class="car-card__price"><strong>от 2&nbsp;990&nbsp;000&nbsp;₽ под ключ</strong></p>
                <ul class="car-specs" aria-label="Характеристики">
                  <li class="car-specs__item" title="Год выпуска">
                    <span class="car-specs__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><rect x="3" y="4" width="18" height="18" rx="2"/><path d="M16 2v4M8 2v4M3 10h18"/></svg></span>
                    <span class="car-specs__value">2020</span>
                  </li>
                  <li class="car-specs__item" title="Пробег">
                    <span class="car-specs__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/></svg></span>
                    <span class="car-specs__value">64&nbsp;000 км</span>
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
                    <span class="car-specs__value">2.0 л (152 л.с.)</span>
                  </li>
                  <li class="car-specs__item" title="Тип топлива">
                    <span class="car-specs__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><path d="M6 3h8v18H6z"/><path d="M14 7h2l2 4v10h-4"/></svg></span>
                    <span class="car-specs__value">Бензин</span>
                  </li>
                </ul>
                <p class="car-card__desc">Надёжный кроссовер с высокой ликвидностью</p>
                <span class="tag">Надёжный</span>
                <div class="car-card__actions">
                  <a class="btn btn--outline" href="<?php echo esc_url( home_url( '/catalog' ) ); ?>">Подробнее</a>
                  <button type="button" class="btn btn--primary" data-open-form data-form-title="Рассчитаем стоимость Toyota RAV4 под ключ" data-form-type="Расчёт" data-form-source="Страница / Корея / Каталог" data-form-car="Toyota RAV4" data-form-country="Корея" data-form-button-text="Получить расчёт по авто">Получить расчёт по авто</button>
                </div>
              </div>
            </article>
            <article class="car-card" data-catalog-car
              data-brand="Genesis"
              data-model="GV70"
              data-price="3-5"
              data-year="2020-2022"
              data-mileage="80"
              data-body="Кроссовер"
              data-drive="Полный"
              data-fuel="Бензин"
              data-power="250+"
              data-volume="2+">
              <div class="car-card__img">
                <span class="car-badge car-badge--korea">Из Кореи</span>
                <img src="<?php echo esc_url( autoimport_asset_uri( 'assets/bmw-x3.jpg' ) ); ?>" alt="Genesis GV70" loading="lazy" />
              </div>
              <div class="car-card__body">
                <h3 class="mt-0">Genesis GV70</h3>
                <p class="car-card__price"><strong>от 4&nbsp;200&nbsp;000&nbsp;₽ под ключ</strong></p>
                <ul class="car-specs" aria-label="Характеристики">
                  <li class="car-specs__item" title="Год выпуска">
                    <span class="car-specs__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><rect x="3" y="4" width="18" height="18" rx="2"/><path d="M16 2v4M8 2v4M3 10h18"/></svg></span>
                    <span class="car-specs__value">2022</span>
                  </li>
                  <li class="car-specs__item" title="Пробег">
                    <span class="car-specs__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/></svg></span>
                    <span class="car-specs__value">31&nbsp;000 км</span>
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
                    <span class="car-specs__value">2.5 л (304 л.с.)</span>
                  </li>
                  <li class="car-specs__item" title="Тип топлива">
                    <span class="car-specs__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><path d="M6 3h8v18H6z"/><path d="M14 7h2l2 4v10h-4"/></svg></span>
                    <span class="car-specs__value">Бензин</span>
                  </li>
                </ul>
                <p class="car-card__desc">Премиальный кроссовер с богатым оснащением</p>
                <span class="tag">Премиум</span>
                <div class="car-card__actions">
                  <a class="btn btn--outline" href="<?php echo esc_url( home_url( '/catalog' ) ); ?>">Подробнее</a>
                  <button type="button" class="btn btn--primary" data-open-form data-form-title="Рассчитаем стоимость Genesis GV70 под ключ" data-form-type="Расчёт" data-form-source="Страница / Корея / Каталог" data-form-car="Genesis GV70" data-form-country="Корея" data-form-button-text="Получить расчёт по авто">Получить расчёт по авто</button>
                </div>
              </div>
            </article>
            <article class="car-card" data-catalog-car
              data-brand="Kia"
              data-model="Sorento"
              data-price="3-5"
              data-year="2020-2022"
              data-mileage="80"
              data-body="Кроссовер"
              data-drive="Полный"
              data-fuel="Дизель"
              data-power="160-250"
              data-volume="2+">
              <div class="car-card__img">
                <span class="car-badge car-badge--korea">Из Кореи</span>
                <img src="<?php echo esc_url( autoimport_asset_uri( 'assets/family-car.jpg' ) ); ?>" alt="Kia Sorento" loading="lazy" />
              </div>
              <div class="car-card__body">
                <h3 class="mt-0">Kia Sorento</h3>
                <p class="car-card__price"><strong>от 3&nbsp;150&nbsp;000&nbsp;₽ под ключ</strong></p>
                <ul class="car-specs" aria-label="Характеристики">
                  <li class="car-specs__item" title="Год выпуска">
                    <span class="car-specs__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><rect x="3" y="4" width="18" height="18" rx="2"/><path d="M16 2v4M8 2v4M3 10h18"/></svg></span>
                    <span class="car-specs__value">2021</span>
                  </li>
                  <li class="car-specs__item" title="Пробег">
                    <span class="car-specs__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/></svg></span>
                    <span class="car-specs__value">52&nbsp;000 км</span>
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
                    <span class="car-specs__value">2.2 л (200 л.с.)</span>
                  </li>
                  <li class="car-specs__item" title="Тип топлива">
                    <span class="car-specs__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><path d="M6 3h8v18H6z"/><path d="M14 7h2l2 4v10h-4"/></svg></span>
                    <span class="car-specs__value">Дизель</span>
                  </li>
                </ul>
                <p class="car-card__desc">Семиместный кроссовер для большой семьи</p>
                <span class="tag">7 мест</span>
                <div class="car-card__actions">
                  <a class="btn btn--outline" href="<?php echo esc_url( home_url( '/catalog' ) ); ?>">Подробнее</a>
                  <button type="button" class="btn btn--primary" data-open-form data-form-title="Рассчитаем стоимость Kia Sorento под ключ" data-form-type="Расчёт" data-form-source="Страница / Корея / Каталог" data-form-car="Kia Sorento" data-form-country="Корея" data-form-button-text="Получить расчёт по авто">Получить расчёт по авто</button>
                </div>
              </div>
            </article>
            <article class="car-card" data-catalog-car
              data-brand="Hyundai"
              data-model="Santa Fe"
              data-price="3-5"
              data-year="2023-2025"
              data-mileage="30"
              data-body="Кроссовер"
              data-drive="Полный"
              data-fuel="Бензин"
              data-power="160-250"
              data-volume="2+">
              <div class="car-card__img">
                <span class="car-badge car-badge--korea">Из Кореи</span>
                <img src="<?php echo esc_url( autoimport_asset_uri( 'assets/hyundai-tucson.png' ) ); ?>" alt="Hyundai Santa Fe" loading="lazy" />
              </div>
              <div class="car-card__body">
                <h3 class="mt-0">Hyundai Santa Fe</h3>
                <p class="car-card__price"><strong>от 3&nbsp;050&nbsp;000&nbsp;₽ под ключ</strong></p>
                <ul class="car-specs" aria-label="Характеристики">
                  <li class="car-specs__item" title="Год выпуска">
                    <span class="car-specs__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><rect x="3" y="4" width="18" height="18" rx="2"/><path d="M16 2v4M8 2v4M3 10h18"/></svg></span>
                    <span class="car-specs__value">2023</span>
                  </li>
                  <li class="car-specs__item" title="Пробег">
                    <span class="car-specs__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/></svg></span>
                    <span class="car-specs__value">19&nbsp;000 км</span>
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
                    <span class="car-specs__value">2.5 л (180 л.с.)</span>
                  </li>
                  <li class="car-specs__item" title="Тип топлива">
                    <span class="car-specs__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><path d="M6 3h8v18H6z"/><path d="M14 7h2l2 4v10h-4"/></svg></span>
                    <span class="car-specs__value">Бензин</span>
                  </li>
                </ul>
                <p class="car-card__desc">Вместительный кроссовер с комфортным салоном</p>
                <span class="tag">Семейный</span>
                <div class="car-card__actions">
                  <a class="btn btn--outline" href="<?php echo esc_url( home_url( '/catalog' ) ); ?>">Подробнее</a>
                  <button type="button" class="btn btn--primary" data-open-form data-form-title="Рассчитаем стоимость Hyundai Santa Fe под ключ" data-form-type="Расчёт" data-form-source="Страница / Корея / Каталог" data-form-car="Hyundai Santa Fe" data-form-country="Корея" data-form-button-text="Получить расчёт по авто">Получить расчёт по авто</button>
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
          <h2>Почему выбирают Корею</h2>
          <div class="country-benefits">
            <article>
              <span>01</span>
              <h3>Свежие автомобили</h3>
              <p>Много вариантов с небольшим пробегом и понятной историей эксплуатации.</p>
            </article>
            <article>
              <span>02</span>
              <h3>Богатые комплектации</h3>
              <p>За тот же бюджет часто доступны версии с лучшими опциями, чем на рынке РФ.</p>
            </article>
            <article>
              <span>03</span>
              <h3>Семейные и бизнес-модели</h3>
              <p>Кроссоверы, седаны и минивэны для города, семьи и дальних поездок.</p>
            </article>
            <article>
              <span>04</span>
              <h3>Аккуратная эксплуатация</h3>
              <p>Меньше агрессивной эксплуатации и проще найти ухоженный автомобиль.</p>
            </article>
          </div>
        </div>
      </section>

      <section class="section country-process">
        <div class="container">
          <div class="section-heading-row">
            <div>
              <p class="eyebrow">Процесс</p>
              <h2>Как покупают автомобили в Корее</h2>
            </div>
            <p>
              Автомобили подбираются на внутреннем рынке: дилеры и проверенные площадки.
            </p>
          </div>
          <div class="steps">
            <article class="step-card">
              <span class="step-card__num">1</span>
              <h3>Подбор вариантов</h3>
              <p>Формируем подборку под бюджет, задачи и желаемые параметры.</p>
            </article>
            <article class="step-card">
              <span class="step-card__num">2</span>
              <h3>Проверка авто</h3>
              <p>Смотрим состояние, историю, комплектацию и реальные фото.</p>
            </article>
            <article class="step-card">
              <span class="step-card__num">3</span>
              <h3>Согласование</h3>
              <p>Показываем итоговую стоимость и все обязательные расходы.</p>
            </article>
            <article class="step-card">
              <span class="step-card__num">4</span>
              <h3>Выкуп</h3>
              <p>Выкупаем автомобиль только после вашего подтверждения.</p>
            </article>
          </div>
        </div>
      </section>

      <section class="section">
        <div class="container delivery-panel">
          <div>
            <p class="eyebrow">Доставка</p>
            <h2>Как доставляют из Кореи</h2>
            <p>
              Основной способ — морская перевозка.
            </p>
          </div>
          <div class="delivery-panel__list">
            <span>Доставка авто до порта в Корее</span>
            <span>Морская перевозка во Владивосток</span>
            <span>Таможенное оформление</span>
            <span>Доставка по России (автовоз / ЖД)</span>
          </div>
          <div class="delivery-panel__meta">
            <div>
              <strong>Сроки</strong>
              <span>20–45 дней</span>
            </div>
            <div>
              <strong>Стоимость</strong>
              <span>Логистика — от 200&nbsp;000&nbsp;₽</span>
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
                <li>проверка автомобиля до покупки</li>
                <li>понятные этапы сделки</li>
                <li>страхование на этапе доставки</li>
              </ul>
            </div>
            <div class="fit-card fit-card--no">
              <div class="fit-card__head">
                <span class="fit-card__icon" aria-hidden="true">✓</span>
                <h3>Кому подходит</h3>
              </div>
              <ul>
                <li>семейные покупатели</li>
                <li>кому важны комплектация и состояние</li>
                <li>кто хочет максимум за свой бюджет</li>
              </ul>
            </div>
          </div>
          <div class="country-cta">
            <h2>Подберём автомобиль из Кореи под ваш бюджет</h2>
            <p>Покажем реальные варианты, рассчитаем стоимость под ключ и объясним, где получится сэкономить.</p>
            <button type="button" class="btn btn--primary" data-open-form data-form-title="Получить подборку из Кореи" data-form-source="Страница / Корея / CTA" data-form-country="Корея" data-form-button-text="Получить подборку">
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
