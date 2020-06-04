/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 1);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/scripts.js":
/*!*********************************!*\
  !*** ./resources/js/scripts.js ***!
  \*********************************/
/*! no static exports found */
/***/ (function(module, exports) {

$(document).ready(function () {
  /**
   * Создание книги и автора
   */
  $('#createBtn').click(function () {
    var form = $(this).parents('form');
    var entity = form.attr('entity');
    var messagae = '';

    if (entity === 'book') {
      messagae = 'Книга добавлена';
    } else {
      messagae = 'Автор добавлен';
    }

    ;
    var data = form.serialize();
    var url = '/api/v1/' + entity + 's/add';
    $.post(url, data, function (result) {
      $('#modalMessage').text(messagae);
      $('#messageModal').modal('show');
    });
  });
  /**
   * Изменение книги и автора
   */

  $('#updateBtn').click(function () {
    var form = $(this).parents('form');
    var entity = form.attr('entity');
    var data = form.serialize();
    var url = '/api/v1/' + entity + 's/update';
    $.post(url, data, function (result) {
      console.log(result);
      var h1Span;

      if (entity === 'book') {
        h1Span = result.title;
      } else {
        h1Span = result.name;
      }

      console.log(h1Span);
      $('#h1Span').html('"' + h1Span + '"');
    });
  });
  /**
   * Поиск автора при введении текста в текстовое поле автора
   */

  var authorInput = $('#bookAuthorInput');
  var authorsListUl = $('#authorsList');
  authorInput.keyup(function () {
    var value = $(this).val();
    var url = '/api/v1/authors/list';
    var data = 'value=' + value;
    $.get(url, data, function (result) {
      authorsListUl.html('').removeClass('d-none');
      var insert = ''; //console.log(result[0].name); return;

      for (var i = 0; i < result.length; i++) {
        insert += '<li><a href="#!" author-id="' + result[i].id + '" ' + 'class="inserted-author">' + result[i].name + '</a></li>';
      }

      authorsListUl.html(insert);
    });
  });
  /**
   * Добавление имени автора в input
   */

  authorsListUl.on('click', 'a', function () {
    authorInput.val($(this).text());
    $('[name="author-id"]').val($(this).attr('author-id'));
  });
  $('[id!=authorsList]').click(function () {
    authorsListUl.addClass('d-none');
  });
});

/***/ }),

/***/ 1:
/*!***************************************!*\
  !*** multi ./resources/js/scripts.js ***!
  \***************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! /home/admi/Документы/tests/books-/resources/js/scripts.js */"./resources/js/scripts.js");


/***/ })

/******/ });