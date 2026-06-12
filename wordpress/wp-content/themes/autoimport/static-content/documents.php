<?php
/** Static markup from documents.html */
if ( ! defined( 'ABSPATH' ) ) { exit; }
$autoimport_page_meta = array( 'title' => 'Документы и сертификаты — AutoImport', 'description' => null, 'extra_head' => '', 'has_quiz' => false, 'has_swiper' => true );
$firstSection = get_field( 'первая_секция' );
$cards = get_field( 'карточки' );
$bottomBlock = get_field('блок_снизу');
?>
<section class="page-hero documents-hero">
  <div class="container">
    <p class="eyebrow"><?=$firstSection['надзаголовок'];?></p>
    <h1><?=$firstSection['заголовок'];?></h1>
    <p class="subtitle mb-0"><?=$firstSection['текст'];?></p>
  </div>
</section>
<section class="section">
  <div class="container">
    <?php if ($cards) : ?>
      <div class="documents-slider">
        <div class="swiper documents-swiper" data-documents-swiper>
          <div class="swiper-wrapper">
            <?php foreach ($cards as $card) : ?>
              <div class="swiper-slide">
                <article class="document-card">
                  <button class="document-card__preview" type="button" data-review-lightbox>
                    <img src="<?php echo esc_url( $card['картинка'] ); ?>" alt="<?=$card['заголовок'];?>" loading="lazy" />
                  </button>
                  <div>
                    <span><?=$card['надзаголовок'];?></span>
                    <h2><?=$card['заголовок'];?></h2>
                    <p><?=$card['текст'];?></p>
                  </div>
                </article>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
        <div class="documents-slider__controls">
          <button type="button" class="documents-slider__btn" data-documents-prev aria-label="Предыдущий документ">‹</button>
          <div class="documents-slider__pagination" data-documents-pagination></div>
          <button type="button" class="documents-slider__btn" data-documents-next aria-label="Следующий документ">›</button>
        </div>
      </div>
    <?php endif; ?>
    <div class="country-cta documents-cta">
      <h2><?=$bottomBlock['заголовок'];?></h2>
      <p><?=$bottomBlock['текст'];?></p>
      <button type="button" class="btn btn--primary" data-open-form data-form-title="Ответим на ваш вопрос" data-form-type="Консультация" data-form-source="Страница / Документы" data-form-button-text="Получить консультацию"><?=$bottomBlock['текст_кнопки'];?></button>
    </div>
  </div>
</section>
<?php get_template_part( 'template-parts/related', 'blog' ); ?>