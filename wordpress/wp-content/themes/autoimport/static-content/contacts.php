<?php
/** Static markup from contacts.html */
if ( ! defined( 'ABSPATH' ) ) { exit; }
$autoimport_page_meta = array( 'title' => 'Контакты — AutoImport', 'description' => null, 'extra_head' => '', 'has_quiz' => false, 'has_swiper' => false );
$firstSection = get_field( 'первая_секция' );
$info = get_field( 'информация' );
$phoneBlock = $info['блок_с_телефоном'];
$messengersBlock = $info['блок_с_мессенджерами'];
$emailBlock = $info['блок_с_email'];
$officeBlock = $info['блок_с_офисом'];
$storeBlock = $info['блок_с_площадкой'];
$requisitesBlock = $info['блок_с_реквизитами'];
?>
<section class="page-hero contacts-hero">
  <div class="container">
    <p class="eyebrow"><?=$firstSection['надзаголовок'];?></p>
    <h1><?=$firstSection['заголовок'];?></h1>
    <p class="subtitle mb-0"><?=$firstSection['текст'];?></p>
  </div>
</section>

<section class="section">
  <div class="container contacts-layout">
    <div>
      <div class="contacts-grid">
        <?php if ($phoneBlock['надзаголовок'] && $phoneBlock['телефон'] && $phoneBlock['текст']) : ?>
          <article class="contact-card">
            <span><?=$phoneBlock['надзаголовок'];?></span>
            <a href="tel:<?=$phoneBlock['телефон'];?>"><?=$phoneBlock['телефон'];?></a>
            <p><?=$phoneBlock['текст'];?></p>
          </article>
        <?php endif; ?>
        <?php if ($messengersBlock['надзаголовок'] && $messengersBlock['ссылки'] && $messengersBlock['текст']) : ?>
        <article class="contact-card">
          <span><?=$messengersBlock['надзаголовок'];?></span>
          <div class="contact-card__links">
            <?php foreach ($messengersBlock['ссылки'] as $messenger) : ?>
              <a href="<?=$messenger['ссылка'];?>" target="_blank" rel="noopener noreferrer"><?=$messenger['текст'];?></a>
            <?php endforeach; ?>
          </div>
          <p><?=$messengersBlock['текст'];?></p>
        </article>
        <?php endif; ?>
        <?php if ($emailBlock['надзаголовок'] && $emailBlock['email'] && $emailBlock['текст']) : ?>
          <article class="contact-card">
            <span><?=$emailBlock['надзаголовок'];?></span>
            <a href="mailto:<?=$emailBlock['email'];?>"><?=$emailBlock['email'];?></a>
            <p><?=$emailBlock['текст'];?></p>
          </article>
        <?php endif; ?>
        <?php if ($officeBlock['надзаголовок'] && $officeBlock['заголовок'] && $officeBlock['текст']) : ?>
          <article class="contact-card">
            <span><?=$officeBlock['надзаголовок'];?></span>
            <strong><?=$officeBlock['заголовок'];?></strong>
            <p><?=$officeBlock['текст'];?></p>
          </article>
        <?php endif; ?>
        <?php if ($storeBlock['надзаголовок'] && $storeBlock['заголовок'] && $storeBlock['текст']) : ?>
          <article class="contact-card">
            <span><?=$storeBlock['надзаголовок'];?></span>
            <strong><?=$storeBlock['заголовок'];?></strong>
            <p><?=$storeBlock['текст'];?></p>
          </article>
        <?php endif; ?>
        <?php if ($requisitesBlock['надзаголовок'] && $requisitesBlock['заголовок'] && $requisitesBlock['текст']) : ?>
          <article class="contact-card">
            <span><?=$requisitesBlock['надзаголовок'];?></span>
            <strong><?=$requisitesBlock['заголовок'];?></strong>
            <p><?=$requisitesBlock['текст'];?></p>
          </article>
        <?php endif; ?>
      </div>

      <div class="contacts-map">
        <div class="map-placeholder">Карта офиса / площадки</div>
      </div>
    </div>

    <aside class="form-block contacts-form">
      <h2 class="mt-0">Задать вопрос</h2>
      <form data-lead-form data-form-main>
        <input type="hidden" name="lead_source" value="Контакты / Форма" />
        <input type="hidden" name="lead_type" value="Консультация" />
        <input type="hidden" name="lead_country" value="" />
        <input type="hidden" name="lead_car" value="" />
        <div class="form-row">
          <label for="ct-name">Имя</label>
          <input id="ct-name" name="name" required />
        </div>
        <div class="form-row">
          <label for="ct-phone">Телефон</label>
          <input id="ct-phone" name="phone" type="tel" required inputmode="tel" />
        </div>
        <div class="form-row" data-form-consultation-only>
          <label for="ct-time">Удобное время для звонка</label>
          <input id="ct-time" name="call_time" type="text" placeholder="Когда вам удобно принять звонок" />
        </div>
        <div class="form-row">
          <label for="ct-q">Вопрос / комментарий</label>
          <textarea id="ct-q" name="need" rows="5" required></textarea>
        </div>
        <div class="form-consent">
          <input id="ct-c" name="consent" type="checkbox" required />
          <label for="ct-c">Согласен на обработку персональных данных</label>
        </div>
        <button type="submit" class="btn btn--primary" data-submit-label="Получить консультацию">Получить консультацию</button>
      </form>
      <div class="form-success" data-form-success>Спасибо! Мы получили заявку.</div>
    </aside>
  </div>
</section>
<?php get_template_part( 'template-parts/related', 'blog' ); ?>
