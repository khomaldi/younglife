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