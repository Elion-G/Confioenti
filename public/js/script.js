/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!********************************!*\
  !*** ./resources/js/script.js ***!
  \********************************/
var navbar = document.querySelector('.navbar');

document.querySelector('#menu-btn').onclick = function () {
  navbar.classList.toggle('active');
  cartItem.classList.remove('active');
  searchForm.classList.remove('active');
};

var cartItem = document.querySelector('.cart-items-container');

document.querySelector('#cart-btn').onclick = function () {
  cartItem.classList.toggle('active');
  navbar.classList.remove('active');
  searchForm.classList.remove('active');
};

var searchForm = document.querySelector('.search-form');

document.querySelector('#search-btn').onclick = function () {
  searchForm.classList.toggle('active');
  navbar.classList.remove('active');
  cartItem.classList.remove('active');
};

window.onscroll = function () {
  navbar.classList.remove('active');
  cartItem.classList.remove('active');
  searchForm.classList.remove('active');
};
/******/ })()
;