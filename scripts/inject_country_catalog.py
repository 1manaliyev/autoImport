# -*- coding: utf-8 -*-
"""Inject country catalog blocks into korea/china/europe/usa pages."""
from pathlib import Path

ROOT = Path(__file__).resolve().parents[1]

ICONS = {
    "year": '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><rect x="3" y="4" width="18" height="18" rx="2"/><path d="M16 2v4M8 2v4M3 10h18"/></svg>',
    "mileage": '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/></svg>',
    "gearbox": '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><circle cx="12" cy="12" r="3"/><path d="M12 2v2M12 20v2M4.9 4.9l1.4 1.4M17.7 17.7l1.4 1.4M2 12h2M20 12h2M4.9 19.1l1.4-1.4M17.7 6.3l1.4-1.4"/></svg>',
    "drive": '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><circle cx="7" cy="17" r="2"/><circle cx="17" cy="17" r="2"/><path d="M5 17h2l2-7h6l2 7h2M9 10l1-4h4l1 4"/></svg>',
    "engine": '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><path d="M8 10h8v8H8z"/><path d="M6 10V7h12v3M10 6V4M14 6V4M10 18v2M14 18v2"/></svg>',
    "fuel": '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><path d="M6 3h8v18H6z"/><path d="M14 7h2l2 4v10h-4"/></svg>',
}

SPEC_LABELS = [
    ("year", "Год выпуска"),
    ("mileage", "Пробег"),
    ("gearbox", "Тип КПП"),
    ("drive", "Привод"),
    ("engine", "Объём двигателя (л.с.)"),
    ("fuel", "Тип топлива"),
]


def spec_item(key, label, value):
    return (
        f'                  <li class="car-specs__item" title="{label}">\n'
        f'                    <span class="car-specs__icon">{ICONS[key]}</span>\n'
        f'                    <span class="car-specs__value">{value}</span>\n'
        f"                  </li>"
    )


def render_card(car, badge_mod, badge_label, form_source, page_country):
    specs = "\n".join(
        spec_item(k, lbl, car[k]) for k, lbl in SPEC_LABELS
    )
    return f"""            <article class="car-card" data-catalog-car
              data-brand="{car['brand']}"
              data-model="{car['model']}"
              data-price="{car['price_key']}"
              data-year="{car['year_key']}"
              data-mileage="{car['mileage_key']}"
              data-body="{car['body']}"
              data-drive="{car['drive_key']}"
              data-fuel="{car['fuel_key']}"
              data-power="{car['power_key']}"
              data-volume="{car['volume_key']}">
              <div class="car-card__img">
                <span class="car-badge car-badge--{badge_mod}">{badge_label}</span>
                <img src="{car['img']}" alt="{car['title']}" loading="lazy" />
              </div>
              <div class="car-card__body">
                <h3 class="mt-0">{car['title']}</h3>
                <p class="car-card__price"><strong>{car['price']}</strong></p>
                <ul class="car-specs" aria-label="Характеристики">
{specs}
                </ul>
                <p class="car-card__desc">{car['desc']}</p>
                <span class="tag">{car['tag']}</span>
                <div class="car-card__actions">
                  <a class="btn btn--outline" href="{car['link']}">Подробнее</a>
                  <button type="button" class="btn btn--primary" data-open-form data-form-title="Рассчитаем стоимость {car['title']} под ключ" data-form-type="Расчёт" data-form-source="{form_source}" data-form-car="{car['title']}" data-form-country="{page_country}" data-form-button-text="Получить расчёт по авто">Получить расчёт по авто</button>
                </div>
              </div>
            </article>"""


