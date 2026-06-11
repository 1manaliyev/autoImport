<?php
/** Static markup from guarantees.html */
if ( ! defined( 'ABSPATH' ) ) { exit; }
$autoimport_page_meta = array( 'title' => 'Гарантии — AutoImport', 'description' => null, 'extra_head' => '', 'has_quiz' => false, 'has_swiper' => false );
?>
<section class="page-hero guarantees-hero">
        <div class="container">
          <p class="eyebrow">Гарантии</p>
          <h1>Какие гарантии вы получаете при покупке автомобиля под ключ</h1>
          <p class="subtitle">
            Работаем по договору, фиксируем условия сделки и сопровождаем процесс до передачи автомобиля в вашем городе
          </p>
          <div class="guarantees-hero__note">
            Вы понимаете условия сделки, этапы оплаты и итоговую стоимость до покупки автомобиля
          </div>
        </div>
      </section>

      <section class="section">
        <div class="container">
          <div class="section-heading-row">
            <div>
              <p class="eyebrow">Договор</p>
              <h2>Гарантии, закреплённые в договоре</h2>
            </div>
          </div>
          <div class="guarantee-cards">
            <article>
              <span>01</span>
              <h3>Договор с фиксацией условий</h3>
              <p>
                Перед началом работы подписывается договор, где закреплены этапы, сроки, стоимость и ответственность
                сторон.
              </p>
            </article>
            <article>
              <span>02</span>
              <h3>Поэтапная оплата</h3>
              <p>Платежи разделены на этапы - вы понимаете, за что и когда платите.</p>
            </article>
            <article>
              <span>03</span>
              <h3>Прозрачная итоговая цена</h3>
              <p>Полная стоимость рассчитывается заранее до покупки и фиксируется в расчёте.</p>
            </article>
            <article>
              <span>04</span>
              <h3>Страхование на всём пути</h3>
              <p>
                Автомобиль застрахован на этапе доставки. Базовое покрытие включено в стоимость. Дополнительно можно
                оформить расширенное страховое покрытие.
              </p>
            </article>
          </div>
        </div>
      </section>

      <section class="section guarantee-money-section">
        <div class="container">
          <div class="section-heading-row">
            <div>
              <p class="eyebrow">Оплата</p>
              <h2>Что защищает ваши деньги</h2>
            </div>
          </div>
          <div class="guarantee-list">
            <div>Вы не оплачиваете автомобиль, пока не получите фото, видео и данные по нему</div>
            <div>Автомобиль выкупается только после вашего согласования</div>
            <div>Все обязательные платежи рассчитываются заранее до покупки</div>
            <div>
              При отказе после начала проверок возврат осуществляется в соответствии с договором и фактически
              выполненными работами
            </div>
          </div>
          <div class="guarantee-note">Все условия оплаты и возврата фиксируются до начала сделки</div>
        </div>
      </section>

      <section class="section">
        <div class="container">
          <div class="guarantee-docs">
            <div>
              <p class="eyebrow">Оформление</p>
              <h2>Документы и оформление</h2>
              <p>После передачи автомобиля вы получаете полный комплект документов:</p>
            </div>
            <ul>
              <li>договор купли-продажи</li>
              <li>документы для постановки на учет</li>
              <li>подтверждение таможенного оформления</li>
              <li>закрывающие документы по сделке</li>
            </ul>
            <div class="guarantee-note">Все документы подготовлены для постановки автомобиля на учет без дополнительных действий</div>
          </div>
        </div>
      </section>

      <section class="section section--tight-top">
        <div class="container">
          <div class="section-heading-row">
            <div>
              <p class="eyebrow">Ситуации</p>
              <h2>Если возникают нестандартные ситуации</h2>
            </div>
            <a class="btn btn--outline" href="<?php echo esc_url( home_url( '/documents' ) ); ?>">Посмотреть образец договора</a>
          </div>
          <div class="table-wrap guarantee-table">
            <table class="table-simple">
              <thead>
                <tr>
                  <th>Ситуация</th>
                  <th>Решение</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Автомобиль не соответствует ожиданиям</td>
                  <td>
                    Решение принимается до подписания акта приёма-передачи. Условия урегулирования определяются в рамках
                    договора.
                  </td>
                </tr>
                <tr>
                  <td>Повреждение при доставке</td>
                  <td>
                    Компенсация осуществляется через страховое покрытие. Дополнительные вопросы решаются в рамках
                    договора.
                  </td>
                </tr>
                <tr>
                  <td>Задержка сроков</td>
                  <td>
                    Информируем о причинах, обновляем сроки и сопровождаем процесс до завершения. Вопросы компенсации
                    рассматриваются индивидуально и прописаны в договоре.
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </section>

      <section class="section cta-section guarantee-cta">
        <div class="container">
          <div class="product-cta">
            <p class="eyebrow">Вопросы</p>
            <h2>Остались вопросы по гарантиям?</h2>
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
