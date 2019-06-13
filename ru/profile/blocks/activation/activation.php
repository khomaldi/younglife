<?php
require_once($_SERVER['DOCUMENT_ROOT'] . 'ru/profile/core/sql.php');

function show_answer($answer)
{
  echo $answer;
}

if (isset($_GET['token']) && !empty($_GET['token']))
{
  $token = $_GET['token'];
}
else
{
  $answer = "  <h1 class=\"activation__h1-wrong\">Ошибка!</h1>\n      <br>\n      <p class=\"p\">Отсутствует проверочный код</p>\n      <br>\n      <a class=\"submit\" href=\"https://younglife.ge/pages/contact.php\">Написать в поддержку</a>";
}

if (isset($_GET['email']) && !empty($_GET['email']))
{
  $email = $_GET['email'];

  $user = R::findOne('users', 'email = ?', array($email));

  if ($user)
  {
    if ($user->activation == 1)
    {
      $answer = "  <h1 class=\"activation__h1-wrong\">Внимание!</h1>\n      <br>\n      <p class=\"p\">Профиль уже активирован</p>\n      <br>\n      <a class=\"activation__submit\" href=\"https://younglife.ge/pages/contact.php\">Написать в поддержку</a>";
    }
    elseif ($token != '' && $email != '')
    {
      $user = R::findOne('users', 'email = ?', array($email));

      if ($user)
      {
        if ($user->token == $token)
        {
          $user->activation = 1;
          R::store($user);

          $answer = "  <h1 class=\"activation__h1\">Поздравляем!</h1>\n      <br>\n      <p class=\"p\">Профиль успешно активирован</p>\n      <br>\n      <a class=\"activation__submit\" href=\"https://younglife.ge/ru/profile/profile.php\">Перейти в личный кабинет</a>";
        }
        else
        {
          $answer = "  <h1 class=\"activation__h1-wrong\">Ошибка!</h1>\n      <br>\n      <p class=\"p\">Проверочный код является недействительным</p>\n      <br>\n      <a class=\"activation__submit\" href=\"https://younglife.ge/ru/pages/contact.php\">Написать в поддержку</a>";
        }
      }
      else
      {
        $answer = "  <h1 class=\"activation__h1-wrong\">Ошибка!</h1>\n      <br>\n      <p class=\"p\">Пользователь не найден</p>\n      <br>\n      <a class=\"activation__submit\" href=\"https://younglife.ge/ru/pages/contact.php\">Написать в поддержку</a>";

      }
    }
  }
  else
  {
    $answer = "  <h1 class=\"activation__h1-wrong\">Ошибка!</h1>\n      <br>\n      <p class=\"p\">Пользователь не найден</p>\n      <br>\n      <a class=\"activation__submit\" href=\"https://younglife.ge/ru/pages/contact.php\">Написать в поддержку</a>";
  }
}
else
{
  $answer = "  <h1 class=\"activation__h1-wrong\">Ошибка!</h1>\n      <br>\n      <p class=\"p\">Отсутствует адрес электронной почты</p>\n      <br>\n      <a class=\"activation__submit\" href=\"https://younglife.ge/ru/pages/contact.php\">Написать в поддержку</a>";
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <!-- Website title -->
    <title>Активация</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

  <?php
  //Try to include <includes-head.html>
  try {
    if (!@include_once($_SERVER['DOCUMENT_ROOT'] . 'includes/includes-head.html')) {
      throw new Exception('Can\'t open file &lt;includes-head.html&gt;');
    }
  } catch (Exception $e) {
    echo $e->getMessage();
  }
  ?>
</head>
<body>
<?php
//Try to include <includes-before-content.php>
try {
  if (!@include_once($_SERVER['DOCUMENT_ROOT'] . 'ru/includes/includes-before-content.php')) {
    throw new Exception('Can\'t open file &lt;includes-before-content&gt;');
  }
} catch (Exception $e) {
  echo $e->getMessage();
}
?>
<div style="text-align: center">
  <?php show_answer($answer); ?>
</div>
<?php
//Try to include <includes-after-content.php>
try {
  if (!@include_once($_SERVER['DOCUMENT_ROOT'] . 'ru/includes/includes-after-content.php')) {
    throw new Exception('Can\'t open file &lt;includes-after-content&gt;');
  }
} catch (Exception $e) {
  echo $e->getMessage();
}
?>
</body>
</html>