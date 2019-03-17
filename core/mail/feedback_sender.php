<?php
use PHPMailer\PHPMailer\PHPMailer;

// Файлы phpmailer
require($_SERVER['DOCUMENT_ROOT'] . '/core/mail/PHPMailer.php');
require($_SERVER['DOCUMENT_ROOT'] . '/core/mail/SMTP.php');

// Настройки
$mail = new PHPMailer(true);

if (isset($_POST['send']) && $_POST['phone'] == '') {
  try {
        //Server settings
    $mail->SMTPDebug = 0;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'ssl://smtp.yandex.ru';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'username';                 // SMTP username
    $mail->Password = 'password';                           // SMTP password
    $mail->SMTPSecure = 'ssl';                            // Enable ssl encryption, `TSL` also accepted
    $mail->Port = 465;                                    // TCP port to connect to

    $mail->SetFrom('no-reply@younglife.ge'); // Ваш Email
    $mail->addAddress('admin@younglife.ge'); // Email получателя

    $form_name = htmlentities($_POST['name']);
    $form_email = htmlentities($_POST['email']);
    $form_subject = htmlentities($_POST['subject']);
    $form_message = htmlentities($_POST['message']);
    
         // Письмо
    $mail->isHTML(true);
    $mail->Subject = 'Сообщение с сайта';// Заголовок письма
    $mail->Body = "<!DOCTYPE html>
    <html>
    <head>
      <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">
      <title>Young Life Обратная связь</title>
    
      <style type=\"text/css\">
        body,
        p {
          margin: 0;
          padding: 0;
        }

        img {
          display: block;
        }
    
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
          margin: 0 0 0.8em 0;
        }
    
        h3 {
          font-size: 24px;
          color: #ff5a00 !important;
          font-family: Arial, Helvetica, sans-serif;
        }
    
        p {
          font-size: 14px;
          color: #333 !important;
          font-family: \"Lucida Grande\", \"Lucida Sans\", \"Lucida Sans Unicode\", sans-serif;
          line-height: 1.5;
        }
      </style>
    </head>
    <body>
      <table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" bgcolor=\"ffffff\">
        <tr>
          <td>
            <table width=\"600\" align=\"center\" cellpadding=\"0\" cellspacing=\"15\" bgcolor=\"ffffff\">
              <tr>
                <td>
                  <table cellpadding=\"10\" cellspacing=\"0\" align=\"center\" bgcolor=\"2d86c5\">
                    <tr>
                      <td width=\"570\" height=\"38\" align=\"center\"><a href=\"https://younglife.ge/\" target=\"_blank\"><img src=\"https://younglife.ge/images/logo/logo_header_195x38.png\"></a></td>
                    </tr>
                  </table>
                </td>
              </tr>
              <tr>
                <td></td>
              </tr>
              <tr>
                <td>
                  <table cellpadding=\"0\" cellspacing=\"0\" align=\"center\">
                    <tr>
                      <td width=\"570\" align=\"center\" valign=\"top\" colspan=\"3\">
                        <h3>Отправлено письмо с сайта</h3>
                      </td>
                    </tr>
                  </table>
                </td>
              </tr>
              <tr>
                <td>
                  <table cellpadding=\"0\" cellspacing=\"0\" align=\"center\">
                    <tr>
                      <td width=\"570\">
                        <p>Имя: $form_name</p>
                        <p>E-mail: $form_email</p>
                        <p>Тема: $form_subject</p>
                        <p>Текст письма: $form_message</p>
                      </td>
                    </tr>
                  </table>
                </td>
              </tr>
            </table>
            <table cellpadding=\"20\" cellspacing=\"0\" width=\200\" align=\"center\">
              <tr>
                <td align=\"center\">
                  <a href=\"https://www.facebook.com/younglifege\" title=\Facebook\" target=\"_blank\"><img width=\"42\" height=\"42\"
                      src=\"https://younglife.ge/images/logo/facebook.png\" alt=\"Facebook\"></a>
                </td>
                <td align=\"center\"><a href=\"https://www.instagram.com/younglifege/\" title=\"Instagram\" target=\"_blank\"><img width=\"42\" height=\"42\"
                      src=\"https://younglife.ge/images/logo/instagram.png\" alt=\"Instagram\"></a></td>
                <td align=\"center\"><a href=\"https://github.com/khomaldi/younglife\" title=\"GitHub\" target=\"_blank\"><img width=\"42\" height=\"42\"
                      src=\"https://younglife.ge/images/logo/github.png\" alt=\"GitHub\" style=\"border-radius: 7px;\"></a></td>
              </tr>
            </table>
          </td>
        </tr>
      </table>
    </body>
    </html>";

        // Результат
    $mail->send();
  } catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
  }
} else {
  echo 'Message could not be sent.';
}
?>
