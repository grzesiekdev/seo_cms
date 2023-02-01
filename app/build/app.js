(self["webpackChunk"] = self["webpackChunk"] || []).push([["app"],{

/***/ "./assets/controllers sync recursive ./node_modules/@symfony/stimulus-bridge/lazy-controller-loader.js! \\.(j%7Ct)sx?$":
/*!*******************************************************************************************************************!*\
  !*** ./assets/controllers/ sync ./node_modules/@symfony/stimulus-bridge/lazy-controller-loader.js! \.(j%7Ct)sx?$ ***!
  \*******************************************************************************************************************/
/***/ ((module, __unused_webpack_exports, __webpack_require__) => {

var map = {
	"./hello_controller.js": "./node_modules/@symfony/stimulus-bridge/lazy-controller-loader.js!./assets/controllers/hello_controller.js"
};


function webpackContext(req) {
	var id = webpackContextResolve(req);
	return __webpack_require__(id);
}
function webpackContextResolve(req) {
	if(!__webpack_require__.o(map, req)) {
		var e = new Error("Cannot find module '" + req + "'");
		e.code = 'MODULE_NOT_FOUND';
		throw e;
	}
	return map[req];
}
webpackContext.keys = function webpackContextKeys() {
	return Object.keys(map);
};
webpackContext.resolve = webpackContextResolve;
module.exports = webpackContext;
webpackContext.id = "./assets/controllers sync recursive ./node_modules/@symfony/stimulus-bridge/lazy-controller-loader.js! \\.(j%7Ct)sx?$";

/***/ }),

/***/ "./node_modules/@symfony/stimulus-bridge/dist/webpack/loader.js!./assets/controllers.json":
/*!************************************************************************************************!*\
  !*** ./node_modules/@symfony/stimulus-bridge/dist/webpack/loader.js!./assets/controllers.json ***!
  \************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = ({
});

/***/ }),

/***/ "./node_modules/@symfony/stimulus-bridge/lazy-controller-loader.js!./assets/controllers/hello_controller.js":
/*!******************************************************************************************************************!*\
  !*** ./node_modules/@symfony/stimulus-bridge/lazy-controller-loader.js!./assets/controllers/hello_controller.js ***!
  \******************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (/* binding */ _default)
/* harmony export */ });
/* harmony import */ var core_js_modules_es_object_set_prototype_of_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! core-js/modules/es.object.set-prototype-of.js */ "./node_modules/core-js/modules/es.object.set-prototype-of.js");
/* harmony import */ var core_js_modules_es_object_set_prototype_of_js__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_set_prototype_of_js__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var core_js_modules_es_function_bind_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! core-js/modules/es.function.bind.js */ "./node_modules/core-js/modules/es.function.bind.js");
/* harmony import */ var core_js_modules_es_function_bind_js__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_function_bind_js__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var core_js_modules_es_object_get_prototype_of_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! core-js/modules/es.object.get-prototype-of.js */ "./node_modules/core-js/modules/es.object.get-prototype-of.js");
/* harmony import */ var core_js_modules_es_object_get_prototype_of_js__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_get_prototype_of_js__WEBPACK_IMPORTED_MODULE_2__);
/* harmony import */ var core_js_modules_es_object_to_string_js__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! core-js/modules/es.object.to-string.js */ "./node_modules/core-js/modules/es.object.to-string.js");
/* harmony import */ var core_js_modules_es_object_to_string_js__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_to_string_js__WEBPACK_IMPORTED_MODULE_3__);
/* harmony import */ var core_js_modules_es_reflect_construct_js__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! core-js/modules/es.reflect.construct.js */ "./node_modules/core-js/modules/es.reflect.construct.js");
/* harmony import */ var core_js_modules_es_reflect_construct_js__WEBPACK_IMPORTED_MODULE_4___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_reflect_construct_js__WEBPACK_IMPORTED_MODULE_4__);
/* harmony import */ var core_js_modules_es_object_create_js__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! core-js/modules/es.object.create.js */ "./node_modules/core-js/modules/es.object.create.js");
/* harmony import */ var core_js_modules_es_object_create_js__WEBPACK_IMPORTED_MODULE_5___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_create_js__WEBPACK_IMPORTED_MODULE_5__);
/* harmony import */ var core_js_modules_es_object_define_property_js__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! core-js/modules/es.object.define-property.js */ "./node_modules/core-js/modules/es.object.define-property.js");
/* harmony import */ var core_js_modules_es_object_define_property_js__WEBPACK_IMPORTED_MODULE_6___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_define_property_js__WEBPACK_IMPORTED_MODULE_6__);
/* harmony import */ var core_js_modules_es_symbol_js__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! core-js/modules/es.symbol.js */ "./node_modules/core-js/modules/es.symbol.js");
/* harmony import */ var core_js_modules_es_symbol_js__WEBPACK_IMPORTED_MODULE_7___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol_js__WEBPACK_IMPORTED_MODULE_7__);
/* harmony import */ var core_js_modules_es_symbol_description_js__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! core-js/modules/es.symbol.description.js */ "./node_modules/core-js/modules/es.symbol.description.js");
/* harmony import */ var core_js_modules_es_symbol_description_js__WEBPACK_IMPORTED_MODULE_8___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol_description_js__WEBPACK_IMPORTED_MODULE_8__);
/* harmony import */ var core_js_modules_es_symbol_iterator_js__WEBPACK_IMPORTED_MODULE_9__ = __webpack_require__(/*! core-js/modules/es.symbol.iterator.js */ "./node_modules/core-js/modules/es.symbol.iterator.js");
/* harmony import */ var core_js_modules_es_symbol_iterator_js__WEBPACK_IMPORTED_MODULE_9___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol_iterator_js__WEBPACK_IMPORTED_MODULE_9__);
/* harmony import */ var core_js_modules_es_array_iterator_js__WEBPACK_IMPORTED_MODULE_10__ = __webpack_require__(/*! core-js/modules/es.array.iterator.js */ "./node_modules/core-js/modules/es.array.iterator.js");
/* harmony import */ var core_js_modules_es_array_iterator_js__WEBPACK_IMPORTED_MODULE_10___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_iterator_js__WEBPACK_IMPORTED_MODULE_10__);
/* harmony import */ var core_js_modules_es_string_iterator_js__WEBPACK_IMPORTED_MODULE_11__ = __webpack_require__(/*! core-js/modules/es.string.iterator.js */ "./node_modules/core-js/modules/es.string.iterator.js");
/* harmony import */ var core_js_modules_es_string_iterator_js__WEBPACK_IMPORTED_MODULE_11___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_string_iterator_js__WEBPACK_IMPORTED_MODULE_11__);
/* harmony import */ var core_js_modules_web_dom_collections_iterator_js__WEBPACK_IMPORTED_MODULE_12__ = __webpack_require__(/*! core-js/modules/web.dom-collections.iterator.js */ "./node_modules/core-js/modules/web.dom-collections.iterator.js");
/* harmony import */ var core_js_modules_web_dom_collections_iterator_js__WEBPACK_IMPORTED_MODULE_12___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_web_dom_collections_iterator_js__WEBPACK_IMPORTED_MODULE_12__);
/* harmony import */ var _hotwired_stimulus__WEBPACK_IMPORTED_MODULE_13__ = __webpack_require__(/*! @hotwired/stimulus */ "./node_modules/@hotwired/stimulus/dist/stimulus.js");
function _typeof(obj) { "@babel/helpers - typeof"; return _typeof = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (obj) { return typeof obj; } : function (obj) { return obj && "function" == typeof Symbol && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; }, _typeof(obj); }













