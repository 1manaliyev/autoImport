<?php
/**
 * Single car — единый шаблон карточки товара для всех автомобилей.
 *
 * @package AutoImport
 */

get_header();

while ( have_posts() ) {
	the_post();

	$car_title   = get_the_title();
	$car_id      = get_the_ID();
	$countries   = wp_get_post_terms( $car_id, 'car_country' );
	$country     = ! empty( $countries ) && ! is_wp_error( $countries ) ? $countries[0]->name : '';
	$badge_class = autoimport_country_badge_class( $country );
	$badge_label = $country ? sprintf( $country ) : '';
  $gallery = get_field('галерея');
  $year = get_field('год');
  $mileage = get_field('пробег');
  $engineVolume = get_field('объем_двигателя');
  $transmission = get_field('привод');
  $fuelType = get_field('топливо');
  $price = get_field('цена_под_ключ');
  $price_country = get_field('цена_в_стране_покупки');
  $why_interested = get_field('почему_этот_авто_интересен');
  $willDo = get_field('подойдет');
  $willNotDo = get_field('не_подойдет');
  $cost_cards = get_field('из_чего_складывается_цена');
  $inspection_list = get_field('что_проверяем_перед_покупкой');
  $similar_cars = get_field('похожие_авто');
  $gearbox = get_field('коробка_передач');
  $power = get_field('мощность');
	?>
<main class="page-main">
  <section class="section section--tight-top">
    <div class="container">
      <p class="eyebrow"><a href="<?php echo esc_url( home_url( '/catalog' ) ); ?>" style="color: inherit">Каталог</a><?php if ( $country ) : ?> · <?php echo esc_html( $country ); ?><?php endif; ?></p>
      <h1><?php echo esc_html( $car_title ); ?></h1>
      <div class="split-2" style="grid-template-columns: 1fr 1fr; gap: 24px; align-items: start">
        <div class="product-gallery" data-gallery>
          <div class="product-gallery__main-wrap">
            <?php if ($badge_label):?>
            <span class="car-badge <?php echo esc_attr( $badge_class ); ?>"><?php echo esc_html( $badge_label ); ?></span>
            <?php endif;?>
            <button class="product-gallery__main" type="button" data-gallery-main data-gallery-index="0" aria-label="Открыть фото Hyundai Tucson">
              <img src="<?php echo esc_url( $gallery[0]['картинка'] ); ?>" alt="Hyundai Tucson" width="900" height="600" />
            </button>
            <button type="button" class="product-gallery__nav product-gallery__nav--prev" data-gallery-main-prev aria-label="Предыдущее фото">‹</button>
            <button type="button" class="product-gallery__nav product-gallery__nav--next" data-gallery-main-next aria-label="Следующее фото">›</button>
          </div>
          <div class="product-gallery-slider" aria-label="Фотографии автомобиля">
            <div class="swiper product-gallery-swiper" data-product-gallery-swiper>
              <div class="swiper-wrapper">
                <?php foreach ( $gallery as $image ) : ?>
                  <div class="swiper-slide">
                    <button class="product-gallery__thumb" type="button" data-gallery-thumb data-gallery-index="<?php echo esc_attr( $index ); ?>">
                      <img src="<?php echo esc_url( $image['картинка'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
                    </button>
                  </div>
                <?php endforeach; ?>
              </div>
            </div>
            <div class="product-gallery-slider__controls">
              <button type="button" class="product-gallery-slider__btn" data-product-gallery-prev aria-label="Предыдущее фото">‹</button>
              <button type="button" class="product-gallery-slider__btn" data-product-gallery-next aria-label="Следующее фото">›</button>
            </div>
          </div>
        </div>
        <div class="product-summary">
          <p class="eyebrow">Авто под ключ</p>
          <h2><?php echo esc_html( $car_title ); ?></h2>
          <div class="product-specs">
            <?php if ($badge_label):?>
            <div><span>Страна</span><strong><?php echo esc_html( $badge_label ); ?></strong></div>
            <?php endif;?>
            <?php if ($year):?>
            <div><span>Год</span><strong><?=esc_html( $year );?></strong></div>
            <?php endif;?>
            <?php if (isset($mileage) && $mileage !== null):?>
            <div><span>Пробег</span><strong><?=number_format_i18n($mileage)?></strong></div>
            <?php endif;?>
            <?php if ($engineVolume):?>
            <div><span>Двигатель</span><strong><?=esc_html( $engineVolume );?> <?esc_html( $fuelType ); ?></strong></div>
            <?php endif;?>
            <?php if ($power):?>
            <div><span>Мощность</span><strong><?=esc_html( $power );?> <?esc_html( $fuelType ); ?> л.с.</strong></div>
            <?php endif;?>
            <?php if ($transmission):?>
            <div><span>Привод</span><strong><?=esc_html( $transmission );?></strong></div>
            <?php endif;?>
            <?php if ($gearbox):?>
            <div><span>Коробка передач</span><strong><?=esc_html( $gearbox );?></strong></div>
            <?php endif;?>
            <?php if ($fuelType):?>
            <div><span>Топливо</span><strong><?=esc_html( $fuelType );?></strong></div>
            <?php endif;?>
          </div>
          <?php if ($price || $price_country):?>
          <div class="product-price">
            <?php if ($price):?>
            <span>Ориентир под ключ</span>
            <strong>от <?=number_format_i18n( $price );?> ₽</strong>
            <?php endif;?>
            <?php if ($price_country):?>
            <p>Цена в стране покупки: от <?=number_format_i18n( $price_country );?> ₽</p>
            <?php endif;?>
          </div>
          <p class="product-summary__note">
            Точный расчёт зависит от курса, города доставки и выбранной комплектации.
          </p>
          <?php endif;?>
          <div class="btn-row product-summary__actions">
            <button type="button" class="btn btn--primary" data-open-form data-form-title="<?php echo esc_attr( sprintf( 'Рассчитаем стоимость %s под ключ', $car_title ) ); ?>" data-form-type="Расчёт" data-form-source="Карточка авто" data-form-car="<?php echo esc_attr( $car_title ); ?>" data-form-button-text="Получить расчёт по этому авто">
              Получить расчёт по этому авто
            </button>
            <button type="button" class="btn btn--outline" data-open-form data-form-title="Ответим на ваш вопрос" data-form-type="Консультация" data-form-source="Карточка авто / Консультация" data-form-car="<?php echo esc_attr( $car_title ); ?>" data-form-button-text="Получить консультацию">
              Получить консультацию
            </button>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php if ($why_interested): ?>
    <section class="section product-interest" style="background: var(--bg-card); border-block: 1px solid var(--border)">
      <div class="container">
        <h2>Почему этот авто интересен</h2>
        <p class="prose" style="max-width: none"><?=esc_html( $why_interested );?></p>
      </div>
    </section>
  <?php endif; ?>

  <?php if ($willDo || $willNotDo):?>
    <section class="section">
      <div class="container">
        <div class="split-2 fit-grid">
          <?php if ($willDo):?>
            <div class="fit-card fit-card--yes">
              <div class="fit-card__head">
                <span class="fit-card__icon" aria-hidden="true">✓</span>
                <h3>Подойдёт</h3>
              </div>
              <ul>
                <?php foreach ($willDo as $item):?>
                  <li><?=esc_html( $item['для_чего'] );?></li>
                <?php endforeach;?>
              </ul>
            </div>
          <?php endif;?>
          <?php if ($willNotDo):?>
            <div class="fit-card fit-card--no">
              <div class="fit-card__head">
                <span class="fit-card__icon" aria-hidden="true">−</span>
                <h3>Не подойдёт</h3>
              </div>
              <ul>
                <?php foreach ($willNotDo as $item):?>
                  <li><?=esc_html( $item['для_чего'] );?></li>
                <?php endforeach;?>
              </ul>
            </div>
          <?php endif;?>
        </div>
      </div>
    </section>
  <?php endif;?>
  
  <?php if ($cost_cards):?>
    <section class="section" style="background: var(--bg-card); border-block: 1px solid var(--border)">
      <div class="container">
        <h2>Из чего складывается цена</h2>
        <div class="cost-cards">
          <?php if ($cost_cards['1']): ?>
            <div class="cost-card">
              <span class="cost-card__num">01</span>
              <strong><?=esc_html( $cost_cards['1']['заголовок'] );?></strong>
              <p><?=esc_html( $cost_cards['1']['текст'] );?></p>
            </div>
          <?php endif;?>
          <?php if ($cost_cards['2']): ?>
            <div class="cost-card">
              <span class="cost-card__num">02</span>
              <strong><?=esc_html( $cost_cards['2']['заголовок'] );?></strong>
              <p><?=esc_html( $cost_cards['2']['текст'] );?></p>
            </div>
          <?php endif;?>
          <?php if ($cost_cards['3']): ?>
            <div class="cost-card">
              <span class="cost-card__num">03</span>
              <strong><?=esc_html( $cost_cards['3']['заголовок'] );?></strong>
              <p><?=esc_html( $cost_cards['3']['текст'] );?></p>
            </div>
          <?php endif;?>
          <?php if ($cost_cards['4']): ?>
            <div class="cost-card">
              <span class="cost-card__num">04</span>
              <strong><?=esc_html( $cost_cards['4']['заголовок'] );?></strong>
              <p><?=esc_html( $cost_cards['4']['текст'] );?></p>
            </div>
          <?php endif;?>
          <?php if ($cost_cards['5']): ?>
            <div class="cost-card">
              <span class="cost-card__num">05</span>
              <strong><?=esc_html( $cost_cards['5']['заголовок'] );?></strong>
              <p><?=esc_html( $cost_cards['5']['текст'] );?></p>
            </div>
          <?php endif;?>
          <?php if ($cost_cards['6']): ?>
            <div class="cost-card">
              <span class="cost-card__num">06</span>
              <strong><?=esc_html( $cost_cards['6']['заголовок'] );?></strong>
              <p><?=esc_html( $cost_cards['6']['текст'] );?></p>
            </div>
          <?php endif;?>
          <?php if ($cost_cards['еще_блоки']) :?>
            <?php $i = 7;foreach ($cost_cards['еще_блоки'] as $item):?>
              <div class="cost-card">
                <span class="cost-card__num">0<?=$i?></span>
                <strong><?=esc_html( $item['заголовок'] );?></strong>
                <p><?=esc_html( $item['текст'] );?></p>
              </div>
            <?php $i++; endforeach;?>
          <?php endif;?>
        </div>
        <p class="cost-summary">
          Точный расчёт зависит от курса, города доставки и конкретной машины. Все значения редактируются через админку.
        </p>
      </div>
    </section>
  <?php endif;?>

  <?php if ($inspection_list):?>
    <section class="section">
      <div class="container">
        <h2>Что проверяем перед покупкой</h2>
        <div class="inspection-list">
          <?php if ($inspection_list['1']): ?>
            <div class="inspection-item">
              <span class="inspection-item__icon" aria-hidden="true">✓</span>
              <div>
                <strong><?=esc_html( $inspection_list['1']['заголовок'] );?></strong>
                <p><?=esc_html( $inspection_list['1']['текст'] );?></p>
              </div>
            </div>
          <?php endif;?>
          <?php if ($inspection_list['2']): ?>
            <div class="inspection-item">
              <span class="inspection-item__icon" aria-hidden="true">✓</span>
              <div>
                <strong><?=esc_html( $inspection_list['2']['заголовок'] );?></strong>
                <p><?=esc_html( $inspection_list['2']['текст'] );?></p>
              </div>
            </div>
          <?php endif;?>
          <?php if ($inspection_list['3']): ?>
            <div class="inspection-item">
              <span class="inspection-item__icon" aria-hidden="true">✓</span>
              <div>
                <strong><?=esc_html( $inspection_list['3']['заголовок'] );?></strong>
                <p><?=esc_html( $inspection_list['3']['текст'] );?></p>
              </div>
            </div>
          <?php endif;?>
          <?php if ($inspection_list['4']): ?>
            <div class="inspection-item">
              <span class="inspection-item__icon" aria-hidden="true">✓</span>
              <div>
                <strong><?=esc_html( $inspection_list['4']['заголовок'] );?></strong>
                <p><?=esc_html( $inspection_list['4']['текст'] );?></p>
              </div>
            </div>
          <?php endif;?>
          <?php if ($inspection_list['5']): ?>
            <div class="inspection-item">
              <span class="inspection-item__icon" aria-hidden="true">✓</span>
              <div>
                <strong><?=esc_html( $inspection_list['5']['заголовок'] );?></strong>
                <p><?=esc_html( $inspection_list['5']['текст'] );?></p>
              </div>
            </div>
          <?php endif;?>
          <?php if ($inspection_list['6']): ?>
            <div class="inspection-item">
              <span class="inspection-item__icon" aria-hidden="true">✓</span>
              <div>
                <strong><?=esc_html( $inspection_list['6']['заголовок'] );?></strong>
                <p><?=esc_html( $inspection_list['6']['текст'] );?></p>
              </div>
            </div>
          <?php endif;?>
          <?php if ($inspection_list['7']): ?>
            <div class="inspection-item">
              <span class="inspection-item__icon" aria-hidden="true">✓</span>
              <div>
                <strong><?=esc_html( $inspection_list['7']['заголовок'] );?></strong>
                <p><?=esc_html( $inspection_list['7']['текст'] );?></p>
              </div>
            </div>
          <?php endif;?>
          <?php if ($inspection_list['еще_блоки']): ?>
            <?php foreach ($inspection_list['еще_блоки'] as $item):?>
              <div class="inspection-item">
                <span class="inspection-item__icon" aria-hidden="true">✓</span>
                <div>
                  <strong><?=esc_html( $item['заголовок'] );?></strong>
                  <p><?=esc_html( $item['текст'] );?></p>
                </div>
              </div>
            <?php endforeach;?>
          <?php endif;?>
        </div>
      </div>
    </section>
  <?php endif;?>
      <section class="section" style="background: var(--bg-card); border-block: 1px solid var(--border)">
        <div class="container">
          <h2>Похожие варианты</h2>
          <div class="cards-grid" style="grid-template-columns: repeat(auto-fill, minmax(300px, 1fr))">
            <?php foreach ( $similar_cars as $car ) :
              $similar_countries = wp_get_post_terms( $car, 'car_country' );
              $similar_country   = ! empty( $similar_countries ) && ! is_wp_error( $similar_countries ) ? $similar_countries[0]->name : '';
              $similar_badge     = autoimport_country_badge_class( $similar_country );
              $similar_image     = get_field( 'галерея', $car )[0]['картинка'];
              $similar_price     = get_field( 'цена_под_ключ', $car );
              $similar_year      = get_field( 'год', $car );
              $similar_mileage   = get_field( 'пробег', $car );
              $similar_transmission = get_field( 'привод', $car );
              $similar_gearbox = get_field( 'коробка_передач', $car );
              $similar_power = get_field( 'мощность', $car );
              $similar_fuelType = get_field( 'тип_топлива', $car );
              $similar_engineVolume = get_field( 'объем_двигателя', $car );
              $similar_description = get_field( 'текст_карточки', $car );
              $similar_type      = get_field( 'тип_автомобиля', $car );
              $similar_type_class = $similar_type ? autoimport_car_type_tag_class( (string) $similar_type ) : '';
              $similar_link = get_the_permalink( $car );
            ?>
              <article class="car-card">
                <div class="car-card__img">
                  <?php if ( $similar_country ) : ?>
                  <span class="car-badge <?php echo esc_attr( $similar_badge ); ?>"><?php echo esc_html( $similar_country ); ?></span>
                  <?php endif; ?>
                  <?php if ($similar_image):?>
                    <img src="<?=esc_url($similar_image);?>" alt="" loading="lazy" />
                  <?php endif;?>
                </div>
                <div class="car-card__body">
                  <h3 class="mt-0"><?=get_the_title( $car );?></h3>
                  <p class="car-card__price"><strong>от <?=number_format_i18n($similar_price); ?> ₽ под ключ</strong></p>
                  <ul class="car-specs" aria-label="Характеристики">
                    <?php if ($similar_year):?>
                      <li class="car-specs__item" title="Год выпуска">
                        <span class="car-specs__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><rect x="3" y="4" width="18" height="18" rx="2"/><path d="M16 2v4M8 2v4M3 10h18"/></svg></span>
                        <span class="car-specs__value"><?=$similar_year; ?></span>
                      </li>
                    <?php endif;?>
                    <?php if (trim($similar_mileage) !== ''):?>
                      <li class="car-specs__item" title="Пробег">
                        <span class="car-specs__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/></svg></span>
                        <span class="car-specs__value"><?=number_format_i18n($similar_mileage); ?> км</span>
                      </li>
                    <?php endif;?>
                    <?php if ($similar_gearbox):?>
                    <li class="car-specs__item" title="Тип КПП">
                      <span class="car-specs__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><circle cx="12" cy="12" r="3"/><path d="M12 2v2M12 20v2M4.9 4.9l1.4 1.4M17.7 17.7l1.4 1.4M2 12h2M20 12h2M4.9 19.1l1.4-1.4M17.7 6.3l1.4-1.4"/></svg></span>
                      <span class="car-specs__value"><?=$similar_gearbox;?></span>
                    </li>
                    <?php endif;?>
                    <?php if ($similar_transmission):?>
                    <li class="car-specs__item" title="Привод">
                      <span class="car-specs__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><circle cx="7" cy="17" r="2"/><circle cx="17" cy="17" r="2"/><path d="M5 17h2l2-7h6l2 7h2M9 10l1-4h4l1 4"/></svg></span>
                      <span class="car-specs__value"><?=$similar_transmission; ?></span>
                    </li>
                    <?php endif;?>
                    <?php if ($similar_power | $similar_engineVolume):?>
                    <li class="car-specs__item" title="Объём двигателя (л.с.)">
                      <span class="car-specs__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><path d="M8 10h8v8H8z"/><path d="M6 10V7h12v3M10 6V4M14 6V4M10 18v2M14 18v2"/></svg></span>
                      <span class="car-specs__value"><?=$similar_engineVolume?> л (<?=$similar_power?> л.с.)</span>
                    </li>
                    <?php endif;?>
                    <?php if ($similar_fuelType):?>
                    <li class="car-specs__item" title="Тип топлива">
                      <span class="car-specs__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><path d="M6 3h8v18H6z"/><path d="M14 7h2l2 4v10h-4"/></svg></span>
                      <span class="car-specs__value"><?=$similar_fuelType;?></span>
                    </li>
                    <?php endif;?>
                  </ul>
                  <?php if ($similar_description):?>
                    <p class="car-card__desc"><?=$similar_description;?></p>
                  <?php endif;?>
                  <?php if ( $similar_type ) : ?>
                  <span class="tag <?php echo esc_attr( $similar_type_class ); ?>"><?php echo esc_html( $similar_type ); ?></span>
                  <?php endif; ?>
                  <div class="car-card__actions">
                    <a class="btn btn--outline" href="<?=$similar_link; ?>">Подробнее</a>
                    <button type="button" class="btn btn--primary" data-open-form data-form-title="Рассчитаем стоимость Kia Sportage под ключ" data-form-type="Расчёт" data-form-source="Карточка товара / Похожие" data-form-car="Kia Sportage" data-form-button-text="Получить расчёт по авто">
                      Получить расчёт по авто
                    </button>
                  </div>
                </div>
              </article>
            <?php endforeach;?>
            <!-- <article class="car-card">
              <div class="car-card__img">
                <span class="car-badge <?php echo esc_attr( $badge_class ); ?>"><?php echo esc_html( $badge_label ); ?></span>
                <img src="<?php echo esc_url( autoimport_asset_uri( 'assets/family-car.jpg' ) ); ?>" alt="" loading="lazy" />
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
                <p class="car-card__desc">
                  Семейный кроссовер с хорошей комплектацией и понятной стоимостью
                </p>
                <span class="tag tag--family">Семейный</span>
                <div class="car-card__actions">
                  <a class="btn btn--outline" href="<?php echo esc_url( home_url( '/catalog' ) ); ?>">Подробнее</a>
                  <button type="button" class="btn btn--primary" data-open-form data-form-title="Рассчитаем стоимость Kia Sportage под ключ" data-form-type="Расчёт" data-form-source="Карточка товара / Похожие" data-form-car="Kia Sportage" data-form-button-text="Получить расчёт по авто">
                    Получить расчёт по авто
                  </button>
                </div>
              </div>
            </article>
            <article class="car-card">
              <div class="car-card__img">
                <span class="car-badge <?php echo esc_attr( $badge_class ); ?>"><?php echo esc_html( $badge_label ); ?></span>
                <img src="<?php echo esc_url( autoimport_asset_uri( 'assets/hyundai-tucson.png' ) ); ?>" alt="" loading="lazy" />
              </div>
              <div class="car-card__body">
                <h3 class="mt-0">Hyundai Santa Fe</h3>
                <p class="car-card__price"><strong>от 3&nbsp;200&nbsp;000&nbsp;₽ под ключ</strong></p>
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
                    <span class="car-specs__value">2.2 л (180 л.с.)</span>
                  </li>
                  <li class="car-specs__item" title="Тип топлива">
                    <span class="car-specs__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><path d="M6 3h8v18H6z"/><path d="M14 7h2l2 4v10h-4"/></svg></span>
                    <span class="car-specs__value">Бензин</span>
                  </li>
                </ul>
                <p class="car-card__desc">
                  Просторный SUV для семьи, города и дальних поездок
                </p>
                <span class="tag">Комфорт</span>
                <div class="car-card__actions">
                  <a class="btn btn--outline" href="<?php echo esc_url( home_url( '/catalog' ) ); ?>">Подробнее</a>
                  <button type="button" class="btn btn--primary" data-open-form data-form-title="Рассчитаем стоимость Hyundai Santa Fe под ключ" data-form-type="Расчёт" data-form-source="Карточка товара / Похожие" data-form-car="Hyundai Santa Fe" data-form-button-text="Получить расчёт по авто">
                    Получить расчёт по авто
                  </button>
                </div>
              </div>
            </article>
            <article class="car-card">
              <div class="car-card__img">
                <span class="car-badge <?php echo esc_attr( $badge_class ); ?>"><?php echo esc_html( $badge_label ); ?></span>
                <img src="<?php echo esc_url( autoimport_asset_uri( 'assets/toyota.webp' ) ); ?>" alt="" loading="lazy" />
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
                <p class="car-card__desc">
                  Надёжный кроссовер с высокой ликвидностью на вторичном рынке
                </p>
                <span class="tag">Надёжный</span>
                <div class="car-card__actions">
                  <a class="btn btn--outline" href="<?php echo esc_url( home_url( '/catalog' ) ); ?>">Подробнее</a>
                  <button type="button" class="btn btn--primary" data-open-form data-form-title="Рассчитаем стоимость Toyota RAV4 под ключ" data-form-type="Расчёт" data-form-source="Карточка товара / Похожие" data-form-car="Toyota RAV4" data-form-button-text="Получить расчёт по авто">
                    Получить расчёт по авто
                  </button>
                </div>
              </div>
            </article> -->
          </div>
        </div>
      </section>

      <section class="section cta-section product-cta">
        <div class="container">
          <h2>Хотите этот автомобиль или похожий вариант?</h2>
          <p class="subtitle">Оставьте заявку — подготовим точный расчёт и расскажем об альтернативах.</p>
          <div class="form-block">
            <form data-lead-form data-form-main>
              <input type="hidden" name="lead_source" value="<?php echo esc_attr( 'Карточка / ' . $car_title ); ?>" />
              <input type="hidden" name="lead_type" value="Подбор" />
              <input type="hidden" name="lead_segment" value="" />
              <input type="hidden" name="car_title" value="<?php echo esc_attr( $car_title ); ?>" />
              <input type="hidden" name="lead_country" value="" />
              <input type="hidden" name="lead_car" value="<?php echo esc_attr( $car_title ); ?>" />
              <div class="form-row">
                <label for="cf-name">Имя</label>
                <input id="cf-name" name="name" type="text" required autocomplete="name" />
              </div>
              <div class="form-row">
                <label for="cf-phone">Телефон</label>
                <input id="cf-phone" name="phone" type="tel" required autocomplete="tel" inputmode="tel" />
              </div>
              <div class="form-row">
                <label for="cf-need">Комментарий</label>
                <textarea id="cf-need" name="need" rows="2"></textarea>
              </div>
              <div class="form-consent">
                <input id="cf-consent" name="consent" type="checkbox" required />
                <label for="cf-consent">Согласен на обработку персональных данных</label>
              </div>
              <button type="submit" class="btn btn--primary" data-submit-label="Получить расчёт по этому авто">Получить расчёт по этому авто</button>
            </form>
            <div class="form-success" data-form-success role="status">Спасибо! Мы получили заявку и скоро свяжемся с вами.</div>
          </div>
        </div>
      </section>
</main>
	<?php
}

get_footer();
