(function () {

  "use strict";



  var questionCount = 5;

  var current = 0;

  var answers = {};

  var steps = document.querySelectorAll(".quiz__step");

  var barFill = document.querySelector("[data-quiz-bar]");

  var progressNum = document.querySelector("[data-quiz-progress]");

  var btnBack = document.querySelector("[data-quiz-back]");

  var finalForm = document.querySelector("[data-quiz-final-form]");



  function syncQuizAnswers() {

    window.__quizLeadAnswers = answers;

  }



  function show(i) {

    current = i;

    steps.forEach(function (el, j) {

      el.classList.toggle("is-active", j === i);

    });

    if (i < questionCount) {

      if (progressNum) progressNum.textContent = i + 1 + " / " + questionCount;

      if (barFill)

        barFill.style.width = ((i + 1) / questionCount) * 100 + "%";

    } else {

      if (progressNum) progressNum.textContent = "Готово";

      if (barFill) barFill.style.width = "100%";

    }

    if (btnBack) btnBack.style.visibility = i > 0 ? "visible" : "hidden";

  }



  document.querySelectorAll("[data-quiz-pick]").forEach(function (btn) {

    btn.addEventListener("click", function () {

      var name = btn.getAttribute("data-quiz-name");

      var value = btn.getAttribute("data-quiz-value");

      answers[name] = value;

      syncQuizAnswers();

      show(current + 1);

    });

  });



  var cityBtn = document.querySelector("[data-quiz-city-submit]");

  if (cityBtn) {

    cityBtn.addEventListener("click", function () {

      var input = document.querySelector("[data-quiz-city-input]");

      answers.city = input && input.value ? input.value.trim() : "";

      syncQuizAnswers();

      show(questionCount);

    });

  }



  if (btnBack) {

    btnBack.addEventListener("click", function () {

      if (current > 0) show(current - 1);

    });

  }



  syncQuizAnswers();

  show(0);

})();

