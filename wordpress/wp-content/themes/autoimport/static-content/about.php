<?php
/** Static markup from about.html */
if ( ! defined( 'ABSPATH' ) ) { exit; }
$autoimport_page_meta = array( 'title' => 'О компании — AutoImport', 'description' => null, 'extra_head' => '', 'has_quiz' => false, 'has_swiper' => true );
$firstSection = get_field( 'первая_секция' );
$statistics = get_field( 'статистика' );
$command = get_field( 'команда' );
$bottomBlock = get_field( 'блок_снизу' );
?>
<section class="page-hero about-hero">
  <div class="container">
    <p class="eyebrow"><?=$firstSection['надзаголовок'];?></p>
    <h1><?=$firstSection['заголовок'];?></h1>
    <p class="subtitle mb-0"><?=$firstSection['текст'];?></p>
  </div>
</section>

<?php if ($statistics) : ?>
  <section class="section section--tight-bottom">
    <div class="container">
      <div class="about-stats">
        <?php foreach ($statistics as $statistic) : ?>
          <article>
            <strong><?=$statistic['заголовок'];?></strong>
            <span><?=$statistic['текст'];?></span>
          </article>
        <?php endforeach; ?>
      </div>
    </div>
  </section>
<?php endif; ?>
<section class="section section--tight-top">
  <div class="container">
    <div class="section-heading-row">
      <div>
        <p class="eyebrow"><?=$command['надзаголовок'];?></p>
        <h2><?=$command['заголовок'];?></h2>
      </div>
    </div>
    <?php if ($command['работники']) : ?>
      <div class="team-slider">
        <div class="swiper team-swiper" data-team-swiper>
          <div class="swiper-wrapper">
            <?php foreach ($command['работники'] as $worker) : ?>
              <div class="swiper-slide">
                <article class="team-card">
                  <img src="<?php echo esc_url( $worker['картинка'] ); ?>" alt="Фото руководителя отдела подбора" loading="lazy" />
                  <div>
                    <h3><?=$worker['имя'];?></h3>
                    <p><?=$worker['должность'];?></p>
                  </div>
                </article>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
        <div class="team-slider__controls">
          <button type="button" class="team-slider__btn" data-team-prev aria-label="Предыдущий сотрудник">‹</button>
          <div class="team-slider__pagination" data-team-pagination></div>
          <button type="button" class="team-slider__btn" data-team-next aria-label="Следующий сотрудник">›</button>
        </div>
      </div>
    <?php endif; ?>
    <div class="country-cta about-cta">
      <h2><?=$bottomBlock['заголовок'];?></h2>
      <p><?=$bottomBlock['текст'];?></p>
      <button type="button" class="btn btn--primary" data-open-form data-form-title="Подберём автомобиль под ваш бюджет" data-form-source="Страница / О компании" data-form-button-text="Подобрать авто"><?=$bottomBlock['текст_кнопки'];?></button>
    </div>
  </div>
</section>
<?php
get_template_part(
  'template-parts/related',
  'blog',
  array(
    'section_modifiers' => 'section--tight-top',
  )
);
?>
