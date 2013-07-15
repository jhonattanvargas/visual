(function() {
  var $, common, methods;
  var __bind = function(fn, me){ return function(){ return fn.apply(me, arguments); }; };
  $ = jQuery;
  common = {
    activeElement: '',
    settings: {
      enableNext: true,
      enablePrev: true,
      enableESC: true,
      selectedClass: 'selected', 
      onSelect: null,
      keyNext: 'j',
      keyPrev: 'f',
      scrollSpeed: 200,
      circular: true
    },
    inputMode: function() {
      var activeInputs;
      activeInputs = $('input:text:focus,textarea:focus').length;
      if (activeInputs === 0) {
        return false;
      } else {
        return true;
      }
    },
    bind: function(character, callback) {
      return $(document).keyup(__bind(function(e) {
        var eventChar;
        eventChar = String.fromCharCode(e.which).toLowerCase();
        if (eventChar === character && !this.inputMode()) {
          return callback(this.activeElement);
        }
      }, this));
    },
    scrollToElement: function(speed) {
      var x;
      x = this.activeElement.offset().top - $(window).height() / 2 + this.activeElement.height() / 2;
      return $('html, body').animate({
        scrollTop: "" + x + "px"
      }, speed);
    }
  };
  methods = {
    init: function(options) {
      var currentIdx, deselectElement, elements, isFirst, isLast, maxIdx, minIdx, next, prev, selectElement, settings;
      settings = common.settings;
      if (options != null) {
        $.extend(settings, options);
      }
      elements = this;
      currentIdx = -1;
      maxIdx = elements.length - 1;
      minIdx = 0;
      isLast = function(idx) {
        return idx === elements.length - 1;
      };
      isFirst = function(idx) {
        return idx === 0;
      };
      selectElement = function(idx) {
        common.activeElement = elements.eq(idx);
        common.activeElement.addClass(settings.selectedClass);
        common.scrollToElement(settings.scrollSpeed);
        return typeof settings.onSelect === "function" ? settings.onSelect(common.activeElement) : void 0;
      };
      deselectElement = function(idx) {
        return elements.eq(idx).removeClass(settings.selectedClass);
      };
      next = function() {
        if (settings.enableNext) {
          if (isLast(currentIdx) && settings.circular === false) {
            return;
          }
          deselectElement(currentIdx);
          currentIdx = currentIdx >= maxIdx ? 0 : currentIdx + 1;
          return selectElement(currentIdx);
        }
      };
      prev = function() {
        if (settings.enablePrev) {
          if (isFirst(currentIdx) && settings.circular === false) {
            return;
          }
          deselectElement(currentIdx);
          currentIdx = currentIdx <= minIdx ? maxIdx : currentIdx - 1;
          return selectElement(currentIdx);
        }
      };
      common.bind(settings.keyNext, next);
      common.bind(settings.keyPrev, prev);
      if (settings.enableESC) {
        $('textarea, input:text').keydown(function(e) {
          if (e.which === 27) {
            return $(this).blur();
          }
        });
      }
      return this;
    },
    onSelect: function(callback) {
      common.settings.onSelect = callback;
      return this;
    },
    addAction: function(character, callback) {
      if (typeof character === 'string' && typeof callback === 'function') {
        common.bind(character, callback);
      }
      return this;
    }
  };
  $.fn.npNav = function(arg) {
    if (typeof arg === 'object' || !arg) {
      return methods.init.apply(this, arguments);
    }
    if (methods[arg]) {
      return methods[arg].apply(this, Array.prototype.slice.call(arguments, 1));
    }
  };
  $(function() {
    var runExample;
    return runExample = function() {
      var $example;
      $example = $('td, #col2 a, #col2 .box').npNav();
      $example.npNav('onSelect', function(elem) {
        return $('.status').text("selected item: " + (elem.text()));
      });
      return $example.npNav('addAction', 'o', function(elem) {
        var msg;
        msg = " " + (elem.text()) + " triggered an action. \n";
        if (elem.is('a')) {
          msg += "link: " + (elem.attr('href')) + " ";
        }
        return $('.status').text(msg);
      });
    };
  });
}).call(this);
