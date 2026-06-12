<?php
/** Static markup from remote.html */
if ( ! defined( 'ABSPATH' ) ) { exit; }
$autoimport_page_meta = array( 'title' => 'Дистанционная покупка — AutoImport', 'description' => null, 'extra_head' => '', 'has_quiz' => false, 'has_swiper' => false );
$firstSection = get_field('первая_секция');
$process = get_field('процесс');
$whatsImportant = get_field('что_важно');
$bottomBlock = get_field('блок_снизу');
?>
<style>
  .hero-bullet__icon p{
    display: flex;
    color: var(--accent-hover);
  }
  .step-card__icon p{
    display: flex;
    margin: 0;
  }
  .fit-card__head h2{
    margin: 0;
  }
  .icon-points .ui-icon p{
    display: flex;
    color: var(--accent-hover);
  }
</style>
<section class="page-hero remote-hero">
  <div class="container">
    <p class="eyebrow"><?=$firstSection['надзаголовок'];?></p>
    <h1><?=$firstSection['заголовок'];?></h1>
    <p class="subtitle mb-0"><?=$firstSection['текст'];?></p>
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
    <div class="section-heading-row">
      <div>
        <p class="eyebrow"><?=$process['надзаголовок'];?></p>
        <h2><?=$process['заголовок'];?></h2>
      </div>
    </div>
    <?php if ($process['блоки']) :?>
      <div class="steps remote-steps">
        <?php $i = 1; foreach ($process['блоки'] as $block) :?>
          <article class="step-card">
            <span class="ui-icon step-card__icon" aria-hidden="true">
              <?=$block['иконка'];?>
            </span>
            <p class="step-card__label">Шаг <?=$i;?></p>
            <h3><?=$block['заголовок'];?></h3>
            <p><?=$block['текст'];?></p>
          </article>
        <?php $i++; endforeach;?>
      </div>
    <?php endif;?>
  </div>
</section>
<section class="section section--tight-top">
  <div class="container">
    <div class="fit-card fit-card--yes remote-important">
      <div class="fit-card__head">
        <span class="fit-card__icon" aria-hidden="true">✓</span>
        <h2><?=$whatsImportant['заголовок'];?></h2>
      </div>
      <?php if ($whatsImportant['блоки']) :?>
        <div class="icon-points">
          <?php foreach ($whatsImportant['блоки'] as $block) :?>
            <div class="icon-point">
              <span class="ui-icon" aria-hidden="true">
                <?=$block['иконка'];?>
              </span>
              <span><?=$block['текст'];?></span>
            </div>
          <?php endforeach;?>
        </div>
      <?php endif;?>
    </div>
    <div class="country-cta">
      <h2><?=$bottomBlock['заголовок'];?></h2>
      <p><?=$bottomBlock['текст'];?></p>
      <button type="button" class="btn btn--primary" data-open-form data-form-title="Подберём автомобиль под ваш бюджет" data-form-source="Страница / Дистанция / CTA" data-form-button-text="Подобрать авто">
        <?=$bottomBlock['текст_кнопки'];?>
      </button>
    </div>
  </div>
</section>
<?php get_template_part( 'template-parts/related', 'blog' ); ?>