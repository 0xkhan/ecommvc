/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/assets/js/admin/update.js":
/*!*********************************************!*\
  !*** ./resources/assets/js/admin/update.js ***!
  \*********************************************/
/***/ (() => {

(function () {
  ecommvc.admin.update = function () {
    var updateBtn = document.querySelector('.update-category');
    updateBtn.addEventListener('click', function (event) {
      event.preventDefault();
      var alertContainer = document.querySelector('.modal__alerts');
      var token = event.target.getAttribute('data-token');
      var id = event.target.getAttribute('id');
      var name = document.querySelector("#item-".concat(id)).value;
      var data = {
        token: token,
        name: name
      };
      var url = "/admin/product/categories/".concat(id, "/edit"); // We have to post x-www-form-urlencoded data to PHP because it only decodes
      // application/x-www-form-urlencoded data automatically. For that we have to
      // set Content-Type to application/x-www-form-urlencoded.
      // const formBody = Object.keys(data)
      //     .map(key => `${encodeURIComponent(key)} = ${encodeURIComponent(data[key])}`)
      //     .join('&');

      try {
        fetch(url, {
          method: "POST",
          headers: {
            "Content-Type": "application/json" // "Content-Type": "application/x-www-form-urlencoded"
            // "Content-Type": "application/x-www-form-urlencoded;charset=UTF-8"

          },
          body: JSON.stringify(data)
        }).then(function (response) {
          return response.json();
        }).then(function (data) {
          var markup;

          if (data.success) {
            markup = "\n                                <div class=\"modal__alert\" style=\"padding:.5rem;background-color:lightgreen;\">\n                                    ".concat(data.success, "\n                                </div>\n                            ");
          } else {
            markup = "\n                                ".concat(data.name.map(function (alert) {
              return "<div class=\"modal__alert\" style=\"padding:.5rem;background-color:#ffcccb;margin-bottom:.5rem;\">".concat(alert, "</div>");
            }).join(''), "\n                            ");
          }

          alertContainer.innerHTML = markup;
          setTimeout(function () {
            alertContainer.innerHTML = "";
          }, 5000);
        });
      } catch (error) {
        console.log('Error: ', error);
      }
    });
  };
})();

/***/ }),

/***/ "./resources/assets/js/app.js":
/*!************************************!*\
  !*** ./resources/assets/js/app.js ***!
  \************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _plugins_SassyModal__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./plugins/SassyModal */ "./resources/assets/js/plugins/SassyModal.js");
 // Custon Js Files

__webpack_require__(/*! ../../assets/js/ecommvc */ "./resources/assets/js/ecommvc.js");

__webpack_require__(/*! ../../assets/js/front/navbar */ "./resources/assets/js/front/navbar.js");

__webpack_require__(/*! ../../assets/js/admin/update */ "./resources/assets/js/admin/update.js");

__webpack_require__(/*! ../../assets/js/init */ "./resources/assets/js/init.js");

var sassyModal = new _plugins_SassyModal__WEBPACK_IMPORTED_MODULE_0__.default({
  blur: true,
  centered: true,
  animation: 'fade-in',
  showModalCSS: 'show-modal'
});

/***/ }),

/***/ "./resources/assets/js/ecommvc.js":
/*!****************************************!*\
  !*** ./resources/assets/js/ecommvc.js ***!
  \****************************************/
/***/ (() => {

(function () {
  'use strict';

  window.ecommvc = {
    global: {},
    admin: {}
  };
})();

/***/ }),

/***/ "./resources/assets/js/front/navbar.js":
/*!*********************************************!*\
  !*** ./resources/assets/js/front/navbar.js ***!
  \*********************************************/
