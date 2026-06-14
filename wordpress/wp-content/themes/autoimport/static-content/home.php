<?php
/** Static markup from index.html */
if ( ! defined( 'ABSPATH' ) ) { exit; }
$autoimport_page_meta = array( 'title' => 'Импорт автомобилей из Кореи, Китая, Европы и США под ключ', 'description' => 'Подбор, проверка, выкуп и доставка автомобилей под ключ. Экономия от 500 000 до 1 500 000 ₽ по сравнению с рынком РФ.', 'extra_head' => '', 'has_quiz' => false, 'has_swiper' => false );
$firstSection = get_field('первая_секция');
$catalog = get_field('каталог');
$banner160 = get_field('автомобили_до_160_лс');
$whyRf = get_field('почему_на_рынке_рф_за_тот_же_бюджет_часто_сложно_найти_хороший_автомобиль');
$process = get_field('понятный_и_контролируемый_процесс_покупки');
$segments = get_field('автомобиль_который_подходит_вам');
$buyBySteps = get_field('покупка_автомобиля_по_шагам');
$costBySteps = get_field('сразу_показываем_из_чего_состоит_итоговая_цена');
$fears = get_field('что_обычно_пугает_при_покупке');
$economy = get_field('сколько_вы_экономите');
$popularCars = get_field('популярные_варианты');
$bid = get_field('заявка');
$home_brands      = autoimport_get_car_brand_terms_with_cars();
$catalog_page_url = home_url( '/catalog/' );
?>
<style>
  .hero-bullet__icon p{
    display: flex;
    color: var(--accent-hover);
  }
</style>
<!-- 3.1 Первый экран -->
<section class="hero">
  <div class="container hero__grid">
    <div>
      <h1><?=$firstSection['заголовок'];?></h1>
      <p class="subtitle mb-0"><?=$firstSection['текст'];?></p>
      <?php if ($firstSection['текст_кнопки_1'] || $firstSection['текст_кнопки_2']) : ?>
        <div class="btn-row" style="margin-top: 24px">
          <?php if ($firstSection['текст_кнопки_1']) : ?>
            <button
              type="button"
              class="btn btn--primary"
              data-open-form
              data-form-title="Подберём автомобиль под ваш бюджет"
              data-form-source="Главная / Первый экран"
              data-form-button-text="Подобрать авто"
            >
              <?=$firstSection['текст_кнопки_1'];?>
            </button>
          <?php endif; ?>
          <?php if ($firstSection['текст_кнопки_2']) : ?>
            <button
              type="button"
              class="btn btn--outline"
              data-open-form
              data-form-title="Рассчитаем стоимость автомобиля под ключ"
              data-form-type="Расчёт"
              data-form-source="Главная / Первый экран"
              data-form-button-text="Рассчитать стоимость"
            >
              <?=$firstSection['текст_кнопки_2'];?>
            </button>
          <?php endif; ?>
        </div>
      <?php endif; ?>
    </div>
    <?php if ($firstSection['картинка']) : ?>
    <div class="hero__media">
      <img
        src="<?php echo esc_url( autoimport_asset_uri( 'assets/auto-transport-hero.png' ) ); ?>"
        width="900"
        height="675"
        alt="Автомобиль на транспортере — логистика и доставка"
        loading="eager"
      />
    </div>
    <?php endif; ?>
    <?php if ($firstSection['блоки_снизу']) : ?>
      <div class="hero__bullets">
        <?php foreach ($firstSection['блоки_снизу'] as $block) : ?>
          <div class="hero-bullet">
            <span class="hero-bullet__icon" aria-hidden="true">
              <?=$block['иконка'];?>
            </span>
            <p><?=$block['текст'];?></p>
          </div>
        <?php endforeach; ?>
      </div>
    <?php endif; ?>
  </div>
</section>
<!-- 4.5 Марки на главной (после первого экрана) -->
<section class="section section--tight-top brands-section" id="brands">
  <div class="container">
    <p class="eyebrow"><?=$catalog['надзаголовок'];?></p>
    <h2><?=$catalog['заголовок'];?></h2>
    <p class="subtitle"><?=$catalog['текст'];?></p>
    <?php if ( ! empty( $home_brands ) ) : ?>
      <div class="brands-grid">
        <?php foreach ( $home_brands as $brand_term ) : ?>
          <?php
          $brand_icon = function_exists( 'get_field' )
            ? autoimport_get_acf_image_url( get_field( 'иконка', $brand_term ) )
            : '';
          if ( '' === $brand_icon ) {
            continue;
          }
          $brand_link = add_query_arg( 'brand', $brand_term->name, $catalog_page_url );
          ?>
          <a class="brand-tile" href="<?php echo esc_url( $brand_link ); ?>">
            <span class="brand-logo" aria-hidden="true">
              <img class="brand-logo__img" src="<?php echo esc_url( $brand_icon ); ?>" alt="<?php echo esc_attr( $brand_term->name ); ?>" />
            </span>
          </a>
        <?php endforeach; ?>
      </div>
    <?php endif; ?>
  </div>
