<?php
use PHPMailer\PHPMailer\PHPMailer;

// Файлы phpmailer
require($_SERVER['DOCUMENT_ROOT'] . '/core/mail/PHPMailer.php');
require($_SERVER['DOCUMENT_ROOT'] . '/core/mail/SMTP.php');

// Настройки
$mail = new PHPMailer(true);

if (isset($_POST['form-submit']) && !empty($_POST['form-submit'])) {
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

    $form_name = htmlentities($_POST['form-name']);
    $form_email = htmlentities($_POST['form-email']);
    $form_subject = htmlentities($_POST['form-subject']);
    $form_textarea = htmlentities($_POST['form-textarea']);
    
         // Письмо
    $mail->isHTML(true);
    $mail->Subject = 'Сообщение с сайта';// Заголовок письма
    $mail->Body = "Здравствуйте! <br>
         Было отправлено письмо с сайта Young Life <br>
         <b>Имя отправителя</b>: $form_name <br>
         <b>E-mail</b>: $form_email <br>
         <b>Тема</b>: $form_subject <br>
         <b>Текст сообщения</b>: $form_textarea";

        // Результат
    $mail->send();
    echo 'Message has been sent';
  } catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
  }
}
?>