/***/ (() => {

(function () {
  'use strict';

  ecommvc.global.navbar = function () {
    var toggleBtn = document.getElementById('menu-btn');
    var navList = document.getElementById('nav-list'); // const navBtnList = document.querySelector('.nav-btn');

    var navGlobalHeader = document.querySelector('.nav-global-header');
    toggleBtn.addEventListener('click', function () {
      navList.classList.toggle('active'); // navBtnList.classList.toggle('show-nav-btn');

      navGlobalHeader.classList.toggle('show-nav-global-header');

      if (toggleBtn.innerHTML == '<i class="fa fa-times text-dark"></i>') {
        toggleBtn.innerHTML = '<i class="fa fa-bars"></i>';
      } else {
        toggleBtn.innerHTML = '<i class="fa fa-times text-dark"></i>';
      }
    });
  };
  /**
   * This function is responsible for drop-down menus.
   * This might be a very poor implementation but this is the
   * one that works for now. Later it can be changed to
   * something better.
   *
   * What it basically does is it loops through menu items that
   * has drop-down menus -> dropdownItems. Inside that loop
   * there is an EventListener on document so we can catch
   * specific events. If the event target was was a menu item
   * and has drop-down menu then toggle "show-dropdown" class.
   *
   * The tricky part was to detect events outside navbar. My
   * approach is a very rudimentary one. I basically collect
   * all drop-down Menus -> dropdownMenus and then loop through
   * it inside EventListener on document. Then I check if
   * "item" contains a specific drop-down menu. If it does then
   * remove "show-dropdown" class.
   */


  ecommvc.global.dropdown = function () {
    var dropdownItems = document.querySelectorAll('.dropdown');
    var dropdownMenus = document.querySelectorAll('.dropdown-menu');
    dropdownItems.forEach(function (item) {
      document.addEventListener('click', function (event) {
        var isClickInside = item.contains(event.target);

        if (isClickInside) {
          if (item.childNodes.length >= 3) {
            item.childNodes[3].classList.toggle('show-dropdown');
          }
        } else {
          dropdownMenus.forEach(function (ddMenu) {
            if (item.contains(ddMenu)) {
              ddMenu.classList.remove('show-dropdown');
            }
          });
        }
      });
    });
  };
})();

/***/ }),

/***/ "./resources/assets/js/init.js":
/*!*************************************!*\
  !*** ./resources/assets/js/init.js ***!
  \*************************************/
/***/ (() => {

(function () {
  'use strict'; // Get the value of data-page-id attribute

  var bodyElement = document.querySelector("body");
  var pageId = bodyElement.getAttribute("data-page-id"); // When DOM is leaded and ready then run the code inside
  // equivalent of $(document).ready(function() {// code});

  document.addEventListener("DOMContentLoaded", function (event) {
    // Switch pages
    switch (pageId) {
      case 'global':
        ecommvc.global.navbar();
        ecommvc.global.dropdown();
        break;

      case 'home':
        // ecommvc.front.navbar();
        break;

      case 'adminCategories':
        ecommvc.admin.update();

      default: // Do Nothing

    }
  });
})();

/***/ }),

/***/ "./resources/assets/js/plugins/SassyModal.js":
/*!***************************************************!*\
  !*** ./resources/assets/js/plugins/SassyModal.js ***!
  \***************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (/* binding */ SassyModal)
/* harmony export */ });
function _toConsumableArray(arr) { return _arrayWithoutHoles(arr) || _iterableToArray(arr) || _unsupportedIterableToArray(arr) || _nonIterableSpread(); }

function _nonIterableSpread() { throw new TypeError("Invalid attempt to spread non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method."); }

function _unsupportedIterableToArray(o, minLen) { if (!o) return; if (typeof o === "string") return _arrayLikeToArray(o, minLen); var n = Object.prototype.toString.call(o).slice(8, -1); if (n === "Object" && o.constructor) n = o.constructor.name; if (n === "Map" || n === "Set") return Array.from(o); if (n === "Arguments" || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)) return _arrayLikeToArray(o, minLen); }

function _iterableToArray(iter) { if (typeof Symbol !== "undefined" && iter[Symbol.iterator] != null || iter["@@iterator"] != null) return Array.from(iter); }

function _arrayWithoutHoles(arr) { if (Array.isArray(arr)) return _arrayLikeToArray(arr); }

function _arrayLikeToArray(arr, len) { if (len == null || len > arr.length) len = arr.length; for (var i = 0, arr2 = new Array(len); i < len; i++) { arr2[i] = arr[i]; } return arr2; }

