<?php
/** Static markup from quiz.html */
if ( ! defined( 'ABSPATH' ) ) { exit; }
$autoimport_page_meta = array( 'title' => 'Подберём автомобиль за 1 минуту — AutoImport', 'description' => null, 'extra_head' => '', 'has_quiz' => true, 'has_swiper' => false );
?>
<section class="section">
        <div class="container quiz">
          <h1 class="text-center">Подберём автомобиль за 1 минуту</h1>
          <div class="quiz__progress">Шаг <span data-quiz-progress>1 / 5</span></div>
          <div class="quiz__bar"><div class="quiz__bar-fill" data-quiz-bar style="width: 20%"></div></div>
          <div class="quiz-nav"><button type="button" class="btn btn--outline" data-quiz-back style="visibility: hidden">Назад</button></div>

          <div class="quiz__step is-active">
            <h2 class="mt-0">Какой у вас бюджет?</h2>
            <div class="quiz-options">
              <button type="button" class="quiz-option" data-quiz-pick data-quiz-name="budget" data-quiz-value="до 1 500 000 ₽">до 1&nbsp;500&nbsp;000&nbsp;₽</button>
              <button type="button" class="quiz-option" data-quiz-pick data-quiz-name="budget" data-quiz-value="1 500 000 – 3 000 000 ₽">1&nbsp;500&nbsp;000 – 3&nbsp;000&nbsp;000&nbsp;₽</button>
              <button type="button" class="quiz-option" data-quiz-pick data-quiz-name="budget" data-quiz-value="3 000 000 – 5 000 000 ₽">3&nbsp;000&nbsp;000 – 5&nbsp;000&nbsp;000&nbsp;₽</button>
              <button type="button" class="quiz-option" data-quiz-pick data-quiz-name="budget" data-quiz-value="от 5 000 000 ₽">от 5&nbsp;000&nbsp;000&nbsp;₽</button>
              <button type="button" class="quiz-option" data-quiz-pick data-quiz-name="budget" data-quiz-value="пока не определился">пока не определился</button>
            </div>
          </div>

          <div class="quiz__step">
            <h2 class="mt-0">Из какой страны рассматриваете автомобиль?</h2>
            <div class="quiz-options">
              <button type="button" class="quiz-option" data-quiz-pick data-quiz-name="country" data-quiz-value="Корея">Корея</button>
              <button type="button" class="quiz-option" data-quiz-pick data-quiz-name="country" data-quiz-value="Китай">Китай</button>
              <button type="button" class="quiz-option" data-quiz-pick data-quiz-name="country" data-quiz-value="Европа">Европа</button>
              <button type="button" class="quiz-option" data-quiz-pick data-quiz-name="country" data-quiz-value="США">США</button>
              <button type="button" class="quiz-option" data-quiz-pick data-quiz-name="country" data-quiz-value="не принципиально">не принципиально</button>
            </div>
          </div>

          <div class="quiz__step">
            <h2 class="mt-0">Что для вас важнее?</h2>
            <div class="quiz-options">
              <button type="button" class="quiz-option" data-quiz-pick data-quiz-name="priority" data-quiz-value="Сэкономить">Сэкономить и взять выгоднее</button>
              <button type="button" class="quiz-option" data-quiz-pick data-quiz-name="priority" data-quiz-value="Семейный">Надёжный семейный автомобиль</button>
              <button type="button" class="quiz-option" data-quiz-pick data-quiz-name="priority" data-quiz-value="Технологии">Современный с технологиями</button>
              <button type="button" class="quiz-option" data-quiz-pick data-quiz-name="priority" data-quiz-value="Премиум">Премиум и комфорт</button>
              <button type="button" class="quiz-option" data-quiz-pick data-quiz-name="priority" data-quiz-value="Мощность">Мощность и динамика</button>
            </div>
          </div>

          <div class="quiz__step">
            <h2 class="mt-0">Нужен ли кредит?</h2>
            <div class="quiz-options">
              <button type="button" class="quiz-option" data-quiz-pick data-quiz-name="credit" data-quiz-value="Да">Да</button>
              <button type="button" class="quiz-option" data-quiz-pick data-quiz-name="credit" data-quiz-value="Нет">Нет</button>
              <button type="button" class="quiz-option" data-quiz-pick data-quiz-name="credit" data-quiz-value="Рассматриваю">Рассматриваю</button>
            </div>
          </div>

          <div class="quiz__step">
            <h2 class="mt-0">В какой город нужна доставка?</h2>
            <div class="form-row">
              <label for="quiz-city">Город</label>
              <input id="quiz-city" type="text" data-quiz-city-input placeholder="Начните вводить..." autocomplete="address-level2" />
            </div>
            <button type="button" class="btn btn--primary" data-quiz-city-submit>Далее</button>
          </div>

          <div class="quiz__step">
            <p>Мы уже подобрали для вас варианты. Оставьте номер — менеджер свяжется и уточнит детали.</p>
            <div class="form-block">
              <form data-lead-form data-form-main data-quiz-final-form id="quiz-final-form">
                <input type="hidden" name="lead_source" value="Квиз" />
                <input type="hidden" name="lead_type" value="Квиз" />
                <div class="form-row">
                  <label for="qz-name">Имя</label>
                  <input id="qz-name" name="name" required autocomplete="name" />
                </div>
                <div class="form-row">
                  <label for="qz-phone">Телефон</label>
                  <input id="qz-phone" name="phone" type="tel" required inputmode="tel" autocomplete="tel" />
                </div>
                <div class="form-consent">
                  <input id="qz-cons" name="consent" type="checkbox" required />
                  <label for="qz-cons">Согласен на обработку персональных данных</label>
                </div>
                <button type="submit" class="btn btn--primary" style="width: 100%" data-submit-label="Получить подбор">Получить подбор</button>
              </form>
              <div class="form-success" data-form-success role="status"></div>
            </div>
          </div>
        </div>
      </section>
