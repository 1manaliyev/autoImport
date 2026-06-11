<?php
/** Static markup from catalog.html */
if ( ! defined( 'ABSPATH' ) ) { exit; }

$catalog_defaults = array(
	'seo_title'            => 'Каталог автомобилей из Кореи, Китая, Европы и США',
	'seo_description'      => 'Фильтры по стране, марке, цене и характеристикам. Реальные примеры в каталоге.',
	'hero_title'           => 'Каталог автомобилей из Кореи, Китая, Европы и США',
	'hero_subtitle'        => 'Пустые значения в карточках на сайте не выводятся — при интеграции с CMS поля скрываются, если нет данных.',
	'banner_badge'         => 'Подборка в каталоге',
	'banner_title'         => 'Автомобили до 160 л.с. с льготным утильсбором',
	'banner_text'          => 'С 1 декабря 2025 года для автомобилей с мощностью до 160 лошадиных сил сохраняется льготный утильсбор. Это делает их ввоз в Россию максимально выгодным.',
	'banner_button_text'   => 'Смотреть подборку',
	'banner_button_url'    => home_url( '/cars/power-up-to-160' ),
	'cta_title'            => 'Не нашли подходящий вариант?',
	'cta_text'             => 'Подберём автомобиль под ваш запрос вручную. Часто нужный вариант не попадает в открытую подборку, но его можно найти под заказ.',
	'cta_button_text'      => 'Получить варианты',
);

$catalog_seo_title       = autoimport_get_catalog_field( 'catalog_seo_title', $catalog_defaults['seo_title'] );
$catalog_seo_description = autoimport_get_catalog_field( 'catalog_seo_description', $catalog_defaults['seo_description'] );
$catalog_hero_title      = autoimport_get_catalog_field( 'catalog_hero_title', $catalog_defaults['hero_title'] );
$catalog_hero_subtitle   = autoimport_get_catalog_field( 'catalog_hero_subtitle', $catalog_defaults['hero_subtitle'] );
$catalog_banner_badge    = autoimport_get_catalog_field( 'catalog_banner_badge', $catalog_defaults['banner_badge'] );
$catalog_banner_title    = autoimport_get_catalog_field( 'catalog_banner_title', $catalog_defaults['banner_title'] );
$catalog_banner_text     = autoimport_get_catalog_field( 'catalog_banner_text', $catalog_defaults['banner_text'] );
$catalog_banner_btn_text = autoimport_get_catalog_field( 'catalog_banner_button_text', $catalog_defaults['banner_button_text'] );
$catalog_banner_btn_url  = autoimport_get_catalog_field( 'catalog_banner_button_url', $catalog_defaults['banner_button_url'] );
$catalog_cta_title       = autoimport_get_catalog_field( 'catalog_cta_title', $catalog_defaults['cta_title'] );
$catalog_cta_text        = autoimport_get_catalog_field( 'catalog_cta_text', $catalog_defaults['cta_text'] );
$catalog_cta_btn_text    = autoimport_get_catalog_field( 'catalog_cta_button_text', $catalog_defaults['cta_button_text'] );

$autoimport_page_meta = array(
	'title'       => $catalog_seo_title,
	'description' => $catalog_seo_description,
	'extra_head'  => '',
	'has_quiz'    => false,
	'has_swiper'  => false,
);

$catalog_countries = get_terms(
	array(
		'taxonomy'   => 'car_country',
		'hide_empty' => true,
	)
);
$catalog_brands = get_terms(
	array(
		'taxonomy'   => 'car_brand',
		'hide_empty' => true,
	)
);
$catalog_models = get_terms(
	array(
		'taxonomy'   => 'car_model',
		'hide_empty' => true,
	)
);
$catalog_body_types = get_terms(
	array(
		'taxonomy'   => 'car_body',
		'hide_empty' => true,
	)
);

