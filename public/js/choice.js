/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!********************************!*\
  !*** ./resources/js/choice.js ***!
  \********************************/
var redactor_img = document.querySelector(".img_block img");

window.choice_img = function () {
  var form = document.querySelector(".modal_wrapper form");
  redactor_img.src = form.img.value;
  console.log(form.img.value);
};
/******/ })()
;