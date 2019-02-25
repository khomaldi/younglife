/*! ResponsiveSlides.js v1.55
 * http://responsiveslides.com
 * http://viljamis.com
 *
 * Copyright (c) 2011-2012 @viljamis
 * Available under the MIT license
 */

/*jslint browser: true, sloppy: true, vars: true, plusplus: true, indent: 2 */

(function ($, window, i) {
  $.fn.responsiveSlides = function (options) {

    // Default settings
    var settings = $.extend({
      "auto": true,             // Boolean: Animate automatically, true or false
      "speed": 500,             // Integer: Speed of the transition, in milliseconds
      "timeout": 4000,          // Integer: Time between slide transitions, in milliseconds
      "pager": false,           // Boolean: Show pager, true or false
      "nav": false,             // Boolean: Show navigation, true or false
      "random": false,          // Boolean: Randomize the order of the slides, true or false
      "pause": false,           // Boolean: Pause on hover, true or false
      "pauseControls": true,    // Boolean: Pause when hovering controls, true or false
      "prevText": "Previous",   // String: Text for the "previous" button
      "nextText": "Next",       // String: Text for the "next" button
      "maxwidth": "",           // Integer: Max-width of the slideshow, in pixels
      "navContainer": "",       // Selector: Where auto generated controls should be appended to, default is after the <ul>
      "manualControls": "",     // Selector: Declare custom pager navigation
      "namespace": "slider__list",   // String: change the default namespace used
      "before": $.noop,         // Function: Before callback
      "after": $.noop           // Function: After callback
    }, options);

    return this.each(function () {

      // Index for namespacing
      i++;

      var $this = $(this),

        // Local variables
        vendor,
        selectTab,
        startCycle,
        restartCycle,
        rotate,
        $tabs,

        // Helpers
        index = 0,
        $slide = $this.children(),
        length = $slide.length,
        fadeTime = parseFloat(settings.speed),
        waitTime = parseFloat(settings.timeout),
        maxw = parseFloat(settings.maxwidth),

        // Namespacing
        namespace = settings.namespace,
        namespaceIdx = namespace + i,

        // Classes
        navClass = namespace + "_nav " + namespaceIdx + "_nav",
        activeClass = namespace + "_here",
        visibleClass = namespaceIdx + "_on",
        slideClassPrefix = namespaceIdx + "_s",

        // Pager
        $pager = $("<ul class='" + namespace + "_tabs " + namespaceIdx + "_tabs' />"),

        // Styles for visible and hidden slides
        visible = { "float": "left", "position": "relative", "opacity": 1, "zIndex": 2 },
        hidden = { "float": "none", "position": "absolute", "opacity": 0, "zIndex": 1 },

        // Detect transition support
        supportsTransitions = (function () {
          var docBody = document.body || document.documentElement;
          var styles = docBody.style;
          var prop = "transition";
          if (typeof styles[prop] === "string") {
            return true;
          }
          // Tests for vendor specific prop
          vendor = ["Moz", "Webkit", "Khtml", "O", "ms"];
          prop = prop.charAt(0).toUpperCase() + prop.substr(1);
          var i;
          for (i = 0; i < vendor.length; i++) {
            if (typeof styles[vendor[i] + prop] === "string") {
              return true;
            }
          }
          return false;
        })(),

        // Fading animation
        slideTo = function (idx) {
          settings.before(idx);
          // If CSS3 transitions are supported
          if (supportsTransitions) {
            $slide
              .removeClass(visibleClass)
              .css(hidden)
              .eq(idx)
              .addClass(visibleClass)
              .css(visible);
            index = idx;
            setTimeout(function () {
              settings.after(idx);
            }, fadeTime);
            // If not, use jQuery fallback
          } else {
            $slide
              .stop()
              .fadeOut(fadeTime, function () {
                $(this)
                  .removeClass(visibleClass)
                  .css(hidden)
                  .css("opacity", 1);
              })
              .eq(idx)
              .fadeIn(fadeTime, function () {
                $(this)
                  .addClass(visibleClass)
                  .css(visible);
                settings.after(idx);
                index = idx;
              });
          }
        };

      // Random order
      if (settings.random) {
        $slide.sort(function () {
          return (Math.round(Math.random()) - 0.5);
        });
        $this
          .empty()
          .append($slide);
      }

      // Add ID's to each slide
      $slide.each(function (i) {
        this.id = slideClassPrefix + i;
      });

      // Add max-width and classes
      $this.addClass(namespace + " " + namespaceIdx);
      if (options && options.maxwidth) {
        $this.css("max-width", maxw);
      }

      // Hide all slides, then show first one
      $slide
        .hide()
        .css(hidden)
        .eq(0)
        .addClass(visibleClass)
        .css(visible)
        .show();

      // CSS transitions
      if (supportsTransitions) {
        $slide
          .show()
          .css({
            // -ms prefix isn't needed as IE10 uses prefix free version
            "-webkit-transition": "opacity " + fadeTime + "ms ease-in-out",
            "-moz-transition": "opacity " + fadeTime + "ms ease-in-out",
            "-o-transition": "opacity " + fadeTime + "ms ease-in-out",
            "transition": "opacity " + fadeTime + "ms ease-in-out"
          });
      }

      // Only run if there's more than one slide
      if ($slide.length > 1) {

        // Make sure the timeout is at least 100ms longer than the fade
        if (waitTime < fadeTime + 100) {
          return;
        }

        // Pager
        if (settings.pager && !settings.manualControls) {
          var tabMarkup = [];
          $slide.each(function (i) {
            var n = i + 1;
            tabMarkup +=
              "<li>" +
              "<a href='#' class='" + slideClassPrefix + n + "'>" + n + "</a>" +
              "</li>";
          });
          $pager.append(tabMarkup);

          // Inject pager
          if (options.navContainer) {
            $(settings.navContainer).append($pager);
          } else {
            $this.after($pager);
          }
        }

        // Manual pager controls
        if (settings.manualControls) {
          $pager = $(settings.manualControls);
          $pager.addClass(namespace + "_tabs " + namespaceIdx + "_tabs");
        }

        // Add pager slide class prefixes
        if (settings.pager || settings.manualControls) {
          $pager.find('li').each(function (i) {
            $(this).addClass(slideClassPrefix + (i + 1));
          });
        }

        // If we have a pager, we need to set up the selectTab function
        if (settings.pager || settings.manualControls) {
          $tabs = $pager.find('a');

          // Select pager item
          selectTab = function (idx) {
            $tabs
              .closest("li")
              .removeClass(activeClass)
              .eq(idx)
              .addClass(activeClass);
          };
        }

        // Auto cycle
        if (settings.auto) {

          startCycle = function () {
            rotate = setInterval(function () {

              // Clear the event queue
              $slide.stop(true, true);

              var idx = index + 1 < length ? index + 1 : 0;

              // Remove active state and set new if pager is set
              if (settings.pager || settings.manualControls) {
                selectTab(idx);
              }

              slideTo(idx);
            }, waitTime);
          };

          // Init cycle
          startCycle();
        }

        // Restarting cycle
        restartCycle = function () {
          if (settings.auto) {
            // Stop
            clearInterval(rotate);
            // Restart
            startCycle();
          }
        };

        // Pause on hover
        if (settings.pause) {
          $this.hover(function () {
            clearInterval(rotate);
          }, function () {
            restartCycle();
          });
        }

        // Pager click event handler
        if (settings.pager || settings.manualControls) {
          $tabs.bind("click", function (e) {
            e.preventDefault();

            if (!settings.pauseControls) {
              restartCycle();
            }

            // Get index of clicked tab
            var idx = $tabs.index(this);

            // Break if element is already active or currently animated
            if (index === idx || $("." + visibleClass).queue('fx').length) {
              return;
            }

            // Remove active state from old tab and set new one
            selectTab(idx);

            // Do the animation
            slideTo(idx);
          })
            .eq(0)
            .closest("li")
            .addClass(activeClass);

          // Pause when hovering pager
          if (settings.pauseControls) {
            $tabs.hover(function () {
              clearInterval(rotate);
            }, function () {
              restartCycle();
            });
          }
        }

        // Navigation
        if (settings.nav) {
          var navMarkup =
            "<a href='#' class='" + navClass + " prev'>" + settings.prevText + "</a>" +
            "<a href='#' class='" + navClass + " next'>" + settings.nextText + "</a>";

          // Inject navigation
          if (options.navContainer) {
            $(settings.navContainer).append(navMarkup);
          } else {
            $this.after(navMarkup);
          }

          var $trigger = $("." + namespaceIdx + "_nav"),
            $prev = $trigger.filter(".prev");

          // Click event handler
          $trigger.bind("click", function (e) {
            e.preventDefault();

            var $visibleClass = $("." + visibleClass);

            // Prevent clicking if currently animated
            if ($visibleClass.queue('fx').length) {
              return;
            }

            //  Adds active class during slide animation
            //  $(this)
            //    .addClass(namespace + "_active")
            //    .delay(fadeTime)
            //    .queue(function (next) {
            //      $(this).removeClass(namespace + "_active");
            //      next();
            //  });

            // Determine where to slide
            var idx = $slide.index($visibleClass),
              prevIdx = idx - 1,
              nextIdx = idx + 1 < length ? index + 1 : 0;

            // Go to slide
            slideTo($(this)[0] === $prev[0] ? prevIdx : nextIdx);
            if (settings.pager || settings.manualControls) {
              selectTab($(this)[0] === $prev[0] ? prevIdx : nextIdx);
            }

            if (!settings.pauseControls) {
              restartCycle();
            }
          });

          // Pause when hovering navigation
          if (settings.pauseControls) {
            $trigger.hover(function () {
              clearInterval(rotate);
            }, function () {
              restartCycle();
            });
          }
        }

      }

      // Max-width fallback
      if (typeof document.body.style.maxWidth === "undefined" && options.maxwidth) {
        var widthSupport = function () {
          $this.css("width", "100%");
          if ($this.width() > maxw) {
            $this.css("width", maxw);
          }
        };

        // Init fallback
        widthSupport();
        $(window).bind("resize", function () {
          widthSupport();
        });
      }

    });

  };
})(jQuery, this, 0);

