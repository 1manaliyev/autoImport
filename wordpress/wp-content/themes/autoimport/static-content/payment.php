<?php
/** Static markup from payment.html */
if ( ! defined( 'ABSPATH' ) ) { exit; }
$autoimport_page_meta = array( 'title' => 'Оплата — AutoImport', 'description' => null, 'extra_head' => '', 'has_quiz' => false, 'has_swiper' => false );
?>
<section class="page-hero">
        <div class="container">
          <p class="eyebrow">Оплата</p>
          <h1>Как проходит оплата</h1>
          <p class="subtitle mb-0">
            Платежи проходят по этапам: вы заранее понимаете, когда и за что платите.
          </p>
          <div class="page-hero__highlights">
            <div class="hero-bullet">
              <span class="hero-bullet__icon ui-icon" aria-hidden="true">
                <svg viewBox="0 0 24 24"><path d="M4 2v20l3-2 3 2 3-2 3 2 3-2 3 2V2l-3 2-3-2-3 2-3-2-3 2Z"/><path d="M8 10h8M8 14h8"/></svg>
              </span>
              <p>Поэтапная оплата по договору</p>
            </div>
            <div class="hero-bullet">
              <span class="hero-bullet__icon ui-icon" aria-hidden="true">
                <svg viewBox="0 0 24 24"><path d="M3 3v18h18"/><path d="M7 16V9M12 16V5M17 16v-4"/></svg>
              </span>
              <p>Все суммы рассчитываем заранее</p>
            </div>
            <div class="hero-bullet">
              <span class="hero-bullet__icon ui-icon" aria-hidden="true">
                <svg viewBox="0 0 24 24"><path d="M20 6 9 17l-5-5"/></svg>
              </span>
              <p>Возврат стартового платежа по условиям</p>
            </div>
          </div>
        </div>
      </section>

      <section class="section">
        <div class="container">
          <div class="payment-timeline">
            <article class="payment-step">
              <span class="ui-icon payment-step__icon" aria-hidden="true"><svg viewBox="0 0 24 24"><path d="M19 7V5a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-2"/><path d="M3 7h18"/><path d="M16 12h4"/></svg></span>
              <div>
                <p class="payment-step__label">Этап 01</p>
                <h2>Стартовый платеж</h2>
                <p>После подписания договора клиент вносит фиксированный стартовый платеж — 30&nbsp;000&nbsp;₽.</p>
                <p>Этот платеж позволяет:</p>
                <ul>
                  <li>начать подбор автомобиля</li>
                  <li>проводить проверки вариантов</li>
                  <li>подготовить расчеты</li>
                </ul>
                <p class="payment-note">Если подходящий вариант не найден или клиент отказывается до начала проверок — платеж возвращается 100%.</p>
              </div>
            </article>
            <article class="payment-step">
              <span class="ui-icon payment-step__icon" aria-hidden="true"><svg viewBox="0 0 24 24"><path d="M5 17h14l-1.5-5.5A2 2 0 0 0 15.6 10H8.4a2 2 0 0 0-1.9 1.5L5 17Z"/><path d="M7 17v2M17 17v2"/><circle cx="7.5" cy="17.5" r="1.5"/><circle cx="16.5" cy="17.5" r="1.5"/></svg></span>
              <div>
                <p class="payment-step__label">Этап 02</p>
                <h2>Оплата автомобиля</h2>
                <p>После того как клиент выбирает конкретный автомобиль и получает проверку, оплачивается стоимость автомобиля.</p>
                <p>Оплата производится:</p>
                <ul>
                  <li>после согласования всех параметров</li>
                  <li>после получения фото / видео и отчета</li>
                </ul>
                <p class="payment-note">Мы не выкупаем автомобиль без подтверждения клиента.</p>
              </div>
            </article>
            <article class="payment-step">
              <span class="ui-icon payment-step__icon" aria-hidden="true"><svg viewBox="0 0 24 24"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10Z"/></svg></span>
              <div>
                <p class="payment-step__label">Этап 03</p>
                <h2>Обязательные платежи</h2>
                <p>После покупки автомобиля оплачиваются обязательные расходы:</p>
                <ul>
                  <li>таможенные платежи — рассчитываются индивидуально, в среднем от 300&nbsp;000 до 1&nbsp;200&nbsp;000&nbsp;₽ в зависимости от авто</li>
                  <li>утилизационный сбор — от 5&nbsp;000 до 30&nbsp;000&nbsp;₽</li>
                  <li>оформление и брокерские услуги — от 30&nbsp;000&nbsp;₽</li>
                </ul>
                <p class="payment-note">Все суммы рассчитываются заранее до покупки. Все цифры корректируются в админке.</p>
              </div>
            </article>
            <article class="payment-step">
              <span class="ui-icon payment-step__icon" aria-hidden="true"><svg viewBox="0 0 24 24"><path d="M10 17h4M3 17h2M17 17h2M5 17V6h10v11M15 17V9h4l2 4v4h-6"/><circle cx="7" cy="17" r="2"/><circle cx="17" cy="17" r="2"/></svg></span>
              <div>
                <p class="payment-step__label">Этап 04</p>
                <h2>Доставка</h2>
                <p>После прибытия автомобиля в РФ оплачивается доставка по России:</p>
                <ul>
                  <li>автовозом или Ж/Д до города клиента — от 30&nbsp;000 до 150&nbsp;000&nbsp;₽</li>
                  <li>срок доставки — от 3 до 12 дней</li>
                </ul>
                <p class="payment-note">Точная стоимость зависит от региона.</p>
              </div>
            </article>
          </div>
        </div>
      </section>

      <section class="section country-process" data-credit-block>
        <div class="container">
          <div class="section-heading-row">
            <div>
              <p class="eyebrow">Кредит</p>
              <h2>Покупка автомобиля в кредит</h2>
            </div>
            <p>
              У нас можно оформить кредит от ведущих банков-партнёров. Подберём удобный вариант — с минимальным первым взносом или без него.
            </p>
          </div>
          <div class="steps">
            <article class="step-card">
              <span class="ui-icon step-card__icon" aria-hidden="true"><svg viewBox="0 0 24 24"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8Z"/><path d="M14 2v6h6"/></svg></span>
              <p class="step-card__label">Шаг 1</p>
              <h3>Заявка</h3>
              <p>Оставляете заявку на подбор автомобиля.</p>
            </article>
            <article class="step-card">
              <span class="ui-icon step-card__icon" aria-hidden="true"><svg viewBox="0 0 24 24"><rect x="4" y="2" width="16" height="20" rx="2"/><path d="M8 6h8M8 10h.01M12 10h.01M16 10h.01M8 14h.01M12 14h.01M16 14h.01M8 18h8"/></svg></span>
              <p class="step-card__label">Шаг 2</p>
              <h3>Расчёт кредита</h3>
              <p>Параллельно рассчитываем кредит под ваш бюджет.</p>
            </article>
            <article class="step-card">
              <span class="ui-icon step-card__icon" aria-hidden="true"><svg viewBox="0 0 24 24"><circle cx="11" cy="11" r="7"/><path d="m20 20-3.5-3.5"/></svg></span>
              <p class="step-card__label">Шаг 3</p>
              <h3>Подбор авто</h3>
              <p>Подбираем автомобиль с учетом ежемесячного платежа.</p>
            </article>
            <article class="step-card">
              <span class="ui-icon step-card__icon" aria-hidden="true"><svg viewBox="0 0 24 24"><path d="M3 21h18"/><path d="M5 21V9l7-4 7 4v12"/><path d="M9 21v-6h6v6"/></svg></span>
              <p class="step-card__label">Шаг 4</p>
              <h3>Условия банка</h3>
              <p>Согласовываем условия с банком.</p>
            </article>
            <article class="step-card">
              <span class="ui-icon step-card__icon" aria-hidden="true"><svg viewBox="0 0 24 24"><path d="M20 6 9 17l-5-5"/></svg></span>
              <p class="step-card__label">Шаг 5</p>
              <h3>Оформление</h3>
              <p>Оформляем кредит и сопровождаем сделку до получения автомобиля.</p>
            </article>
          </div>
          <div class="credit-grid">
            <div class="fit-card fit-card--yes">
              <div class="fit-card__head">
                <span class="fit-card__icon" aria-hidden="true">✓</span>
                <h3>Что важно</h3>
              </div>
              <div class="icon-points">
                <div class="icon-point">
                  <span class="ui-icon" aria-hidden="true"><svg viewBox="0 0 24 24"><rect x="4" y="2" width="16" height="20" rx="2"/><path d="M8 6h8M8 10h.01M12 10h.01M16 10h.01M8 14h.01M12 14h.01M16 14h.01M8 18h8"/></svg></span>
                  <span>расчет платежа до начала сделки</span>
                </div>
                <div class="icon-point">
                  <span class="ui-icon" aria-hidden="true"><svg viewBox="0 0 24 24"><path d="M3 3v18h18"/><path d="M7 16V9M12 16V5M17 16v-4"/></svg></span>
                  <span>возможность выбрать срок и первоначальный взнос</span>
                </div>
                <div class="icon-point">
                  <span class="ui-icon" aria-hidden="true"><svg viewBox="0 0 24 24"><path d="M20 6 9 17l-5-5"/></svg></span>
                  <span>сопровождение на всех этапах оформления</span>
                </div>
              </div>
            </div>
            <div class="credit-example">
              <p class="eyebrow">Пример</p>
              <h3>Автомобиль стоимостью 2&nbsp;500&nbsp;000&nbsp;₽</h3>
              <ul>
                <li><span>Первоначальный взнос</span><strong>500&nbsp;000&nbsp;₽</strong></li>
                <li><span>Срок</span><strong>5 лет</strong></li>
                <li><span>Ежемесячный платеж</span><strong>от 35&nbsp;000&nbsp;₽</strong></li>
              </ul>
            </div>
            <div class="fit-card fit-card--no">
              <div class="fit-card__head">
                <span class="fit-card__icon" aria-hidden="true">✓</span>
                <h3>Как меняется покупка с кредитом</h3>
              </div>
              <div class="icon-points">
                <div class="icon-point">
                  <span class="ui-icon" aria-hidden="true"><svg viewBox="0 0 24 24"><path d="M19 7V5a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-2"/><path d="M3 7h18"/><path d="M16 12h4"/></svg></span>
                  <span>не ограничиваетесь текущим бюджетом</span>
                </div>
                <div class="icon-point">
                  <span class="ui-icon" aria-hidden="true"><svg viewBox="0 0 24 24"><path d="M5 17h14l-1.5-5.5A2 2 0 0 0 15.6 10H8.4a2 2 0 0 0-1.9 1.5L5 17Z"/><path d="M7 17v2M17 17v2"/><circle cx="7.5" cy="17.5" r="1.5"/><circle cx="16.5" cy="17.5" r="1.5"/></svg></span>
                  <span>выбираете автомобиль классом выше</span>
                </div>
                <div class="icon-point">
                  <span class="ui-icon" aria-hidden="true"><svg viewBox="0 0 24 24"><path d="M3 3v18h18"/><path d="M7 16V9M12 16V5M17 16v-4"/></svg></span>
                  <span>платите комфортными платежами</span>
                </div>
              </div>
            </div>
          </div>
          <div class="country-cta">
            <h2>Рассчитаем кредит под ваш автомобиль</h2>
            <p>Наш менеджер свяжется и расскажет все варианты. Если кредитных программ нет, этот блок скрывается.</p>
            <button type="button" class="btn btn--primary" data-open-form data-form-title="Ответим на ваш вопрос" data-form-type="Консультация" data-form-source="Страница / Оплата / Кредит" data-form-button-text="Получить консультацию">
              Получить консультацию
            </button>
          </div>
        </div>
      </section>
      <?php get_template_part( 'template-parts/related', 'blog' ); ?>
