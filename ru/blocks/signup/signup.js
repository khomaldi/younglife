/* Create XMLHTTP */
function getXmlHttp() {
  var xmlhttp;
  try {
    xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
  } catch (e) {
    try {
      xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    } catch (E) {
      xmlhttp = false;
    }
  }
  if (!xmlhttp && typeof XMLHttpRequest != 'undefined') {
    xmlhttp = new XMLHttpRequest();
  }
  return xmlhttp;
}

/* Variables with user's data */
var form__email = $('.form__email').val();
var form__name = $('.form__name').val();
var form__surname = $('.form__surname').val();
var form__sex = $('.form__sex').val();
var form__town = $('.form__town').val();
var form__password = $('.form__password').val();

/* Registration */
function registration() {
  if (button_condition()) {
    /* Создаём объект XMLHTTP */
    var xmlhttp = getXmlHttp();
    /* Открываем асинхронное соединение */
    xmlhttp.open('POST', 'https://younglife/core/functions/signup/registration.php', true);
    /* Отправляем тип содержимого */
    xmlhttp.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    /* Отправляем POST-запрос */
    xmlhttp.send('registration=' + encodeURIComponent(true) + '&' + 'form__email=' + encodeURIComponent(form__email) + '&' + 'form__name=' + encodeURIComponent(form__name) + '&' + 'form__surname=' + encodeURIComponent(form__surname) + '&' + 'form__sex=' + encodeURIComponent(form__sex) + '&' + 'form__town=' + encodeURIComponent(form__town) + '&' + 'form__password=' + encodeURIComponent(form__password));
    xmlhttp.onreadystatechange = function () {
      /* Ответ пришёл */
      if (xmlhttp.readyState == 4) {
        /* Сервер вернул код 200 (что хорошо) */
        if (xmlhttp.status == 200) {
          if (xmlhttp.responseText) {
            /* Success */
            self.location = 'https://younglife/profile/profile.php';
          } else {
            self.location = 'https://younglife/ru/signup.php';
          }
        }
      }
    };
  } else {
    return false;
  }
}

/* Do nothing if enter pressed while form__button_disable */
$(document).ready(function () {
  $("form").keydown(function (event) {
    if (event.keyCode == 13) {
      if (button_condition()) {
        registration();
      } else {
        event.preventDefault();
        return false;
      }
    }
  });
});


/* Variables for button's condition */
var btn_email = 0;
var btn_name = 0;
var btn_surname = 0;
var btn_town = 0;
var btn_password = 0;

/* Button's condition */
function button_condition() {
  var result = btn_email + btn_name + btn_surname + btn_town + btn_password;
  var submit = $('.form__button');

  if (result == 5) {
    submit.removeClass('form__button_disable').addClass('form__button_active');
    return true;
  } else {
    submit.removeClass('form__button_active').addClass('form__button_disable');
    return false;
  }
}


/* Checking e-mail */
function check_email(email) {
  window.form__email = $('.form__email').val();
  /* True: name-_09@mail09-.ru */
  var pattern = /^[a-z0-9_-]+@[a-z0-9-]+\.([a-z]{1,6}\.)?[a-z]{2,6}$/i;

  if (form__email != '') {
    if (form__email.search(pattern) == 0) {
      /* Создаём объект XMLHTTP */
      var xmlhttp = getXmlHttp();
      /* Открываем асинхронное соединение */
      xmlhttp.open('POST', 'https://younglife/core/functions/signup/signup_check.php', true);
      /* Отправляем тип содержимого */
      xmlhttp.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
      /* Отправляем POST-запрос */
      xmlhttp.send('email=' + encodeURIComponent(email));
      xmlhttp.onreadystatechange = function () {
        /* Ответ пришёл */
        if (xmlhttp.readyState == 4) {
          /* Сервер вернул код 200 (что хорошо)*/
          if (xmlhttp.status == 200) {
            if (xmlhttp.responseText == 'success') {
              /* Success */
              $('.form__email').removeClass('form__input').removeClass('form__input_warning').addClass('form__input_success');
              window.btn_email = 1;
              button_condition();
            } else {
              /* Wrong */
              $('.form__email').removeClass('form__input').removeClass('form__input_success').addClass('form__input_warning');
              window.btn_email = 0;
              button_condition();
            }
          }
        }
      };
    } else {
      /* False */
      $('.form__email').removeClass('form__input').removeClass('form__input_success').addClass('form__input_warning');
      window.btn_email = 0;
      button_condition();
    }
  } else {
    /* Input if empty */
    $('.form__email').removeClass('form__input_success').addClass('form__input_warning');
    window.btn_email = 0;
    button_condition();
  }
}


