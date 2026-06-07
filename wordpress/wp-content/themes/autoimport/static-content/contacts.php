<?php
/** Static markup from contacts.html */
if ( ! defined( 'ABSPATH' ) ) { exit; }
$autoimport_page_meta = array( 'title' => 'Контакты — AutoImport', 'description' => null, 'extra_head' => '', 'has_quiz' => false, 'has_swiper' => false );
?>
<section class="page-hero contacts-hero">
        <div class="container">
          <p class="eyebrow">Контакты</p>
          <h1>Контакты</h1>
          <p class="subtitle mb-0">Свяжитесь с нами удобным способом или задайте вопрос через форму.</p>
        </div>
      </section>

      <section class="section">
        <div class="container contacts-layout">
          <div>
            <div class="contacts-grid">
              <article class="contact-card">
                <span>Телефон</span>
                <a href="tel:+78001234567">+7 (800) 123-45-67</a>
                <p>Для консультаций по подбору, покупке и доставке автомобиля.</p>
              </article>
              <article class="contact-card">
                <span>Мессенджеры</span>
                <div class="contact-card__links">
                  <a href="#" target="_blank" rel="noopener noreferrer">Max</a>
                  <a href="https://t.me/" target="_blank" rel="noopener noreferrer">Telegram</a>
                </div>
                <p>Напишите нам, если удобнее обсудить задачу в переписке.</p>
              </article>
              <article class="contact-card">
                <span>Email</span>
                <a href="mailto:info@example.com">info@example.com</a>
                <p>Для документов, реквизитов и официальных запросов.</p>
              </article>
              <article class="contact-card">
                <span>Офис</span>
                <strong>Москва, пример адреса</strong>
                <p>Адрес офиса можно заменить на фактический при наполнении сайта.</p>
              </article>
              <article class="contact-card">
                <span>Площадка / склад</span>
                <strong>Адрес площадки уточняется</strong>
                <p>Если есть отдельный склад или площадка выдачи, адрес выводится здесь.</p>
              </article>
              <article class="contact-card">
                <span>Реквизиты</span>
                <strong>ООО «Пример»</strong>
                <p>ИНН 0000000000, ОГРН 0000000000000. Полные реквизиты можно вывести из админки.</p>
              </article>
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
      <section class="section related-blog">
        <div class="container">
          <div class="section-heading-row">
            <div>
              <p class="eyebrow">Блог</p>
              <h2>Полезные статьи</h2>
            </div>
            <p>Разборы по странам, бюджету и выбору автомобиля.</p>
          </div>
          <div class="related-blog__grid">
            <a class="related-blog__card" href="<?php echo esc_url( home_url( '/blog/kak-kupit-avto-korei' ) ); ?>">Как купить авто из Кореи<span>Читать статью</span></a>
            <a class="related-blog__card" href="<?php echo esc_url( home_url( '/blog/kak-kupit-avto-kitaya' ) ); ?>">Как купить авто из Китая<span>Читать статью</span></a>
            <a class="related-blog__card" href="<?php echo esc_url( home_url( '/blog/kak-kupit-avto-evropy' ) ); ?>">Как купить авто из Европы<span>Читать статью</span></a>
            <a class="related-blog__card" href="<?php echo esc_url( home_url( '/blog/kak-kupit-avto-ssha' ) ); ?>">Как купить авто из США<span>Читать статью</span></a>
            <a class="related-blog__card" href="<?php echo esc_url( home_url( '/blog/semeynyy-krossover' ) ); ?>">Как не ошибиться при выборе семейного кроссовера<span>Читать статью</span></a>
            <a class="related-blog__card" href="<?php echo esc_url( home_url( '/blog/luchshie-avto-budget' ) ); ?>">Лучшие авто до 3 / 4 / 5 млн рублей<span>Читать статью</span></a>
            <a class="related-blog__card" href="<?php echo esc_url( home_url( '/blog/kitayskie-gibridy' ) ); ?>">Что важно знать про китайские гибриды<span>Читать статью</span></a>
          </div>
          <div class="related-blog__actions">
            <a class="btn btn--outline" href="<?php echo esc_url( home_url( '/blog' ) ); ?>">Все статьи</a>
          </div>
        </div>
      </section>
