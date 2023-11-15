/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
var __webpack_exports__ = {};

;// CONCATENATED MODULE: ./assets/src/js/modules/ToggleMLT.js
class ToggleMLT {
  constructor() {
    this.modal = document.querySelector('.modal-select-lang');
    this.button = {
      close: document.querySelector('[data-action="close-mlt"]')
    };
    this.events();
  }
  events() {
    this.button.close.addEventListener('click', () => {
      this.close();
    });
  }
  close() {
    this.modal.remove();
  }
}
/* harmony default export */ const modules_ToggleMLT = (ToggleMLT);
;// CONCATENATED MODULE: ./assets/src/js/frontend.js


/**
 * Main toggle Modal module
 */
new modules_ToggleMLT();
/******/ })()
;