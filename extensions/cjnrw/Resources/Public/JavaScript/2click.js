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

/***/ "./src/javascript/2click.js":
/*!**********************************!*\
  !*** ./src/javascript/2click.js ***!
  \**********************************/
/***/ (() => {

eval("document.ready = function (callback) {\n  if (document.readyState != 'loading') {\n    callback();\n  } else {\n    document.addEventListener('DOMContentLoaded', callback);\n  }\n};\nvar iFrame2C = {};\niFrame2C.rescale = function (iframe, format) {\n  var formatWidth = parseInt(format.split(':')[0]);\n  var formatHeight = parseInt(format.split(':')[1]);\n  var formatRatio = formatHeight / formatWidth;\n  var iframeBounds = iframe.getBoundingClientRect();\n  var currentWidth = iframeBounds.width;\n  var newHeight = formatRatio * currentWidth;\n  iframe.style.height = Math.round(newHeight) + \"px\";\n};\nfunction iframeResize() {\n  var iframes = document.querySelectorAll('iframe[data-scaling=\"true\"]');\n  if (!!iframes.length) {\n    for (var i = 0; i < iframes.length; i++) {\n      var iframe = iframes[i];\n      var videoFormat = '16:9';\n      var is_data_format_existing = typeof iframe.getAttribute('data-format') !== \"undefined\";\n      if (is_data_format_existing) {\n        var is_data_format_valid = iframe.getAttribute('data-format').includes(':');\n        if (is_data_format_valid) {\n          videoFormat = iframe.getAttribute('data-format');\n        }\n      }\n      iFrame2C.rescale(iframe, videoFormat);\n    }\n  }\n}\ndocument.ready(function () {\n  window.addEventListener(\"resize\", function () {\n    iframeResize();\n  });\n  iframeResize();\n});\nfunction get_source_url(data_type) {\n  switch (data_type) {\n    case \"youtube\":\n      return \"https://www.youtube-nocookie.com/embed/{SOURCE}?rel=0&controls=1&showinfo=0&autoplay=0\";\n    case \"google-maps\":\n      return \"{SOURCE}\";\n    default:\n      break;\n  }\n}\nfunction allowVideosFromYouTube() {\n  var video_wrapper = document.querySelectorAll('.video_wrapper');\n  if (!!video_wrapper.length) {\n    var _loop = function _loop() {\n        var _wrapper = video_wrapper[i];\n        video_triggers = _wrapper.querySelectorAll('.video_trigger');\n        if (!!video_triggers.length) {\n          for (l = 0; l < video_triggers.length; l++) {\n            video_trigger = video_triggers[l];\n            accept_buttons = video_trigger.querySelectorAll('input[type=\"button\"]');\n            if (!!accept_buttons.length) {\n              for (j = 0; j < accept_buttons.length; j++) {\n                accept_button = accept_buttons[j];\n                accept_button.addEventListener(\"click\", function () {\n                  var _trigger = this.parentElement.parentElement.parentElement;\n                  var data_type = _trigger.getAttribute(\"data-type\");\n                  var source = \"\";\n                  _trigger.style.display = \"none\";\n                  _trigger.classList.remove(\"d-flex\");\n                  source = get_source_url(data_type);\n                  var data_source = _trigger.getAttribute('data-source');\n                  source = source.replace(\"{SOURCE}\", data_source);\n                  var video_layers = _trigger.parentElement.querySelectorAll(\".video_layer\");\n                  if (!!video_layers.length) {\n                    for (var k = 0; k < video_layers.length; k++) {\n                      var video_layer = video_layers[k];\n                      video_layer.style.display = \"block\";\n                      video_layer.querySelector(\"iframe\").setAttribute(\"src\", source);\n                    }\n                  }\n                  _wrapper.style.backgroundImage = \"\";\n                  _wrapper.style.height = \"auto\";\n                  var timeout = 100;\n                  setTimeout(function () {\n                    iframeResize();\n                  }, timeout);\n                });\n              }\n            }\n          }\n        }\n      },\n      video_triggers,\n      l,\n      video_trigger,\n      accept_buttons,\n      j,\n      accept_button;\n    for (var i = 0; i < video_wrapper.length; i++) {\n      _loop();\n    }\n    ;\n  }\n}\ndocument.ready(function () {\n  allowVideosFromYouTube();\n});\n\n//# sourceURL=webpack:///./src/javascript/2click.js?");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval devtool is used.
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./src/javascript/2click.js"]();
/******/ 	
/******/ })()
;