function ownKeys(object, enumerableOnly) { var keys = Object.keys(object); if (Object.getOwnPropertySymbols) { var symbols = Object.getOwnPropertySymbols(object); if (enumerableOnly) { symbols = symbols.filter(function (sym) { return Object.getOwnPropertyDescriptor(object, sym).enumerable; }); } keys.push.apply(keys, symbols); } return keys; }

function _objectSpread(target) { for (var i = 1; i < arguments.length; i++) { var source = arguments[i] != null ? arguments[i] : {}; if (i % 2) { ownKeys(Object(source), true).forEach(function (key) { _defineProperty(target, key, source[key]); }); } else if (Object.getOwnPropertyDescriptors) { Object.defineProperties(target, Object.getOwnPropertyDescriptors(source)); } else { ownKeys(Object(source)).forEach(function (key) { Object.defineProperty(target, key, Object.getOwnPropertyDescriptor(source, key)); }); } } return target; }

function _defineProperty(obj, key, value) { if (key in obj) { Object.defineProperty(obj, key, { value: value, enumerable: true, configurable: true, writable: true }); } else { obj[key] = value; } return obj; }

function _typeof(obj) { "@babel/helpers - typeof"; if (typeof Symbol === "function" && typeof Symbol.iterator === "symbol") { _typeof = function _typeof(obj) { return typeof obj; }; } else { _typeof = function _typeof(obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; }; } return _typeof(obj); }

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }

