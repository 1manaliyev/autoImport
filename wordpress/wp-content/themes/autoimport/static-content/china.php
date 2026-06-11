<?php
/** Static markup from china.html */
if ( ! defined( 'ABSPATH' ) ) { exit; }
$autoimport_page_meta = array( 'title' => 'Автомобили из Китая под ключ — AutoImport', 'description' => null, 'extra_head' => '', 'has_quiz' => false, 'has_swiper' => false );
$firstSection = get_field('первая_секция');
$secondSection = get_field('вторая_секция');
$whySection = get_field('преимущества_направления');
$process = get_field('процесс');
$delivery = get_field('доставка');
$guarantees = get_field('гарантии');
$forWhom = get_field('кому_подходит');
$important = get_field('важно_до_покупки');
?>
<section class="country-hero">
  <div class="container country-hero__grid">
    <div class="country-hero__content">
      <p class="eyebrow"><?=$firstSection['надзаголовок'];?></p>
      <h1><?=$firstSection['заголовок'];?></h1>
      <p class="subtitle"><?=$firstSection['текст'];?></p>
      <div class="btn-row">
        <button type="button" class="btn btn--primary" data-open-form data-form-title="Подобрать авто из Китая" data-form-source="Страница / Китай" data-form-country="Китай" data-form-button-text="Подобрать авто">
          Подобрать авто из Китая
        </button>
        <a class="btn btn--outline" href="#country-catalog">Смотреть каталог</a>
      </div>
      <?php if($firstSection['блоки_с_информацией']): ?>
        <div class="country-stats">
          <?php foreach($firstSection['блоки_с_информацией'] as $block): ?>
            <div><strong><?=$block['заголовок'];?></strong><span><?=$block['текст'];?></span></div>
          <?php endforeach; ?>
        </div>
      <?php endif; ?>
    </div>
    <div class="country-hero__media">
      <img src="<?=$firstSection['картинка'];?>" alt="Автомобиль из Китая" />
    </div>
  </div>
</section>

<section id="country-catalog" class="section section--tight-top country-catalog section-anchor" data-country-catalog data-country="Китай" data-country-page-size="<?php echo esc_attr( (string) autoimport_catalog_page_size() ); ?>">
  <div class="container">
    <div class="section-heading-row">
      <div>
        <p class="eyebrow"><?=$secondSection['надзаголовок'];?></p>
        <h2><?=$secondSection['заголовок'];?></h2>
      </div>
      <p style="color: var(--text-muted); max-width: 520px"><?=$secondSection['текст'];?></p>
    </div>

    <?php
    get_template_part(
      'template-parts/country',
      'catalog',
      array(
        'country'      => 'Китай',
        'form_source'  => 'Страница / Китай / Каталог',
        'brands_label' => 'Марки Китай',
      )
    );
    ?>
  </div>
</section>

<section class="section">
  <div class="container">
    <p class="eyebrow"><?=$whySection['надзаголовок'];?></p>
    <h2><?=$whySection['заголовок'];?></h2>
    <?php if($whySection['преимущества']) :?>
      <div class="country-benefits">
        <?php $i = 1; foreach($whySection['преимущества'] as $block): ?>
          <article>
            <span>0<?=$i;?></span>
            <h3><?=$block['заголовок'];?></h3>
            <p><?=$block['текст'];?></p>
          </article>
        <?php $i++; endforeach; ?>
      </div>
    <?php endif; ?>
  </div>
</section>

