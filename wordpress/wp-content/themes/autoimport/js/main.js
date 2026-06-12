(function () {
  "use strict";

  var segmentContent = {
    family: {
      title: "Семейный автомобиль с проверкой и доставкой за 30–60 дней",
      text:
        "Подбираем авто с учётом безопасности, комфорта и бюджета без переплаты рынку РФ.",
      benefits: [
        "Больше автомобиля за те же деньги",
        "Лучше комплектация",
        "Меньше рисков",
      ],
      examples: "Kia Sorento, Hyundai Santa Fe",
    },
    value: {
      title: "Автомобиль дешевле рынка РФ без скрытых проблем",
      text:
        "Покажем реальные варианты с честным пробегом и прозрачной ценой.",
      benefits: [
        "Максимальная экономия",
        "Прозрачная стоимость",
        "Реальные авто",
      ],
      examples: "Hyundai Tucson, Kia Sportage",
    },
    modern: {
      title: "Современные автомобили с технологиями и опциями",
      text:
        "Подбираем свежие модели с мультимедиа, ассистентами и современным дизайном.",
      benefits: [
        "Больше опций",
        "Свежие модели",
        "Современный дизайн",
      ],
      examples: "Li Xiang L7, Zeekr 001, Geely Monjaro",
    },
    premium: {
      title: "Премиальные автомобили без переплаты",
      text:
        "Подбираем авто с минимальным пробегом и высокой комплектацией.",
      benefits: [
        "Премиум дешевле",
        "Редкие версии",
        "Минимальный пробег",
      ],
      examples: "BMW X3, Mercedes GLC",
    },
    power: {
      title: "Мощные автомобили и редкие комплектации",
      text: "Автомобили для тех, кто ищет эмоции и динамику.",
      benefits: [
        "Мощные двигатели",
        "Редкие версии",
        "Уникальные комплектации",
      ],
      examples: "Ford Mustang, BMW M, Mercedes AMG",
    },
  };

  function qs(sel, root) {
    return (root || document).querySelector(sel);
  }

  function qsa(sel, root) {
    return Array.prototype.slice.call((root || document).querySelectorAll(sel));
  }

  /* Mobile nav */
  var burger = qs("[data-burger]");
  var navWrap = qs("[data-nav-wrap]");
  if (burger && navWrap) {
    burger.addEventListener("click", function () {
      navWrap.classList.toggle("is-open");
      burger.setAttribute(
        "aria-expanded",
        navWrap.classList.contains("is-open") ? "true" : "false"
      );
    });
    qsa("a", navWrap).forEach(function (a) {
      a.addEventListener("click", function () {
        navWrap.classList.remove("is-open");
        burger.setAttribute("aria-expanded", "false");
      });
    });
  }

  /* City picker */
  var cityEl = qs("[data-city-display]");
  var cityBtn = qs("[data-city-change]");
  var cityPicker = cityEl && cityEl.closest(".city-picker");
  var cityStorageKey = "autoImportCity";

  function setCity(city) {
    if (!cityEl || !city) return;
    cityEl.textContent = city;
    try {
      window.localStorage.setItem(cityStorageKey, city);
    } catch (e) {}
  }

  function formatCity(item) {
    var parts = [item.name, item.admin1, item.country].filter(Boolean);
    return parts.join(", ");
  }

  function detectCity(statusEl) {
    if (!navigator.geolocation) {
      if (statusEl) statusEl.textContent = "Геолокация не поддерживается браузером.";
      return;
    }

    if (statusEl) statusEl.textContent = "Определяем город...";
    navigator.geolocation.getCurrentPosition(
      function (pos) {
        var coords = pos.coords;
        var url =
          "https://api.bigdatacloud.net/data/reverse-geocode-client?latitude=" +
          encodeURIComponent(coords.latitude) +
          "&longitude=" +
          encodeURIComponent(coords.longitude) +
          "&localityLanguage=ru";

        fetch(url)
          .then(function (res) {
            if (!res.ok) throw new Error("Geo request failed");
            return res.json();
          })
          .then(function (data) {
            var city = data.city || data.locality || data.principalSubdivision;
            if (!city) throw new Error("City not found");
            setCity(city);
            if (statusEl) statusEl.textContent = "Город определён автоматически.";
          })
          .catch(function () {
            if (statusEl) statusEl.textContent = "Не удалось определить город.";
          });
      },
      function () {
        if (statusEl) statusEl.textContent = "Разрешите доступ к геолокации или введите город.";
      },
      { enableHighAccuracy: false, timeout: 8000, maximumAge: 600000 }
    );
  }

  if (cityPicker && cityBtn && cityEl) {
    var savedCity = "";
    try {
      savedCity = window.localStorage.getItem(cityStorageKey) || "";
    } catch (e) {}
    cityEl.textContent = savedCity || cityEl.textContent.trim() || "Москва";

    var dropdown = document.createElement("div");
    dropdown.className = "city-picker__dropdown";
    dropdown.setAttribute("data-city-dropdown", "");
    dropdown.hidden = true;
    dropdown.innerHTML =
      '<label class="city-picker__label" for="city-search">Введите город</label>' +
      '<input class="city-picker__input" id="city-search" type="search" autocomplete="off" placeholder="Например, Казань" data-city-search />' +
      '<div class="city-picker__status" data-city-status>Начните вводить название города</div>' +
      '<div class="city-picker__results" data-city-results></div>' +
      '<button class="city-picker__geo" type="button" data-city-detect>Определить автоматически</button>';
    cityPicker.appendChild(dropdown);

    var citySearch = qs("[data-city-search]", dropdown);
    var cityStatus = qs("[data-city-status]", dropdown);
    var cityResults = qs("[data-city-results]", dropdown);
    var cityDetect = qs("[data-city-detect]", dropdown);
    var searchTimer = null;

    function closeCityDropdown() {
      dropdown.hidden = true;
      cityBtn.setAttribute("aria-expanded", "false");
    }

    function openCityDropdown() {
      dropdown.hidden = false;
      cityBtn.setAttribute("aria-expanded", "true");
      if (citySearch) {
        citySearch.value = cityEl.textContent.trim();
        citySearch.focus();
        citySearch.select();
      }
    }

    function renderCityResults(items) {
      cityResults.innerHTML = "";
      if (!items.length) {
        cityStatus.textContent = "Город не найден.";
        return;
      }
      cityStatus.textContent = "Выберите город из списка:";
      items.forEach(function (item) {
        var btn = document.createElement("button");
        btn.type = "button";
        btn.className = "city-picker__result";
        btn.textContent = formatCity(item);
        btn.addEventListener("click", function () {
          setCity(item.name);
          closeCityDropdown();
        });
        cityResults.appendChild(btn);
      });
    }

    function searchCities(query) {
      if (query.length < 2) {
        cityResults.innerHTML = "";
        cityStatus.textContent = "Введите минимум 2 символа.";
        return;
      }

      cityStatus.textContent = "Ищем город...";
      fetch(
        "https://geocoding-api.open-meteo.com/v1/search?name=" +
          encodeURIComponent(query) +
          "&count=6&language=ru&format=json"
      )
        .then(function (res) {
          if (!res.ok) throw new Error("City search failed");
          return res.json();
        })
        .then(function (data) {
          renderCityResults(data.results || []);
        })
        .catch(function () {
          cityResults.innerHTML = "";
          cityStatus.textContent = "Не удалось загрузить города. Попробуйте позже.";
        });
    }

    cityBtn.setAttribute("aria-expanded", "false");
    cityBtn.addEventListener("click", function () {
      if (dropdown.hidden) openCityDropdown();
      else closeCityDropdown();
    });

    citySearch.addEventListener("input", function () {
      clearTimeout(searchTimer);
      searchTimer = setTimeout(function () {
        searchCities(citySearch.value.trim());
      }, 300);
    });

    cityDetect.addEventListener("click", function () {
      detectCity(cityStatus);
    });

    document.addEventListener("click", function (e) {
      if (!cityPicker.contains(e.target)) closeCityDropdown();
    });

    document.addEventListener("keydown", function (e) {
      if (e.key === "Escape") closeCityDropdown();
    });

    if (!savedCity) detectCity();
  }

  /* Product gallery */
  qsa("[data-gallery]").forEach(function (gallery) {
    var mainBtn = qs("[data-gallery-main]", gallery);
    var mainImg = mainBtn && qs("img", mainBtn);
    var thumbs = qsa("[data-gallery-thumb]", gallery);
    if (!mainBtn || !mainImg || !thumbs.length) return;

    var images = thumbs
      .map(function (thumb) {
        var img = qs("img", thumb);
        return img
          ? {
              src: img.getAttribute("src"),
              alt: img.getAttribute("alt") || mainImg.getAttribute("alt") || "",
            }
          : null;
      })
      .filter(Boolean);
    var currentIndex = 0;
    var previousOverflow = "";

    function setActive(index) {
      currentIndex = (index + images.length) % images.length;
      mainImg.src = images[currentIndex].src;
      mainImg.alt = images[currentIndex].alt;
      mainBtn.setAttribute("data-gallery-index", String(currentIndex));
      thumbs.forEach(function (thumb, i) {
        thumb.classList.toggle("is-active", i === currentIndex);
      });
      if (gallery._thumbsSwiper && !gallery._thumbsSwiper.destroyed) {
        gallery._thumbsSwiper.slideTo(currentIndex);
      }
      updateLightbox();
    }

    function ensureLightbox() {
      var box = qs("[data-gallery-lightbox]");
      if (box) return box;

      box = document.createElement("div");
      box.className = "gallery-lightbox";
      box.setAttribute("data-gallery-lightbox", "");
      box.setAttribute("role", "dialog");
      box.setAttribute("aria-modal", "true");
      box.setAttribute("aria-label", "Просмотр фотографии");
      box.innerHTML =
        '<button class="gallery-lightbox__btn gallery-lightbox__close" type="button" data-gallery-close aria-label="Закрыть">&times;</button>' +
        '<button class="gallery-lightbox__btn gallery-lightbox__prev" type="button" data-gallery-prev aria-label="Предыдущее фото">‹</button>' +
        '<img class="gallery-lightbox__img" data-gallery-lightbox-img alt="" />' +
        '<button class="gallery-lightbox__btn gallery-lightbox__next" type="button" data-gallery-next aria-label="Следующее фото">›</button>' +
        '<div class="gallery-lightbox__counter" data-gallery-counter></div>';
      document.body.appendChild(box);

      qs("[data-gallery-close]", box).addEventListener("click", closeLightbox);
      qs("[data-gallery-prev]", box).addEventListener("click", function () {
        setActive(currentIndex - 1);
      });
      qs("[data-gallery-next]", box).addEventListener("click", function () {
        setActive(currentIndex + 1);
      });
      box.addEventListener("click", function (e) {
        if (e.target === box) closeLightbox();
      });
      return box;
    }

    function updateLightbox() {
      var box = qs("[data-gallery-lightbox]");
      if (!box || !box.classList.contains("is-open")) return;
      var img = qs("[data-gallery-lightbox-img]", box);
      var counter = qs("[data-gallery-counter]", box);
      img.src = images[currentIndex].src;
      img.alt = images[currentIndex].alt;
      counter.textContent = currentIndex + 1 + " / " + images.length;
    }

    function openLightbox(index) {
      setActive(index);
      var box = ensureLightbox();
      previousOverflow = document.body.style.overflow;
      document.body.style.overflow = "hidden";
      box.classList.add("is-open");
      updateLightbox();
      qs("[data-gallery-close]", box).focus();
    }

    function closeLightbox() {
      var box = qs("[data-gallery-lightbox]");
      if (!box) return;
      box.classList.remove("is-open");
      document.body.style.overflow = previousOverflow;
      mainBtn.focus();
    }

    var mainPrev = qs("[data-gallery-main-prev]", gallery);
    var mainNext = qs("[data-gallery-main-next]", gallery);

    thumbs.forEach(function (thumb, index) {
      thumb.addEventListener("click", function () {
        setActive(index);
      });
      thumb.addEventListener("dblclick", function () {
        openLightbox(index);
      });
    });

    if (mainPrev) {
      mainPrev.addEventListener("click", function (e) {
        e.stopPropagation();
        setActive(currentIndex - 1);
      });
    }

    if (mainNext) {
      mainNext.addEventListener("click", function (e) {
        e.stopPropagation();
        setActive(currentIndex + 1);
      });
    }

    mainBtn.addEventListener("click", function () {
      openLightbox(currentIndex);
    });

    document.addEventListener("keydown", function (e) {
      var box = qs("[data-gallery-lightbox]");
      if (!box || !box.classList.contains("is-open")) return;
      if (e.key === "Escape") closeLightbox();
      if (e.key === "ArrowLeft") setActive(currentIndex - 1);
      if (e.key === "ArrowRight") setActive(currentIndex + 1);
    });
  });

  function hideReviewMoreButton(btn) {
    btn.hidden = true;
    var wrap = btn.closest(".reviews-more");
    if (wrap) wrap.hidden = true;
  }

  qsa("[data-client-reviews]").forEach(function (section) {
    var cards = qsa(".client-review-card[data-review-platform]", section);
    var filters = qsa("[data-review-filter]", section);
    var showMoreBtn = qs("[data-review-show-more]", section);
    var showMoreWrap = showMoreBtn ? showMoreBtn.closest(".reviews-more") : null;
    var activeFilter = "all";
    var pageSize =
      parseInt(section.getAttribute("data-review-page-size"), 10) || 6;
    var visibleLimit = pageSize;

    function cardMatches(card) {
      if (activeFilter === "all") return true;
      return card.getAttribute("data-review-platform") === activeFilter;
    }

    function setShowMoreVisible(visible) {
      if (!showMoreBtn) return;
      showMoreBtn.hidden = !visible;
      if (showMoreWrap) showMoreWrap.hidden = !visible;
    }

    function applyReviewView() {
      var matched = cards.filter(cardMatches);

      cards.forEach(function (card) {
        card.classList.toggle("is-filtered-out", !cardMatches(card));
      });

      matched.forEach(function (card, index) {
        card.classList.toggle("is-hidden", index >= visibleLimit);
      });

      setShowMoreVisible(matched.length > visibleLimit);
    }

    filters.forEach(function (btn) {
      btn.addEventListener("click", function () {
        activeFilter = btn.getAttribute("data-review-filter") || "all";
        visibleLimit = pageSize;
        filters.forEach(function (filterBtn) {
          var isActive = filterBtn === btn;
          filterBtn.classList.toggle("is-active", isActive);
          filterBtn.setAttribute("aria-selected", isActive ? "true" : "false");
        });
        applyReviewView();
      });
    });

    if (showMoreBtn) {
      showMoreBtn.addEventListener("click", function () {
        visibleLimit += pageSize;
        applyReviewView();
      });
    }

    applyReviewView();
  });

  qsa("[data-review-show-more]").forEach(function (btn) {
    var section = btn.closest(".reviews-section");
    if (section && section.hasAttribute("data-client-reviews")) return;
    if (!section || !qsa(".review-extra.is-hidden", section).length) {
      hideReviewMoreButton(btn);
      return;
    }

    var showStep =
      parseInt(
        section.getAttribute("data-review-show-step") ||
          btn.getAttribute("data-review-show-step") ||
          "0",
        10
      ) || 0;

    btn.addEventListener("click", function () {
      var hiddenItems = qsa(".review-extra.is-hidden", section);
      if (!hiddenItems.length) {
        hideReviewMoreButton(btn);
        return;
      }

      var batch = showStep > 0 ? showStep : hiddenItems.length;
      hiddenItems.slice(0, batch).forEach(function (item) {
        item.classList.remove("is-hidden");
      });

      if (!qsa(".review-extra.is-hidden", section).length) {
        hideReviewMoreButton(btn);
      }
    });
  });

  /* Review screenshots lightbox */
  var reviewShots = qsa("[data-review-lightbox]");
  if (reviewShots.length) {
    var activeReviewShots = reviewShots;
    var reviewImages = [];
    var reviewIndex = 0;
    var reviewPreviousOverflow = "";

    function buildReviewImages(buttons) {
      return buttons
        .map(function (btn) {
        var img = qs("img", btn);
        return img
          ? {
              src: img.getAttribute("src"),
              alt: img.getAttribute("alt") || "",
            }
          : null;
        })
        .filter(Boolean);
    }

    function visibleReviewShots() {
      return reviewShots.filter(function (btn) {
        return btn.offsetParent !== null;
      });
    }

    function ensureReviewLightbox() {
      var box = qs("[data-review-lightbox-box]");
      if (box) return box;

      box = document.createElement("div");
      box.className = "gallery-lightbox";
      box.setAttribute("data-review-lightbox-box", "");
      box.setAttribute("role", "dialog");
      box.setAttribute("aria-modal", "true");
      box.setAttribute("aria-label", "Просмотр скриншота отзыва");
      box.innerHTML =
        '<button class="gallery-lightbox__btn gallery-lightbox__close" type="button" data-review-close aria-label="Закрыть">&times;</button>' +
        '<button class="gallery-lightbox__btn gallery-lightbox__prev" type="button" data-review-prev aria-label="Предыдущий скриншот">‹</button>' +
        '<img class="gallery-lightbox__img" data-review-lightbox-img alt="" />' +
        '<button class="gallery-lightbox__btn gallery-lightbox__next" type="button" data-review-next aria-label="Следующий скриншот">›</button>' +
        '<div class="gallery-lightbox__counter" data-review-counter></div>';
      document.body.appendChild(box);

      qs("[data-review-close]", box).addEventListener("click", closeReviewLightbox);
      qs("[data-review-prev]", box).addEventListener("click", function () {
        setReviewImage(reviewIndex - 1);
      });
      qs("[data-review-next]", box).addEventListener("click", function () {
        setReviewImage(reviewIndex + 1);
      });
      box.addEventListener("click", function (e) {
        if (e.target === box) closeReviewLightbox();
      });
      return box;
    }

    function setReviewImage(index) {
      reviewIndex = (index + reviewImages.length) % reviewImages.length;
      var box = qs("[data-review-lightbox-box]");
      if (!box || !box.classList.contains("is-open")) return;
      var img = qs("[data-review-lightbox-img]", box);
      var counter = qs("[data-review-counter]", box);
      img.src = reviewImages[reviewIndex].src;
      img.alt = reviewImages[reviewIndex].alt;
      counter.textContent = reviewIndex + 1 + " / " + reviewImages.length;
    }

    function openReviewLightbox(index, buttons) {
      activeReviewShots = buttons && buttons.length ? buttons : reviewShots;
      reviewImages = buildReviewImages(activeReviewShots);
      reviewIndex = index;
      var box = ensureReviewLightbox();
      reviewPreviousOverflow = document.body.style.overflow;
      document.body.style.overflow = "hidden";
      box.classList.add("is-open");
      setReviewImage(reviewIndex);
      qs("[data-review-close]", box).focus();
    }

    function closeReviewLightbox() {
      var box = qs("[data-review-lightbox-box]");
      if (!box) return;
      box.classList.remove("is-open");
      document.body.style.overflow = reviewPreviousOverflow;
      if (activeReviewShots[reviewIndex]) activeReviewShots[reviewIndex].focus();
    }

    reviewShots.forEach(function (btn) {
      btn.addEventListener("click", function () {
        var visibleShots = visibleReviewShots();
        openReviewLightbox(visibleShots.indexOf(btn), visibleShots);
      });
    });

    document.addEventListener("keydown", function (e) {
      var box = qs("[data-review-lightbox-box]");
      if (!box || !box.classList.contains("is-open")) return;
      if (e.key === "Escape") closeReviewLightbox();
      if (e.key === "ArrowLeft") setReviewImage(reviewIndex - 1);
      if (e.key === "ArrowRight") setReviewImage(reviewIndex + 1);
    });
  }

  /* Modal + единая форма заявки */
  var LEAD_SUCCESS_MSG =
    "Спасибо! Мы получили заявку и скоро свяжемся с вами.";

  var pageCountryByFile = {
    "korea.html": "Корея",
    "china.html": "Китай",
    "europe.html": "Европа",
    "usa.html": "США",
  };

  function detectPageCountry() {
    var path = (window.location.pathname || "").split("/").pop() || "";
    return pageCountryByFile[path] || "";
  }

  function resolveAssetUrl(file) {
    var path = window.location.pathname || "";
    if (/\/blog\//.test(path) || /\/catalog\//.test(path)) return "../" + file;
    return file;
  }

  function ensureHiddenField(form, name, value) {
    var el = qs('[name="' + name + '"]', form);
    if (!el) {
      el = document.createElement("input");
      el.type = "hidden";
      el.name = name;
      form.insertBefore(el, form.firstChild);
    }
    if (value !== undefined && value !== null) el.value = value;
    return el;
  }

  function ensureOptionalLeadFields(form) {
    if (qs('[name="budget"]', form)) return;
    var phoneRow = qs('[name="phone"]', form);
    var anchor = phoneRow ? phoneRow.closest(".form-row") : null;
    if (!anchor) return;
    function addAfter(html) {
      var tmp = document.createElement("div");
      tmp.innerHTML = html.trim();
      var row = tmp.firstChild;
      anchor.parentNode.insertBefore(row, anchor.nextSibling);
      anchor = row;
    }
    var uid = form.id || "lead";
    addAfter(
      '<div class="form-row"><label for="' +
        uid +
        '-budget">Бюджет</label><input id="' +
        uid +
        '-budget" name="budget" type="text" placeholder="Например, до 3 млн ₽" /></div>'
    );
    addAfter(
      '<div class="form-row"><label for="' +
        uid +
        '-city">Город</label><input id="' +
        uid +
        '-city" name="city" type="text" autocomplete="address-level2" /></div>'
    );
    addAfter(
      '<div class="form-row"><label for="' +
        uid +
        '-need">Что ищете</label><textarea id="' +
        uid +
        '-need" name="need" rows="2"></textarea></div>'
    );
  }

  function ensureConsultationFields(form) {
    if (qs('[name="call_time"]', form)) return;
    var need = qs('[name="need"]', form);
    var anchor = need ? need.closest(".form-row") : null;
    var callRow = document.createElement("div");
    callRow.className = "form-row";
    callRow.setAttribute("data-form-consultation-only", "");
    callRow.innerHTML =
      '<label for="' +
      form.id +
      '-call">Удобное время для звонка</label>' +
      '<input id="' +
      form.id +
      '-call" name="call_time" type="text" placeholder="Например, сегодня после 18:00" />';
    if (anchor && anchor.nextSibling) {
      form.insertBefore(callRow, anchor.nextSibling);
    } else {
      var consent = qs(".form-consent", form);
      form.insertBefore(callRow, consent || null);
    }
    if (!qs('[name="comment"]', form) && !need) {
      var commentRow = document.createElement("div");
      commentRow.className = "form-row";
      commentRow.setAttribute("data-form-consultation-only", "");
      commentRow.innerHTML =
        '<label for="' +
        form.id +
        '-comment">Комментарий</label>' +
        '<textarea id="' +
        form.id +
        '-comment" name="comment" rows="3"></textarea>';
      form.insertBefore(commentRow, consent || null);
    }
  }

  function ensureRecaptchaPlaceholder(form) {
    if (qs(".recaptcha-placeholder", form)) return;
    var consent = qs(".form-consent", form);
    var box = document.createElement("div");
    box.className = "recaptcha-placeholder";
    box.setAttribute("aria-hidden", "true");
    box.textContent = "Место под reCAPTCHA (подключение на этапе CMS)";
    if (consent) form.insertBefore(box, consent);
    else form.appendChild(box);
  }

  function upgradeLeadForm(form) {
    if (!form || form.getAttribute("data-lead-upgraded") === "1") return;
    if (!form.id) form.id = "lead-form-" + Math.random().toString(36).slice(2, 8);
    ensureHiddenField(form, "lead_source", "");
    ensureHiddenField(form, "lead_type", "Подбор");
    if (!qs('[name="lead_segment"]', form)) ensureHiddenField(form, "lead_segment", "");
    ensureHiddenField(form, "lead_country", "");
    ensureHiddenField(form, "lead_car", "");
    var legacyCar = qs('[name="car_title"]', form);
    if (legacyCar && legacyCar.value) {
      ensureHiddenField(form, "lead_car", legacyCar.value);
    }
    if (!form.getAttribute("data-submit-label")) {
      var submit = qs('[type="submit"]', form);
      if (submit) form.setAttribute("data-submit-label", submit.textContent.trim());
    }
    if (form.closest("[data-modal-overlay]")) ensureOptionalLeadFields(form);
    ensureConsultationFields(form);
    ensureRecaptchaPlaceholder(form);
    form.setAttribute("data-lead-upgraded", "1");
  }

  function normalizeLeadSuccess(root) {
    qsa("[data-form-success]", root || document).forEach(function (el) {
      el.textContent = LEAD_SUCCESS_MSG;
    });
  }

  function setLeadTypeMode(form, type) {
    var isConsultation = type === "Консультация";
    form.classList.toggle("is-consultation", isConsultation);
  }

  function setLeadField(form, name, value) {
    var el = qs('[name="' + name + '"]', form);
    if (el) el.value = value || "";
  }

  function configureLeadForm(form, options) {
    if (!form) return;
    upgradeLeadForm(form);
    options = options || {};
    if (options.source) setLeadField(form, "lead_source", options.source);
    if (options.type) setLeadField(form, "lead_type", options.type);
    if (options.segment !== undefined) setLeadField(form, "lead_segment", options.segment);
    if (options.country) setLeadField(form, "lead_country", options.country);
    if (options.car) setLeadField(form, "lead_car", options.car);
    setLeadTypeMode(form, options.type || "Подбор");
    var submit = qs('[type="submit"]', form);
    if (submit) {
      var label =
        options.buttonText ||
        form.getAttribute("data-submit-label") ||
        "Отправить заявку";
      submit.textContent = label;
    }
  }

  function buildLeadPayload(form) {
    var fd = new FormData(form);
    var legacyCar = qs('[name="car_title"]', form);
    if (legacyCar && legacyCar.value && !fd.get("lead_car")) {
      fd.set("lead_car", legacyCar.value);
    }
    if (form.hasAttribute("data-quiz-final-form") && window.__quizLeadAnswers) {
      var qa = window.__quizLeadAnswers;
      fd.set("lead_source", "Квиз");
      fd.set("lead_type", "Квиз");
      fd.set("quiz_budget", qa.budget || "");
      fd.set("quiz_country", qa.country || "");
      fd.set("quiz_priority", qa.priority || "");
      fd.set("quiz_credit", qa.credit || "");
      fd.set("quiz_city", qa.city || "");
    }
    return fd;
  }

  function showLeadSuccess(form) {
    var container = form.closest(".modal__body") || form.closest(".form-block");
    var success = container && qs("[data-form-success]", container);
    form.classList.add("is-hidden");
    if (success) {
      success.textContent = LEAD_SUCCESS_MSG;
      success.classList.add("is-visible");
    }
  }

  function bindLeadFormSubmit(form) {
    if (form.getAttribute("data-lead-bound") === "1") return;
    form.addEventListener("submit", function (e) {
      e.preventDefault();
      var phone = qs('[name="phone"]', form);
      if (phone && phone.value.replace(/\D/g, "").length < 10) {
        alert("Укажите корректный номер телефона.");
        return;
      }
      var consent = qs('[name="consent"]', form);
      if (consent && !consent.checked) {
        alert("Необходимо согласие на обработку персональных данных.");
        return;
      }
      /* Заглушка: CRM / Telegram / Max / email — интеграция в CMS */
      console.log("Lead:", Object.fromEntries(buildLeadPayload(form)));
      showLeadSuccess(form);
    });
    form.setAttribute("data-lead-bound", "1");
  }

  function createLeadModalMarkup() {
    var wrap = document.createElement("div");
    wrap.className = "modal-overlay";
    wrap.setAttribute("data-modal-overlay", "");
    wrap.setAttribute("aria-hidden", "true");
    wrap.setAttribute("role", "dialog");
    wrap.setAttribute("aria-modal", "true");
    wrap.innerHTML =
      '<div class="modal" role="document">' +
      '<button type="button" class="modal__close" data-modal-close aria-label="Закрыть">&times;</button>' +
      '<div class="modal__body">' +
      '<h2 data-modal-title></h2>' +
      '<p data-modal-text style="color: var(--text-muted); margin: 0 0 12px"></p>' +
      '<ul class="modal-benefits" data-modal-benefits></ul>' +
      '<p class="modal-examples" data-modal-examples></p>' +
      '<form data-lead-form data-form-main id="lead-modal-form">' +
      '<input type="hidden" name="lead_source" value="" />' +
      '<input type="hidden" name="lead_type" value="Подбор" />' +
      '<input type="hidden" name="lead_segment" value="" />' +
      '<input type="hidden" name="lead_country" value="" />' +
      '<input type="hidden" name="lead_car" value="" />' +
      '<div class="form-row"><label for="lead-modal-name">Имя</label>' +
      '<input id="lead-modal-name" name="name" type="text" required autocomplete="name" /></div>' +
      '<div class="form-row"><label for="lead-modal-phone">Телефон</label>' +
      '<input id="lead-modal-phone" name="phone" type="tel" required autocomplete="tel" inputmode="tel" placeholder="+7 (___) ___-__-__" /></div>' +
      '<div class="form-row"><label for="lead-modal-budget">Бюджет</label>' +
      '<input id="lead-modal-budget" name="budget" type="text" placeholder="Например, до 3 млн ₽" /></div>' +
      '<div class="form-row"><label for="lead-modal-city">Город</label>' +
      '<input id="lead-modal-city" name="city" type="text" autocomplete="address-level2" /></div>' +
      '<div class="form-row"><label for="lead-modal-need">Что ищете</label>' +
      '<textarea id="lead-modal-need" name="need" rows="2"></textarea></div>' +
      '<div class="form-consent">' +
      '<input id="lead-modal-consent" name="consent" type="checkbox" required />' +
      '<label for="lead-modal-consent">Согласен на обработку персональных данных</label></div>' +
      '<button type="submit" class="btn btn--primary" style="width: 100%" data-submit-label="Отправить заявку">Отправить заявку</button>' +
      "</form>" +
      '<div class="form-success" data-form-success role="status"></div>' +
      "</div></div>";
    return wrap;
  }

  function ensureLeadModal() {
    var existing = qs("[data-modal-overlay]");
    if (existing) {
      upgradeLeadForm(qs("form[data-lead-form]", existing));
      normalizeLeadSuccess(existing);
      return existing;
    }
    var modal = createLeadModalMarkup();
    document.body.appendChild(modal);
    upgradeLeadForm(qs("form[data-lead-form]", modal));
    normalizeLeadSuccess(modal);
    return modal;
  }

  var overlay = ensureLeadModal();
  var modalTitle = qs("[data-modal-title]", overlay);
  var modalText = qs("[data-modal-text]", overlay);
  var modalBenefits = qs("[data-modal-benefits]", overlay);
  var modalExamples = qs("[data-modal-examples]", overlay);

  function modalFormEl() {
    return overlay ? qs("form[data-lead-form]", overlay) : null;
  }

  function openModal() {
    if (!overlay) return;
    overlay.classList.add("is-open");
    overlay.setAttribute("aria-hidden", "false");
    document.body.style.overflow = "hidden";
  }

  function closeModal() {
    if (!overlay) return;
    overlay.classList.remove("is-open");
    overlay.setAttribute("aria-hidden", "true");
    document.body.style.overflow = "";
    var mf = modalFormEl();
    if (mf) {
      mf.classList.remove("is-hidden");
      mf.reset();
      setLeadTypeMode(mf, "Подбор");
      var submit = qs('[type="submit"]', mf);
      if (submit && mf.getAttribute("data-submit-label")) {
        submit.textContent = mf.getAttribute("data-submit-label");
      }
    }
    var ms = qs("[data-form-success]", overlay);
    if (ms) ms.classList.remove("is-visible");
    configureLeadForm(mf, { segment: "", country: "", car: "" });
  }

  function openLeadFromButton(btn) {
    var title = btn.getAttribute("data-form-title") || "Оставьте заявку";
    var type = btn.getAttribute("data-form-type") || "Подбор";
    var source = btn.getAttribute("data-form-source") || "Сайт";
    var country =
      btn.getAttribute("data-form-country") || detectPageCountry() || "";
    var car = btn.getAttribute("data-form-car") || "";
    var buttonText =
      btn.getAttribute("data-form-button-text") ||
      (btn.textContent ? btn.textContent.trim() : "") ||
      "Отправить заявку";

    if (modalTitle) modalTitle.textContent = title;
    if (modalText) modalText.textContent = "";
    if (modalBenefits) modalBenefits.innerHTML = "";
    if (modalExamples) modalExamples.textContent = "";

    configureLeadForm(modalFormEl(), {
      source: source,
      type: type,
      segment: "",
      country: country,
      car: car,
      buttonText: buttonText,
    });
    openModal();
  }

  function fillSegmentModal(key) {
    var d = segmentContent[key];
    if (!d) return;
    if (modalTitle) modalTitle.textContent = d.title;
    if (modalText) modalText.textContent = d.text;
    if (modalExamples) modalExamples.textContent = "Примеры: " + d.examples;
    if (modalBenefits) {
      modalBenefits.innerHTML = "";
      d.benefits.forEach(function (b) {
        var li = document.createElement("li");
        li.textContent = b;
        modalBenefits.appendChild(li);
      });
    }
    configureLeadForm(modalFormEl(), {
      source: "Главная / Блок 3.4",
      type: "Подбор",
      segment: key,
      buttonText: "Получить подборку",
    });
    openModal();
  }

  qsa("[data-open-segment]").forEach(function (btn) {
    btn.addEventListener("click", function () {
      var key = btn.getAttribute("data-open-segment");
      if (key === "quiz") {
        window.location.href = resolveAssetUrl("quiz.html");
        return;
      }
      fillSegmentModal(key);
    });
  });

  qsa("[data-open-form]").forEach(function (btn) {
    btn.addEventListener("click", function () {
      openLeadFromButton(btn);
    });
  });

  overlay.addEventListener("click", function (e) {
    if (e.target === overlay) closeModal();
  });
  qsa("[data-modal-close]", overlay).forEach(function (b) {
    b.addEventListener("click", closeModal);
  });
  document.addEventListener("keydown", function (e) {
    if (e.key === "Escape" && overlay.classList.contains("is-open")) closeModal();
  });

  qsa("form[data-lead-form]").forEach(function (form) {
    upgradeLeadForm(form);
    var type = qs('[name="lead_type"]', form);
    setLeadTypeMode(form, type ? type.value : "Подбор");
    bindLeadFormSubmit(form);
  });
  normalizeLeadSuccess(document);

  /* Карточки каталога: скрываем пустые характеристики (для CMS) */
  qsa(".car-specs__item").forEach(function (item) {
    var value = qs(".car-specs__value", item) || qs("dd", item);
    if (value && !value.textContent.trim()) item.hidden = true;
  });

  function autoimportGetSortValue(card, key) {
    var raw = card.getAttribute("data-sort-" + key);
    if (raw === null || raw === "") return null;
    var num = parseFloat(raw);
    return isNaN(num) ? null : num;
  }

  function autoimportSortCarCards(cards, sortValue) {
    if (!sortValue) return cards.slice();
    var parts = sortValue.split("-");
    var key = parts[0];
    var dir = parts[1] === "asc" ? 1 : -1;
    return cards.slice().sort(function (a, b) {
      var va = autoimportGetSortValue(a, key);
      var vb = autoimportGetSortValue(b, key);
      if (va === null && vb === null) return 0;
      if (va === null) return 1;
      if (vb === null) return -1;
      if (va === vb) return 0;
      return (va < vb ? -1 : 1) * dir;
    });
  }

  function autoimportAppendCardsToGrid(grid, orderedMatched, hidden, originalOrder) {
    if (!grid) return;
    var hiddenSorted = hidden.slice().sort(function (a, b) {
      return originalOrder.indexOf(a) - originalOrder.indexOf(b);
    });
    orderedMatched.concat(hiddenSorted).forEach(function (card) {
      grid.appendChild(card);
    });
  }

  function autoimportScrollToCatalogFirstCard(grid) {
    if (!grid) return;
    var firstCard = grid.querySelector(
      "[data-catalog-car]:not(.is-filtered-out):not(.is-page-hidden)"
    );
    if (!firstCard) return;
    var header = qs(".site-header");
    var headerOffset = header ? header.offsetHeight : 0;
    var top =
      firstCard.getBoundingClientRect().top +
      window.pageYOffset -
      headerOffset -
      16;
    window.scrollTo({ top: Math.max(0, top), behavior: "smooth" });
  }

  function autoimportRenderCatalogPagination(options) {
    var pagination = options.pagination;
    var pageList = options.pageList;
    var prevBtn = options.prevBtn;
    var nextBtn = options.nextBtn;
    var totalCars = options.totalCars;
    var totalPages = options.totalPages;
    var currentPage = options.currentPage;
    var onPageSelect = options.onPageSelect;
    if (!pagination || !pageList) return;
    if (!totalCars || totalPages <= 1) {
      pagination.hidden = true;
      if (prevBtn) prevBtn.hidden = true;
      if (nextBtn) nextBtn.hidden = true;
      return;
    }

    pagination.hidden = false;
    if (prevBtn) prevBtn.hidden = currentPage <= 1;
    if (nextBtn) nextBtn.hidden = currentPage >= totalPages;

    pageList.innerHTML = "";
    for (var p = 1; p <= totalPages; p++) {
      (function (page) {
        var btn = document.createElement("button");
        btn.type = "button";
        btn.className =
          "country-page-btn" + (page === currentPage ? " is-active" : "");
        btn.textContent = String(page);
        btn.setAttribute("aria-label", "Страница " + page);
        if (page === currentPage) btn.setAttribute("aria-current", "page");
        btn.addEventListener("click", function () {
          onPageSelect(page);
        });
        pageList.appendChild(btn);
      })(p);
    }
  }

  function autoimportSyncCatalogSortUi(select) {
    if (!select) return;
    var wrap = select.closest("[data-catalog-sort-wrap]");
    if (!wrap) return;
    var labelEl = qs("[data-catalog-sort-label]", wrap);
    var selected = select.options[select.selectedIndex];
    if (labelEl && selected) labelEl.textContent = selected.textContent;
    qsa("[data-catalog-sort-option]", wrap).forEach(function (btn) {
      var active = (btn.getAttribute("data-value") || "") === select.value;
      btn.classList.toggle("is-active", active);
      btn.setAttribute("aria-selected", active ? "true" : "false");
    });
  }

  function autoimportCloseCatalogSortMenu(wrap) {
    if (!wrap) return;
    var trigger = qs("[data-catalog-sort-trigger]", wrap);
    var menu = qs("[data-catalog-sort-menu]", wrap);
    if (menu) menu.hidden = true;
    if (trigger) {
      trigger.classList.remove("is-open");
      trigger.setAttribute("aria-expanded", "false");
    }
  }

  qsa("[data-catalog-sort-wrap]").forEach(function (wrap) {
    var select = qs("[data-catalog-sort]", wrap);
    var trigger = qs("[data-catalog-sort-trigger]", wrap);
    var menu = qs("[data-catalog-sort-menu]", wrap);
    var options = qsa("[data-catalog-sort-option]", wrap);
    if (!select || !trigger || !menu) return;

    trigger.addEventListener("click", function (e) {
      e.stopPropagation();
      qsa("[data-catalog-sort-wrap]").forEach(function (other) {
        if (other !== wrap) autoimportCloseCatalogSortMenu(other);
      });
      var willOpen = menu.hidden;
      if (willOpen) {
        menu.hidden = false;
        trigger.classList.add("is-open");
        trigger.setAttribute("aria-expanded", "true");
      } else {
        autoimportCloseCatalogSortMenu(wrap);
      }
    });

    options.forEach(function (btn) {
      btn.addEventListener("click", function () {
        select.value = btn.getAttribute("data-value") || "";
        autoimportSyncCatalogSortUi(select);
        autoimportCloseCatalogSortMenu(wrap);
        select.dispatchEvent(new Event("change", { bubbles: true }));
      });
    });

    select.addEventListener("change", function () {
      autoimportSyncCatalogSortUi(select);
    });

    autoimportSyncCatalogSortUi(select);
  });

  document.addEventListener("click", function (e) {
    if (e.target.closest("[data-catalog-sort-wrap]")) return;
    qsa("[data-catalog-sort-wrap]").forEach(autoimportCloseCatalogSortMenu);
  });

  document.addEventListener("keydown", function (e) {
    if (e.key !== "Escape") return;
    qsa("[data-catalog-sort-wrap]").forEach(autoimportCloseCatalogSortMenu);
  });

  /* Каталог на страницах стран */
  qsa("[data-country-catalog]").forEach(function (section) {
    var cards = qsa("[data-catalog-car]", section);
    var grid = qs("[data-country-catalog-grid]", section);
    var filters = qsa("[data-country-filter]", section);
    var chips = qsa("[data-country-brand]", section);
    var sortSelect = qs("[data-catalog-sort]", section);
    var resetBtn = qs("[data-country-filter-reset]", section);
    var countEl = qs("[data-country-catalog-count]", section);
    var originalOrder = cards.slice();
    var pagination = qs("[data-country-pagination]", section);
    var pageList = qs("[data-country-page-list]", section);
    var prevBtn = qs("[data-country-page-prev]", section);
    var nextBtn = qs("[data-country-page-next]", section);
    var pageSize =
      parseInt(section.getAttribute("data-country-page-size"), 10) || 9;
    var currentPage = 1;
    var lastTotalPages = 1;
    var state = {};

    function setCount(matched, onPage, totalPages) {
      if (!countEl) return;
      if (!matched) {
        countEl.textContent = "Нет автомобилей по выбранным фильтрам";
        return;
      }
      var text =
        "Показано " + onPage + " из " + matched + " автомобилей";
      if (totalPages > 1) {
        text += " · стр. " + currentPage + " из " + totalPages;
      }
      countEl.textContent = text;
    }

    function cardMatches(card) {
      return Object.keys(state).every(function (key) {
        var val = state[key];
        if (!val) return true;
        return (card.getAttribute("data-" + key) || "") === val;
      });
    }

    function refreshView(resetPage, scrollToFirstCard) {
      if (resetPage) currentPage = 1;
      var matched = [];
      var hidden = [];
      var sortValue = sortSelect ? sortSelect.value : "";
      cards.forEach(function (card) {
        var ok = cardMatches(card);
        card.classList.toggle("is-filtered-out", !ok);
        card.classList.remove("is-page-hidden");
        if (ok) matched.push(card);
        else hidden.push(card);
      });
      if (sortValue) {
        matched = autoimportSortCarCards(matched, sortValue);
      } else {
        matched.sort(function (a, b) {
          return originalOrder.indexOf(a) - originalOrder.indexOf(b);
        });
      }
      autoimportAppendCardsToGrid(grid, matched, hidden, originalOrder);
      var totalPages = Math.max(1, Math.ceil(matched.length / pageSize));
      lastTotalPages = totalPages;
      if (currentPage > totalPages) currentPage = totalPages;
      var onPage = 0;
      matched.forEach(function (card, index) {
        var page = Math.floor(index / pageSize) + 1;
        var visible = page === currentPage;
        card.classList.toggle("is-page-hidden", !visible);
        if (visible) onPage += 1;
      });
      setCount(matched.length, onPage, totalPages);
      autoimportRenderCatalogPagination({
        pagination: pagination,
        pageList: pageList,
        prevBtn: prevBtn,
        nextBtn: nextBtn,
        totalCars: matched.length,
        totalPages: totalPages,
        currentPage: currentPage,
        onPageSelect: function (page) {
          currentPage = page;
          refreshView(false, true);
        },
      });
      if (scrollToFirstCard) {
        autoimportScrollToCatalogFirstCard(grid);
      }
    }

    function applyFilters() {
      refreshView(true, false);
    }

    filters.forEach(function (el) {
      el.addEventListener("change", function () {
        var key = el.getAttribute("data-country-filter");
        if (!key || key === "country") return;
        state[key] = el.value || "";
        if (key === "brand") {
          chips.forEach(function (chip) {
            chip.classList.toggle(
              "is-active",
              chip.getAttribute("data-country-brand") === (el.value || "")
            );
          });
        }
        applyFilters();
      });
    });

    chips.forEach(function (chip) {
      chip.addEventListener("click", function () {
        var brand = chip.getAttribute("data-country-brand") || "";
        state.brand = brand;
        chips.forEach(function (c) {
          c.classList.toggle("is-active", c === chip);
        });
        filters.forEach(function (el) {
          if (el.getAttribute("data-country-filter") === "brand") {
            el.value = brand;
          }
        });
        applyFilters();
      });
    });

    if (sortSelect) {
      sortSelect.addEventListener("change", function () {
        applyFilters();
      });
    }

    if (resetBtn) {
      resetBtn.addEventListener("click", function () {
        state = {};
        filters.forEach(function (el) {
          var key = el.getAttribute("data-country-filter");
          if (key && key !== "country") el.value = "";
        });
        if (sortSelect) {
          sortSelect.value = "";
          autoimportSyncCatalogSortUi(sortSelect);
        }
        chips.forEach(function (chip, i) {
          chip.classList.toggle("is-active", i === 0);
        });
        applyFilters();
      });
    }

    if (prevBtn) {
      prevBtn.addEventListener("click", function () {
        if (currentPage <= 1) return;
        currentPage -= 1;
        refreshView(false, true);
      });
    }

    if (nextBtn) {
      nextBtn.addEventListener("click", function () {
        if (currentPage >= lastTotalPages) return;
        currentPage += 1;
        refreshView(false, true);
      });
    }

    applyFilters();
  });

  /* Card sliders (documents, team) */
  if (typeof Swiper !== "undefined") {
    var cardSliders = [
      {
        selector: "[data-documents-swiper]",
        wrap: ".documents-slider",
        prev: "[data-documents-prev]",
        next: "[data-documents-next]",
        pagination: "[data-documents-pagination]",
      },
      {
        selector: "[data-team-swiper]",
        wrap: ".team-slider",
        prev: "[data-team-prev]",
        next: "[data-team-next]",
        pagination: "[data-team-pagination]",
      },
    ];

    cardSliders.forEach(function (cfg) {
      qsa(cfg.selector).forEach(function (el) {
        var wrap = el.closest(cfg.wrap);
        if (!wrap) return;
        new Swiper(el, {
          slidesPerView: 1.08,
          spaceBetween: 16,
          watchOverflow: true,
          pagination: {
            el: qs(cfg.pagination, wrap),
            clickable: true,
          },
          navigation: {
            nextEl: qs(cfg.next, wrap),
            prevEl: qs(cfg.prev, wrap),
          },
          breakpoints: {
            560: { slidesPerView: 2 },
            900: { slidesPerView: 3 },
            1200: { slidesPerView: 4 },
          },
        });
      });
    });
  }

  qsa("[data-gallery]").forEach(function (gallery) {
    var swiperEl = qs("[data-product-gallery-swiper]", gallery);
    if (!swiperEl) return;
    var wrap = swiperEl.closest(".product-gallery-slider");
    if (!wrap) return;

    var prevBtn = qs("[data-product-gallery-prev]", wrap);
    var nextBtn = qs("[data-product-gallery-next]", wrap);
    var scrollEl = qs(".swiper-wrapper", swiperEl) || swiperEl;

    function bindScrollFallback() {
      if (!prevBtn || !nextBtn) return;
      prevBtn.addEventListener("click", function () {
        scrollEl.scrollBy({ left: -scrollEl.clientWidth * 0.8, behavior: "smooth" });
      });
      nextBtn.addEventListener("click", function () {
        scrollEl.scrollBy({ left: scrollEl.clientWidth * 0.8, behavior: "smooth" });
      });
    }

    if (typeof Swiper === "undefined") {
      bindScrollFallback();
      return;
    }

    try {
      gallery._thumbsSwiper = new Swiper(swiperEl, {
        slidesPerView: 3,
        spaceBetween: 8,
        watchOverflow: true,
        observer: true,
        observeParents: true,
        resizeObserver: true,
        navigation: {
          nextEl: nextBtn,
          prevEl: prevBtn,
        },
        breakpoints: {
          480: { slidesPerView: 4 },
          640: { slidesPerView: 5 },
          900: { slidesPerView: 6 },
        },
        on: {
          init: function (swiper) {
            swiper.update();
          },
        },
      });

      window.addEventListener("load", function () {
        if (gallery._thumbsSwiper && !gallery._thumbsSwiper.destroyed) {
          gallery._thumbsSwiper.update();
        }
      });
    } catch (err) {
      gallery._thumbsSwiper = null;
      bindScrollFallback();
    }
  });

  /* Каталог — фильтры по стране, марке и модели */
  qsa("[data-catalog]").forEach(function (section) {
    var cards = qsa("[data-catalog-car]", section);
    var grid = qs("[data-catalog-grid]", section);
    var filters = qsa("[data-catalog-filter]", section);
    var brandLinks = qsa("[data-brand-filter]", section);
    var sortSelect = qs("[data-catalog-sort]", section);
    var resetBtn = qs("[data-catalog-filter-reset]", section);
    var countEl = qs("[data-catalog-count]", section);
    var pagination = qs("[data-catalog-pagination]", section);
    var pageList = qs("[data-catalog-page-list]", section);
    var prevBtn = qs("[data-catalog-page-prev]", section);
    var nextBtn = qs("[data-catalog-page-next]", section);
    var pageSize =
      parseInt(section.getAttribute("data-catalog-page-size"), 10) || 9;
    var currentPage = 1;
    var lastTotalPages = 1;
    var originalOrder = cards.slice();
    var state = {};
    var presetPower = section.getAttribute("data-catalog-preset-power") || "";

    function applyPresetPowerFilter() {
      if (!presetPower) return;
      state.power = presetPower;
      filters.forEach(function (el) {
        if (el.getAttribute("data-catalog-filter") === "power") {
          el.value = presetPower;
        }
      });
    }

    function setCount(matched, onPage, totalPages) {
      if (!countEl) return;
      if (!matched) {
        countEl.textContent = "Нет автомобилей по выбранным фильтрам";
        return;
      }
      var text = "Показано " + onPage + " из " + matched + " автомобилей";
      if (totalPages > 1) {
        text += " · стр. " + currentPage + " из " + totalPages;
      }
      countEl.textContent = text;
    }

    function cardMatches(card) {
      return Object.keys(state).every(function (key) {
        var val = state[key];
        if (!val) return true;
        return (card.getAttribute("data-" + key) || "") === val;
      });
    }

    function refreshView(resetPage, scrollToFirstCard) {
      if (resetPage) currentPage = 1;
      var matched = [];
      var hidden = [];
      var sortValue = sortSelect ? sortSelect.value : "";
      cards.forEach(function (card) {
        var ok = cardMatches(card);
        card.classList.toggle("is-filtered-out", !ok);
        card.classList.remove("is-page-hidden");
        if (ok) matched.push(card);
        else hidden.push(card);
      });
      if (sortValue) {
        matched = autoimportSortCarCards(matched, sortValue);
      } else {
        matched.sort(function (a, b) {
          return originalOrder.indexOf(a) - originalOrder.indexOf(b);
        });
      }
      autoimportAppendCardsToGrid(grid, matched, hidden, originalOrder);
      var totalPages = Math.max(1, Math.ceil(matched.length / pageSize));
      lastTotalPages = totalPages;
      if (currentPage > totalPages) currentPage = totalPages;
      var onPage = 0;
      matched.forEach(function (card, index) {
        var page = Math.floor(index / pageSize) + 1;
        var visible = page === currentPage;
        card.classList.toggle("is-page-hidden", !visible);
        if (visible) onPage += 1;
      });
      setCount(matched.length, onPage, totalPages);
      autoimportRenderCatalogPagination({
        pagination: pagination,
        pageList: pageList,
        prevBtn: prevBtn,
        nextBtn: nextBtn,
        totalCars: matched.length,
        totalPages: totalPages,
        currentPage: currentPage,
        onPageSelect: function (page) {
          currentPage = page;
          refreshView(false, true);
        },
      });
      if (scrollToFirstCard) {
        autoimportScrollToCatalogFirstCard(grid);
      }
    }

    function applyFilters() {
      refreshView(true, false);
    }

    function setBrandFilter(brand) {
      state.brand = brand || "";
      filters.forEach(function (el) {
        if (el.getAttribute("data-catalog-filter") === "brand") {
          el.value = brand || "";
        }
      });
      brandLinks.forEach(function (link) {
        link.classList.toggle(
          "is-active",
          link.getAttribute("data-brand-filter") === (brand || "")
        );
      });
      applyFilters();
    }

    filters.forEach(function (el) {
      el.addEventListener("change", function () {
        var key = el.getAttribute("data-catalog-filter");
        if (!key) return;
        state[key] = el.value || "";
        if (key === "brand") {
          brandLinks.forEach(function (link) {
            link.classList.toggle(
              "is-active",
              link.getAttribute("data-brand-filter") === (el.value || "")
            );
          });
        }
        applyFilters();
      });
    });

    brandLinks.forEach(function (el) {
      el.addEventListener("click", function (e) {
        e.preventDefault();
        setBrandFilter(el.getAttribute("data-brand-filter") || "");
      });
    });

    if (sortSelect) {
      sortSelect.addEventListener("change", applyFilters);
    }

    if (resetBtn) {
      resetBtn.addEventListener("click", function () {
        state = {};
        filters.forEach(function (el) {
          if (el.getAttribute("data-catalog-filter") === "power" && presetPower) {
            return;
          }
          el.value = "";
        });
        if (sortSelect) {
          sortSelect.value = "";
          autoimportSyncCatalogSortUi(sortSelect);
        }
        applyPresetPowerFilter();
        setBrandFilter("");
      });
    }

    if (prevBtn) {
      prevBtn.addEventListener("click", function () {
        if (currentPage <= 1) return;
        currentPage -= 1;
        refreshView(false, true);
      });
    }

    if (nextBtn) {
      nextBtn.addEventListener("click", function () {
        if (currentPage >= lastTotalPages) return;
        currentPage += 1;
        refreshView(false, true);
      });
    }

    applyPresetPowerFilter();

    var params = new URLSearchParams(window.location.search);
    if (params.get("brand")) {
      setBrandFilter(params.get("brand"));
    }
    if (params.get("model")) {
      state.model = params.get("model");
      filters.forEach(function (el) {
        if (el.getAttribute("data-catalog-filter") === "model") {
          el.value = params.get("model");
        }
      });
    }
    if (params.get("country")) {
      state.country = params.get("country");
      filters.forEach(function (el) {
        if (el.getAttribute("data-catalog-filter") === "country") {
          el.value = params.get("country");
        }
      });
    }

    applyFilters();
  });

  /* Yandex Map (contacts page) */
  var yandexMapEl = qs("[data-yandex-map]");
  if (yandexMapEl && typeof ymaps !== "undefined") {
    var mapLat = parseFloat(yandexMapEl.getAttribute("data-map-lat")) || 55.7558;
    var mapLng = parseFloat(yandexMapEl.getAttribute("data-map-lng")) || 37.6173;
    var mapZoom = parseInt(yandexMapEl.getAttribute("data-map-zoom"), 10) || 16;
    var mapHint = yandexMapEl.getAttribute("data-map-hint") || "";

    ymaps.ready(function () {
      var map = new ymaps.Map(yandexMapEl, {
        center: [mapLat, mapLng],
        zoom: mapZoom,
        controls: ["zoomControl", "fullscreenControl"],
      });

      map.geoObjects.add(
        new ymaps.Placemark(
          [mapLat, mapLng],
          { balloonContent: mapHint },
          { preset: "islands#goldDotIcon" }
        )
      );
    });
  }
})();