var SassyModal = /*#__PURE__*/function () {
  function SassyModal(config) {
    _classCallCheck(this, SassyModal);

    this.animations = ['fade-in', 'fade-out'];
    this.dataAttributes = {
      trigger: 'data-modal-trigger',
      closer: 'data-modal-close',
      id: 'data-modal-id'
    };
    this.options = {
      blur: true,
      centered: true,
      showModalCSS: 'show-modal',
      animation: this.animations[0],
      dataAttributes: this.dataAttributes
    };

    if (_typeof(config) === 'object') {
      this.options = _objectSpread(_objectSpread({}, this.options), config);
    } // Extract data attributes from options object


    this.triggerDataAtt = this.options.dataAttributes.trigger;
    this.closerDataAtt = this.options.dataAttributes.closer;
    this.modalDataAtt = this.options.dataAttributes.id;
    this.currentModal = '';
    this.init();
  }

  _createClass(SassyModal, [{
    key: "init",
    value: function init() {
      this.setTriggers();
      this.setClosers();
      this.setClasses();
    }
  }, {
    key: "setTriggers",
    value: function setTriggers() {
      var _this = this;

      var triggers = document.querySelectorAll("[".concat(this.triggerDataAtt, "]"));

      if (triggers.length > 0) {
        triggers.forEach(function (trigger) {
          trigger.addEventListener('click', function (event) {
            event.preventDefault();
            var modalID = event.target.getAttribute("".concat(_this.triggerDataAtt));

            _this.openModal({
              modalID: modalID
            });
          });
        });
      }
    }
  }, {
    key: "setClosers",
    value: function setClosers() {
      var _this2 = this;

      var modals = document.querySelectorAll("[".concat(this.modalDataAtt, "]"));
      var closeBtns = document.querySelectorAll("[".concat(this.closerDataAtt, "]"));

      if (modals.length > 0) {
        modals.forEach(function (modal) {
          modal.querySelector('.modal__backdrop').addEventListener('click', function (event) {
            _this2.closeModal({
              modalID: event.target.parentElement.getAttribute("".concat(_this2.modalDataAtt))
            });
          });
        });
      }

      if (closeBtns.length > 0) {
        closeBtns.forEach(function (btn) {
          btn.addEventListener('click', function (event) {
            event.preventDefault();
            var modalID = event.target.getAttribute("".concat(_this2.closerDataAtt));

            _this2.closeModal({
              modalID: modalID
            });
          });
        });
      }
    }
  }, {
    key: "setClasses",
    value: function setClasses() {
      var _this3 = this;

      var modals = document.querySelectorAll("[".concat(this.modalDataAtt, "]"));

      if (modals.length > 0) {
        modals.forEach(function (modal) {
          var _modal$classList;

          (_modal$classList = modal.classList).add.apply(_modal$classList, _toConsumableArray(_this3.calculateClasses()));
        });
      }
    }
  }, {
    key: "openModal",
    value: function openModal(_ref) {
      var modalID = _ref.modalID;
      var modal = document.querySelector("[".concat(this.modalDataAtt, "=").concat(modalID, "]")); // Check if any modal is open before we open another modal

      if (this.currentModal.length > 0) {
        this.closeModal({
          modalID: this.currentModal
        });
      }

      this.handleCustomEvents({
        type: 'before_open',
        modal: modal
      });
      modal.classList.add(this.options.showModalCSS);
      this.currentModal = modalID;
      this.handleCustomEvents({
        type: 'after_open',
        modal: modal
      });
    }
  }, {
    key: "closeModal",
    value: function closeModal(_ref2) {
      var modalID = _ref2.modalID;
      var modal = document.querySelector("[".concat(this.modalDataAtt, "=").concat(modalID, "]"));
      this.handleCustomEvents({
        type: 'before_close',
        modal: modal
      });
      modal.classList.remove(this.options.showModalCSS);
      this.currentModal = '';
      this.handleCustomEvents({
        type: 'after_close',
        modal: modal
      });
    }
  }, {
    key: "handleCustomEvents",
    value: function handleCustomEvents(_ref3) {
      var type = _ref3.type,
          modal = _ref3.modal;
      var event = new CustomEvent(type, {
        bubbles: true,
        detail: modal
      });
      modal.dispatchEvent(event);
    }
  }, {
    key: "calculateClasses",
    value: function calculateClasses() {
      var cssClasses = [];

      if (this.options.centered) {
        cssClasses.push('modal-centered');
      }

      if (this.options.blur) {
        cssClasses.push('modal-blur');
      }

      if (this.isValidAnimation(this.options.animation)) {
        cssClasses.push(this.options.animation);
      } else {
        cssClasses.push(this.animations[0]);
      }

      return cssClasses;
    }
  }, {
    key: "isValidAnimation",
    value: function isValidAnimation(animation) {
      return this.animations.includes(animation);
    }
  }, {
    key: "debug",
    value: function debug() {
      var _this4 = this;

      var triggers = document.querySelectorAll("[".concat(this.triggerDataAtt, "]"));
      console.log('All Triggers: ', triggers);
      triggers.forEach(function (trigger) {
        trigger.addEventListener('click', function (event) {
          var modalID = event.target.getAttribute("".concat(_this4.triggerDataAtt));
          var modal = document.querySelector("[data-modal-id=\"".concat(modalID, "\"]"));
          console.log("Trigger ".concat(modalID, " was clicked!"));
          console.log('This modal should open: ', modal);
        });
      });
    }
  }]);

  return SassyModal;
}();



/***/ }),