def render_section(cfg):
    brands = "\n".join(
        f'              <button type="button" class="country-brand-chip" data-country-brand="{b}">{b}</button>'
        for b in cfg["brands"]
    )
    cards = "\n".join(
        render_card(c, cfg["badge_mod"], cfg["badge_label"], cfg["form_source"], cfg["country"])
        for c in cfg["cars"]
    )
    return f"""
      <section id="country-catalog" class="section section--tight-top country-catalog section-anchor" data-country-catalog data-country="{cfg['country']}" data-country-page-size="3">
        <div class="container">
          <div class="section-heading-row">
            <div>
              <p class="eyebrow">Каталог</p>
              <h2>{cfg['title']}</h2>
            </div>
            <p style="color: var(--text-muted); max-width: 520px">{cfg['subtitle']}</p>
          </div>

          <p class="eyebrow">Фильтр по марке</p>
          <div class="brands-scroll-wrap" aria-label="Марки {cfg['country']}">
            <div class="brands-scroll country-brands">
              <button type="button" class="country-brand-chip is-active" data-country-brand="">Все марки</button>
{brands}
            </div>
          </div>

          <div class="filters-grid country-filters" data-country-filters>
            <div class="country-catalog__locked">
              <label>Страна</label>
              <select data-country-filter="country" disabled>
                <option selected>{cfg['country']}</option>
              </select>
            </div>
            <div>
              <label>Марка</label>
              <select data-country-filter="brand">
                <option value="">Любая</option>
                {''.join(f'<option>{b}</option>' for b in cfg['brands'])}
              </select>
            </div>
            <div>
              <label>Модель</label>
              <select data-country-filter="model">
                <option value="">Любая</option>
                {''.join(f'<option>{c["model"]}</option>' for c in cfg['cars'])}
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
{cards}
          </div>
          <nav class="country-catalog__pagination" data-country-pagination aria-label="Навигация по страницам каталога" hidden>
            <button type="button" class="country-page-btn country-page-btn--nav" data-country-page-prev aria-label="Предыдущая страница">Назад</button>
            <div class="country-page-list" data-country-page-list></div>
            <button type="button" class="country-page-btn country-page-btn--nav" data-country-page-next aria-label="Следующая страница">Вперёд</button>
          </nav>
        </div>
      </section>
"""


