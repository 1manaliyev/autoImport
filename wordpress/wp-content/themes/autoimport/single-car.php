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
              get_template_part(
                'template-parts/car',
                'card',
                array(
                  'car'         => $car,
                  'form_source' => 'Карточка товара / Похожие',
                )
              );
            endforeach; ?>
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
