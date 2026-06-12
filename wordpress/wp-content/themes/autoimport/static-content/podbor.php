<?php
/** Static markup from podbor.html */
if ( ! defined( 'ABSPATH' ) ) { exit; }
$autoimport_page_meta = array( 'title' => 'Подбор авто под ключ — AutoImport', 'description' => null, 'extra_head' => '', 'has_quiz' => false, 'has_swiper' => false );
$firstSection = get_field('первая_секция');
$comparison = get_field('сравнение');
$bottomBlock = get_field('блок_снизу');
?>
<style>
  .hero-bullet__icon p{
    display: flex;
    color: var(--accent-hover);
  }
</style>
<section class="page-hero">
  <div class="container">
    <p class="eyebrow"><?=$firstSection['надзаголовок'];?></p>
    <h1><?=$firstSection['заголовок'];?></h1>
    <p class="subtitle mb-0"><?=$firstSection['текст'];?></p>
    <div class="btn-row">
      <?php if ($firstSection['кнопки']['кнопка_1']['текст']) :?>
        <button type="button" class="btn btn--primary" data-open-form data-form-title="Подберём автомобиль под ваш бюджет" data-form-source="Страница / Подбор / Hero" data-form-button-text="Подобрать авто">
          Подобрать авто
        </button>
      <?php endif;?>
      <?php if ($firstSection['кнопки']['кнопка_2']['текст'] && $firstSection['кнопки']['кнопка_2']['ссылка']) :?>
        <a class="btn btn--outline" href="<?php echo esc_url( home_url( '/catalog' ) ); ?>">
          <?=$firstSection['кнопки']['кнопка_2']['текст'];?>
        </a>
      <?php endif;?>
    </div>
    <?php if ($firstSection['блоки']) :?>
      <div class="page-hero__highlights">
        <?php foreach ($firstSection['блоки'] as $block) :?>
          <div class="hero-bullet">
            <span class="hero-bullet__icon ui-icon" aria-hidden="true">
              <?=$block['иконка'];?>
            </span>
            <p><?=$block['текст'];?></p>
          </div>
        <?php endforeach;?>
      </div>
    <?php endif;?>
  </div>
</section>
<section class="section">
  <div class="container">
    <p class="eyebrow"><?=$comparison['надзаголовок'];?></p>
    <h2><?=$comparison['заголовок'];?></h2>
    <?php if ($comparison['самостоятельно'] || $comparison['с_нами']) :?>
      <div class="split-2 fit-grid">
        <?php if ($comparison['самостоятельно']) :?>
          <div class="fit-card fit-card--no">
            <div class="fit-card__head">
              <span class="fit-card__icon" aria-hidden="true">−</span>
              <h3>Самостоятельно</h3>
            </div>
            <ul>
              <?php foreach ($comparison['самостоятельно'] as $item) :?>
                <li><?=$item['текст'];?></li>
              <?php endforeach;?>
            </ul>
          </div>
        <?php endif;?>
        <?php if ($comparison['с_нами']) :?>
          <div class="fit-card fit-card--yes">
            <div class="fit-card__head">
              <span class="fit-card__icon" aria-hidden="true">✓</span>
              <h3>С нами</h3>
            </div>
            <ul>
              <?php foreach ($comparison['с_нами'] as $item) :?>
                <li><?=$item['текст'];?></li>
              <?php endforeach;?>
            </ul>
          </div>
        <?php endif;?>
      </div>
    <?php endif;?>
    <div class="country-cta">
      <h2><?=$bottomBlock['заголовок'];?></h2>
      <p><?=$bottomBlock['текст'];?></p>
      <button type="button" class="btn btn--primary" data-open-form data-form-title="Покажем реальные варианты под ваш запрос" data-form-source="Страница / Подбор / CTA" data-form-button-text="Получить варианты">
        <?=$bottomBlock['текст_кнопки'];?>
      </button>
    </div>
  </div>
</section>
<?php get_template_part( 'template-parts/related', 'blog' ); ?>