jQuery(document).ready(function ($) {
  $(".slider__list").responsiveSlides({
    auto: false,
    pager: true,
    nav: true,
    speed: 500,
    namespace: "slider__list"
  });
});
/* ResponsiveSlides.js (end) */

/*! Image Map Resizer
 *  Desc: Resize HTML imageMap to scaled image.
 *  Copyright: (c) 2014-15 David J. Bradshaw - dave@bradshaw.net
 *  License: MIT
 */

(function () {
  'use strict';

  function scaleImageMap() {

    function resizeMap() {
      function resizeAreaTag(cachedAreaCoords, idx) {
        function scale(coord) {
          var dimension = (1 === (isWidth = 1 - isWidth) ? 'width' : 'height');
          return padding[dimension] + Math.floor(Number(coord) * scalingFactor[dimension]);
        }

        var isWidth = 0;
        areas[idx].coords = cachedAreaCoords.split(',').map(scale).join(',');
      }

      var scalingFactor = {
        width: image.width / image.naturalWidth,
        height: image.height / image.naturalHeight
      };

      var padding = {
        width: parseInt(window.getComputedStyle(image, null).getPropertyValue('padding-left'), 10),
        height: parseInt(window.getComputedStyle(image, null).getPropertyValue('padding-top'), 10)
      };

      cachedAreaCoordsArray.forEach(resizeAreaTag);
    }

    function getCoords(e) {
      //Normalize coord-string to csv format without any space chars
      return e.coords.replace(/ *, */g, ',').replace(/ +/g, ',');
    }

    function debounce() {
      clearTimeout(timer);
      timer = setTimeout(resizeMap, 250);
    }

    function start() {
      if ((image.width !== image.naturalWidth) || (image.height !== image.naturalHeight)) {
        resizeMap();
      }
    }

    function addEventListeners() {
      image.addEventListener('load', resizeMap, false); //Detect late image loads in IE11
      window.addEventListener('focus', resizeMap, false); //Cope with window being resized whilst on another tab
      window.addEventListener('resize', debounce, false);
      window.addEventListener('readystatechange', resizeMap, false);
      document.addEventListener('fullscreenchange', resizeMap, false);
    }

    function beenHere() {
      return ('function' === typeof map._resize);
    }

    function getImg(name) {
      return document.querySelector('img[usemap="' + name + '"]');
    }

    function setup() {
      areas = map.getElementsByTagName('area');
      cachedAreaCoordsArray = Array.prototype.map.call(areas, getCoords);
      image = getImg('#' + map.name) || getImg(map.name);
      map._resize = resizeMap; //Bind resize method to HTML map element
    }

    var
      /*jshint validthis:true */
      map = this,
      areas = null, cachedAreaCoordsArray = null, image = null, timer = null;

    if (!beenHere()) {
      setup();
      addEventListeners();
      start();
    } else {
      map._resize(); //Already setup, so just resize map
    }
  }

  function factory() {
    function chkMap(element) {
      if (!element.tagName) {
        throw new TypeError('Object is not a valid DOM element');
      } else if ('MAP' !== element.tagName.toUpperCase()) {
        throw new TypeError('Expected <MAP> tag, found <' + element.tagName + '>.');
      }
    }

    function init(element) {
      if (element) {
        chkMap(element);
        scaleImageMap.call(element);
        maps.push(element);
      }
    }

    var maps;

    return function imageMapResizeF(target) {
      maps = [];  // Only return maps from this call

      switch (typeof (target)) {
        case 'undefined':
        case 'string':
          Array.prototype.forEach.call(document.querySelectorAll(target || 'map'), init);
          break;
        case 'object':
          init(target);
          break;
        default:
          throw new TypeError('Unexpected data type (' + typeof target + ').');
      }

      return maps;
    };
  }


  if (typeof define === 'function' && define.amd) {
    define([], factory);
  } else if (typeof module === 'object' && typeof module.exports === 'object') {
    module.exports = factory(); //Node for browserfy
  } else {
    window.imageMapResize = factory();
  }


  if ('jQuery' in window) {
    jQuery.fn.imageMapResize = function $imageMapResizeF() {
      return this.filter('map').each(scaleImageMap).end();
    };
  }

})();
/* Image Map Resizer (end) */

