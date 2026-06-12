<?php
/** Static markup from cars-power-up-to-160.html */
if ( ! defined( 'ABSPATH' ) ) { exit; }
$autoimport_page_meta = array( 'title' => 'Автомобили до 160 л.с. с льготным утильсбором — AutoImport', 'description' => 'Подборка автомобилей до 160 л.с. с льготным утильсбором с 1 декабря 2025. Ниже утильсбор и итоговая стоимость под ключ.', 'extra_head' => '', 'has_quiz' => false, 'has_swiper' => false );
$firstSection = get_field( 'первая_секция' );
$benefit = get_field('почему_автомобили_до_160_лс_выгоднее');
$selection = get_field('подборка');
$bottomBlock = get_field('блок_снизу');
?>

<section class="page-hero collection-160-hero">
  <div class="container">
    <p class="eyebrow"><?=$firstSection['надзаголовок'];?></p>
    <h1><?=$firstSection['заголовок'];?></h1>
    <p class="subtitle mb-0 collection-160-hero__lead"><?=$firstSection['текст'];?></p>
  </div>
</section>
<section class="section">
  <div class="container">
    <h2><?=$benefit['заголовок'];?></h2>
    <?php if ($benefit['выгода']) :?>
      <div class="power-benefits">
        <?php foreach ($benefit['выгода'] as $benefit) :?>
          <article class="power-benefits__item">
            <span class="power-benefits__icon" aria-hidden="true"><?=$benefit['иконка'];?></span>
            <h3 class="mt-0"><?=$benefit['заголовок'];?></h3>
            <p class="mb-0"><?=$benefit['текст'];?></p>
          </article>
        <?php endforeach;?>
    <?php endif;?>
  </div>
</section>
<div class="container section-heading-row" style="margin-bottom: 0">
  <div>
    <p class="eyebrow"><?=$selection['надзаголовок'];?></p>
    <h2><?=$selection['заголовок'];?></h2>
  </div>
  <p style="color: var(--text-muted); max-width: 520px"><?=$selection['текст'];?></p>
</div>

<?php
  $power_cars_query = autoimport_get_cars_up_to_power_query( 160 );
  get_template_part(
    'template-parts/catalog',
    'block',
    array(
      'cars_query'    => $power_cars_query,
      'form_source'   => 'Страница / 160 лс / Каталог',
      'field_prefix'  => 'f-160',
      'preset_power'  => '160-',
      'filter_scope'  => 'query',
      'empty_message' => 'В подборке до 160 л.с. пока нет автомобилей.',
    )
  );
?>
<section class="section">
  <div class="container">
    <p class="collection-160-note mb-0">
      <a href="<?php echo esc_url( home_url( '/catalog' ) ); ?>">Открыть весь каталог</a> — все автомобили с расширенными фильтрами.
    </p>
  </div>
</section>
<section class="section cta-section collection-160-cta">
  <div class="container country-cta">
    <h2><?=$bottomBlock['заголовок'];?></h2>
    <p><?=$bottomBlock['текст'];?></p>
    <button
      type="button"
      class="btn btn--primary"
      data-open-form
      data-form-title="Подберём выгодный вариант до 160 л.с. под ваш бюджет"
      data-form-source="Страница / 160 лс / CTA"
      data-form-button-text="Получить подборку"
    ><?=$bottomBlock['текст_кнопки'];?></button>
  </div>
</section>