function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }
function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }
function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); Object.defineProperty(Constructor, "prototype", { writable: false }); return Constructor; }
function _inherits(subClass, superClass) { if (typeof superClass !== "function" && superClass !== null) { throw new TypeError("Super expression must either be null or a function"); } subClass.prototype = Object.create(superClass && superClass.prototype, { constructor: { value: subClass, writable: true, configurable: true } }); Object.defineProperty(subClass, "prototype", { writable: false }); if (superClass) _setPrototypeOf(subClass, superClass); }
function _setPrototypeOf(o, p) { _setPrototypeOf = Object.setPrototypeOf ? Object.setPrototypeOf.bind() : function _setPrototypeOf(o, p) { o.__proto__ = p; return o; }; return _setPrototypeOf(o, p); }
function _createSuper(Derived) { var hasNativeReflectConstruct = _isNativeReflectConstruct(); return function _createSuperInternal() { var Super = _getPrototypeOf(Derived), result; if (hasNativeReflectConstruct) { var NewTarget = _getPrototypeOf(this).constructor; result = Reflect.construct(Super, arguments, NewTarget); } else { result = Super.apply(this, arguments); } return _possibleConstructorReturn(this, result); }; }
function _possibleConstructorReturn(self, call) { if (call && (_typeof(call) === "object" || typeof call === "function")) { return call; } else if (call !== void 0) { throw new TypeError("Derived constructors may only return object or undefined"); } return _assertThisInitialized(self); }
function _assertThisInitialized(self) { if (self === void 0) { throw new ReferenceError("this hasn't been initialised - super() hasn't been called"); } return self; }
function _isNativeReflectConstruct() { if (typeof Reflect === "undefined" || !Reflect.construct) return false; if (Reflect.construct.sham) return false; if (typeof Proxy === "function") return true; try { Boolean.prototype.valueOf.call(Reflect.construct(Boolean, [], function () {})); return true; } catch (e) { return false; } }
function _getPrototypeOf(o) { _getPrototypeOf = Object.setPrototypeOf ? Object.getPrototypeOf.bind() : function _getPrototypeOf(o) { return o.__proto__ || Object.getPrototypeOf(o); }; return _getPrototypeOf(o); }


/*
 * This is an example Stimulus controller!
 *
 * Any element with a data-controller="hello" attribute will cause
 * this controller to be executed. The name "hello" comes from the filename:
 * hello_controller.js -> "hello"
 *
 * Delete this file or adapt it for your use!
 */
var _default = /*#__PURE__*/function (_Controller) {
  _inherits(_default, _Controller);
  var _super = _createSuper(_default);
  function _default() {
    _classCallCheck(this, _default);
    return _super.apply(this, arguments);
  }
  _createClass(_default, [{
    key: "connect",
    value: function connect() {
      this.element.textContent = 'Hello Stimulus! Edit me in assets/controllers/hello_controller.js';
    }
  }]);
  return _default;
}(_hotwired_stimulus__WEBPACK_IMPORTED_MODULE_13__.Controller);


/***/ }),

