<?php
/** Static markup from usa.html */
if ( ! defined( 'ABSPATH' ) ) { exit; }
$autoimport_page_meta = array( 'title' => 'Автомобили из США под ключ — AutoImport', 'description' => null, 'extra_head' => '', 'has_quiz' => false, 'has_swiper' => false );
?>
<section class="country-hero">
        <div class="container country-hero__grid">
          <div class="country-hero__content">
            <p class="eyebrow">Авто из США</p>
            <h1>Автомобили из США под ключ</h1>
            <p class="subtitle">
              Привезём автомобиль из США под ключ — мощные версии и богатые комплектации с выгодой от 500&nbsp;000&nbsp;₽.
            </p>
            <div class="btn-row">
              <button type="button" class="btn btn--primary" data-open-form data-form-title="Подобрать авто из США" data-form-source="Страница / США" data-form-country="США" data-form-button-text="Подобрать авто">
                Подобрать авто из США
              </button>
              <a class="btn btn--outline" href="#country-catalog">Смотреть каталог</a>
            </div>
            <div class="country-stats">
              <div><strong>45–80</strong><span>дней доставка</span></div>
              <div><strong>от 500 тыс ₽</strong><span>выгоды</span></div>
              <div><strong>от 300 тыс ₽</strong><span>логистика</span></div>
            </div>
          </div>
          <div class="country-hero__media">
            <img src="<?php echo esc_url( autoimport_asset_uri( 'assets/Ferrari-Enzo.jpg' ) ); ?>" alt="Автомобиль из США" />
          </div>
        </div>
      </section>

      <section id="country-catalog" class="section section--tight-top country-catalog section-anchor" data-country-catalog data-country="США" data-country-page-size="3">
        <div class="container">
          <div class="section-heading-row">
            <div>
              <p class="eyebrow">Каталог</p>
              <h2>Каталог автомобилей из США</h2>
            </div>
            <p style="color: var(--text-muted); max-width: 520px">Популярные модели с аукционов и дилеров США — с фильтрами и расчётом под ключ.</p>
          </div>

          <p class="eyebrow">Фильтр по марке</p>
          <div class="brands-scroll-wrap" aria-label="Марки США">
            <div class="brands-scroll country-brands">
              <button type="button" class="country-brand-chip is-active" data-country-brand="">Все марки</button>
              <button type="button" class="country-brand-chip" data-country-brand="Ford">Ford</button>
              <button type="button" class="country-brand-chip" data-country-brand="Toyota">Toyota</button>
              <button type="button" class="country-brand-chip" data-country-brand="Chevrolet">Chevrolet</button>
              <button type="button" class="country-brand-chip" data-country-brand="Jeep">Jeep</button>
              <button type="button" class="country-brand-chip" data-country-brand="Tesla">Tesla</button>
            </div>
          </div>

          <div class="filters-grid country-filters" data-country-filters>
            <div class="country-catalog__locked">
              <label>Страна</label>
              <select data-country-filter="country" disabled>
                <option selected>США</option>
              </select>
            </div>
            <div>
              <label>Марка</label>
              <select data-country-filter="brand">
                <option value="">Любая</option>
                <option>Ford</option><option>Toyota</option><option>Chevrolet</option><option>Jeep</option><option>Tesla</option>
              </select>
            </div>
            <div>
              <label>Модель</label>
              <select data-country-filter="model">
                <option value="">Любая</option>
                <option>Mustang</option><option>Camry</option><option>Grand Cherokee</option><option>Model 3</option><option>Tahoe</option><option>Explorer</option>
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
              data-brand="Ford"
              data-model="Mustang"
              data-price="3-5"
              data-year="2020-2022"
              data-mileage="30"
              data-body="Седан"
              data-drive="Задний"
              data-fuel="Бензин"
              data-power="250+"
              data-volume="2+">
              <div class="car-card__img">
                <span class="car-badge car-badge--usa">Из США</span>
                <img src="<?php echo esc_url( autoimport_asset_uri( 'assets/bmw-x3.jpg' ) ); ?>" alt="Ford Mustang" loading="lazy" />
              </div>
              <div class="car-card__body">
                <h3 class="mt-0">Ford Mustang</h3>
                <p class="car-card__price"><strong>от 3&nbsp;900&nbsp;000&nbsp;₽ под ключ</strong></p>
                <ul class="car-specs" aria-label="Характеристики">
                  <li class="car-specs__item" title="Год выпуска">
                    <span class="car-specs__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><rect x="3" y="4" width="18" height="18" rx="2"/><path d="M16 2v4M8 2v4M3 10h18"/></svg></span>
                    <span class="car-specs__value">2021</span>
                  </li>
                  <li class="car-specs__item" title="Пробег">
                    <span class="car-specs__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/></svg></span>
                    <span class="car-specs__value">22&nbsp;000 км</span>
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
                    <span class="car-specs__value">2.3 л (310 л.с.)</span>
                  </li>
                  <li class="car-specs__item" title="Тип топлива">
                    <span class="car-specs__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><path d="M6 3h8v18H6z"/><path d="M14 7h2l2 4v10h-4"/></svg></span>
                    <span class="car-specs__value">Бензин</span>
                  </li>
                </ul>
                <p class="car-card__desc">Культовый спорткар с понятной историей</p>
                <span class="tag">Спорт</span>
                <div class="car-card__actions">
                  <a class="btn btn--outline" href="<?php echo esc_url( home_url( '/catalog' ) ); ?>">Подробнее</a>
                  <button type="button" class="btn btn--primary" data-open-form data-form-title="Рассчитаем стоимость Ford Mustang под ключ" data-form-type="Расчёт" data-form-source="Страница / США / Каталог" data-form-car="Ford Mustang" data-form-country="США" data-form-button-text="Получить расчёт по авто">Получить расчёт по авто</button>
                </div>
              </div>
            </article>
            <article class="car-card" data-catalog-car
              data-brand="Toyota"
              data-model="Camry"
              data-price="3-5"
              data-year="2020-2022"
              data-mileage="30"
              data-body="Седан"
              data-drive="Передний"
              data-fuel="Бензин"
              data-power="160-250"
              data-volume="2+">
              <div class="car-card__img">
                <span class="car-badge car-badge--usa">Из США</span>
                <img src="<?php echo esc_url( autoimport_asset_uri( 'assets/toyota.webp' ) ); ?>" alt="Toyota Camry" loading="lazy" />
              </div>
              <div class="car-card__body">
                <h3 class="mt-0">Toyota Camry</h3>
                <p class="car-card__price"><strong>от 2&nbsp;850&nbsp;000&nbsp;₽ под ключ</strong></p>
                <ul class="car-specs" aria-label="Характеристики">
                  <li class="car-specs__item" title="Год выпуска">
                    <span class="car-specs__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><rect x="3" y="4" width="18" height="18" rx="2"/><path d="M16 2v4M8 2v4M3 10h18"/></svg></span>
                    <span class="car-specs__value">2022</span>
                  </li>
                  <li class="car-specs__item" title="Пробег">
                    <span class="car-specs__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/></svg></span>
                    <span class="car-specs__value">18&nbsp;000 км</span>
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
                    <span class="car-specs__value">2.5 л (203 л.с.)</span>
                  </li>
                  <li class="car-specs__item" title="Тип топлива">
                    <span class="car-specs__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><path d="M6 3h8v18H6z"/><path d="M14 7h2l2 4v10h-4"/></svg></span>
                    <span class="car-specs__value">Бензин</span>
                  </li>
                </ul>
                <p class="car-card__desc">Надёжный седан для города и трассы</p>
                <span class="tag">Седан</span>
                <div class="car-card__actions">
                  <a class="btn btn--outline" href="<?php echo esc_url( home_url( '/catalog' ) ); ?>">Подробнее</a>
                  <button type="button" class="btn btn--primary" data-open-form data-form-title="Рассчитаем стоимость Toyota Camry под ключ" data-form-type="Расчёт" data-form-source="Страница / США / Каталог" data-form-car="Toyota Camry" data-form-country="США" data-form-button-text="Получить расчёт по авто">Получить расчёт по авто</button>
                </div>
              </div>
            </article>
            <article class="car-card" data-catalog-car
              data-brand="Jeep"
              data-model="Grand Cherokee"
              data-price="3-5"
              data-year="2020-2022"
              data-mileage="80"
              data-body="Кроссовер"
              data-drive="Полный"
              data-fuel="Бензин"
              data-power="250+"
              data-volume="2+">
              <div class="car-card__img">
                <span class="car-badge car-badge--usa">Из США</span>
                <img src="<?php echo esc_url( autoimport_asset_uri( 'assets/family-car.jpg' ) ); ?>" alt="Jeep Grand Cherokee" loading="lazy" />
              </div>
              <div class="car-card__body">
                <h3 class="mt-0">Jeep Grand Cherokee</h3>
                <p class="car-card__price"><strong>от 4&nbsp;100&nbsp;000&nbsp;₽ под ключ</strong></p>
                <ul class="car-specs" aria-label="Характеристики">
                  <li class="car-specs__item" title="Год выпуска">
                    <span class="car-specs__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><rect x="3" y="4" width="18" height="18" rx="2"/><path d="M16 2v4M8 2v4M3 10h18"/></svg></span>
                    <span class="car-specs__value">2020</span>
                  </li>
                  <li class="car-specs__item" title="Пробег">
                    <span class="car-specs__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/></svg></span>
                    <span class="car-specs__value">45&nbsp;000 км</span>
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
                    <span class="car-specs__value">3.6 л (296 л.с.)</span>
                  </li>
                  <li class="car-specs__item" title="Тип топлива">
                    <span class="car-specs__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><path d="M6 3h8v18H6z"/><path d="M14 7h2l2 4v10h-4"/></svg></span>
                    <span class="car-specs__value">Бензин</span>
                  </li>
                </ul>
                <p class="car-card__desc">Вместительный SUV с полным приводом</p>
                <span class="tag">SUV</span>
                <div class="car-card__actions">
                  <a class="btn btn--outline" href="<?php echo esc_url( home_url( '/catalog' ) ); ?>">Подробнее</a>
                  <button type="button" class="btn btn--primary" data-open-form data-form-title="Рассчитаем стоимость Jeep Grand Cherokee под ключ" data-form-type="Расчёт" data-form-source="Страница / США / Каталог" data-form-car="Jeep Grand Cherokee" data-form-country="США" data-form-button-text="Получить расчёт по авто">Получить расчёт по авто</button>
                </div>
              </div>
            </article>
            <article class="car-card" data-catalog-car
              data-brand="Tesla"
              data-model="Model 3"
              data-price="3-5"
              data-year="2020-2022"
              data-mileage="30"
              data-body="Седан"
              data-drive="Задний"
              data-fuel="Электро"
              data-power="250+"
              data-volume="2-">
              <div class="car-card__img">
                <span class="car-badge car-badge--usa">Из США</span>
                <img src="<?php echo esc_url( autoimport_asset_uri( 'assets/bmw-x3.jpg' ) ); ?>" alt="Tesla Model 3" loading="lazy" />
              </div>
              <div class="car-card__body">
                <h3 class="mt-0">Tesla Model 3</h3>
                <p class="car-card__price"><strong>от 3&nbsp;300&nbsp;000&nbsp;₽ под ключ</strong></p>
                <ul class="car-specs" aria-label="Характеристики">
                  <li class="car-specs__item" title="Год выпуска">
                    <span class="car-specs__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><rect x="3" y="4" width="18" height="18" rx="2"/><path d="M16 2v4M8 2v4M3 10h18"/></svg></span>
                    <span class="car-specs__value">2022</span>
                  </li>
                  <li class="car-specs__item" title="Пробег">
                    <span class="car-specs__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/></svg></span>
                    <span class="car-specs__value">16&nbsp;000 км</span>
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
                    <span class="car-specs__value">Электро (283 л.с.)</span>
                  </li>
                  <li class="car-specs__item" title="Тип топлива">
                    <span class="car-specs__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><path d="M6 3h8v18H6z"/><path d="M14 7h2l2 4v10h-4"/></svg></span>
                    <span class="car-specs__value">Электро</span>
                  </li>
                </ul>
                <p class="car-card__desc">Популярный электроседан с американской историей</p>
                <span class="tag">Электро</span>
                <div class="car-card__actions">
                  <a class="btn btn--outline" href="<?php echo esc_url( home_url( '/catalog' ) ); ?>">Подробнее</a>
                  <button type="button" class="btn btn--primary" data-open-form data-form-title="Рассчитаем стоимость Tesla Model 3 под ключ" data-form-type="Расчёт" data-form-source="Страница / США / Каталог" data-form-car="Tesla Model 3" data-form-country="США" data-form-button-text="Получить расчёт по авто">Получить расчёт по авто</button>
                </div>
              </div>
            </article>
            <article class="car-card" data-catalog-car
              data-brand="Chevrolet"
              data-model="Tahoe"
              data-price="5+"
              data-year="2020-2022"
              data-mileage="80"
              data-body="Кроссовер"
              data-drive="Полный"
              data-fuel="Бензин"
              data-power="250+"
              data-volume="2+">
              <div class="car-card__img">
                <span class="car-badge car-badge--usa">Из США</span>
                <img src="<?php echo esc_url( autoimport_asset_uri( 'assets/family-car.jpg' ) ); ?>" alt="Chevrolet Tahoe" loading="lazy" />
              </div>
              <div class="car-card__body">
                <h3 class="mt-0">Chevrolet Tahoe</h3>
                <p class="car-card__price"><strong>от 5&nbsp;400&nbsp;000&nbsp;₽ под ключ</strong></p>
                <ul class="car-specs" aria-label="Характеристики">
                  <li class="car-specs__item" title="Год выпуска">
                    <span class="car-specs__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><rect x="3" y="4" width="18" height="18" rx="2"/><path d="M16 2v4M8 2v4M3 10h18"/></svg></span>
                    <span class="car-specs__value">2021</span>
                  </li>
                  <li class="car-specs__item" title="Пробег">
                    <span class="car-specs__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/></svg></span>
                    <span class="car-specs__value">39&nbsp;000 км</span>
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
                    <span class="car-specs__value">5.3 л (355 л.с.)</span>
                  </li>
                  <li class="car-specs__item" title="Тип топлива">
                    <span class="car-specs__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><path d="M6 3h8v18H6z"/><path d="M14 7h2l2 4v10h-4"/></svg></span>
                    <span class="car-specs__value">Бензин</span>
                  </li>
                </ul>
                <p class="car-card__desc">Полноразмерный внедорожник для семьи и путешествий</p>
                <span class="tag">SUV</span>
                <div class="car-card__actions">
                  <a class="btn btn--outline" href="<?php echo esc_url( home_url( '/catalog' ) ); ?>">Подробнее</a>
                  <button type="button" class="btn btn--primary" data-open-form data-form-title="Рассчитаем стоимость Chevrolet Tahoe под ключ" data-form-type="Расчёт" data-form-source="Страница / США / Каталог" data-form-car="Chevrolet Tahoe" data-form-country="США" data-form-button-text="Получить расчёт по авто">Получить расчёт по авто</button>
                </div>
              </div>
            </article>
            <article class="car-card" data-catalog-car
              data-brand="Ford"
              data-model="Explorer"
              data-price="3-5"
              data-year="2020-2022"
              data-mileage="80"
              data-body="Кроссовер"
              data-drive="Полный"
              data-fuel="Бензин"
              data-power="250+"
              data-volume="2+">
              <div class="car-card__img">
                <span class="car-badge car-badge--usa">Из США</span>
                <img src="<?php echo esc_url( autoimport_asset_uri( 'assets/hyundai-tucson.png' ) ); ?>" alt="Ford Explorer" loading="lazy" />
              </div>
              <div class="car-card__body">
                <h3 class="mt-0">Ford Explorer</h3>
                <p class="car-card__price"><strong>от 3&nbsp;750&nbsp;000&nbsp;₽ под ключ</strong></p>
                <ul class="car-specs" aria-label="Характеристики">
                  <li class="car-specs__item" title="Год выпуска">
                    <span class="car-specs__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><rect x="3" y="4" width="18" height="18" rx="2"/><path d="M16 2v4M8 2v4M3 10h18"/></svg></span>
                    <span class="car-specs__value">2020</span>
                  </li>
                  <li class="car-specs__item" title="Пробег">
                    <span class="car-specs__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/></svg></span>
                    <span class="car-specs__value">51&nbsp;000 км</span>
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
                    <span class="car-specs__value">3.0 л (365 л.с.)</span>
                  </li>
                  <li class="car-specs__item" title="Тип топлива">
                    <span class="car-specs__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><path d="M6 3h8v18H6z"/><path d="M14 7h2l2 4v10h-4"/></svg></span>
                    <span class="car-specs__value">Бензин</span>
                  </li>
                </ul>
                <p class="car-card__desc">Вместительный американский SUV с третьим рядом</p>
                <span class="tag">7 мест</span>
                <div class="car-card__actions">
                  <a class="btn btn--outline" href="<?php echo esc_url( home_url( '/catalog' ) ); ?>">Подробнее</a>
                  <button type="button" class="btn btn--primary" data-open-form data-form-title="Рассчитаем стоимость Ford Explorer под ключ" data-form-type="Расчёт" data-form-source="Страница / США / Каталог" data-form-car="Ford Explorer" data-form-country="США" data-form-button-text="Получить расчёт по авто">Получить расчёт по авто</button>
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
          <h2>Почему выбирают США</h2>
          <div class="country-benefits">
            <article>
              <span>01</span>
              <h3>Большой выбор</h3>
              <p>На аукционах много автомобилей разных классов, годов и комплектаций.</p>
            </article>
            <article>
              <span>02</span>
              <h3>Мощные версии</h3>
              <p>Проще найти автомобили с крупными двигателями и ярким характером.</p>
            </article>
            <article>
              <span>03</span>
              <h3>Редкие комплектации</h3>
              <p>Доступны версии и сочетания опций, которые редко встречаются на рынке РФ.</p>
            </article>
            <article>
              <span>04</span>
              <h3>Выгодные сегменты</h3>
              <p>По отдельным категориям можно получить заметную выгоду относительно рынка РФ.</p>
            </article>
          </div>
        </div>
      </section>

      <section class="section country-process">
        <div class="container">
          <div class="section-heading-row">
            <div>
              <p class="eyebrow">Процесс</p>
              <h2>Как покупают автомобили в США</h2>
            </div>
            <p>Покупка происходит через аукционы.</p>
          </div>
          <div class="steps">
            <article class="step-card">
              <span class="step-card__num">1</span>
              <h3>Подбор на аукционах</h3>
              <p>Ищем варианты на Copart, IAAI и других площадках.</p>
            </article>
            <article class="step-card">
              <span class="step-card__num">2</span>
              <h3>Проверка истории</h3>
              <p>Проверяем историю автомобиля перед участием в торгах.</p>
            </article>
            <article class="step-card">
              <span class="step-card__num">3</span>
              <h3>Согласование</h3>
              <p>Объясняем состояние, риски, расходы и итоговую стоимость.</p>
            </article>
            <article class="step-card">
              <span class="step-card__num">4</span>
              <h3>Выкуп</h3>
              <p>Выкупаем автомобиль после согласования ставки и условий.</p>
            </article>
          </div>
        </div>
      </section>

      <section class="section">
        <div class="container delivery-panel">
          <div>
            <p class="eyebrow">Доставка</p>
            <h2>Как доставляют из США</h2>
            <p>Основной способ — морская перевозка.</p>
          </div>
          <div class="delivery-panel__list">
            <span>Доставка авто до порта в США</span>
            <span>Морская перевозка</span>
            <span>Прибытие в РФ или транзитный порт</span>
            <span>Таможенное оформление</span>
            <span>Доставка по России</span>
          </div>
          <div class="delivery-panel__meta">
            <div>
              <strong>Сроки</strong>
              <span>45–80 дней</span>
            </div>
            <div>
              <strong>Стоимость</strong>
              <span>Логистика — от 300&nbsp;000&nbsp;₽</span>
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
                <li>проверка истории перед покупкой</li>
                <li>страхование на всём пути</li>
                <li>понятная схема сделки</li>
              </ul>
            </div>
            <div class="fit-card fit-card--no">
              <div class="fit-card__head">
                <span class="fit-card__icon" aria-hidden="true">✓</span>
                <h3>Кому подходит</h3>
              </div>
              <ul>
                <li>внедорожники и крупные автомобили</li>
                <li>мощные версии</li>
                <li>редкие и нестандартные варианты</li>
              </ul>
            </div>
          </div>
          <div class="country-cta">
            <h2>Подберём автомобиль из США под ваш бюджет</h2>
            <p>Проверим историю, рассчитаем доставку и объясним схему сделки до участия в торгах.</p>
            <button type="button" class="btn btn--primary" data-open-form data-form-title="Получить подборку из США" data-form-source="Страница / США / CTA" data-form-country="США" data-form-button-text="Получить подборку">
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