CONFIGS = {
    "korea.html": {
        "country": "Корея",
        "country_genitive": "Кореи",
        "badge_mod": "korea",
        "badge_label": "Из Кореи",
        "title": "Каталог автомобилей из Кореи",
        "subtitle": "Актуальные кроссоверы и седаны с корейского рынка — с фильтрами по марке, цене и характеристикам.",
        "form_source": "Страница / Корея / Каталог",
        "brands": ["Hyundai", "Kia", "Genesis", "Toyota"],
        "cars": [
            {
                "title": "Hyundai Tucson", "brand": "Hyundai", "model": "Tucson", "country": "Корея",
                "img": "assets/hyundai-tucson.png", "link": "catalog/hyundai-tucson-2022.html",
                "price": "от 2&nbsp;890&nbsp;000&nbsp;₽ под ключ", "price_key": "3-5",
                "year": "2022", "year_key": "2020-2022", "mileage": "42&nbsp;000 км", "mileage_key": "80",
                "gearbox": "Автомат", "drive": "Полный", "drive_key": "Полный",
                "engine": "2.0 л (150 л.с.)", "fuel": "Бензин", "fuel_key": "Бензин",
                "body": "Кроссовер", "power_key": "160-", "volume_key": "2-",
                "desc": "Универсальный кроссовер с богатой комплектацией", "tag": "Семейный",
            },
            {
                "title": "Kia Sportage", "brand": "Kia", "model": "Sportage", "country": "Корея",
                "img": "assets/family-car.jpg", "link": "catalog.html",
                "price": "от 2&nbsp;750&nbsp;000&nbsp;₽ под ключ", "price_key": "3-5",
                "year": "2022", "year_key": "2020-2022", "mileage": "38&nbsp;000 км", "mileage_key": "80",
                "gearbox": "Автомат", "drive": "Полный", "drive_key": "Полный",
                "engine": "2.0 л (150 л.с.)", "fuel": "Бензин", "fuel_key": "Бензин",
                "body": "Кроссовер", "power_key": "160-", "volume_key": "2-",
                "desc": "Практичный семейный кроссовер с выгодной ценой ввоза", "tag": "Семейный",
            },
            {
                "title": "Toyota RAV4", "brand": "Toyota", "model": "RAV4", "country": "Корея",
                "img": "assets/toyota.webp", "link": "catalog.html",
                "price": "от 2&nbsp;990&nbsp;000&nbsp;₽ под ключ", "price_key": "3-5",
                "year": "2020", "year_key": "2020-2022", "mileage": "64&nbsp;000 км", "mileage_key": "80",
                "gearbox": "Автомат", "drive": "Полный", "drive_key": "Полный",
                "engine": "2.0 л (152 л.с.)", "fuel": "Бензин", "fuel_key": "Бензин",
                "body": "Кроссовер", "power_key": "160-", "volume_key": "2-",
                "desc": "Надёжный кроссовер с высокой ликвидностью", "tag": "Надёжный",
            },
            {
                "title": "Genesis GV70", "brand": "Genesis", "model": "GV70", "country": "Корея",
                "img": "assets/bmw-x3.jpg", "link": "catalog.html",
                "price": "от 4&nbsp;200&nbsp;000&nbsp;₽ под ключ", "price_key": "3-5",
                "year": "2022", "year_key": "2020-2022", "mileage": "31&nbsp;000 км", "mileage_key": "80",
                "gearbox": "Автомат", "drive": "Полный", "drive_key": "Полный",
                "engine": "2.5 л (304 л.с.)", "fuel": "Бензин", "fuel_key": "Бензин",
                "body": "Кроссовер", "power_key": "250+", "volume_key": "2+",
                "desc": "Премиальный кроссовер с богатым оснащением", "tag": "Премиум",
            },
            {
                "title": "Kia Sorento", "brand": "Kia", "model": "Sorento", "country": "Корея",
                "img": "assets/family-car.jpg", "link": "catalog.html",
                "price": "от 3&nbsp;150&nbsp;000&nbsp;₽ под ключ", "price_key": "3-5",
                "year": "2021", "year_key": "2020-2022", "mileage": "52&nbsp;000 км", "mileage_key": "80",
                "gearbox": "Автомат", "drive": "Полный", "drive_key": "Полный",
                "engine": "2.2 л (200 л.с.)", "fuel": "Дизель", "fuel_key": "Дизель",
                "body": "Кроссовер", "power_key": "160-250", "volume_key": "2+",
                "desc": "Семиместный кроссовер для большой семьи", "tag": "7 мест",
            },
            {
                "title": "Hyundai Santa Fe", "brand": "Hyundai", "model": "Santa Fe", "country": "Корея",
                "img": "assets/hyundai-tucson.png", "link": "catalog.html",
                "price": "от 3&nbsp;050&nbsp;000&nbsp;₽ под ключ", "price_key": "3-5",
                "year": "2023", "year_key": "2023-2025", "mileage": "19&nbsp;000 км", "mileage_key": "30",
                "gearbox": "Автомат", "drive": "Полный", "drive_key": "Полный",
                "engine": "2.5 л (180 л.с.)", "fuel": "Бензин", "fuel_key": "Бензин",
                "body": "Кроссовер", "power_key": "160-250", "volume_key": "2+",
                "desc": "Вместительный кроссовер с комфортным салоном", "tag": "Семейный",
            },
        ],
    },
    "china.html": {
        "country": "Китай",
        "country_genitive": "Китая",
        "badge_mod": "china",
        "badge_label": "Из Китая",
        "title": "Каталог автомобилей из Китая",
        "subtitle": "Современные кроссоверы, гибриды и электромобили из КНР с фильтрами под ваш запрос.",
        "form_source": "Страница / Китай / Каталог",
        "brands": ["Geely", "Haval", "Changan", "Li Auto", "Zeekr"],
        "cars": [
            {
                "title": "Geely Monjaro", "brand": "Geely", "model": "Monjaro", "country": "Китай",
                "img": "assets/Geely-Monjaro.jpg", "link": "catalog.html",
                "price": "от 3&nbsp;650&nbsp;000&nbsp;₽ под ключ", "price_key": "3-5",
                "year": "2023", "year_key": "2023-2025", "mileage": "15&nbsp;000 км", "mileage_key": "30",
                "gearbox": "Автомат", "drive": "Полный", "drive_key": "Полный",
                "engine": "2.0 л (218 л.с.)", "fuel": "Бензин", "fuel_key": "Бензин",
                "body": "Кроссовер", "power_key": "160-250", "volume_key": "2-",
                "desc": "Технологии и комфорт уровня премиум", "tag": "Технологии",
            },
            {
                "title": "Haval Jolion", "brand": "Haval", "model": "Jolion", "country": "Китай",
                "img": "assets/bmw-x3.jpg", "link": "catalog.html",
                "price": "от 2&nbsp;100&nbsp;000&nbsp;₽ под ключ", "price_key": "to-3",
                "year": "2023", "year_key": "2023-2025", "mileage": "12&nbsp;000 км", "mileage_key": "30",
                "gearbox": "Робот", "drive": "Передний", "drive_key": "Передний",
                "engine": "1.5 л (143 л.с.)", "fuel": "Бензин", "fuel_key": "Бензин",
                "body": "Кроссовер", "power_key": "160-", "volume_key": "2-",
                "desc": "Компактный кроссовер с выгодной стоимостью ввоза", "tag": "Городской",
            },
            {
                "title": "Li Xiang L7", "brand": "Li Auto", "model": "L7", "country": "Китай",
                "img": "assets/Lixiang_L7.jpg", "link": "catalog.html",
                "price": "от 5&nbsp;200&nbsp;000&nbsp;₽ под ключ", "price_key": "5+",
                "year": "2024", "year_key": "2023-2025", "mileage": "8&nbsp;000 км", "mileage_key": "30",
                "gearbox": "Автомат", "drive": "Полный", "drive_key": "Полный",
                "engine": "1.5 л (449 л.с.)", "fuel": "Гибрид", "fuel_key": "Гибрид",
                "body": "Кроссовер", "power_key": "250+", "volume_key": "2-",
                "desc": "Семейный гибрид с просторным салоном", "tag": "Гибрид",
            },
            {
                "title": "Zeekr 001", "brand": "Zeekr", "model": "001", "country": "Китай",
                "img": "assets/bmw-x3.jpg", "link": "catalog.html",
                "price": "от 4&nbsp;900&nbsp;000&nbsp;₽ под ключ", "price_key": "3-5",
                "year": "2024", "year_key": "2023-2025", "mileage": "5&nbsp;000 км", "mileage_key": "30",
                "gearbox": "Автомат", "drive": "Полный", "drive_key": "Полный",
                "engine": "Электро (544 л.с.)", "fuel": "Электро", "fuel_key": "Электро",
                "body": "Седан", "power_key": "250+", "volume_key": "2-",
                "desc": "Премиальный электромобиль с большим запасом хода", "tag": "Электро",
            },
            {
                "title": "Changan CS75 Plus", "brand": "Changan", "model": "CS75 Plus", "country": "Китай",
                "img": "assets/family-car.jpg", "link": "catalog.html",
                "price": "от 2&nbsp;450&nbsp;000&nbsp;₽ под ключ", "price_key": "3-5",
                "year": "2023", "year_key": "2023-2025", "mileage": "14&nbsp;000 км", "mileage_key": "30",
                "gearbox": "Автомат", "drive": "Передний", "drive_key": "Передний",
                "engine": "1.5 л (188 л.с.)", "fuel": "Бензин", "fuel_key": "Бензин",
                "body": "Кроссовер", "power_key": "160-250", "volume_key": "2-",
                "desc": "Популярный кроссовер с современным дизайном", "tag": "Городской",
            },
            {
                "title": "Haval H6", "brand": "Haval", "model": "H6", "country": "Китай",
                "img": "assets/hyundai-tucson.png", "link": "catalog.html",
                "price": "от 2&nbsp;350&nbsp;000&nbsp;₽ под ключ", "price_key": "3-5",
                "year": "2022", "year_key": "2020-2022", "mileage": "28&nbsp;000 км", "mileage_key": "30",
                "gearbox": "Робот", "drive": "Передний", "drive_key": "Передний",
                "engine": "2.0 л (204 л.с.)", "fuel": "Бензин", "fuel_key": "Бензин",
                "body": "Кроссовер", "power_key": "160-250", "volume_key": "2-",
                "desc": "Бестселлер с просторным салоном и богатой комплектацией", "tag": "Семейный",
            },
        ],
    },
    "europe.html": {
        "country": "Европа",
        "country_genitive": "Европы",
        "badge_mod": "europe",
        "badge_label": "Из Европы",
        "title": "Каталог автомобилей из Европы",
        "subtitle": "Премиальные и практичные модели из ЕС с проверкой истории и прозрачным расчётом.",
        "form_source": "Страница / Европа / Каталог",
        "brands": ["BMW", "Mercedes-Benz", "Audi", "Volkswagen", "Skoda"],
        "cars": [
            {
                "title": "BMW X3", "brand": "BMW", "model": "X3", "country": "Европа",
                "img": "assets/bmw-x3.jpg", "link": "catalog.html",
                "price": "от 4&nbsp;350&nbsp;000&nbsp;₽ под ключ", "price_key": "3-5",
                "year": "2021", "year_key": "2020-2022", "mileage": "28&nbsp;000 км", "mileage_key": "30",
                "gearbox": "Автомат", "drive": "Полный", "drive_key": "Полный",
                "engine": "2.0 л (249 л.с.)", "fuel": "Бензин", "fuel_key": "Бензин",
                "body": "Кроссовер", "power_key": "160-250", "volume_key": "2-",
                "desc": "Премиальный SUV без переплаты рынку РФ", "tag": "Премиум",
            },
            {
                "title": "Mercedes-Benz GLC", "brand": "Mercedes-Benz", "model": "GLC", "country": "Европа",
                "img": "assets/bmw-x3.jpg", "link": "catalog.html",
                "price": "от 4&nbsp;800&nbsp;000&nbsp;₽ под ключ", "price_key": "3-5",
                "year": "2020", "year_key": "2020-2022", "mileage": "35&nbsp;000 км", "mileage_key": "80",
                "gearbox": "Автомат", "drive": "Полный", "drive_key": "Полный",
                "engine": "2.0 л (258 л.с.)", "fuel": "Бензин", "fuel_key": "Бензин",
                "body": "Кроссовер", "power_key": "160-250", "volume_key": "2-",
                "desc": "Комфортный кроссовер с сильной комплектацией", "tag": "Комфорт",
            },
            {
                "title": "Volkswagen Tiguan", "brand": "Volkswagen", "model": "Tiguan", "country": "Европа",
                "img": "assets/hyundai-tucson.png", "link": "catalog.html",
                "price": "от 3&nbsp;400&nbsp;000&nbsp;₽ под ключ", "price_key": "3-5",
                "year": "2021", "year_key": "2020-2022", "mileage": "41&nbsp;000 км", "mileage_key": "80",
                "gearbox": "Автомат", "drive": "Полный", "drive_key": "Полный",
                "engine": "2.0 л (190 л.с.)", "fuel": "Бензин", "fuel_key": "Бензин",
                "body": "Кроссовер", "power_key": "160-250", "volume_key": "2-",
                "desc": "Универсальный европейский кроссовер для семьи", "tag": "Семейный",
            },
            {
                "title": "Audi Q5", "brand": "Audi", "model": "Q5", "country": "Европа",
                "img": "assets/bmw-x3.jpg", "link": "catalog.html",
                "price": "от 4&nbsp;150&nbsp;000&nbsp;₽ под ключ", "price_key": "3-5",
                "year": "2021", "year_key": "2020-2022", "mileage": "33&nbsp;000 км", "mileage_key": "80",
                "gearbox": "Автомат", "drive": "Полный", "drive_key": "Полный",
                "engine": "2.0 л (249 л.с.)", "fuel": "Бензин", "fuel_key": "Бензин",
                "body": "Кроссовер", "power_key": "160-250", "volume_key": "2-",
                "desc": "Сбалансированный премиум-кроссовер из ЕС", "tag": "Премиум",
            },
            {
                "title": "Skoda Kodiaq", "brand": "Skoda", "model": "Kodiaq", "country": "Европа",
                "img": "assets/family-car.jpg", "link": "catalog.html",
                "price": "от 3&nbsp;250&nbsp;000&nbsp;₽ под ключ", "price_key": "3-5",
                "year": "2020", "year_key": "2020-2022", "mileage": "48&nbsp;000 км", "mileage_key": "80",
                "gearbox": "Автомат", "drive": "Полный", "drive_key": "Полный",
                "engine": "2.0 л (190 л.с.)", "fuel": "Дизель", "fuel_key": "Дизель",
                "body": "Кроссовер", "power_key": "160-250", "volume_key": "2-",
                "desc": "Практичный семиместный кроссовер по выгодной цене", "tag": "7 мест",
            },
            {
                "title": "BMW 3 Series", "brand": "BMW", "model": "3 Series", "country": "Европа",
                "img": "assets/toyota.webp", "link": "catalog.html",
                "price": "от 3&nbsp;600&nbsp;000&nbsp;₽ под ключ", "price_key": "3-5",
                "year": "2022", "year_key": "2020-2022", "mileage": "24&nbsp;000 км", "mileage_key": "30",
                "gearbox": "Автомат", "drive": "Задний", "drive_key": "Задний",
                "engine": "2.0 л (184 л.с.)", "fuel": "Бензин", "fuel_key": "Бензин",
                "body": "Седан", "power_key": "160-250", "volume_key": "2-",
                "desc": "Классический спортивный седан с европейской историей", "tag": "Седан",
            },
        ],
    },
    "usa.html": {
        "country": "США",
        "country_genitive": "США",
        "badge_mod": "usa",
        "badge_label": "Из США",
        "title": "Каталог автомобилей из США",
        "subtitle": "Популярные модели с аукционов и дилеров США — с фильтрами и расчётом под ключ.",
        "form_source": "Страница / США / Каталог",
        "brands": ["Ford", "Toyota", "Chevrolet", "Jeep", "Tesla"],
        "cars": [
            {
                "title": "Ford Mustang", "brand": "Ford", "model": "Mustang", "country": "США",
                "img": "assets/bmw-x3.jpg", "link": "catalog.html",
                "price": "от 3&nbsp;900&nbsp;000&nbsp;₽ под ключ", "price_key": "3-5",
                "year": "2021", "year_key": "2020-2022", "mileage": "22&nbsp;000 км", "mileage_key": "30",
                "gearbox": "Автомат", "drive": "Задний", "drive_key": "Задний",
                "engine": "2.3 л (310 л.с.)", "fuel": "Бензин", "fuel_key": "Бензин",
                "body": "Седан", "power_key": "250+", "volume_key": "2+",
                "desc": "Культовый спорткар с понятной историей", "tag": "Спорт",
            },
            {
                "title": "Toyota Camry", "brand": "Toyota", "model": "Camry", "country": "США",
                "img": "assets/toyota.webp", "link": "catalog.html",
                "price": "от 2&nbsp;850&nbsp;000&nbsp;₽ под ключ", "price_key": "3-5",
                "year": "2022", "year_key": "2020-2022", "mileage": "18&nbsp;000 км", "mileage_key": "30",
                "gearbox": "Автомат", "drive": "Передний", "drive_key": "Передний",
                "engine": "2.5 л (203 л.с.)", "fuel": "Бензин", "fuel_key": "Бензин",
                "body": "Седан", "power_key": "160-250", "volume_key": "2+",
                "desc": "Надёжный седан для города и трассы", "tag": "Седан",
            },
            {
                "title": "Jeep Grand Cherokee", "brand": "Jeep", "model": "Grand Cherokee", "country": "США",
                "img": "assets/family-car.jpg", "link": "catalog.html",
                "price": "от 4&nbsp;100&nbsp;000&nbsp;₽ под ключ", "price_key": "3-5",
                "year": "2020", "year_key": "2020-2022", "mileage": "45&nbsp;000 км", "mileage_key": "80",
                "gearbox": "Автомат", "drive": "Полный", "drive_key": "Полный",
                "engine": "3.6 л (296 л.с.)", "fuel": "Бензин", "fuel_key": "Бензин",
                "body": "Кроссовер", "power_key": "250+", "volume_key": "2+",
                "desc": "Вместительный SUV с полным приводом", "tag": "SUV",
            },
            {
                "title": "Tesla Model 3", "brand": "Tesla", "model": "Model 3", "country": "США",
                "img": "assets/bmw-x3.jpg", "link": "catalog.html",
                "price": "от 3&nbsp;300&nbsp;000&nbsp;₽ под ключ", "price_key": "3-5",
                "year": "2022", "year_key": "2020-2022", "mileage": "16&nbsp;000 км", "mileage_key": "30",
                "gearbox": "Автомат", "drive": "Задний", "drive_key": "Задний",
                "engine": "Электро (283 л.с.)", "fuel": "Электро", "fuel_key": "Электро",
                "body": "Седан", "power_key": "250+", "volume_key": "2-",
                "desc": "Популярный электроседан с американской историей", "tag": "Электро",
            },
            {
                "title": "Chevrolet Tahoe", "brand": "Chevrolet", "model": "Tahoe", "country": "США",
                "img": "assets/family-car.jpg", "link": "catalog.html",
                "price": "от 5&nbsp;400&nbsp;000&nbsp;₽ под ключ", "price_key": "5+",
                "year": "2021", "year_key": "2020-2022", "mileage": "39&nbsp;000 км", "mileage_key": "80",
                "gearbox": "Автомат", "drive": "Полный", "drive_key": "Полный",
                "engine": "5.3 л (355 л.с.)", "fuel": "Бензин", "fuel_key": "Бензин",
                "body": "Кроссовер", "power_key": "250+", "volume_key": "2+",
                "desc": "Полноразмерный внедорожник для семьи и путешествий", "tag": "SUV",
            },
            {
                "title": "Ford Explorer", "brand": "Ford", "model": "Explorer", "country": "США",
                "img": "assets/hyundai-tucson.png", "link": "catalog.html",
                "price": "от 3&nbsp;750&nbsp;000&nbsp;₽ под ключ", "price_key": "3-5",
                "year": "2020", "year_key": "2020-2022", "mileage": "51&nbsp;000 км", "mileage_key": "80",
                "gearbox": "Автомат", "drive": "Полный", "drive_key": "Полный",
                "engine": "3.0 л (365 л.с.)", "fuel": "Бензин", "fuel_key": "Бензин",
                "body": "Кроссовер", "power_key": "250+", "volume_key": "2+",
                "desc": "Вместительный американский SUV с третьим рядом", "tag": "7 мест",
            },
        ],
    },
}

MARKER = """      </section>

      <section class="section">
        <div class="container">
          <p class="eyebrow">Преимущества направления</p>"""


def main():
    import re

    for filename, cfg in CONFIGS.items():
        path = ROOT / filename
        text = path.read_text(encoding="utf-8").replace("\r\n", "\n")
        if "data-country-catalog" in text:
            text = re.sub(
                r'\n      <section class="section section--tight-top country-catalog".*?</section>\n',
                "\n",
                text,
                count=1,
                flags=re.S,
            )
            text = re.sub(r"\n{3,}", "\n\n", text)
        if MARKER not in text:
            print("marker missing", filename)
            continue
        block = render_section(cfg)
        text = text.replace(MARKER, "      </section>\n" + block + "\n      <section class=\"section\">\n        <div class=\"container\">\n          <p class=\"eyebrow\">Преимущества направления</p>", 1)
        path.write_text(text, encoding="utf-8")
        print("updated", filename)


if __name__ == "__main__":
    main()