/***/ "./assets/app.js":
/*!***********************!*\
  !*** ./assets/app.js ***!
  \***********************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var core_js_modules_es_array_index_of_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! core-js/modules/es.array.index-of.js */ "./node_modules/core-js/modules/es.array.index-of.js");
/* harmony import */ var core_js_modules_es_array_index_of_js__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_index_of_js__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var core_js_modules_es_array_find_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! core-js/modules/es.array.find.js */ "./node_modules/core-js/modules/es.array.find.js");
/* harmony import */ var core_js_modules_es_array_find_js__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_find_js__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var core_js_modules_es_object_to_string_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! core-js/modules/es.object.to-string.js */ "./node_modules/core-js/modules/es.object.to-string.js");
/* harmony import */ var core_js_modules_es_object_to_string_js__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_to_string_js__WEBPACK_IMPORTED_MODULE_2__);
/* harmony import */ var core_js_modules_es_array_for_each_js__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! core-js/modules/es.array.for-each.js */ "./node_modules/core-js/modules/es.array.for-each.js");
/* harmony import */ var core_js_modules_es_array_for_each_js__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_for_each_js__WEBPACK_IMPORTED_MODULE_3__);
/* harmony import */ var _bootstrap__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ./bootstrap */ "./assets/bootstrap.js");
/* harmony import */ var _styles_app_css__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ./styles/app.css */ "./assets/styles/app.css");
/* provided dependency */ var $ = __webpack_require__(/*! jquery */ "./node_modules/jquery/dist/jquery.js");




/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// start the Stimulus application


// any CSS you import will output into a single css file (app.css in this case)

__webpack_require__(/*! @fortawesome/fontawesome-free/css/all.min.css */ "./node_modules/@fortawesome/fontawesome-free/css/all.min.css");
__webpack_require__(/*! @fortawesome/fontawesome-free/js/all.js */ "./node_modules/@fortawesome/fontawesome-free/js/all.js");
var adminNs = {
  initDraggableEntityRows: function initDraggableEntityRows() {
    var dragSrcEl = null; // the object being drugged
    var startPosition = null; // the index of the row element (0 through whatever)
    var endPosition = null; // the index of the row element being dropped on (0 through whatever)
    var parent; // the parent element of the dragged item
    var entityId; // the id (key) of the entity
    function handleDragStart(e) {
      dragSrcEl = this;
      entityId = $(this).attr('rel');
      dragSrcEl.style.opacity = '0.4';
      parent = dragSrcEl.parentNode;
      startPosition = Array.prototype.indexOf.call(parent.children, dragSrcEl);
      console.log("start: " + startPosition);
      e.dataTransfer.effectAllowed = 'move';
      e.dataTransfer.setData('text/html', this.innerHTML);
      console.log(entityId);
    }
    function handleDragOver(e) {
      //console.log('drag over: '+ e.target);
      if (e.preventDefault) {
        e.preventDefault(); // Necessary. Allows us to drop.
      }

      e.dataTransfer.dropEffect = 'move'; // See the section on the DataTransfer object.
      this.classList.add('over');
      return false;
    }
    function handleDragLeave(e) {
      //console.log('drag leave: '+ e.target);
      this.classList.remove('over'); // this / e.target is previous target element.
    }

    function handleDrop(e) {
      //console.log('drop: '+ e.target);
      //console.log(e.currentTarget);
      //console.log(dragSrcEl);
      if (e.stopPropagation) {
        e.stopPropagation(); // stops the browser from redirecting.
      }
      // Don't do anything if dropping the same column we're dragging.
      if (dragSrcEl !== this) {
        endPosition = Array.prototype.indexOf.call(parent.children, this) + 1;
        console.log("end: " + endPosition);
        // Set the source column's HTML to the HTML of the column we dropped on.
        dragSrcEl.innerHTML = this.innerHTML;
        this.innerHTML = e.dataTransfer.getData('text/html');
        // do the ajax call to update the database
        $.ajax({
          url: '/admin/menu/sort/' + entityId + '/' + endPosition
        }).done(function (res) {
          $("div.sortable .list-group").replaceWith($(res).find("div.sortable .list-group"));
        }).fail(function (err) {
          alert("An error occurred while sorting. Please refresh the page and try again.");
        }).always(function () {
          adminNs.initDraggableEntityRows();
        });
      }
      return false;
    }
    function handleDragEnd(e) {
      //console.log('drag end: '+ e.target);
      this.style.opacity = '1'; // this / e.target is the source node.
      [].forEach.call(rows, function (row) {
        row.classList.remove('over');
      });
    }
    var rows = document.querySelectorAll('div.sortable > .list-group li');
    [].forEach.call(rows, function (row) {
      row.addEventListener('dragstart', handleDragStart, false);
      row.addEventListener('dragover', handleDragOver, false);
      row.addEventListener('dragleave', handleDragLeave, false);
      row.addEventListener('drop', handleDrop, false);
      row.addEventListener('dragend', handleDragEnd, false);
    });
  },
  /**
   * Primary Admin initialization method.
   * @returns {boolean}
   */
  init: function init() {
    this.initDraggableEntityRows();
    return true;
  }
};
$(function () {
  adminNs.init();
});

/***/ }),

/***/ "./assets/bootstrap.js":
/*!*****************************!*\
  !*** ./assets/bootstrap.js ***!
  \*****************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "app": () => (/* binding */ app)