$catalog_current_year   = (int) wp_date( 'Y' );
$catalog_recent_year_to = $catalog_current_year - 1;
$title = get_field('заголовок');
$text = get_field('текст');
$banner = get_field('баннер');
?>
<div class="page-hero">
        <div class="container">
          <h1><?php echo esc_html( $title ); ?></h1>
          <?php if ( $text ) : ?>
            <p class="subtitle mb-0"><?php echo esc_html( $text ); ?></p>
          <?php endif; ?>
        </div>
      </div>
      
      <?php if ($banner['надзаголовок'] && $banner['заголовок'] && $banner['текст'] && $banner['кнопка']['текст'] && $banner['кнопка']['ссылка']) : ?>
        <section class="section section--tight-top banner-160-section">
          <div class="container">
            <div class="banner-160">
              <div>
                <?php if ( $banner['надзаголовок'] ) : ?>
                  <span class="banner-160__badge"><?php echo esc_html( $banner['надзаголовок'] ); ?></span>
                <?php endif; ?>
                <?php if ( $banner['заголовок'] ) : ?>
                  <h3><?php echo esc_html( $banner['заголовок'] ); ?></h3>
                <?php endif; ?>
                <?php if ( $banner['текст'] ) : ?>
                  <p><?php echo esc_html( $banner['текст'] ); ?></p>
                <?php endif; ?>
              </div>
              <?php if ( $banner['кнопка']['текст'] && $banner['кнопка']['ссылка'] ) : ?>
                <a class="btn btn--primary" href="<?=esc_html($banner['кнопка']['ссылка']);?>"><?=esc_html($banner['кнопка']['текст']);?></a>
              <?php endif; ?>
            </div>
          </div>
        </section>
      <?php endif; ?>

      <section class="section section--tight-top" data-catalog data-catalog-page-size="<?php echo esc_attr( (string) autoimport_catalog_page_size() ); ?>">
        <div class="container">
          <p class="eyebrow">Фильтр по марке</p>
          <div class="brands-scroll-wrap" aria-label="Популярные марки">
            <div class="brands-scroll">
              <a href="#" class="is-active" data-brand-filter="">Все марки</a>
              <?php if ( ! is_wp_error( $catalog_brands ) ) : ?>
                <?php foreach ( $catalog_brands as $brand_term ) : ?>
                  <a href="#" data-brand-filter="<?php echo esc_attr( $brand_term->name ); ?>"><?php echo esc_html( $brand_term->name ); ?></a>
                <?php endforeach; ?>
              <?php endif; ?>
            </div>
          </div>

          <div class="filters-grid" aria-label="Фильтры каталога">
            <div>
              <label for="f-country">Страна</label>
              <select id="f-country" data-catalog-filter="country">
                <option value="">Любая</option>
                <?php if ( ! is_wp_error( $catalog_countries ) ) : ?>
                  <?php foreach ( $catalog_countries as $country_term ) : ?>
                    <option value="<?php echo esc_attr( $country_term->name ); ?>"><?php echo esc_html( $country_term->name ); ?></option>
                  <?php endforeach; ?>
                <?php endif; ?>
              </select>
            </div>
            <div>
              <label for="f-brand">Марка</label>
              <select id="f-brand" data-catalog-filter="brand">
                <option value="">Любая</option>
                <?php if ( ! is_wp_error( $catalog_brands ) ) : ?>
                  <?php foreach ( $catalog_brands as $brand_term ) : ?>
                    <option value="<?php echo esc_attr( $brand_term->name ); ?>"><?php echo esc_html( $brand_term->name ); ?></option>
                  <?php endforeach; ?>
                <?php endif; ?>
              </select>
            </div>
            <div>
              <label for="f-model">Модель</label>
              <select id="f-model" data-catalog-filter="model">
                <option value="">Любая</option>
                <?php if ( ! is_wp_error( $catalog_models ) ) : ?>
                  <?php foreach ( $catalog_models as $model_term ) : ?>
                    <option value="<?php echo esc_attr( $model_term->name ); ?>"><?php echo esc_html( $model_term->name ); ?></option>
                  <?php endforeach; ?>
                <?php endif; ?>
              </select>
            </div>
            <div>
              <label for="f-price">Цена, ₽</label>
              <select id="f-price" data-catalog-filter="price">
                <option value="">Любая</option>
                <option value="to-3">до 3 млн</option>
                <option value="3-5">3–5 млн</option>
                <option value="5+">от 5 млн</option>
              </select>
            </div>
            <div>
              <label for="f-year">Год</label>
              <select id="f-year" data-catalog-filter="year">
                <option value="">Любой</option>
                <option value="before-2020">до 2020 года</option>
                <?php if ( $catalog_recent_year_to >= 2020 ) : ?>
                  <option value="<?php echo esc_attr( '2020-' . $catalog_recent_year_to ); ?>">2020–<?php echo esc_html( (string) $catalog_recent_year_to ); ?></option>
                <?php endif; ?>
                <option value="<?php echo esc_attr( (string) $catalog_current_year ); ?>"><?php echo esc_html( (string) $catalog_current_year ); ?></option>
              </select>
            </div>
            <div>
              <label for="f-mileage">Пробег</label>
              <select id="f-mileage" data-catalog-filter="mileage">
                <option value="">Любой</option>
                <option value="to-30">до 30 000 км</option>
                <option value="to-80">до 80 000 км</option>
                <option value="from-80">от 80 000 км</option>
              </select>
            </div>
            <div>
              <label for="f-body">Кузов</label>
              <select id="f-body" data-catalog-filter="body">
                <option value="">Любой</option>
                <?php if ( ! is_wp_error( $catalog_body_types ) ) : ?>
                  <?php foreach ( $catalog_body_types as $body_term ) : ?>
                    <option value="<?php echo esc_attr( $body_term->name ); ?>"><?php echo esc_html( $body_term->name ); ?></option>
                  <?php endforeach; ?>
                <?php endif; ?>
              </select>
            </div>
            <div>
              <label for="f-drive">Привод</label>
              <select id="f-drive" data-catalog-filter="drive">
                <option value="">Любой</option>
                <option value="Передний">Передний</option>
                <option value="Задний">Задний</option>
                <option value="Полный">Полный</option>
              </select>
            </div>
            <div>
              <label for="f-fuel">Топливо</label>
              <select id="f-fuel" data-catalog-filter="fuel">
                <option value="">Любое</option>
                <option value="Бензин">Бензин</option>
                <option value="Дизель">Дизель</option>
                <option value="Газ">Газ</option>
                <option value="Электро">Электро</option>
                <option value="Гибрид">Гибрид</option>
              </select>
            </div>
            <div>
              <label for="f-power">Мощность</label>
              <select id="f-power" data-catalog-filter="power">
                <option value="">Любая</option>
                <option value="160-">до 160 л.с.</option>
                <option value="160-250">160–250 л.с.</option>
                <option value="250+">от 250 л.с.</option>
              </select>
            </div>
            <div>
              <label for="f-volume">Объём двигателя</label>
              <select id="f-volume" data-catalog-filter="volume">
                <option value="">Любой</option>
                <option value="2-">до 2.0 л</option>
                <option value="2+">от 2.0 л</option>
              </select>
            </div>
          </div>
          <div class="country-catalog__toolbar">
            <p class="country-catalog__count" data-catalog-count></p>
            <div class="catalog-toolbar__actions">
              <?php
              get_template_part(
                'template-parts/catalog',
                'sort',
                array(
                  'field_id' => 'f-sort',
                )
              );
              ?>
              <button type="button" class="btn btn--outline btn--sm" data-catalog-filter-reset>Сбросить фильтры</button>
            </div>
          </div>

          <div class="cards-grid" data-catalog-grid style="grid-template-columns: repeat(auto-fill, minmax(300px, 1fr))">
            <?php
            $cars_query = new WP_Query(
              array(
                'post_type'      => 'car',
                'post_status'    => 'publish',
                'posts_per_page' => -1,
                'orderby'        => 'date',
                'order'          => 'DESC',
              )
            );

            if ( $cars_query->have_posts() ) :
              $catalog_card_index = 0;
              while ( $cars_query->have_posts() ) :
                $cars_query->the_post();
                get_template_part(
                  'template-parts/car',
                  'card',
                  array(
                    'car'         => get_the_ID(),
                    'form_source' => 'Каталог / Карточка',
                    'page_hidden' => $catalog_card_index >= autoimport_catalog_page_size(),
                  )
                );
                ++$catalog_card_index;
              endwhile;
              wp_reset_postdata();
            else :
              ?>
              <p style="color: var(--text-muted); margin: 0">В каталоге пока нет автомобилей.</p>
            <?php endif; ?>
          </div>

          <nav class="country-catalog__pagination" data-catalog-pagination aria-label="Навигация по страницам каталога" hidden>
            <button type="button" class="country-page-btn country-page-btn--nav" data-catalog-page-prev aria-label="Предыдущая страница">Назад</button>
            <div class="country-page-list" data-catalog-page-list></div>
            <button type="button" class="country-page-btn country-page-btn--nav" data-catalog-page-next aria-label="Следующая страница">Вперёд</button>
          </nav>

          <aside class="card" style="margin-top: 48px; text-align: center; max-width: 720px; margin-inline: auto">
            <?php if ( $catalog_cta_title ) : ?>
              <h2 class="mt-0"><?php echo esc_html( $catalog_cta_title ); ?></h2>
            <?php endif; ?>
            <?php if ( $catalog_cta_text ) : ?>
              <p style="color: var(--text-muted)"><?php echo esc_html( $catalog_cta_text ); ?></p>
            <?php endif; ?>
            <?php if ( $catalog_cta_btn_text ) : ?>
              <button type="button" class="btn btn--primary" style="margin-top: 24px" data-open-form data-form-title="Покажем реальные варианты под ваш запрос" data-form-source="Каталог / Не нашли" data-form-button-text="<?php echo esc_attr( $catalog_cta_btn_text ); ?>">
                <?php echo esc_html( $catalog_cta_btn_text ); ?>
              </button>
            <?php endif; ?>
          </aside>
        </div>
      </section>
