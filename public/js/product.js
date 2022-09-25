/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!*********************************!*\
  !*** ./resources/js/product.js ***!
  \*********************************/
var body = document.querySelector('body');
var navbar = document.querySelector('.navbar');
var navbar_position = navbar.offsetTop; // body.addEventListener('scroll', () => {
//     let scrollTop = body.scrollHeight;
//     console.log(scrollTop);
// });
// console.log(body);

window.addEventListener('scroll', function () {
  // console.log(pageYOffset);
  // console.log(navbar.offsetTop);
  if (pageYOffset >= navbar_position - 72) {
    navbar.style.position = "fixed";
    navbar.style.top = "72px";
    navbar.style.left = "0";
  } else {
    navbar.style = "";
  }
});

window.update_product = function (form) {
  var func = function func(responce) {
    var h1 = document.querySelector(".product_name h1");
    var title = document.querySelector("title");
    h1.innerHTML = responce["data"];
    title.innerHTML = responce["data"];
    update_name();
  };

  PostForm(form, func);
};

window.update_price = function (form) {
  var func = function func(responce) {
    var sale = document.querySelector(".product_price");
    var price = document.querySelector(".product_old_price");
    sale.innerHTML = responce["data"];
    price.innerHTML = responce["data"];
    console.log(responce);
    console.log(responce["data"]);
  };

  PostForm(form, func);
};

window.update_name = function () {
  var form_name = document.querySelector(".product_name .form_name");
  var name = document.querySelector(".product_name h1");
  name.classList.toggle("hidden");
  form_name.classList.toggle("hidden");
};

window.update_price = function () {
  var name = document.querySelector(".product_trade");
  name.classList.toggle("hidden");
};
/******/ })()
;