/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./assets/js/src/theme/header-resize.js":
/*!**********************************************!*\
  !*** ./assets/js/src/theme/header-resize.js ***!
  \**********************************************/
/***/ (() => {

/*
Name: Header Resize
Author: Marktime Media
Author URI: http://marktimemedia.com
Version: 0.2
License: GPLv2

 This program is free software; you can redistribute it and/or modify
 it under the terms of the GNU General Public License version 2,
 as published by the Free Software Foundation.

 This program is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.See the
 GNU General Public License for more details.

 The license for this software can likely be found here:
 http://www.gnu.org/licenses/gpl-2.0.html
*/

(function ($) {
  /* Scroll Header */

  var $lastScrollTop = $(window).scrollTop(); // reset variable any time it reloads
  var $siteHeader = $('.header-sticky'); // your header element
  var changeDirection = -1; // base comparitive variable
  var shrinkClass = 'header-sticky-small'; // your small header class
  var bodyClass = 'sticky-header-enabled'; // your small body class
  var $headerHeight = $siteHeader.height();
  $(window).load(function () {
    console.log($headerHeight);

    // only if this class exists
    if ($siteHeader.length) {
      $('html').addClass(bodyClass);
      $(window).on('scroll', function (event) {
        var $scrollPosition = $(this).scrollTop();
        if ($(window).width() > 784) {
          // we're mobile first so this is anything larger than our mobile breakpoint

          if ($scrollPosition > $headerHeight) {
            // once you get far enough down, shrink the header

            $siteHeader.addClass(shrinkClass);
          } else if (0 == $scrollPosition) {
            // bring it back up again when we get back to the top

            $siteHeader.removeClass(shrinkClass);
          }
        } else {
          // this is mobile breakpoint or smaller
          if ($scrollPosition <= 46) {}
          if ($scrollPosition > 100 && $scrollPosition > $lastScrollTop) {
            // once you get far enough down, hide the header

            changeDirection = -1; // reset changeDirection
            $siteHeader.addClass(shrinkClass);
          } else {
            // bring it back up again if we scroll up at all

            if (-1 == changeDirection) {
              changeDirection = $scrollPosition; // only set changeDirection once
            }

            if ($scrollPosition < changeDirection - 100) {
              // only add after you've scrolled up a bit

              $siteHeader.removeClass(shrinkClass);
              changeDirection = -1; // reset changeDirection
            }
          }

          $lastScrollTop = $scrollPosition;
        }
      });
    }
  });
})(jQuery);

/***/ }),

/***/ "./assets/js/src/theme/search-toggle.js":
/*!**********************************************!*\
  !*** ./assets/js/src/theme/search-toggle.js ***!
  \**********************************************/
/***/ (() => {

/*
Name: Toggle Searchbar
Author: Marktime Media
Author URI: http://marktimemedia.com
Version: 0.1
License: GPLv2

 This program is free software; you can redistribute it and/or modify
 it under the terms of the GNU General Public License version 2,
 as published by the Free Software Foundation.

 This program is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.See the
 GNU General Public License for more details.

 The license for this software can likely be found here:
 http://www.gnu.org/licenses/gpl-2.0.html
*/

(function ($) {
  /* Expanding Search Bar */

  function switchToggle() {
    var bodyWrap = $('.content-body'); // body
    var searchContainer = $('.search-toggle-container'); // container
    var searchToggle = $('.search-toggle-trigger'); // trigger button
    var searchBar = $('.search-toggle-form'); // search form
    var search = $('.search-toggle-form .wp-block-search__input'); // search input
    var searchSubmit = $('.search-toggle-form .wp-block-search__button'); // search button

    if (searchToggle.length) {
      $(document).on('click', '.run-toggle', function () {
        // if toggle is closed, click button or to open
        bodyWrap.addClass('search-open');
        searchToggle.removeClass('run-toggle').addClass('search-open');
        searchBar.addClass('search-expanded');
        search.focus().attr('tabindex', 1);
        searchSubmit.attr('tabindex', 1);
      });
      $(document).on('click', '.search-open', function () {
        // if toggle is open, close by clicking anywhere on the body
        bodyWrap.removeClass('search-open');
        searchToggle.addClass('run-toggle').removeClass('search-open');
        searchBar.removeClass('search-expanded');
        search.attr('tabindex', -1);
        searchSubmit.attr('tabindex', -1);
      });
    }
  }
  switchToggle();
})(jQuery);

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
/************************************************************************/
/******/ 	/* webpack/runtime/compat get default export */
/******/ 	(() => {
/******/ 		// getDefaultExport function for compatibility with non-harmony modules
/******/ 		__webpack_require__.n = (module) => {
/******/ 			var getter = module && module.__esModule ?
/******/ 				() => (module['default']) :
/******/ 				() => (module);
/******/ 			__webpack_require__.d(getter, { a: getter });
/******/ 			return getter;
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
/************************************************************************/
var __webpack_exports__ = {};
// This entry need to be wrapped in an IIFE because it need to be in strict mode.
(() => {
"use strict";
/*!********************************!*\
  !*** ./assets/js/src/index.js ***!
  \********************************/
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _theme_header_resize_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./theme/header-resize.js */ "./assets/js/src/theme/header-resize.js");
/* harmony import */ var _theme_header_resize_js__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_theme_header_resize_js__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _theme_search_toggle_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./theme/search-toggle.js */ "./assets/js/src/theme/search-toggle.js");
/* harmony import */ var _theme_search_toggle_js__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_theme_search_toggle_js__WEBPACK_IMPORTED_MODULE_1__);


})();

/******/ })()
;
//# sourceMappingURL=index.js.map