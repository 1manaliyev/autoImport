<?php
/** Static markup from faq.html */
if ( ! defined( 'ABSPATH' ) ) { exit; }
$autoimport_page_meta = array( 'title' => 'Частые вопросы — AutoImport', 'description' => null, 'extra_head' => '', 'has_quiz' => false, 'has_swiper' => false );
$firstSection = get_field( 'секция_1' );
$bottomBlock = get_field( 'блок_снизу' );
$faqItems = get_field( 'вопросы' );
?>
<section class="page-hero faq-hero">
  <div class="container">
    <p class="eyebrow"><?=$firstSection['надзаголовок'];?></p>
    <h1><?=$firstSection['заголовок'];?></h1>
  </div>
</section>
<?php if ($faqItems) : ?>
  <section class="section">
    <div class="container">
      <div class="accordion">
        <?php foreach ($faqItems as $item) : ?>
          <details>
            <summary><?=$item['вопрос'];?></summary>
            <div class="accordion__body"><?=$item['ответ'];?></div>
          </details>
        <?php endforeach; ?>
      </div>
    </div>
  </section>
<?php endif; ?>
<section class="section">
  <div class="container country-cta">
    <h2><?=$bottomBlock['заголовок'];?></h2>
    <p><?=$bottomBlock['текст'];?></p>
    <button type="button" class="btn btn--primary" data-open-form data-form-title="Ответим на ваш вопрос" data-form-type="Консультация" data-form-source="Страница / FAQ" data-form-button-text="Получить консультацию"><?=$bottomBlock['текст_кнопки'];?></button>
  </div>
</section>
<?php get_template_part( 'template-parts/related', 'blog' ); ?>