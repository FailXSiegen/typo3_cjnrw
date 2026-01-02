/*
 * ATTENTION: The "eval" devtool has been used (maybe by default in mode: "development").
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./src/javascript/index.js":
/*!*********************************!*\
  !*** ./src/javascript/index.js ***!
  \*********************************/
/***/ (() => {

eval("var scrollPosition = window.scrollY;\nvar headerContainer = document.getElementById('head');\nif (scrollPosition >= 10) {\n  headerContainer.classList.add('sticky-top');\n  headerContainer.classList.add('minify');\n} else {\n  headerContainer.classList.remove('sticky-top');\n  headerContainer.classList.remove('minify');\n}\nwindow.addEventListener('scroll', function () {\n  scrollPosition = window.scrollY;\n  if (scrollPosition >= 1) {\n    headerContainer.classList.add('sticky-top');\n    headerContainer.classList.add('minify');\n  } else {\n    headerContainer.classList.remove('sticky-top');\n    headerContainer.classList.remove('minify');\n  }\n});\nvar particleElements = document.querySelectorAll('.bg-particle');\nfor (var i = 0, n = particleElements.length; i < n; ++i) {\n  var rotate = particleElements[i].getAttribute('data-rotate');\n  var style = window.getComputedStyle(particleElements[i]);\n  var matrix = new WebKitCSSMatrix(style.transform);\n  particleElements[i].style.transform = matrix;\n  particleElements[i].style.setProperty('transform', particleElements[i].style.transform + ' rotate(' + rotate + 'deg)', 'important');\n}\n\n// Scroll to first invalid form field after page load\nvar firstInvalidField = document.querySelector('.is-invalid');\nif (firstInvalidField) {\n  // Small delay to ensure page is fully loaded and browser anchor scroll is done\n  setTimeout(function () {\n    firstInvalidField.scrollIntoView({\n      behavior: 'smooth',\n      block: 'center'\n    });\n    var input = firstInvalidField.querySelector('input, select, textarea') || firstInvalidField;\n    input.focus();\n  }, 100);\n}\n\n//# sourceURL=webpack:///./src/javascript/index.js?");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval devtool is used.
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./src/javascript/index.js"]();
/******/ 	
/******/ })()
;