/***/ "./resources/assets/sass/app.scss":
/*!****************************************!*\
  !*** ./resources/assets/sass/app.scss ***!
  \****************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = __webpack_modules__;
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/chunk loaded */
/******/ 	(() => {
/******/ 		var deferred = [];
/******/ 		__webpack_require__.O = (result, chunkIds, fn, priority) => {
/******/ 			if(chunkIds) {
/******/ 				priority = priority || 0;
/******/ 				for(var i = deferred.length; i > 0 && deferred[i - 1][2] > priority; i--) deferred[i] = deferred[i - 1];
/******/ 				deferred[i] = [chunkIds, fn, priority];
/******/ 				return;
/******/ 			}
/******/ 			var notFulfilled = Infinity;
/******/ 			for (var i = 0; i < deferred.length; i++) {
/******/ 				var [chunkIds, fn, priority] = deferred[i];
/******/ 				var fulfilled = true;
/******/ 				for (var j = 0; j < chunkIds.length; j++) {
/******/ 					if ((priority & 1 === 0 || notFulfilled >= priority) && Object.keys(__webpack_require__.O).every((key) => (__webpack_require__.O[key](chunkIds[j])))) {
/******/ 						chunkIds.splice(j--, 1);
/******/ 					} else {
/******/ 						fulfilled = false;
/******/ 						if(priority < notFulfilled) notFulfilled = priority;
/******/ 					}
/******/ 				}
/******/ 				if(fulfilled) {
/******/ 					deferred.splice(i--, 1)
/******/ 					result = fn();
/******/ 				}
/******/ 			}
/******/ 			return result;
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/define property getters */
/******/ 	(() => {
/******/ 		// define getter functions for harmony exports
/******/ 		__webpack_require__.d = (exports, definition) => {
/******/ 			for(var key in definition) {
/******/ 				if(__webpack_require__.o(definition, key) && !__webpack_require__.o(exports, key)) {
/******/ 					Object.defineProperty(exports, key, { enumerable: true, get: definition[key] });
/******/ 				}
/******/ 			}
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/jsonp chunk loading */
/******/ 	(() => {
/******/ 		// no baseURI
/******/ 		
/******/ 		// object to store loaded and loading chunks
/******/ 		// undefined = chunk not loaded, null = chunk preloaded/prefetched
/******/ 		// [resolve, reject, Promise] = chunk loading, 0 = chunk loaded
/******/ 		var installedChunks = {
/******/ 			"/js/main": 0,
/******/ 			"css/main": 0
/******/ 		};
/******/ 		
/******/ 		// no chunk on demand loading
/******/ 		
/******/ 		// no prefetching
/******/ 		
/******/ 		// no preloaded
/******/ 		
/******/ 		// no HMR
/******/ 		
/******/ 		// no HMR manifest
/******/ 		
/******/ 		__webpack_require__.O.j = (chunkId) => (installedChunks[chunkId] === 0);
/******/ 		
/******/ 		// install a JSONP callback for chunk loading
/******/ 		var webpackJsonpCallback = (parentChunkLoadingFunction, data) => {
/******/ 			var [chunkIds, moreModules, runtime] = data;
/******/ 			// add "moreModules" to the modules object,
/******/ 			// then flag all "chunkIds" as loaded and fire callback
/******/ 			var moduleId, chunkId, i = 0;
/******/ 			for(moduleId in moreModules) {
/******/ 				if(__webpack_require__.o(moreModules, moduleId)) {
/******/ 					__webpack_require__.m[moduleId] = moreModules[moduleId];
/******/ 				}
/******/ 			}
/******/ 			if(runtime) var result = runtime(__webpack_require__);
/******/ 			if(parentChunkLoadingFunction) parentChunkLoadingFunction(data);
/******/ 			for(;i < chunkIds.length; i++) {
/******/ 				chunkId = chunkIds[i];
/******/ 				if(__webpack_require__.o(installedChunks, chunkId) && installedChunks[chunkId]) {
/******/ 					installedChunks[chunkId][0]();
/******/ 				}
/******/ 				installedChunks[chunkIds[i]] = 0;
/******/ 			}
/******/ 			return __webpack_require__.O(result);
/******/ 		}
/******/ 		
/******/ 		var chunkLoadingGlobal = self["webpackChunkecommvc"] = self["webpackChunkecommvc"] || [];
/******/ 		chunkLoadingGlobal.forEach(webpackJsonpCallback.bind(null, 0));
/******/ 		chunkLoadingGlobal.push = webpackJsonpCallback.bind(null, chunkLoadingGlobal.push.bind(chunkLoadingGlobal));
/******/ 	})();
/******/ 	
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module depends on other loaded chunks and execution need to be delayed
/******/ 	__webpack_require__.O(undefined, ["css/main"], () => (__webpack_require__("./resources/assets/js/app.js")))
/******/ 	var __webpack_exports__ = __webpack_require__.O(undefined, ["css/main"], () => (__webpack_require__("./resources/assets/sass/app.scss")))
/******/ 	__webpack_exports__ = __webpack_require__.O(__webpack_exports__);
/******/ 	
/******/ })()
;