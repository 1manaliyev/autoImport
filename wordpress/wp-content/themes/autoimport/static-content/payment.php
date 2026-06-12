<?php
/** Static markup from payment.html */
if ( ! defined( 'ABSPATH' ) ) { exit; }
$autoimport_page_meta = array( 'title' => 'Оплата — AutoImport', 'description' => null, 'extra_head' => '', 'has_quiz' => false, 'has_swiper' => false );
$firstSection = get_field('первая_секция');
$steps = get_field('этапы');
$credit = get_field('кредит');
$whatIsImportant = get_field('что_важно');
$example = get_field('пример');
$change = get_field('как_меняется_покупка_с_кредитом');
$bottomBlock = get_field('блок_снизу');
?>
<style>
  .hero-bullet__icon p{
    display: flex;
    color: var(--accent-hover);
  }
  .payment-step__icon p{
    display: flex;
    color: var(--accent-hover);
    margin: 0;
  }
  .step-card__icon p{
    display: flex;
    margin: 0;
  }
  .icon-point .ui-icon p{
    display: flex;
    margin: 0;
    color: var(--accent-hover);
    padding: 0;
  }
</style>
<section class="page-hero">
  <div class="container">
    <p class="eyebrow"><?=$firstSection['надзаголовок'];?></p>
    <h1><?=$firstSection['заголовок'];?></h1>
    <p class="subtitle mb-0"><?=$firstSection['текст'];?></p>
    <?php if ($firstSection['блоки']) : ?>
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
<?php if ($steps) :?>
  <section class="section">
    <div class="container">
      <div class="payment-timeline">
        <?php $i = 1; foreach ($steps as $block) :?>
          <article class="payment-step">
            <span class="ui-icon payment-step__icon" aria-hidden="true">
              <?=$block['иконка'];?>
            </span>
            <div>
              <p class="payment-step__label">Этап 0<?=$i;?></p>
              <h2><?=$block['заголовок'];?></h2>
              <?=$block['текст'];?>
              <p class="payment-note"><?=$block['доп_текст'];?></p>
            </div>
          </article>
        <?php $i++; endforeach;?>
      </div>
    </div>
  </section>
<?php endif;?>
<section class="section country-process" data-credit-block>
  <div class="container">
    <div class="section-heading-row">
      <div>
        <p class="eyebrow"><?=$credit['надзаголовок'];?></p>
        <h2><?=$credit['заголовок'];?></h2>
      </div>
      <p><?=$credit['текст'];?></p>
    </div>
    <?php if ($credit['шаги']) :?>
      <div class="steps">
        <?php $i = 1; foreach ($credit['шаги'] as $block) :?>
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
    <div class="credit-grid">
      <?php if ($whatIsImportant['блоки']) :?>
        <div class="fit-card fit-card--yes">
          <div class="fit-card__head">
            <span class="fit-card__icon" aria-hidden="true">✓</span>
            <h3><?=$whatIsImportant['заголовок'];?></h3>
          </div>
          <div class="icon-points">
            <?php foreach ($whatIsImportant['блоки'] as $block) :?>
              <div class="icon-point">
                <span class="ui-icon" aria-hidden="true">
                  <?=$block['иконка'];?>
                </span>
                <span><?=$block['текст'];?></span>
              </div>
            <?php endforeach;?>
          </div>
        </div>
      <?php endif;?>
      <?php if ($example) :?>
        <div class="credit-example">
          <p class="eyebrow"><?=$example['надзаголовок'];?></p>
          <h3><?=$example['заголовок'];?></h3>
          <ul>
            <?php foreach ($example['информация'] as $block) :?>
              <li><span><?=$block['текст_слева'];?></span><strong><?=$block['текст_справа'];?></strong></li>
            <?php endforeach;?>
          </ul>
        </div>
      <?php endif;?>
      <?php if ($change) :?>
        <div class="fit-card fit-card--no">
          <div class="fit-card__head">
            <span class="fit-card__icon" aria-hidden="true">✓</span>
            <h3><?=$change['заголовок'];?></h3>
          </div>
          <div class="icon-points">
            <?php foreach ($change['блоки'] as $block) :?>
            <div class="icon-point">
              <span class="ui-icon" aria-hidden="true">
                <?=$block['иконка'];?>
              </span>
              <span><?=$block['текст'];?></span>
            </div>
            <?php endforeach;?>
          </div>
        </div>
      <?php endif;?>
    </div>
    <div class="country-cta">
      <h2><?=$bottomBlock['заголовок'];?></h2>
      <p><?=$bottomBlock['текст'];?></p>
      <button type="button" class="btn btn--primary" data-open-form data-form-title="Ответим на ваш вопрос" data-form-type="Консультация" data-form-source="Страница / Оплата / Кредит" data-form-button-text="Получить консультацию">
        <?=$bottomBlock['текст_кнопки'];?>
      </button>
    </div>
  </div>
</section>
<?php get_template_part( 'template-parts/related', 'blog' ); ?>