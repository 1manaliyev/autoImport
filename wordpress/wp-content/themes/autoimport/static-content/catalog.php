<?php
/** Static markup from catalog.html */
if ( ! defined( 'ABSPATH' ) ) { exit; }
$autoimport_page_meta = array( 'title' => 'Каталог автомобилей из Кореи, Китая, Европы и США', 'description' => 'Фильтры по стране, марке, цене и характеристикам. Реальные примеры в каталоге.', 'extra_head' => '', 'has_quiz' => false, 'has_swiper' => false );
?>
<div class="page-hero">
        <div class="container">
          <h1>Каталог автомобилей из Кореи, Китая, Европы и США</h1>
          <p class="subtitle mb-0">
            Пустые значения в карточках на сайте не выводятся — при интеграции с CMS поля скрываются, если нет данных.
          </p>
        </div>
      </div>

      <section class="section section--tight-top banner-160-section">
        <div class="container">
          <div class="banner-160">
            <div>
              <span class="banner-160__badge">Подборка в каталоге</span>
              <h3>Автомобили до 160 л.с. с льготным утильсбором</h3>
              <p>
                С 1 декабря 2025 года для автомобилей с мощностью до 160 лошадиных сил сохраняется льготный утильсбор. Это делает их ввоз в Россию максимально выгодным.
              </p>
            </div>
            <a class="btn btn--primary" href="<?php echo esc_url( home_url( '/cars/power-up-to-160' ) ); ?>">Смотреть подборку</a>
          </div>
        </div>
      </section>

      <section class="section section--tight-top">
        <div class="container">
          <p class="eyebrow">Фильтр по марке</p>
          <div class="brands-scroll-wrap" aria-label="Популярные марки">
            <div class="brands-scroll">
              <a href="#" data-brand-filter="Kia">Kia</a>
              <a href="#" data-brand-filter="Hyundai">Hyundai</a>
              <a href="#" data-brand-filter="Toyota">Toyota</a>
              <a href="#" data-brand-filter="BMW">BMW</a>
              <a href="#" data-brand-filter="Mercedes">Mercedes</a>
              <a href="#" data-brand-filter="Volkswagen">Volkswagen</a>
              <a href="#" data-brand-filter="Audi">Audi</a>
              <a href="#" data-brand-filter="Lexus">Lexus</a>
              <a href="#" data-brand-filter="Honda">Honda</a>
              <a href="#" data-brand-filter="Nissan">Nissan</a>
              <a href="#" data-brand-filter="Mazda">Mazda</a>
              <a href="#" data-brand-filter="Skoda">Skoda</a>
              <a href="#" data-brand-filter="Ford">Ford</a>
              <a href="#" data-brand-filter="Geely">Geely</a>
              <a href="#" data-brand-filter="Changan">Changan</a>
              <a href="#" data-brand-filter="Li Auto">Li Auto</a>
              <a href="#" data-brand-filter="Zeekr">Zeekr</a>
              <a href="#" data-brand-filter="Haval">Haval</a>
            </div>
          </div>

          <div class="filters-grid" aria-label="Фильтры каталога">
            <div>
              <label for="f-country">Страна</label>
              <select id="f-country">
                <option value="">Любая</option>
                <option>Корея</option>
                <option>Китай</option>
                <option>Европа</option>
                <option>США</option>
              </select>
            </div>
            <div>
              <label for="f-brand">Марка</label>
              <select id="f-brand">
                <option value="">Любая</option>
                <option>Hyundai</option>
                <option>Kia</option>
                <option>Geely</option>
                <option>BMW</option>
              </select>
            </div>
            <div>
              <label for="f-model">Модель</label>
              <select id="f-model">
                <option value="">Любая</option>
                <option>Tucson</option>
                <option>Monjaro</option>
                <option>X3</option>
              </select>
            </div>
            <div>
              <label for="f-price">Цена, ₽</label>
              <select id="f-price">
                <option value="">Любая</option>
                <option>до 3 млн</option>
                <option>3–5 млн</option>
                <option>от 5 млн</option>
              </select>
            </div>
            <div>
              <label for="f-year">Год</label>
              <select id="f-year">
                <option value="">Любой</option>
                <option>2023–2025</option>
                <option>2020–2022</option>
              </select>
            </div>
            <div>
              <label for="f-mileage">Пробег</label>
              <select id="f-mileage">
                <option value="">Любой</option>
                <option>до 30 000 км</option>
                <option>до 80 000 км</option>
              </select>
            </div>
            <div>
              <label for="f-body">Кузов</label>
              <select id="f-body">
                <option value="">Любой</option>
                <option>Кроссовер</option>
                <option>Седан</option>
              </select>
            </div>
            <div>
              <label for="f-drive">Привод</label>
              <select id="f-drive">
                <option value="">Любой</option>
                <option>Передний</option>
                <option>Полный</option>
              </select>
            </div>
            <div>
              <label for="f-fuel">Топливо</label>
              <select id="f-fuel">
                <option value="">Любое</option>
                <option>Бензин</option>
                <option>Дизель</option>
                <option>Гибрид</option>
                <option>Электро</option>
              </select>
            </div>
            <div>
              <label for="f-power">Мощность</label>
              <select id="f-power">
                <option value="">Любая</option>
                <option>до 160 л.с.</option>
                <option>160–250 л.с.</option>
                <option>от 250 л.с.</option>
              </select>
            </div>
            <div>
              <label for="f-volume">Объём двигателя</label>
              <select id="f-volume">
                <option value="">Любой</option>
                <option>до 2.0 л</option>
                <option>от 2.0 л</option>
              </select>
            </div>
          </div>
          <p style="font-size: 0.875rem; color: var(--text-muted); margin-bottom: 24px">
            Фильтры в статике без запроса к серверу — в WordPress будут вести на выдачу с параметрами.
          </p>

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
                  <button type="button" class="btn btn--primary" data-open-form data-form-title="Рассчитаем стоимость Hyundai Tucson под ключ" data-form-type="Расчёт" data-form-source="Каталог / Карточка" data-form-car="Hyundai Tucson" data-form-button-text="Получить расчёт по авто">
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
                  <button type="button" class="btn btn--primary" data-open-form data-form-title="Рассчитаем стоимость Geely Monjaro под ключ" data-form-type="Расчёт" data-form-source="Каталог / Карточка" data-form-car="Geely Monjaro" data-form-button-text="Получить расчёт по авто">
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
                  <button type="button" class="btn btn--primary" data-open-form data-form-title="Рассчитаем стоимость BMW X3 под ключ" data-form-type="Расчёт" data-form-source="Каталог / Карточка" data-form-car="BMW X3" data-form-button-text="Получить расчёт по авто">
                    Получить расчёт по авто
                  </button>
                </div>
              </div>
            </article>
          </div>

          <aside class="card" style="margin-top: 48px; text-align: center; max-width: 720px; margin-inline: auto">
            <h2 class="mt-0">Не нашли подходящий вариант?</h2>
            <p style="color: var(--text-muted)">
              Подберём автомобиль под ваш запрос вручную. Часто нужный вариант не попадает в открытую подборку, но его можно найти под заказ.
            </p>
            <button type="button" class="btn btn--primary" data-open-form data-form-title="Покажем реальные варианты под ваш запрос" data-form-source="Каталог / Не нашли" data-form-button-text="Получить варианты">
              Получить варианты
            </button>
          </aside>
        </div>
      </section>
