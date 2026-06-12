<?php
/** Static markup from reviews.html */
if ( ! defined( 'ABSPATH' ) ) { exit; }
$autoimport_page_meta = array( 'title' => 'Отзывы — AutoImport', 'description' => null, 'extra_head' => '', 'has_quiz' => false, 'has_swiper' => false );
$firstSection = get_field( 'первая_секция' );
$statistics = get_field( 'статистика' );
$videoReviews = get_field( 'видеоотзывы' );
$clientReviews = get_field( 'отзывы_наших_клиентов' );
$screenshots  = get_field( 'скриншоты_переписок' );
$textReviews  = get_field( 'текстовые_отзывы' );
$bottomBlock = get_field( 'блок_снизу' );
?>
<section class="page-hero reviews-hero">
  <div class="container">
    <p class="eyebrow"><?=$firstSection['надзаголовок'];?></p>
    <h1><?=$firstSection['заголовок'];?></h1>
    <p class="subtitle mb-0"><?=$firstSection['текст'];?></p>
  </div>
</section>
<section class="section">
  <div class="container">
    <?php if( $statistics ): ?>
      <div class="reviews-summary">
        <?php foreach( $statistics as $item ): ?>
          <div class="reviews-rating">
            <strong><?=$item['надзаголовок'];?></strong>
            <span><?=$item['заголовок'];?></span>
            <p><?=$item['текст'];?></p>
          </div>
        <?php endforeach; ?>
      </div>
    <?php endif; ?>

    <div class="reviews-section" data-review-show-step="2">
      <div class="section-heading-row">
        <div>
          <p class="eyebrow"><?=$videoReviews['надзаголовок'];?></p>
          <h2><?=$videoReviews['заголовок'];?></h2>
        </div>
        <p><?=$videoReviews['текст'];?></p>
      </div>
      <?php if ($videoReviews['отзывы']) : ?>
        <div class="video-reviews">
          <?php foreach ( $videoReviews['отзывы'] as $index => $item ) : ?>
            <article class="video-review<?php echo $index >= 2 ? ' review-extra is-hidden' : ''; ?>">
            <div class="video-review__media">
              <video controls preload="metadata">
                <source src="<?php echo esc_url( $item['видео'] ); ?>" type="video/mp4" />
                Ваш браузер не поддерживает воспроизведение видео.
              </video>
            </div>
            <h3><?=$item['заголовок'];?></h3>
            <p><?=$item['текст'];?></p>
          </article>
          <?php endforeach; ?>
        </div>
        <div class="reviews-more">
          <button class="btn btn--outline" type="button" data-review-show-more>Смотреть ещё видеоотзывы</button>
        </div>
      <?php endif; ?>
    </div>

    <div class="reviews-section client-reviews" data-client-reviews data-review-page-size="6">
      <h2 class="client-reviews__title"><?=$clientReviews['заголовок'];?></h2>
      <div class="client-reviews__toolbar">
        <div class="client-reviews__summary">
          <strong><?=$clientReviews['средняя_оценка'];?></strong>
          <span>из 5</span>
          <p>На основе <?=$clientReviews['количество_отзывов'];?>+ оценок</p>
        </div>
        <div class="client-reviews__filters" role="tablist" aria-label="Фильтр отзывов по площадкам">
          <button type="button" class="client-reviews__filter is-active" data-review-filter="all" role="tab" aria-selected="true">Все</button>
          <button type="button" class="client-reviews__filter" data-review-filter="yandex" role="tab" aria-selected="false">Яндекс <span>4.9</span></button>
          <button type="button" class="client-reviews__filter" data-review-filter="2gis" role="tab" aria-selected="false">2ГИС <span>5.0</span></button>
          <button type="button" class="client-reviews__filter" data-review-filter="google" role="tab" aria-selected="false">Google <span>4.8</span></button>
          <button type="button" class="client-reviews__filter" data-review-filter="social" role="tab" aria-selected="false">Соцсети</button>
        </div>
      </div>
      <?php if ( $clientReviews['отзывы'] ) : ?>
        <div class="client-reviews__grid">
          <?php foreach ( $clientReviews['отзывы'] as $index => $item ) :
            $platform_label = (string) ( $item['площадка'] ?? '' );
            $platform_slug  = autoimport_get_review_platform_slug( $platform_label );
            $review_date    = (string) ( $item['дата'] ?? '' );
            $review_name    = (string) ( $item['имя'] ?? '' );
            $avatar_url     = autoimport_get_acf_image_url( $item['картинка'] ?? '' );
            ?>
            <article class="client-review-card<?php echo $index >= 6 ? ' is-hidden' : ''; ?>" data-review-platform="<?php echo esc_attr( $platform_slug ); ?>">
              <div class="client-review-card__head">
                <span class="client-review-card__avatar" aria-hidden="true">
                  <?php if ( $avatar_url ) : ?>
                    <img src="<?php echo esc_url( $avatar_url ); ?>" alt="" loading="lazy" />
                  <?php else : ?>
                    <?php echo esc_html( autoimport_get_name_initial( $review_name ) ); ?>
                  <?php endif; ?>
                </span>
                <div class="client-review-card__meta">
                  <strong><?php echo esc_html( $review_name ); ?></strong>
                  <?php if ( $review_date ) : ?>
                    <time datetime="<?php echo esc_attr( $review_date ); ?>"><?php echo esc_html( $review_date ); ?></time>
                  <?php endif; ?>
                </div>
                <span class="client-review-card__platform client-review-card__platform--<?php echo esc_attr( $platform_slug ); ?>"><?php echo esc_html( $platform_label ); ?></span>
              </div>
              <p class="client-review-card__text"><?php echo esc_html( (string) ( $item['отзыв'] ?? '' ) ); ?></p>
            </article>
          <?php endforeach; ?>
        </div>
        <div class="reviews-more">
          <button class="btn btn--outline" type="button" data-review-show-more>Показать ещё отзывы</button>
        </div>
      <?php endif; ?>
    </div>

    <div class="reviews-section" data-review-show-step="3">
      <p class="eyebrow"><?=$screenshots['надзаголовок'];?></p>
      <h2><?=$screenshots['заголовок'];?></h2>
      <?php if ( $screenshots['скриншоты'] ) : ?>
        <div class="message-strip">
          <?php foreach ( $screenshots['скриншоты'] as $index => $item ) :
            $screenshot_url = autoimport_get_acf_image_url( $item['скриншот'] ?? '' );
            $screenshot_alt = (string) ( $item['описание'] ?? '' );
            ?>
            <article class="message-card<?php echo $index >= 3 ? ' review-extra is-hidden' : ''; ?>">
              <button class="message-card__shot" type="button" data-review-lightbox>
                <img src="<?php echo esc_url( $screenshot_url ); ?>" alt="<?php echo esc_attr( $screenshot_alt ); ?>" loading="lazy" />
              </button>
              <span><?php echo esc_html( $screenshot_alt ); ?></span>
            </article>
          <?php endforeach; ?>
        </div>
        <div class="reviews-more">
          <button class="btn btn--outline" type="button" data-review-show-more>Смотреть ещё скриншоты</button>
        </div>
      <?php endif; ?>
    </div>

    <?php if ( ! empty( $textReviews['отзывы'] ) ) : ?>
      <div class="reviews-section" data-review-show-step="3">
        <p class="eyebrow"><?php echo esc_html( (string) ( $textReviews['надзаголовок'] ?? '' ) ); ?></p>
        <h2><?php echo esc_html( (string) ( $textReviews['заголовок'] ?? '' ) ); ?></h2>
        <div class="text-reviews">
          <?php foreach ( $textReviews['отзывы'] as $index => $item ) : ?>
            <article<?php echo $index >= 3 ? ' class="review-extra is-hidden"' : ''; ?>>
              <p><?php echo esc_html( (string) ( $item['текст'] ?? '' ) ); ?></p>
              <strong><?php echo esc_html( (string) ( $item['автор'] ?? '' ) ); ?></strong>
            </article>
          <?php endforeach; ?>
        </div>
        <div class="reviews-more">
          <button class="btn btn--outline" type="button" data-review-show-more>Смотреть ещё текстовые отзывы</button>
        </div>
      </div>
    <?php endif; ?>
  </div>
</section>
<section class="section">
  <div class="container country-cta">
    <h2><?=$bottomBlock['заголовок'];?></h2>
    <p><?=$bottomBlock['текст'];?></p>
    <button type="button" class="btn btn--primary" data-open-form data-form-title="Покажем реальные варианты под ваш запрос" data-form-source="Страница / Отзывы" data-form-button-text="Получить варианты"><?=$bottomBlock['текст_кнопки'];?></button>
  </div>
</section>
<?php get_template_part( 'template-parts/related', 'blog' ); ?>