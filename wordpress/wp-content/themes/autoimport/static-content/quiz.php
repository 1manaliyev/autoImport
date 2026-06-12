<?php
/** Static markup from quiz.html */
if ( ! defined( 'ABSPATH' ) ) { exit; }
$autoimport_page_meta = array( 'title' => 'Подберём автомобиль за 1 минуту — AutoImport', 'description' => null, 'extra_head' => '', 'has_quiz' => true, 'has_swiper' => false );
$question1 = get_field('какой_у_вас_бюджет');
$question2 = get_field('из_какой_страны_рассматриваете_автомобиль');
$question3 = get_field('что_для_вас_важнее');
$question4 = get_field('нужен_ли_кредит');
?>
<section class="section">
  <div class="container quiz">
    <h1 class="text-center">Подберём автомобиль за 1 минуту</h1>
    <div class="quiz__progress">Шаг <span data-quiz-progress>1 / 5</span></div>
    <div class="quiz__bar"><div class="quiz__bar-fill" data-quiz-bar style="width: 20%"></div></div>
    <div class="quiz-nav"><button type="button" class="btn btn--outline" data-quiz-back style="visibility: hidden">Назад</button>
  </div>

    <div class="quiz__step is-active">
      <h2 class="mt-0">Какой у вас бюджет?</h2>
      <div class="quiz-options">
        <?php foreach ($question1 as $option) : ?>
          <button type="button" class="quiz-option" data-quiz-pick data-quiz-name="budget" data-quiz-value="<?=$option['вариант_ответа'];?>"><?=$option['вариант_ответа'];?></button>
        <?php endforeach; ?>
      </div>
    </div>

    <div class="quiz__step">
      <h2 class="mt-0">Из какой страны рассматриваете автомобиль?</h2>
      <div class="quiz-options">
        <?php foreach ($question2 as $option) : ?>
          <button type="button" class="quiz-option" data-quiz-pick data-quiz-name="country" data-quiz-value="<?=$option['вариант_ответа'];?>"><?=$option['вариант_ответа'];?></button>
        <?php endforeach; ?>
      </div>
    </div>

    <div class="quiz__step">
      <h2 class="mt-0">Что для вас важнее?</h2>
      <div class="quiz-options">
        <?php foreach ($question3 as $option) : ?>
          <button type="button" class="quiz-option" data-quiz-pick data-quiz-name="priority" data-quiz-value="<?=$option['вариант_ответа'];?>"><?=$option['вариант_ответа'];?></button>
        <?php endforeach; ?>
      </div>
    </div>

    <div class="quiz__step">
      <h2 class="mt-0">Нужен ли кредит?</h2>
      <div class="quiz-options">
        <?php foreach ($question4 as $option) : ?>
          <button type="button" class="quiz-option" data-quiz-pick data-quiz-name="credit" data-quiz-value="<?=$option['вариант_ответа'];?>"><?=$option['вариант_ответа'];?></button>
        <?php endforeach; ?>
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