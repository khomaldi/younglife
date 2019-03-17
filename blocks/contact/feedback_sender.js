$(document).ready(function(event) {
  $('form').submit(function(event){
  event.preventDefault();
  feedback_sender();
  });
 });

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

function check_phone() {
  if ($('.phone').val() != "") {
    return false;
  } else {
    return true;
  }
}

function feedback_sender() {
  if (check_phone()) {
    send = 'true';
    name = $('.form__name').val();
    email = $('.form__email').val();
    subject = $('.form__subject').val();
    message = $('.form__textarea').val();
    phone = $('.phone').val();

    /* Создаём объект XMLHTTP */
    var xmlhttp = getXmlHttp();
    /* Открываем асинхронное соединение */
    xmlhttp.open('POST', 'https://younglife/core/mail/feedback_sender.php', true);
    /* Отправляем тип содержимого */
    xmlhttp.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    /* Отправляем POST-запрос */
    xmlhttp.send('send=' + encodeURIComponent(send) + '&' + 'name=' + encodeURIComponent(name) + '&' + 'email=' + encodeURIComponent(email) + '&' + 'subject=' + encodeURIComponent(subject) + '&' + 'message=' + encodeURIComponent(message) + '&' + 'phone=' + encodeURIComponent(phone));
    xmlhttp.onreadystatechange = function () {
      /* Ответ пришёл */
      if (xmlhttp.readyState == 4) {
        /* Сервер вернул код 200 (что хорошо) */
        if (xmlhttp.status == 200) {
          if (xmlhttp.responseText) {
            /* Wrong */
            $('.info__message_wrong').css('display', 'block');
            setTimeout(function () {
              $('.contact__info').show('slow');
              setTimeout(function () {
                $('.contact__info').hide('slow');
                setTimeout(function () {
                  $('.info__message_wrong').css('display', 'none');
                }, 1000);
              }, 5000);
            }, 0);
          } else {
            /* Success */
            $('.info__message_success').css('display', 'block');
            setTimeout(function () {
              $('.contact__info').show('slow');
              setTimeout(function () {
                $('.contact__info').hide('slow');
                setTimeout(function () {
                  $('.info__message_success').css('display', 'none');
                  $('.form__name').val('');
                  $('.form__email').val('');
                  $('.form__subject').val('');
                  $('.form__textarea').val('');
                }, 1000);
              }, 5000);
            }, 0);

          }
        }
      }
    }
  }
}
