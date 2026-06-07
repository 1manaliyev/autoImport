<?php
/** Static markup from europe.html */
if ( ! defined( 'ABSPATH' ) ) { exit; }
$autoimport_page_meta = array( 'title' => 'Автомобили из Европы под ключ — AutoImport', 'description' => null, 'extra_head' => '', 'has_quiz' => false, 'has_swiper' => false );
?>
<section class="country-hero">
        <div class="container country-hero__grid">
          <div class="country-hero__content">
            <p class="eyebrow">Авто из Европы</p>
            <h1>Автомобили из Европы под ключ</h1>
            <p class="subtitle">
              Привезём автомобиль из Европы под ключ — прозрачная история, лучшее состояние и комплектации. Доставка от 30 дней и выгода от 500&nbsp;000&nbsp;₽.
            </p>
            <div class="btn-row">
              <button type="button" class="btn btn--primary" data-open-form data-form-title="Подобрать авто из Европы" data-form-source="Страница / Европа" data-form-country="Европа" data-form-button-text="Подобрать авто">
                Подобрать авто из Европы
              </button>
              <a class="btn btn--outline" href="#country-catalog">Смотреть каталог</a>
            </div>
            <div class="country-stats">
              <div><strong>от 30</strong><span>дней доставка</span></div>
              <div><strong>от 500 тыс ₽</strong><span>выгоды</span></div>
              <div><strong>от 250 тыс ₽</strong><span>логистика</span></div>
            </div>
          </div>
          <div class="country-hero__media">
            <img src="<?php echo esc_url( autoimport_asset_uri( 'assets/bmw-x3.jpg' ) ); ?>" alt="Автомобиль из Европы" />
          </div>
        </div>
      </section>

      <section id="country-catalog" class="section section--tight-top country-catalog section-anchor" data-country-catalog data-country="Европа" data-country-page-size="3">
        <div class="container">
          <div class="section-heading-row">
            <div>
              <p class="eyebrow">Каталог</p>
              <h2>Каталог автомобилей из Европы</h2>
            </div>
            <p style="color: var(--text-muted); max-width: 520px">Премиальные и практичные модели из ЕС с проверкой истории и прозрачным расчётом.</p>
          </div>

          <p class="eyebrow">Фильтр по марке</p>
          <div class="brands-scroll-wrap" aria-label="Марки Европа">
            <div class="brands-scroll country-brands">
              <button type="button" class="country-brand-chip is-active" data-country-brand="">Все марки</button>
              <button type="button" class="country-brand-chip" data-country-brand="BMW">BMW</button>
              <button type="button" class="country-brand-chip" data-country-brand="Mercedes-Benz">Mercedes-Benz</button>
              <button type="button" class="country-brand-chip" data-country-brand="Audi">Audi</button>
              <button type="button" class="country-brand-chip" data-country-brand="Volkswagen">Volkswagen</button>
              <button type="button" class="country-brand-chip" data-country-brand="Skoda">Skoda</button>
            </div>
          </div>

          <div class="filters-grid country-filters" data-country-filters>
            <div class="country-catalog__locked">
              <label>Страна</label>
              <select data-country-filter="country" disabled>
                <option selected>Европа</option>
              </select>
            </div>
            <div>
              <label>Марка</label>
              <select data-country-filter="brand">
                <option value="">Любая</option>
                <option>BMW</option><option>Mercedes-Benz</option><option>Audi</option><option>Volkswagen</option><option>Skoda</option>
              </select>
            </div>
            <div>
              <label>Модель</label>
              <select data-country-filter="model">
                <option value="">Любая</option>
                <option>X3</option><option>GLC</option><option>Tiguan</option><option>Q5</option><option>Kodiaq</option><option>3 Series</option>
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
              data-brand="BMW"
              data-model="X3"
              data-price="3-5"
              data-year="2020-2022"
              data-mileage="30"
              data-body="Кроссовер"
              data-drive="Полный"
              data-fuel="Бензин"
              data-power="160-250"
              data-volume="2-">
              <div class="car-card__img">
                <span class="car-badge car-badge--europe">Из Европы</span>
                <img src="<?php echo esc_url( autoimport_asset_uri( 'assets/bmw-x3.jpg' ) ); ?>" alt="BMW X3" loading="lazy" />
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
                <p class="car-card__desc">Премиальный SUV без переплаты рынку РФ</p>
                <span class="tag">Премиум</span>
                <div class="car-card__actions">
                  <a class="btn btn--outline" href="<?php echo esc_url( home_url( '/catalog' ) ); ?>">Подробнее</a>
                  <button type="button" class="btn btn--primary" data-open-form data-form-title="Рассчитаем стоимость BMW X3 под ключ" data-form-type="Расчёт" data-form-source="Страница / Европа / Каталог" data-form-car="BMW X3" data-form-country="Европа" data-form-button-text="Получить расчёт по авто">Получить расчёт по авто</button>
                </div>
              </div>
            </article>
            <article class="car-card" data-catalog-car
              data-brand="Mercedes-Benz"
              data-model="GLC"
              data-price="3-5"
              data-year="2020-2022"
              data-mileage="80"
              data-body="Кроссовер"
              data-drive="Полный"
              data-fuel="Бензин"
              data-power="160-250"
              data-volume="2-">
              <div class="car-card__img">
                <span class="car-badge car-badge--europe">Из Европы</span>
                <img src="<?php echo esc_url( autoimport_asset_uri( 'assets/bmw-x3.jpg' ) ); ?>" alt="Mercedes-Benz GLC" loading="lazy" />
              </div>
              <div class="car-card__body">
                <h3 class="mt-0">Mercedes-Benz GLC</h3>
                <p class="car-card__price"><strong>от 4&nbsp;800&nbsp;000&nbsp;₽ под ключ</strong></p>
                <ul class="car-specs" aria-label="Характеристики">
                  <li class="car-specs__item" title="Год выпуска">
                    <span class="car-specs__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><rect x="3" y="4" width="18" height="18" rx="2"/><path d="M16 2v4M8 2v4M3 10h18"/></svg></span>
                    <span class="car-specs__value">2020</span>
                  </li>
                  <li class="car-specs__item" title="Пробег">
                    <span class="car-specs__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/></svg></span>
                    <span class="car-specs__value">35&nbsp;000 км</span>
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
                    <span class="car-specs__value">2.0 л (258 л.с.)</span>
                  </li>
                  <li class="car-specs__item" title="Тип топлива">
                    <span class="car-specs__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><path d="M6 3h8v18H6z"/><path d="M14 7h2l2 4v10h-4"/></svg></span>
                    <span class="car-specs__value">Бензин</span>
                  </li>
                </ul>
                <p class="car-card__desc">Комфортный кроссовер с сильной комплектацией</p>
                <span class="tag">Комфорт</span>
                <div class="car-card__actions">
                  <a class="btn btn--outline" href="<?php echo esc_url( home_url( '/catalog' ) ); ?>">Подробнее</a>
                  <button type="button" class="btn btn--primary" data-open-form data-form-title="Рассчитаем стоимость Mercedes-Benz GLC под ключ" data-form-type="Расчёт" data-form-source="Страница / Европа / Каталог" data-form-car="Mercedes-Benz GLC" data-form-country="Европа" data-form-button-text="Получить расчёт по авто">Получить расчёт по авто</button>
                </div>
              </div>
            </article>
            <article class="car-card" data-catalog-car
              data-brand="Volkswagen"
              data-model="Tiguan"
              data-price="3-5"
              data-year="2020-2022"
              data-mileage="80"
              data-body="Кроссовер"
              data-drive="Полный"
              data-fuel="Бензин"
              data-power="160-250"
              data-volume="2-">
              <div class="car-card__img">
                <span class="car-badge car-badge--europe">Из Европы</span>
                <img src="<?php echo esc_url( autoimport_asset_uri( 'assets/hyundai-tucson.png' ) ); ?>" alt="Volkswagen Tiguan" loading="lazy" />
              </div>
              <div class="car-card__body">
                <h3 class="mt-0">Volkswagen Tiguan</h3>
                <p class="car-card__price"><strong>от 3&nbsp;400&nbsp;000&nbsp;₽ под ключ</strong></p>
                <ul class="car-specs" aria-label="Характеристики">
                  <li class="car-specs__item" title="Год выпуска">
                    <span class="car-specs__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><rect x="3" y="4" width="18" height="18" rx="2"/><path d="M16 2v4M8 2v4M3 10h18"/></svg></span>
                    <span class="car-specs__value">2021</span>
                  </li>
                  <li class="car-specs__item" title="Пробег">
                    <span class="car-specs__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/></svg></span>
                    <span class="car-specs__value">41&nbsp;000 км</span>
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
                    <span class="car-specs__value">2.0 л (190 л.с.)</span>
                  </li>
                  <li class="car-specs__item" title="Тип топлива">
                    <span class="car-specs__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><path d="M6 3h8v18H6z"/><path d="M14 7h2l2 4v10h-4"/></svg></span>
                    <span class="car-specs__value">Бензин</span>
                  </li>
                </ul>
                <p class="car-card__desc">Универсальный европейский кроссовер для семьи</p>
                <span class="tag">Семейный</span>
                <div class="car-card__actions">
                  <a class="btn btn--outline" href="<?php echo esc_url( home_url( '/catalog' ) ); ?>">Подробнее</a>
                  <button type="button" class="btn btn--primary" data-open-form data-form-title="Рассчитаем стоимость Volkswagen Tiguan под ключ" data-form-type="Расчёт" data-form-source="Страница / Европа / Каталог" data-form-car="Volkswagen Tiguan" data-form-country="Европа" data-form-button-text="Получить расчёт по авто">Получить расчёт по авто</button>
                </div>
              </div>
            </article>
            <article class="car-card" data-catalog-car
              data-brand="Audi"
              data-model="Q5"
              data-price="3-5"
              data-year="2020-2022"
              data-mileage="80"
              data-body="Кроссовер"
              data-drive="Полный"
              data-fuel="Бензин"
              data-power="160-250"
              data-volume="2-">
              <div class="car-card__img">
                <span class="car-badge car-badge--europe">Из Европы</span>
                <img src="<?php echo esc_url( autoimport_asset_uri( 'assets/bmw-x3.jpg' ) ); ?>" alt="Audi Q5" loading="lazy" />
              </div>
              <div class="car-card__body">
                <h3 class="mt-0">Audi Q5</h3>
                <p class="car-card__price"><strong>от 4&nbsp;150&nbsp;000&nbsp;₽ под ключ</strong></p>
                <ul class="car-specs" aria-label="Характеристики">
                  <li class="car-specs__item" title="Год выпуска">
                    <span class="car-specs__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><rect x="3" y="4" width="18" height="18" rx="2"/><path d="M16 2v4M8 2v4M3 10h18"/></svg></span>
                    <span class="car-specs__value">2021</span>
                  </li>
                  <li class="car-specs__item" title="Пробег">
                    <span class="car-specs__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/></svg></span>
                    <span class="car-specs__value">33&nbsp;000 км</span>
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
                <p class="car-card__desc">Сбалансированный премиум-кроссовер из ЕС</p>
                <span class="tag">Премиум</span>
                <div class="car-card__actions">
                  <a class="btn btn--outline" href="<?php echo esc_url( home_url( '/catalog' ) ); ?>">Подробнее</a>
                  <button type="button" class="btn btn--primary" data-open-form data-form-title="Рассчитаем стоимость Audi Q5 под ключ" data-form-type="Расчёт" data-form-source="Страница / Европа / Каталог" data-form-car="Audi Q5" data-form-country="Европа" data-form-button-text="Получить расчёт по авто">Получить расчёт по авто</button>
                </div>
              </div>
            </article>
            <article class="car-card" data-catalog-car
              data-brand="Skoda"
              data-model="Kodiaq"
              data-price="3-5"
              data-year="2020-2022"
              data-mileage="80"
              data-body="Кроссовер"
              data-drive="Полный"
              data-fuel="Дизель"
              data-power="160-250"
              data-volume="2-">
              <div class="car-card__img">
                <span class="car-badge car-badge--europe">Из Европы</span>
                <img src="<?php echo esc_url( autoimport_asset_uri( 'assets/family-car.jpg' ) ); ?>" alt="Skoda Kodiaq" loading="lazy" />
              </div>
              <div class="car-card__body">
                <h3 class="mt-0">Skoda Kodiaq</h3>
                <p class="car-card__price"><strong>от 3&nbsp;250&nbsp;000&nbsp;₽ под ключ</strong></p>
                <ul class="car-specs" aria-label="Характеристики">
                  <li class="car-specs__item" title="Год выпуска">
                    <span class="car-specs__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><rect x="3" y="4" width="18" height="18" rx="2"/><path d="M16 2v4M8 2v4M3 10h18"/></svg></span>
                    <span class="car-specs__value">2020</span>
                  </li>
                  <li class="car-specs__item" title="Пробег">
                    <span class="car-specs__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/></svg></span>
                    <span class="car-specs__value">48&nbsp;000 км</span>
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
                    <span class="car-specs__value">2.0 л (190 л.с.)</span>
                  </li>
                  <li class="car-specs__item" title="Тип топлива">
                    <span class="car-specs__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><path d="M6 3h8v18H6z"/><path d="M14 7h2l2 4v10h-4"/></svg></span>
                    <span class="car-specs__value">Дизель</span>
                  </li>
                </ul>
                <p class="car-card__desc">Практичный семиместный кроссовер по выгодной цене</p>
                <span class="tag">7 мест</span>
                <div class="car-card__actions">
                  <a class="btn btn--outline" href="<?php echo esc_url( home_url( '/catalog' ) ); ?>">Подробнее</a>
                  <button type="button" class="btn btn--primary" data-open-form data-form-title="Рассчитаем стоимость Skoda Kodiaq под ключ" data-form-type="Расчёт" data-form-source="Страница / Европа / Каталог" data-form-car="Skoda Kodiaq" data-form-country="Европа" data-form-button-text="Получить расчёт по авто">Получить расчёт по авто</button>
                </div>
              </div>
            </article>
            <article class="car-card" data-catalog-car
              data-brand="BMW"
              data-model="3 Series"
              data-price="3-5"
              data-year="2020-2022"
              data-mileage="30"
              data-body="Седан"
              data-drive="Задний"
              data-fuel="Бензин"
              data-power="160-250"
              data-volume="2-">
              <div class="car-card__img">
                <span class="car-badge car-badge--europe">Из Европы</span>
                <img src="<?php echo esc_url( autoimport_asset_uri( 'assets/toyota.webp' ) ); ?>" alt="BMW 3 Series" loading="lazy" />
              </div>
              <div class="car-card__body">
                <h3 class="mt-0">BMW 3 Series</h3>
                <p class="car-card__price"><strong>от 3&nbsp;600&nbsp;000&nbsp;₽ под ключ</strong></p>
                <ul class="car-specs" aria-label="Характеристики">
                  <li class="car-specs__item" title="Год выпуска">
                    <span class="car-specs__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><rect x="3" y="4" width="18" height="18" rx="2"/><path d="M16 2v4M8 2v4M3 10h18"/></svg></span>
                    <span class="car-specs__value">2022</span>
                  </li>
                  <li class="car-specs__item" title="Пробег">
                    <span class="car-specs__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/></svg></span>
                    <span class="car-specs__value">24&nbsp;000 км</span>
                  </li>
                  <li class="car-specs__item" title="Тип КПП">
                    <span class="car-specs__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><circle cx="12" cy="12" r="3"/><path d="M12 2v2M12 20v2M4.9 4.9l1.4 1.4M17.7 17.7l1.4 1.4M2 12h2M20 12h2M4.9 19.1l1.4-1.4M17.7 6.3l1.4-1.4"/></svg></span>
                    <span class="car-specs__value">Автомат</span>
                  </li>
                  <li class="car-specs__item" title="Привод">
                    <span class="car-specs__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><circle cx="7" cy="17" r="2"/><circle cx="17" cy="17" r="2"/><path d="M5 17h2l2-7h6l2 7h2M9 10l1-4h4l1 4"/></svg></span>
                    <span class="car-specs__value">Задний</span>
                  </li>
                  <li class="car-specs__item" title="Объём двигателя (л.с.)">
                    <span class="car-specs__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><path d="M8 10h8v8H8z"/><path d="M6 10V7h12v3M10 6V4M14 6V4M10 18v2M14 18v2"/></svg></span>
                    <span class="car-specs__value">2.0 л (184 л.с.)</span>
                  </li>
                  <li class="car-specs__item" title="Тип топлива">
                    <span class="car-specs__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><path d="M6 3h8v18H6z"/><path d="M14 7h2l2 4v10h-4"/></svg></span>
                    <span class="car-specs__value">Бензин</span>
                  </li>
                </ul>
                <p class="car-card__desc">Классический спортивный седан с европейской историей</p>
                <span class="tag">Седан</span>
                <div class="car-card__actions">
                  <a class="btn btn--outline" href="<?php echo esc_url( home_url( '/catalog' ) ); ?>">Подробнее</a>
                  <button type="button" class="btn btn--primary" data-open-form data-form-title="Рассчитаем стоимость BMW 3 Series под ключ" data-form-type="Расчёт" data-form-source="Страница / Европа / Каталог" data-form-car="BMW 3 Series" data-form-country="Европа" data-form-button-text="Получить расчёт по авто">Получить расчёт по авто</button>
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
          <h2>Почему выбирают Европу</h2>
          <div class="country-benefits">
            <article>
              <span>01</span>
              <h3>Понятная история</h3>
              <p>Можно проверить эксплуатацию, обслуживание, пробег и историю автомобиля.</p>
            </article>
            <article>
              <span>02</span>
              <h3>Дилерские автомобили</h3>
              <p>Много машин от дилеров и проверенных европейских площадок.</p>
            </article>
            <article>
              <span>03</span>
              <h3>Сильные комплектации</h3>
              <p>Часто доступны версии с хорошими опциями и понятным состоянием.</p>
            </article>
            <article>
              <span>04</span>
              <h3>Премиум и бизнес</h3>
              <p>Хороший выбор статусных автомобилей европейских брендов.</p>
            </article>
            <article>
              <span>05</span>
              <h3>Аккуратное состояние</h3>
              <p>Проще найти ухоженный автомобиль с прозрачным прошлым.</p>
            </article>
          </div>
        </div>
      </section>

      <section class="section country-process">
        <div class="container">
          <div class="section-heading-row">
            <div>
              <p class="eyebrow">Процесс</p>
              <h2>Как покупают автомобили в Европе</h2>
            </div>
            <p>Подбор идёт по дилерам и площадкам Европы.</p>
          </div>
          <div class="steps">
            <article class="step-card">
              <span class="step-card__num">1</span>
              <h3>Подбор авто</h3>
              <p>Ищем варианты в Германии, Франции и других странах Европы.</p>
            </article>
            <article class="step-card">
              <span class="step-card__num">2</span>
              <h3>Проверка истории</h3>
              <p>Проверяем обслуживание, пробег, ДТП и данные по VIN.</p>
            </article>
            <article class="step-card">
              <span class="step-card__num">3</span>
              <h3>Согласование</h3>
              <p>Показываем состояние, документы и итоговую стоимость.</p>
            </article>
            <article class="step-card">
              <span class="step-card__num">4</span>
              <h3>Выкуп</h3>
              <p>Выкупаем автомобиль после подтверждения клиента.</p>
            </article>
          </div>
        </div>
      </section>

      <section class="section">
        <div class="container delivery-panel">
          <div>
            <p class="eyebrow">Доставка</p>
            <h2>Как доставляют из Европы</h2>
            <p>Доставка по суше.</p>
          </div>
          <div class="delivery-panel__list">
            <span>Доставка по Европе до точки отправки</span>
            <span>Перевозка автовозом или ЖД</span>
            <span>Пересечение границы</span>
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
                <li>проверка по европейским базам (VIN, пробег, ДТП)</li>
                <li>прозрачная история автомобиля</li>
                <li>сопровождение сделки до получения</li>
              </ul>
            </div>
            <div class="fit-card fit-card--no">
              <div class="fit-card__head">
                <span class="fit-card__icon" aria-hidden="true">✓</span>
                <h3>Кому подходит</h3>
              </div>
              <ul>
                <li>премиум-сегмент</li>
                <li>статусные автомобили</li>
                <li>любители европейских брендов</li>
              </ul>
            </div>
          </div>
          <div class="country-cta">
            <h2>Подберём автомобиль из Европы под ваш бюджет</h2>
            <p>Проверим историю, подберём сильную комплектацию и заранее рассчитаем доставку под ключ.</p>
            <button type="button" class="btn btn--primary" data-open-form data-form-title="Получить подборку из Европы" data-form-source="Страница / Европа / CTA" data-form-country="Европа" data-form-button-text="Получить подборку">
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
