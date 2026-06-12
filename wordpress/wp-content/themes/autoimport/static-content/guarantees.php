<?php
/** Static markup from guarantees.html */
if ( ! defined( 'ABSPATH' ) ) { exit; }
$autoimport_page_meta = array( 'title' => 'Гарантии — AutoImport', 'description' => null, 'extra_head' => '', 'has_quiz' => false, 'has_swiper' => false );
$firstSection = get_field( 'первая_секция' );
$agreement = get_field( 'договор' );
$payment = get_field( 'оплата' );
$formalization = get_field( 'оформление' );
$situations = get_field( 'ситуации' );
$formSection = get_field( 'секция_с_формой' );
?>
<section class="page-hero guarantees-hero">
  <div class="container">
    <p class="eyebrow"><?=$firstSection['надзаголовок'];?></p>
    <h1><?=$firstSection['заголовок'];?></h1>
    <p class="subtitle"><?=$firstSection['текст'];?></p>
    <div class="guarantees-hero__note"><?=$firstSection['текст_снизу'];?></div>
  </div>
</section>
<section class="section">
  <div class="container">
    <div class="section-heading-row">
      <div>
        <p class="eyebrow"><?=$agreement['надзаголовок'];?></p>
        <h2><?=$agreement['заголовок'];?></h2>
      </div>
    </div>
    <?php if ($agreement['блоки']) : ?>
      <div class="guarantee-cards">
        <?php $i = 1; foreach ($agreement['блоки'] as $block) : ?>
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
<section class="section guarantee-money-section">
  <div class="container">
    <div class="section-heading-row">
      <div>
        <p class="eyebrow"><?=$payment['надзаголовок'];?></p>
        <h2><?=$payment['заголовок'];?></h2>
      </div>
    </div>
    <?php if ($payment['блоки']) :?>
      <div class="guarantee-list">
        <?php foreach ($payment['блоки'] as $block) : ?>
          <div><?=$block['текст'];?></div>
        <?php endforeach; ?>
      </div>
    <?php endif; ?>
    <div class="guarantee-note"><?=$payment['текст_снизу'];?></div>
  </div>
</section>
<section class="section">
  <div class="container">
    <div class="guarantee-docs">
      <div>
        <p class="eyebrow"><?=$formalization['надзаголовок'];?></p>
        <h2><?=$formalization['заголовок'];?></h2>
        <p><?=$formalization['текст'];?></p>
      </div>
      <?php if ($formalization['документы']) :?>
        <ul>
          <?php foreach ($formalization['документы'] as $document) :?>
            <li><?=$document['документ'];?></li>
          <?php endforeach; ?>
        </ul>
      <?php endif; ?>
      <div class="guarantee-note"><?=$formalization['текст_снизу'];?></div>
    </div>
  </div>
</section>
<section class="section section--tight-top">
  <div class="container">
    <div class="section-heading-row">
      <div>
        <p class="eyebrow"><?=$situations['надзаголовок'];;?></p>
        <h2><?=$situations['заголовок'];;?></h2>
      </div>
      <?php if ($situations['кнопка']['текст'] && $situations['кнопка']['ссылка']) : ?>
        <a class="btn btn--outline" href="<?php echo esc_url( home_url( $situations['кнопка']['ссылка'] ) ); ?>"><?=$situations['кнопка']['текст'];?></a>
      <?php endif; ?>
    </div>
    <?php if ($situations['ситуация_-_решение']) :?>
      <div class="table-wrap guarantee-table">
        <table class="table-simple">
          <thead>
            <tr>
              <th>Ситуация</th>
              <th>Решение</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($situations['ситуация_-_решение'] as $item) : ?>
              <tr>
                <td><?=$item['ситуация'];?></td>
                <td><?=$item['решение'];?></td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    <?php endif; ?>
  </div>
</section>
<section class="section cta-section guarantee-cta">
  <div class="container">
    <div class="product-cta">
      <p class="eyebrow"><?=$formSection['надзаголовок'];?></p>
      <h2><?=$formSection['заголовок'];?></h2>
      <div class="form-block">
        <form data-lead-form data-form-main>
          <input type="hidden" name="lead_source" value="Страница / Гарантии" />
          <input type="hidden" name="lead_type" value="Консультация" />
          <input type="hidden" name="lead_country" value="" />
          <input type="hidden" name="lead_car" value="" />
          <div class="form-row">
            <label for="g-n">Имя</label>
            <input id="g-n" name="name" required />
          </div>
          <div class="form-row">
            <label for="g-p">Телефон</label>
            <input id="g-p" name="phone" type="tel" required inputmode="tel" />
          </div>
          <div class="form-row" data-form-consultation-only>
            <label for="g-time">Удобное время для звонка</label>
            <input id="g-time" name="call_time" type="text" placeholder="Например, завтра с 10:00 до 12:00" />
          </div>
          <div class="form-row" data-form-consultation-only>
            <label for="g-comment">Комментарий</label>
            <textarea id="g-comment" name="comment" rows="3"></textarea>
          </div>
          <div class="form-consent">
            <input id="g-c" name="consent" type="checkbox" required />
            <label for="g-c">Согласен на обработку персональных данных</label>
          </div>
          <button type="submit" class="btn btn--primary" data-submit-label="Получить консультацию">Получить консультацию</button>
        </form>
        <div class="form-success" data-form-success>Спасибо! Мы получили заявку.</div>
      </div>
    </div>
  </div>
</section>
<?php get_template_part( 'template-parts/related', 'blog' ); ?>