/* harmony export */ });
/* harmony import */ var _symfony_stimulus_bridge__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @symfony/stimulus-bridge */ "./node_modules/@symfony/stimulus-bridge/dist/index.js");


// Registers Stimulus controllers from controllers.json and in the controllers/ directory
var app = (0,_symfony_stimulus_bridge__WEBPACK_IMPORTED_MODULE_0__.startStimulusApp)(__webpack_require__("./assets/controllers sync recursive ./node_modules/@symfony/stimulus-bridge/lazy-controller-loader.js! \\.(j%7Ct)sx?$"));

// register any custom, 3rd party controllers here
// app.register('some_controller_name', SomeImportedController);

/***/ }),

/***/ "./assets/styles/app.css":
/*!*******************************!*\
  !*** ./assets/styles/app.css ***!
  \*******************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ })

},
/******/ __webpack_require__ => { // webpackRuntimeModules
/******/ var __webpack_exec__ = (moduleId) => (__webpack_require__(__webpack_require__.s = moduleId))
/******/ __webpack_require__.O(0, ["vendors-node_modules_fortawesome_fontawesome-free_js_all_js-node_modules_symfony_stimulus-bri-1b3283"], () => (__webpack_exec__("./assets/app.js")));
/******/ var __webpack_exports__ = __webpack_require__.O();
/******/ }
]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,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QixTQUFTLENBQUNHLE1BQU0sQ0FBQyxNQUFNLENBQUM7TUFDaEMsQ0FBQyxDQUFDO0lBQ047SUFDQSxJQUFJZ0IsSUFBSSxHQUFHRSxRQUFRLENBQUNDLGdCQUFnQixDQUFDLCtCQUErQixDQUFDO0lBQ3JFLEVBQUUsQ0FBQ0osT0FBTyxDQUFDN0IsSUFBSSxDQUFDOEIsSUFBSSxFQUFFLFVBQVNDLEdBQUcsRUFBRTtNQUNoQ0EsR0FBRyxDQUFDRyxnQkFBZ0IsQ0FBQyxXQUFXLEVBQUU1QyxlQUFlLEVBQUUsS0FBSyxDQUFDO01BQ3pEeUMsR0FBRyxDQUFDRyxnQkFBZ0IsQ0FBQyxVQUFVLEVBQUUxQixjQUFjLEVBQUUsS0FBSyxDQUFDO01BQ3ZEdUIsR0FBRyxDQUFDRyxnQkFBZ0IsQ0FBQyxXQUFXLEVBQUVyQixlQUFlLEVBQUUsS0FBSyxDQUFDO01BQ3pEa0IsR0FBRyxDQUFDRyxnQkFBZ0IsQ0FBQyxNQUFNLEVBQUVuQixVQUFVLEVBQUUsS0FBSyxDQUFDO01BQy9DZ0IsR0FBRyxDQUFDRyxnQkFBZ0IsQ0FBQyxTQUFTLEVBQUVOLGFBQWEsRUFBRSxLQUFLLENBQUM7SUFDekQsQ0FBQyxDQUFDO0VBQ04sQ0FBQztFQUNEO0FBQ1I7QUFDQTtBQUNBO0VBQ1FPLElBQUksRUFBRSxnQkFBVztJQUViLElBQUksQ0FBQ25ELHVCQUF1QixFQUFFO0lBQzlCLE9BQU8sSUFBSTtFQUNmO0FBQ0osQ0FBQztBQUNMUSxDQUFDLENBQUMsWUFBVztFQUNUVCxPQUFPLENBQUNvRCxJQUFJLEVBQUU7QUFDbEIsQ0FBQyxDQUFDOzs7Ozs7Ozs7Ozs7Ozs7O0FDM0cwRDs7QUFFNUQ7QUFDTyxJQUFNRSxHQUFHLEdBQUdELDBFQUFnQixDQUFDdEQsNElBSW5DLENBQUM7O0FBRUY7QUFDQTs7Ozs7Ozs7Ozs7O0FDVkEiLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vIFxcLihqJTdDdClzeCIsIndlYnBhY2s6Ly8vLi9hc3NldHMvY29udHJvbGxlcnMuanNvbiIsIndlYnBhY2s6Ly8vLi9hc3NldHMvY29udHJvbGxlcnMvaGVsbG9fY29udHJvbGxlci5qcyIsIndlYnBhY2s6Ly8vLi9hc3NldHMvYXBwLmpzIiwid2VicGFjazovLy8uL2Fzc2V0cy9ib290c3RyYXAuanMiLCJ3ZWJwYWNrOi8vLy4vYXNzZXRzL3N0eWxlcy9hcHAuY3NzPzNmYmEiXSwic291cmNlc0NvbnRlbnQiOlsidmFyIG1hcCA9IHtcblx0XCIuL2hlbGxvX2NvbnRyb2xsZXIuanNcIjogXCIuL25vZGVfbW9kdWxlcy9Ac3ltZm9ueS9zdGltdWx1cy1icmlkZ2UvbGF6eS1jb250cm9sbGVyLWxvYWRlci5qcyEuL2Fzc2V0cy9jb250cm9sbGVycy9oZWxsb19jb250cm9sbGVyLmpzXCJcbn07XG5cblxuZnVuY3Rpb24gd2VicGFja0NvbnRleHQocmVxKSB7XG5cdHZhciBpZCA9IHdlYnBhY2tDb250ZXh0UmVzb2x2ZShyZXEpO1xuXHRyZXR1cm4gX193ZWJwYWNrX3JlcXVpcmVfXyhpZCk7XG59XG5mdW5jdGlvbiB3ZWJwYWNrQ29udGV4dFJlc29sdmUocmVxKSB7XG5cdGlmKCFfX3dlYnBhY2tfcmVxdWlyZV9fLm8obWFwLCByZXEpKSB7XG5cdFx0dmFyIGUgPSBuZXcgRXJyb3IoXCJDYW5ub3QgZmluZCBtb2R1bGUgJ1wiICsgcmVxICsgXCInXCIpO1xuXHRcdGUuY29kZSA9ICdNT0RVTEVfTk9UX0ZPVU5EJztcblx0XHR0aHJvdyBlO1xuXHR9XG5cdHJldHVybiBtYXBbcmVxXTtcbn1cbndlYnBhY2tDb250ZXh0LmtleXMgPSBmdW5jdGlvbiB3ZWJwYWNrQ29udGV4dEtleXMoKSB7XG5cdHJldHVybiBPYmplY3Qua2V5cyhtYXApO1xufTtcbndlYnBhY2tDb250ZXh0LnJlc29sdmUgPSB3ZWJwYWNrQ29udGV4dFJlc29sdmU7XG5tb2R1bGUuZXhwb3J0cyA9IHdlYnBhY2tDb250ZXh0O1xud2VicGFja0NvbnRleHQuaWQgPSBcIi4vYXNzZXRzL2NvbnRyb2xsZXJzIHN5bmMgcmVjdXJzaXZlIC4vbm9kZV9tb2R1bGVzL0BzeW1mb255L3N0aW11bHVzLWJyaWRnZS9sYXp5LWNvbnRyb2xsZXItbG9hZGVyLmpzISBcXFxcLihqJTdDdClzeD8kXCI7IiwiZXhwb3J0IGRlZmF1bHQge1xufTsiLCJpbXBvcnQgeyBDb250cm9sbGVyIH0gZnJvbSAnQGhvdHdpcmVkL3N0aW11bHVzJztcblxuLypcbiAqIFRoaXMgaXMgYW4gZXhhbXBsZSBTdGltdWx1cyBjb250cm9sbGVyIVxuICpcbiAqIEFueSBlbGVtZW50IHdpdGggYSBkYXRhLWNvbnRyb2xsZXI9XCJoZWxsb1wiIGF0dHJpYnV0ZSB3aWxsIGNhdXNlXG4gKiB0aGlzIGNvbnRyb2xsZXIgdG8gYmUgZXhlY3V0ZWQuIFRoZSBuYW1lIFwiaGVsbG9cIiBjb21lcyBmcm9tIHRoZSBmaWxlbmFtZTpcbiAqIGhlbGxvX2NvbnRyb2xsZXIuanMgLT4gXCJoZWxsb1wiXG4gKlxuICogRGVsZXRlIHRoaXMgZmlsZSBvciBhZGFwdCBpdCBmb3IgeW91ciB1c2UhXG4gKi9cbmV4cG9ydCBkZWZhdWx0IGNsYXNzIGV4dGVuZHMgQ29udHJvbGxlciB7XG4gICAgY29ubmVjdCgpIHtcbiAgICAgICAgdGhpcy5lbGVtZW50LnRleHRDb250ZW50ID0gJ0hlbGxvIFN0aW11bHVzISBFZGl0IG1lIGluIGFzc2V0cy9jb250cm9sbGVycy9oZWxsb19jb250cm9sbGVyLmpzJztcbiAgICB9XG59XG4iLCIvKlxuICogV2VsY29tZSB0byB5b3VyIGFwcCdzIG1haW4gSmF2YVNjcmlwdCBmaWxlIVxuICpcbiAqIFdlIHJlY29tbWVuZCBpbmNsdWRpbmcgdGhlIGJ1aWx0IHZlcnNpb24gb2YgdGhpcyBKYXZhU2NyaXB0IGZpbGVcbiAqIChhbmQgaXRzIENTUyBmaWxlKSBpbiB5b3VyIGJhc2UgbGF5b3V0IChiYXNlLmh0bWwudHdpZykuXG4gKi9cblxuLy8gc3RhcnQgdGhlIFN0aW11bHVzIGFwcGxpY2F0aW9uXG5pbXBvcnQgJy4vYm9vdHN0cmFwJztcblxuLy8gYW55IENTUyB5b3UgaW1wb3J0IHdpbGwgb3V0cHV0IGludG8gYSBzaW5nbGUgY3NzIGZpbGUgKGFwcC5jc3MgaW4gdGhpcyBjYXNlKVxuaW1wb3J0ICcuL3N0eWxlcy9hcHAuY3NzJztcblxucmVxdWlyZSgnQGZvcnRhd2Vzb21lL2ZvbnRhd2Vzb21lLWZyZWUvY3NzL2FsbC5taW4uY3NzJyk7XG5yZXF1aXJlKCdAZm9ydGF3ZXNvbWUvZm9udGF3ZXNvbWUtZnJlZS9qcy9hbGwuanMnKTtcblxudmFyIGFkbWluTnMgPVxuICAgIHtcbiAgICAgICAgaW5pdERyYWdnYWJsZUVudGl0eVJvd3M6IGZ1bmN0aW9uKCkge1xuICAgICAgICAgICAgdmFyIGRyYWdTcmNFbCA9IG51bGw7IC8vIHRoZSBvYmplY3QgYmVpbmcgZHJ1Z2dlZFxuICAgICAgICAgICAgdmFyIHN0YXJ0UG9zaXRpb24gPSBudWxsOyAvLyB0aGUgaW5kZXggb2YgdGhlIHJvdyBlbGVtZW50ICgwIHRocm91Z2ggd2hhdGV2ZXIpXG4gICAgICAgICAgICB2YXIgZW5kUG9zaXRpb24gPSBudWxsOyAvLyB0aGUgaW5kZXggb2YgdGhlIHJvdyBlbGVtZW50IGJlaW5nIGRyb3BwZWQgb24gKDAgdGhyb3VnaCB3aGF0ZXZlcilcbiAgICAgICAgICAgIHZhciBwYXJlbnQ7IC8vIHRoZSBwYXJlbnQgZWxlbWVudCBvZiB0aGUgZHJhZ2dlZCBpdGVtXG4gICAgICAgICAgICB2YXIgZW50aXR5SWQ7IC8vIHRoZSBpZCAoa2V5KSBvZiB0aGUgZW50aXR5XG4gICAgICAgICAgICBmdW5jdGlvbiBoYW5kbGVEcmFnU3RhcnQoZSkge1xuICAgICAgICAgICAgICAgIGRyYWdTcmNFbCA9IHRoaXM7XG4gICAgICAgICAgICAgICAgZW50aXR5SWQgPSAkKHRoaXMpLmF0dHIoJ3JlbCcpO1xuICAgICAgICAgICAgICAgIGRyYWdTcmNFbC5zdHlsZS5vcGFjaXR5ID0gJzAuNCc7XG4gICAgICAgICAgICAgICAgcGFyZW50ID0gZHJhZ1NyY0VsLnBhcmVudE5vZGU7XG4gICAgICAgICAgICAgICAgc3RhcnRQb3NpdGlvbiA9IEFycmF5LnByb3RvdHlwZS5pbmRleE9mLmNhbGwocGFyZW50LmNoaWxkcmVuLCBkcmFnU3JjRWwpO1xuICAgICAgICAgICAgICAgIGNvbnNvbGUubG9nKFwic3RhcnQ6IFwiK3N0YXJ0UG9zaXRpb24pO1xuICAgICAgICAgICAgICAgIGUuZGF0YVRyYW5zZmVyLmVmZmVjdEFsbG93ZWQgPSAnbW92ZSc7XG4gICAgICAgICAgICAgICAgZS5kYXRhVHJhbnNmZXIuc2V0RGF0YSgndGV4dC9odG1sJywgdGhpcy5pbm5lckhUTUwpO1xuICAgICAgICAgICAgICAgIGNvbnNvbGUubG9nKGVudGl0eUlkKTtcbiAgICAgICAgICAgIH1cbiAgICAgICAgICAgIGZ1bmN0aW9uIGhhbmRsZURyYWdPdmVyKGUpIHtcbi8vY29uc29sZS5sb2coJ2RyYWcgb3ZlcjogJysgZS50YXJnZXQpO1xuICAgICAgICAgICAgICAgIGlmIChlLnByZXZlbnREZWZhdWx0KSB7XG4gICAgICAgICAgICAgICAgICAgIGUucHJldmVudERlZmF1bHQoKTsgLy8gTmVjZXNzYXJ5LiBBbGxvd3MgdXMgdG8gZHJvcC5cbiAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgZS5kYXRhVHJhbnNmZXIuZHJvcEVmZmVjdCA9ICdtb3ZlJzsgIC8vIFNlZSB0aGUgc2VjdGlvbiBvbiB0aGUgRGF0YVRyYW5zZmVyIG9iamVjdC5cbiAgICAgICAgICAgICAgICB0aGlzLmNsYXNzTGlzdC5hZGQoJ292ZXInKTtcbiAgICAgICAgICAgICAgICByZXR1cm4gZmFsc2U7XG4gICAgICAgICAgICB9XG5cbiAgICAgICAgICAgIGZ1bmN0aW9uIGhhbmRsZURyYWdMZWF2ZShlKSB7XG4vL2NvbnNvbGUubG9nKCdkcmFnIGxlYXZlOiAnKyBlLnRhcmdldCk7XG4gICAgICAgICAgICAgICAgdGhpcy5jbGFzc0xpc3QucmVtb3ZlKCdvdmVyJyk7ICAvLyB0aGlzIC8gZS50YXJnZXQgaXMgcHJldmlvdXMgdGFyZ2V0IGVsZW1lbnQuXG4gICAgICAgICAgICB9XG4gICAgICAgICAgICBmdW5jdGlvbiBoYW5kbGVEcm9wKGUpIHtcbi8vY29uc29sZS5sb2coJ2Ryb3A6ICcrIGUudGFyZ2V0KTtcbi8vY29uc29sZS5sb2coZS5jdXJyZW50VGFyZ2V0KTtcbi8vY29uc29sZS5sb2coZHJhZ1NyY0VsKTtcbiAgICAgICAgICAgICAgICBpZiAoZS5zdG9wUHJvcGFnYXRpb24pIHtcbiAgICAgICAgICAgICAgICAgICAgZS5zdG9wUHJvcGFnYXRpb24oKTsgLy8gc3RvcHMgdGhlIGJyb3dzZXIgZnJvbSByZWRpcmVjdGluZy5cbiAgICAgICAgICAgICAgICB9XG4vLyBEb24ndCBkbyBhbnl0aGluZyBpZiBkcm9wcGluZyB0aGUgc2FtZSBjb2x1bW4gd2UncmUgZHJhZ2dpbmcuXG4gICAgICAgICAgICAgICAgaWYgKGRyYWdTcmNFbCAhPT0gdGhpcykge1xuICAgICAgICAgICAgICAgICAgICBlbmRQb3NpdGlvbiA9IEFycmF5LnByb3RvdHlwZS5pbmRleE9mLmNhbGwocGFyZW50LmNoaWxkcmVuLCB0aGlzKSsxO1xuICAgICAgICAgICAgICAgICAgICBjb25zb2xlLmxvZyhcImVuZDogXCIrZW5kUG9zaXRpb24pO1xuLy8gU2V0IHRoZSBzb3VyY2UgY29sdW1uJ3MgSFRNTCB0byB0aGUgSFRNTCBvZiB0aGUgY29sdW1uIHdlIGRyb3BwZWQgb24uXG4gICAgICAgICAgICAgICAgICAgIGRyYWdTcmNFbC5pbm5lckhUTUwgPSB0aGlzLmlubmVySFRNTDtcbiAgICAgICAgICAgICAgICAgICAgdGhpcy5pbm5lckhUTUwgPSBlLmRhdGFUcmFuc2Zlci5nZXREYXRhKCd0ZXh0L2h0bWwnKTtcbi8vIGRvIHRoZSBhamF4IGNhbGwgdG8gdXBkYXRlIHRoZSBkYXRhYmFzZVxuICAgICAgICAgICAgICAgICAgICAkLmFqYXgoe1xuICAgICAgICAgICAgICAgICAgICAgICAgdXJsOiAnL2FkbWluL21lbnUvc29ydC8nK2VudGl0eUlkKycvJytlbmRQb3NpdGlvbixcbiAgICAgICAgICAgICAgICAgICAgfSlcbiAgICAgICAgICAgICAgICAgICAgICAgIC5kb25lKGZ1bmN0aW9uKHJlcykge1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgICQoXCJkaXYuc29ydGFibGUgLmxpc3QtZ3JvdXBcIikucmVwbGFjZVdpdGgoJChyZXMpLmZpbmQoXCJkaXYuc29ydGFibGUgLmxpc3QtZ3JvdXBcIikpO1xuICAgICAgICAgICAgICAgICAgICAgICAgfSlcbiAgICAgICAgICAgICAgICAgICAgICAgIC5mYWlsKGZ1bmN0aW9uKGVycikge1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgIGFsZXJ0KFwiQW4gZXJyb3Igb2NjdXJyZWQgd2hpbGUgc29ydGluZy4gUGxlYXNlIHJlZnJlc2ggdGhlIHBhZ2UgYW5kIHRyeSBhZ2Fpbi5cIilcbiAgICAgICAgICAgICAgICAgICAgICAgIH0pXG4gICAgICAgICAgICAgICAgICAgICAgICAuYWx3YXlzKGZ1bmN0aW9uKCkge1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgIGFkbWluTnMuaW5pdERyYWdnYWJsZUVudGl0eVJvd3MoKTtcbiAgICAgICAgICAgICAgICAgICAgICAgIH0pO1xuICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICByZXR1cm4gZmFsc2U7XG4gICAgICAgICAgICB9XG4gICAgICAgICAgICBmdW5jdGlvbiBoYW5kbGVEcmFnRW5kKGUpIHtcbi8vY29uc29sZS5sb2coJ2RyYWcgZW5kOiAnKyBlLnRhcmdldCk7XG4gICAgICAgICAgICAgICAgdGhpcy5zdHlsZS5vcGFjaXR5ID0gJzEnOyAgLy8gdGhpcyAvIGUudGFyZ2V0IGlzIHRoZSBzb3VyY2Ugbm9kZS5cbiAgICAgICAgICAgICAgICBbXS5mb3JFYWNoLmNhbGwocm93cywgZnVuY3Rpb24gKHJvdykge1xuICAgICAgICAgICAgICAgICAgICByb3cuY2xhc3NMaXN0LnJlbW92ZSgnb3ZlcicpO1xuICAgICAgICAgICAgICAgIH0pO1xuICAgICAgICAgICAgfVxuICAgICAgICAgICAgdmFyIHJvd3MgPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yQWxsKCdkaXYuc29ydGFibGUgPiAubGlzdC1ncm91cCBsaScpO1xuICAgICAgICAgICAgW10uZm9yRWFjaC5jYWxsKHJvd3MsIGZ1bmN0aW9uKHJvdykge1xuICAgICAgICAgICAgICAgIHJvdy5hZGRFdmVudExpc3RlbmVyKCdkcmFnc3RhcnQnLCBoYW5kbGVEcmFnU3RhcnQsIGZhbHNlKTtcbiAgICAgICAgICAgICAgICByb3cuYWRkRXZlbnRMaXN0ZW5lcignZHJhZ292ZXInLCBoYW5kbGVEcmFnT3ZlciwgZmFsc2UpO1xuICAgICAgICAgICAgICAgIHJvdy5hZGRFdmVudExpc3RlbmVyKCdkcmFnbGVhdmUnLCBoYW5kbGVEcmFnTGVhdmUsIGZhbHNlKTtcbiAgICAgICAgICAgICAgICByb3cuYWRkRXZlbnRMaXN0ZW5lcignZHJvcCcsIGhhbmRsZURyb3AsIGZhbHNlKTtcbiAgICAgICAgICAgICAgICByb3cuYWRkRXZlbnRMaXN0ZW5lcignZHJhZ2VuZCcsIGhhbmRsZURyYWdFbmQsIGZhbHNlKTtcbiAgICAgICAgICAgIH0pO1xuICAgICAgICB9LFxuICAgICAgICAvKipcbiAgICAgICAgICogUHJpbWFyeSBBZG1pbiBpbml0aWFsaXphdGlvbiBtZXRob2QuXG4gICAgICAgICAqIEByZXR1cm5zIHtib29sZWFufVxuICAgICAgICAgKi9cbiAgICAgICAgaW5pdDogZnVuY3Rpb24oKSB7XG5cbiAgICAgICAgICAgIHRoaXMuaW5pdERyYWdnYWJsZUVudGl0eVJvd3MoKTtcbiAgICAgICAgICAgIHJldHVybiB0cnVlO1xuICAgICAgICB9XG4gICAgfTtcbiQoZnVuY3Rpb24oKSB7XG4gICAgYWRtaW5Ocy5pbml0KCk7XG59KTsiLCJpbXBvcnQgeyBzdGFydFN0aW11bHVzQXBwIH0gZnJvbSAnQHN5bWZvbnkvc3RpbXVsdXMtYnJpZGdlJztcblxuLy8gUmVnaXN0ZXJzIFN0aW11bHVzIGNvbnRyb2xsZXJzIGZyb20gY29udHJvbGxlcnMuanNvbiBhbmQgaW4gdGhlIGNvbnRyb2xsZXJzLyBkaXJlY3RvcnlcbmV4cG9ydCBjb25zdCBhcHAgPSBzdGFydFN0aW11bHVzQXBwKHJlcXVpcmUuY29udGV4dChcbiAgICAnQHN5bWZvbnkvc3RpbXVsdXMtYnJpZGdlL2xhenktY29udHJvbGxlci1sb2FkZXIhLi9jb250cm9sbGVycycsXG4gICAgdHJ1ZSxcbiAgICAvXFwuKGp8dClzeD8kL1xuKSk7XG5cbi8vIHJlZ2lzdGVyIGFueSBjdXN0b20sIDNyZCBwYXJ0eSBjb250cm9sbGVycyBoZXJlXG4vLyBhcHAucmVnaXN0ZXIoJ3NvbWVfY29udHJvbGxlcl9uYW1lJywgU29tZUltcG9ydGVkQ29udHJvbGxlcik7IiwiLy8gZXh0cmFjdGVkIGJ5IG1pbmktY3NzLWV4dHJhY3QtcGx1Z2luXG5leHBvcnQge307Il0sIm5hbWVzIjpbIkNvbnRyb2xsZXIiLCJlbGVtZW50IiwidGV4dENvbnRlbnQiLCJyZXF1aXJlIiwiYWRtaW5OcyIsImluaXREcmFnZ2FibGVFbnRpdHlSb3dzIiwiZHJhZ1NyY0VsIiwic3RhcnRQb3NpdGlvbiIsImVuZFBvc2l0aW9uIiwicGFyZW50IiwiZW50aXR5SWQiLCJoYW5kbGVEcmFnU3RhcnQiLCJlIiwiJCIsImF0dHIiLCJzdHlsZSIsIm9wYWNpdHkiLCJwYXJlbnROb2RlIiwiQXJyYXkiLCJwcm90b3R5cGUiLCJpbmRleE9mIiwiY2FsbCIsImNoaWxkcmVuIiwiY29uc29sZSIsImxvZyIsImRhdGFUcmFuc2ZlciIsImVmZmVjdEFsbG93ZWQiLCJzZXREYXRhIiwiaW5uZXJIVE1MIiwiaGFuZGxlRHJhZ092ZXIiLCJwcmV2ZW50RGVmYXVsdCIsImRyb3BFZmZlY3QiLCJjbGFzc0xpc3QiLCJhZGQiLCJoYW5kbGVEcmFnTGVhdmUiLCJyZW1vdmUiLCJoYW5kbGVEcm9wIiwic3RvcFByb3BhZ2F0aW9uIiwiZ2V0RGF0YSIsImFqYXgiLCJ1cmwiLCJkb25lIiwicmVzIiwicmVwbGFjZVdpdGgiLCJmaW5kIiwiZmFpbCIsImVyciIsImFsZXJ0IiwiYWx3YXlzIiwiaGFuZGxlRHJhZ0VuZCIsImZvckVhY2giLCJyb3dzIiwicm93IiwiZG9jdW1lbnQiLCJxdWVyeVNlbGVjdG9yQWxsIiwiYWRkRXZlbnRMaXN0ZW5lciIsImluaXQiLCJzdGFydFN0aW11bHVzQXBwIiwiYXBwIiwiY29udGV4dCJdLCJzb3VyY2VSb290IjoiIn0=