/* Checking name */
function check_name(name) {
  window.form__name = $('.form__name').val();
  var pattern = /^([А-ЯЁ][а-яё]*(?:-[А-ЯЁа-яё]+)*(?:-[А-ЯЁа-яё]+)?|[A-Z][a-z]*(?:-[A-Za-z]+)*(?:-[A-Za-z]+)?|[აბგდევზთიკლმნოპჟრსტუფქღყშჩცძწჭხჯჰ]*(?:-[აბგდევზთიკლმნოპჟრსტუფქღყშჩცძწჭხჯჰ]+)*(?:-[აბგდევზთიკლმნოპჟრსტუფქღყშჩცძწჭხჯჰ]+)?)$/;

  if (form__name != '') {
    if (form__name.search(pattern) == 0) {
      /* Success */
      $('.form__name').removeClass('form__input').removeClass('form__input_warning').addClass('form__input_success');
      window.btn_name = 1;
      button_condition();
    } else {
      /* Wrong */
      $('.form__name').removeClass('form__input').removeClass('form__input_success').addClass('form__input_warning');
      window.btn_name = 0;
      button_condition();
    }
  } else {
    /* Input is empty */
    $('.form__name').removeClass('form__input_success').addClass('form__input_warning');
    window.btn_name = 0;
    button_condition();
  }
}


/* Checking surname*/
function check_surname(surname) {
  window.form__surname = $('.form__surname').val();
  var pattern = /^([А-ЯЁ][а-яё]*(?:-[А-ЯЁа-яё]+)*(?:-[А-ЯЁа-яё]+)?|[A-Z][a-z]*(?:-[A-Za-z]+)*(?:-[A-Za-z]+)?|[აბგდევზთიკლმნოპჟრსტუფქღყშჩცძწჭხჯჰ]*(?:-[აბგდევზთიკლმნოპჟრსტუფქღყშჩცძწჭხჯჰ]+)*(?:-[აბგდევზთიკლმნოპჟრსტუფქღყშჩცძწჭხჯჰ]+)?)$/;

  if (form__surname != '') {
    if (form__surname.search(pattern) == 0) {
      /* Success*/
      $('.form__surname').removeClass('form__input').removeClass('form__input_warning').addClass('form__input_success');
      window.btn_surname = 1;
      button_condition();
    } else {
      /* Wrong */
      $('.form__surname').removeClass('form__input').removeClass('form__input_success').addClass('form__input_warning');
      window.btn_surname = 0;
      button_condition();
    }
  } else {
    /* Input is empty*/
    $('.form__surname').removeClass('form__input_success').addClass('form__input_warning');
    window.btn_surname = 0;
    button_condition();
  }
}

/* Update sex variable */
function check_sex(sex) {
  window.form__sex = $('.form__sex').val();
}

/* Cheking town*/
function check_town(town) {
  window.form__town = $('.form__town').val();
  var pattern = /^(([a-zA-Z]+(?:. |-| |'))*[a-zA-Z]*|([а-яЁА-ЯЁ]+(?:. |-| |'))*[а-яёА-ЯЁ]*|([აბგდევზთიკლმნოპჟრსტუფქღყშჩცძწჭხჯჰ]+(?:. |-| |'))*[აბგდევზთიკლმნოპჟრსტუფქღყშჩცძწჭხჯჰ]*)$/;

  if (form__town != '') {
    if (form__town.search(pattern) == 0) {
      /* Success */
      $('.form__town').removeClass('form__input').removeClass('form__input_warning').addClass('form__input_success');
      window.btn_town = 1;
      button_condition();
    } else {
      /* Wrong */
      $('.form__town').removeClass('form__input').removeClass('form__input_success').addClass('form__input_warning');
      window.btn_town = 0;
      button_condition();
    }
  } else {
    /* Input is empty */
    $('.form__town').removeClass('form__input_success').addClass('form__input_warning');
    window.btn_town = 0;
    button_condition();
  }
}


/* Checking password*/
function check_password(password) {
  window.form__password = $('.form__password').val();
  /* I know. It's okay. */
  window.form__sex = $('.form__sex').val();
  var pattern = /^[\S]{8,72}$/;

  if (form__password != '') {
    if (form__password.search(pattern) == 0) {
      /* Success */
      $('.form__password').removeClass('form__input').removeClass('form__input_warning').addClass('form__input_success');
      window.btn_password = 1;
      button_condition();
    } else {
      /* Wrong */
      $('.form__password').removeClass('form__input').removeClass('form__input_success').addClass('form__input_warning');
      window.btn_password = 0;
      button_condition();
    }
  } else {
    /* Input is epmty*/
    $('.form__password').removeClass('form__input_success').addClass('form__input_warning');
    window.btn_password = 0;
    button_condition();
  }
}