<section class="section country-process">
  <div class="container">
    <div class="section-heading-row">
      <div>
        <p class="eyebrow"><?=$important['надзаголовок'];?></p>
        <h2><?=$important['заголовок'];?></h2>
      </div>
      <p><?=$important['текст'];?></p>
    </div>
    <?php if ( ! empty( $important['блоки'] ) ) : ?>
      <?php
      $important_blocks = $important['блоки'];
      $important_blocks_count = count( $important_blocks );
      ?>
      <div class="inspection-list">
        <?php
        $important_block_index = 0;
        foreach ( $important_blocks as $block ) :
          ++$important_block_index;
          $is_last_odd_block = ( $important_blocks_count % 2 === 1 ) && ( $important_block_index === $important_blocks_count );
          $inspection_item_class = 'inspection-item' . ( $is_last_odd_block ? ' inspection-item--wide' : '' );
          ?>
          <div class="<?php echo esc_attr( $inspection_item_class ); ?>">
            <span class="inspection-item__icon" aria-hidden="true">✓</span>
            <div>
              <strong><?php echo esc_html( $block['заголовок'] ?? '' ); ?></strong>
              <p><?php echo esc_html( $block['текст'] ?? '' ); ?></p>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    <?php endif; ?>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="section-heading-row">
      <div>
        <p class="eyebrow"><?=$process['надзаголовок'];?></p>
        <h2><?=$process['заголовок'];?></h2>
      </div>
      <p><?=$process['текст'];?></p>
    </div>
    <?php if ($process['процесс']) :?>
    <div class="steps">
        <?php $i = 1; foreach($process['процесс'] as $block): ?>
          <article class="step-card">
            <span class="step-card__num">0<?=$i;?></span>
            <h3><?=$block['заголовок'];?></h3>
            <p><?=$block['текст'];?></p>
          </article>
        <?php $i++; endforeach; ?>
    </div>
    <?php endif; ?>
  </div>
</section>

<section class="section">
  <div class="container delivery-panel">
    <div>
      <p class="eyebrow"><?=$delivery['надзаголовок'];?></p>
      <h2><?=$delivery['заголовок'];?></h2>
      <p><?=$delivery['текст'];?></p>
    </div>
    <?php if($delivery['этапы']) :?>
      <div class="delivery-panel__list">
        <?php foreach($delivery['этапы'] as $block): ?>
          <span><?=$block['этап'];?></span>
        <?php endforeach; ?>
      </div>
    <?php endif; ?>
    <div class="delivery-panel__meta">
      <div>
        <strong>Сроки</strong>
        <span><?=$delivery['сроки'];?></span>
      </div>
      <div>
        <strong>Стоимость</strong>
        <span><?=$delivery['стоимость'];?></span>
      </div>
    </div>
  </div>
</section>

<section class="section section--tight-top">
  <div class="container">
    <?php if($guarantees || $forWhom) :?>
      <div class="split-2 fit-grid">
        <?php if($guarantees) :?>
          <div class="fit-card fit-card--yes">
            <div class="fit-card__head">
              <span class="fit-card__icon" aria-hidden="true">✓</span>
              <h3>Гарантии</h3>
            </div>
            <ul>
              <?php foreach($guarantees as $block): ?>
                <li><?=$block['гарантия'];?></li>
              <?php endforeach; ?>
            </ul>
          </div>
        <?php endif; ?>
        <?php if($forWhom) :?>
          <div class="fit-card fit-card--no">
            <div class="fit-card__head">
              <span class="fit-card__icon" aria-hidden="true">✓</span>
              <h3>Кому подходит</h3>
            </div>
            <ul>
              <?php foreach($forWhom as $block): ?>
                <li><?=$block['текст'];?></li>
              <?php endforeach; ?>
            </ul>
          </div>
        <?php endif; ?>
      </div>
    <?php endif; ?>
    <div class="country-cta">
      <h2>Подберём автомобиль из Китая под ваш бюджет</h2>
      <p>Покажем современные модели, сравним комплектации и заранее рассчитаем итоговую стоимость.</p>
      <button type="button" class="btn btn--primary" data-open-form data-form-title="Получить подборку из Китая" data-form-source="Страница / Китай / CTA" data-form-country="Китай" data-form-button-text="Получить подборку">
        Получить подборку
      </button>
    </div>
  </div>
</section>

<?php get_template_part( 'template-parts/related', 'blog' ); ?>