/* Map on index.php */
jQuery(document).ready(function ($) {
  $("#Tbilisi").mousemove(function (pos) {
    $(".map__tbilisi").show();
    $(".map__tbilisi").css('left', (pos.pageX + 20) + 'px').css('top', (pos.pageY + 20) + 'px');
  }
  ).mouseleave(function () {
    $(".map__tbilisi").hide();
  });

  $("#Rustavi").mousemove(function (pos) {
    $(".map__rustavi").show();
    $(".map__rustavi").css('left', (pos.pageX + 20) + 'px').css('top', (pos.pageY + 20) + 'px');
  }
  ).mouseleave(function () {
    $(".map__rustavi").hide();
  });

  $("#Marneuli").mousemove(function (pos) {
    $(".map__marneuli").show();
    $(".map__marneuli").css('left', (pos.pageX + 20) + 'px').css('top', (pos.pageY + 20) + 'px');
  }
  ).mouseleave(function () {
    $(".map__marneuli").hide();
  });
});

jQuery(document).ready(function ($) {
  $('map').imageMapResize();
});
/* Map on index.php (end) */

/* Changing visibility of .languages */
$(document).ready(function () {
  var width = $(window).width();

  if (width <= 360) {
    languages = $('.languages').detach();
    $('.navigation').append(languages);
  }
});