</section>
<?php if ($banner160['надзаголовок'] && $banner160['заголовок'] && $banner160['текст'] && $banner160['кнопка']['текст'] && $banner160['кнопка']['ссылка']) : ?>
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
<?php endif; ?>
<!-- 3.2 Почему рынок РФ проигрывает -->
<section class="section" id="why-rf">
  <div class="container">
    <h2><?=$whyRf['заголовок'];?></h2>
    <p class="subtitle"><?=$whyRf['текст'];?></p>
    <?php if ($whyRf['причины']) : ?>
      <div class="cards-grid">
        <?php foreach ($whyRf['причины'] as $reason) : ?>
          <article class="card">
            <h3><?=$reason['заголовок'];?></h3>
            <p><?=$reason['текст'];?></p>
          </article>
        <?php endforeach; ?>
      </div>
    <?php endif; ?>
    <?php if ($whyRf['блок_снизу']['заголовок'] && $whyRf['блок_снизу']['текст_кнопки']) : ?>
      <div class="conclusion-box">
        <p><?=$whyRf['блок_снизу']['заголовок'];?></p>
        <a class="btn btn--primary" href="#economy"><?=$whyRf['блок_снизу']['текст_кнопки'];?></a>
      </div>
    <?php endif; ?>
  </div>
</section>
<!-- 3.3 Почему через нас -->
<section class="section" style="background: var(--bg-card); border-block: 1px solid var(--border)">
  <div class="container">
    <h2><?=$process['заголовок'];?></h2>
    <p class="subtitle"><?=$process['текст'];?></p>
    <?php if ($process['блоки']) : ?>
      <div class="cards-grid">
        <?php foreach ($process['блоки'] as $block) : ?>
          <article class="card">
            <h3><?=$block['заголовок'];?></h3>
            <p><?=$block['текст'];?></p>
          </article>
        <?php endforeach; ?>
      </div>
    <?php endif; ?>
  </div>
</section>
<!-- 3.4 Подберём под задачу -->
<section class="section" id="segments">
  <div class="container">
    <h2><?=$segments['заголовок'];?></h2>
    <p class="subtitle"><?=$segments['текст'];?></p>
    <?php if ($segments['блоки'] || $segments['квиз']) : ?>
      <div class="cards-grid" style="grid-template-columns: repeat(auto-fill, minmax(300px, 1fr))">
        <?php foreach ($segments['блоки'] as $block) : ?>
          <article class="segment-card">
            <div class="segment-card__img">
              <img src="<?php echo esc_url( $block['картинка'] ); ?>" alt="" loading="lazy" />
            </div>
            <div class="segment-card__body">
              <h3><?=$block['заголовок'];?></h3>
              <p class="mb-0" style="color: var(--text-muted); font-size: 0.95rem"><?=$block['текст'];?></p>
              <p class="segment-card__offer">Выгода от 500&nbsp;000&nbsp;₽</p>
              <button type="button" class="btn btn--primary" data-open-segment="family"><?=$block['текст_кнопки'];?></button>
            </div>
          </article>
        <?php endforeach; ?>
        <?php if ($segments['квиз']) : ?>
          <article class="segment-card">
            <div class="segment-card__img">
              <img src="<?php echo esc_url( $segments['квиз']['картинка'] ); ?>" alt="" loading="lazy" />
            </div>
            <div class="segment-card__body">
              <h3><?=$segments['квиз']['заголовок'];?></h3>
              <p class="mb-0" style="color: var(--text-muted); font-size: 0.95rem"><?=$segments['квиз']['текст'];?></p>
              <p class="segment-card__offer"><?=$segments['квиз']['золотистый_текст'];?></p>
              <a class="btn btn--outline" href="<?php echo esc_url( home_url( '/quiz/' ) ); ?>"><?php echo esc_html( (string) ( $segments['квиз']['текст_кнопки'] ?? '' ) ); ?></a>
            </div>
          </article>
        <?php endif; ?>
      </div>
    <?php endif; ?>
  </div>
</section>
<!-- 3.5 Как проходит покупка -->
<section class="section" style="background: var(--bg-card); border-block: 1px solid var(--border)">
  <div class="container">
    <h2><?=$buyBySteps['заголовок'];?></h2>
    <p class="subtitle"><?=$buyBySteps['текст'];?></p>
    <?php if ($buyBySteps['шаги']) : ?>
      <div class="steps">
        <?php $i = 1; foreach ($buyBySteps['шаги'] as $step) : ?>
          <article class="step-card">
            <span class="step-card__num"><?=$i;?></span>
            <h3><?=$step['заголовок'];?></h3>
            <p><?=$step['текст'];?></p>
            <p class="step-card__term"><?=$step['текст_снизу'];?></p>
          </article>
        <?php $i++; endforeach; ?>
      </div>
    <?php endif; ?>
    <div class="text-center" style="margin-top: 28px">
      <button
        type="button"
        class="btn btn--primary"
        data-open-form
        data-form-title="Покажем реальные варианты под ваш запрос"
        data-form-source="Главная / Блок 3.5"
        data-form-button-text="Получить варианты"
      >
        <?=$buyBySteps['текст_кнопки'];?>
      </button>
    </div>
  </div>
