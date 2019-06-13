/* Функция, создающая экземпляр XMLHTTP */
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
    if (!xmlhttp && typeof XMLHttpRequest!='undefined') {
        xmlhttp = new XMLHttpRequest();
    }
    return xmlhttp;
}

function login() {
    var login = $('.form__login').val();
    var password = $('.form__password').val();

    /*Создаём объект XMLHTTP*/
    var xmlhttp = getXmlHttp();
    /*Открываем асинхронное соединение*/
    xmlhttp.open('POST', 'https://younglife.ge/ru/profile/blocks/login/functions/login_check.php', true);
    /*Отправляем тип содержимого*/
    xmlhttp.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    /*Отправляем POST-запрос*/
    xmlhttp.send('login=' + encodeURIComponent(login) + '&' + 'password=' + encodeURIComponent(password));
    /*Ждём ответа от сервера*/
    xmlhttp.onreadystatechange = function() {
        /*Ответ пришёл*/
        if (xmlhttp.readyState == 4) {
            /*Сервер вернул код 200 (что хорошо)*/
            if(xmlhttp.status == 200) {
                if (xmlhttp.responseText) {
                    /*Ошибка*/
                    $('.login__form_wrong').css('display', 'block');
                } else {
                    /*Успешно*/
                    self.location='https://younglife.ge/ru/profile/profile.php';
                }
            }
        }
    };
}