$(function () {
  var width = $(window).width();
  pull = $('.header__toggle');
  menu = $('.navigation__menu');
  languages = $('.languages');
  menuHeight = menu.height();

  $(pull).on('click', function (e) {
    e.preventDefault();
    menu.slideToggle();
    menu.css('display', 'flex');
    if (languages.is(':hidden')) {
      languages.css('display', 'block');
    } else {
      languages.css('display', 'none');
    }
  });

  $(window).resize(function () {
    if (width > 320 && menu.is(':hidden')) {
      menu.removeAttr('style');
    }

    if (width > 360) {
      languages = $('.languages').detach();
      $('.header__toggle').before(languages);
      $('.languages').css('display', 'block');
    }
  });
});
/* Changing visibility of .languages (end) */

/* Changing size of .header-invisible-clone */
$(document).ready(function () {
  var height = $('.header').outerHeight() + 15;
  $('.header-invisible-clone').css('height', height + 'px');
});

$(window).resize(function () {
  var height = $('.header').outerHeight() + 15;
  $('.header-invisible-clone').css('height', height + 'px');
});
/* Changing size of .header-invisible-clone (end) */

/* Make image colorful by tap on WhoWeAre.php */
$(document).ready(function () {
  $('.whoweare__images').click(function () {
    $('.whoweare__images').removeClass('whoweare__images--active');
    $(this).toggleClass('whoweare__images--active');
  })
});
/* Make image colorful by tap on WhoWeAre.php (end) */
