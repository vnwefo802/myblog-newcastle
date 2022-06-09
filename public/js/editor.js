/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!********************************!*\
  !*** ./resources/js/editor.js ***!
  \********************************/
alert('Hello world');
var inputCode = document.querySelector('.input');
var canvas = document.querySelector('.canvas');

function renderInput(input) {
  canvas.innerHTML = input;
}

inputCode.addEventListener('input', function () {
  var input = inputCode.value;
  renderInput(input);
});
/******/ })()
;