</section>
<!-- 3.6 Из чего складывается стоимость -->
<section class="section">
  <div class="container">
    <h2><?=$costBySteps['заголовок'];?></h2>
    <?php if ($costBySteps['блоки']) : ?>
      <div class="cost-cards">
        <?php $i = 1; foreach ($costBySteps['блоки'] as $block) : ?>
          <div class="cost-card">
            <span class="cost-card__num">0<?=$i;?></span>
            <strong><?=$block['заголовок'];?></strong>
            <p><?=$block['текст'];?></p>
          </div>
        <?php $i++; endforeach ; ?>
      </div>
    <?php endif; ?>
    <?php if ($costBySteps['текст_снизу']) : ?>
      <p class="cost-summary"><?=$costBySteps['текст_снизу'];?></p>
    <?php endif; ?>
  </div>
</section>
<!-- 3.7 Страхи -->
<section class="section" style="background: var(--bg-card); border-block: 1px solid var(--border)">
  <div class="container">
    <h2><?=$fears['заголовок'];?></h2>
    <?php if ($fears['страх_-_как_решаем']) : ?>
      <div class="fears-list">
        <?php foreach ($fears['страх_-_как_решаем'] as $block) : ?>
          <div class="fear-row">
            <div class="fear-row__fear"><?=$block['страх'];?></div>
            <div class="fear-row__sol"><?=$block['как_решаем'];?></div>
          </div>
        <?php endforeach; ?>
      </div>
    <?php endif; ?>
  </div>
</section>
<!-- 3.8 Экономия -->
<section class="section section-anchor" id="economy">
  <div class="container">
    <h2><?=$economy['заголовок'];?></h2>
    <p class="subtitle"><?=$economy['текст'];?></p>
    <?php if ($economy['карточки']) : ?>
      <div class="cards-grid">
        <?php foreach ($economy['карточки'] as $card) : ?>
          <article class="savings-card">
            <div class="savings-card__img">
              <img src="<?php echo esc_url( $card['картинка'] ); ?>" alt="<?=$card['название'];?>" loading="lazy" />
            </div>
            <h3 class="mt-0"><?=$card['название'];?></h3>
            <p style="color: var(--text-muted); margin: 0"><?=$card['описание'];?></p>
            <div class="savings-card__prices">
              <span><strong>РФ:</strong> <?=number_format_i18n($card['цена_рф']);?> ₽</span>
              <span><strong>Под ключ:</strong> <?=number_format_i18n($card['цена_под_ключ']);?> ₽</span>
            </div>
            <p class="savings-card__save">Экономия: <?=number_format_i18n($card['экономия']);?> ₽</p>
          </article>
        <?php endforeach; ?>
      </div>
    <?php endif; ?>
    <?php if ($economy['почему_так_дешевле']['пункты']) : ?>
    <h3 style="margin-top: 32px"><?=$economy['почему_так_дешевле']['заголовок'];?></h3>
    <ul class="why-list">
      <?php foreach ($economy['почему_так_дешевле']['пункты'] as $item) : ?>
        <li><?=$item['пункт'];?></li>
      <?php endforeach; ?>
    </ul>
    <?php endif; ?>
    <div class="text-center" style="margin-top: 28px">
      <p class="subtitle" style="margin-inline: auto"><?=$economy['текст_над_кнопкой'];?></p>
      <button
        type="button"
        class="btn btn--primary"
        data-open-form
        data-form-title="Рассчитаем вашу экономию"
        data-form-type="Расчёт"
        data-form-source="Главная / Блок 3.8"
        data-form-button-text="Рассчитать экономию"
      ><?=$economy['текст_кнопки'];?></button>
    </div>
  </div>
</section>
<!-- 3.9 Популярные -->
<section class="section popular-section" style="background: var(--bg-card); border-block: 1px solid var(--border)">
  <div class="container">
    <h2><?=$popularCars['заголовок'];?></h2>
    <?php if ( ! empty( $popularCars['популярные_автомобили'] ) ) : ?>
      <div class="cards-grid" style="grid-template-columns: repeat(auto-fill, minmax(300px, 1fr))">
        <?php
        foreach ( $popularCars['популярные_автомобили'] as $popular_car ) :
          $popular_car_id = is_object( $popular_car ) ? (int) $popular_car->ID : (int) $popular_car;
          if ( ! $popular_car_id || 'car' !== get_post_type( $popular_car_id ) || 'publish' !== get_post_status( $popular_car_id ) ) {
            continue;
          }
          get_template_part(
            'template-parts/car',
            'card',
            array(
              'car'         => $popular_car_id,
              'form_source' => 'Главная / Популярные',
            )
          );
        endforeach;
        ?>
      </div>
    <?php endif; ?>
  </div>
</section>
<!-- 3.10 Финальная форма -->
<section class="section cta-section" id="lead">
<div class="container cta-section__grid">
  <div class="cta-section__content">
    <p class="eyebrow"><?=$bid['надзаголовок'];?></p>
    <h2><?=$bid['заголовок'];?></h2>
    <?=$bid['текст'];?>
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