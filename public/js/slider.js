/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!********************************!*\
  !*** ./resources/js/slider.js ***!
  \********************************/
var temp = -100;
var start_interval = 0;
var is_slider = false;
var slider = document.querySelector(".slider");
var list = slider.querySelector(".slider_list");
var slide_default = list.querySelectorAll(".card");
var first_slide = slide_default[0].cloneNode(true);
var last_slide = slide_default[slide_default.length - 1].cloneNode(true);
list.appendChild(first_slide);
list.prepend(last_slide);

window.slider = function () {
  var coordination = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : 0;

  if (is_slider) {
    console.log(is_slider);
    return 0;
  }

  var slide = list.querySelectorAll(".card");

  if (coordination === 2) {
    temp += 100;
    clearInterval(start_interval);
  } else if (coordination === 1) {
    temp -= 100;
    clearInterval(start_interval);
  } else {
    temp -= 100;
  }

  if (temp === 0) {
    list.style.left = temp + "%";
    is_slider = true;
    setTimeout(function () {
      temp = (slide.length - 2) * -100;
      list.style.transitionDuration = "0s";
      list.style.left = temp + "%";
      is_slider = false;
    }, 1000);
  } else if (temp === (slide.length - 1) * -100) {
    list.style.left = temp + "%";
    is_slider = true;
    setTimeout(function () {
      temp = -100;
      list.style.transitionDuration = "0s";
      list.style.left = temp + "%";
      is_slider = false;
    }, 1000);
  } // дз переход без аним.


  list.style.left = temp + "%";
  list.style.transitionDuration = "1s";
}; //Не лезть


function StartInterval() {
  start_interval = setInterval(function () {
    slider();
  }, 5000);
}

StartInterval(); //
/******/ })()
;