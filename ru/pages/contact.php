<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/core/main.php');

//Try to include <mail-sender.php>
try {
  if (!include_once($rootFolder . 'core/mail/mail-sender.php')) {
    throw new Exception('Can\'t open file &lt;mail-sender.php&gt;');
  }
} catch (Exception $e) {
  echo $e->getMessage();
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <!-- Title -->
  <title>Контакты</title>
  <link rel="alternate" hreflang="ru" href="https://younglife.ge/ru/pages/contact.php" />
  <link rel="alternate" hreflang="ka" href="https://younglife.ge/pages/contact.php" />

  <!-- Meta -->
  <meta charset="utf-8">
  <meta name="keywords" content="Контакты, Написать, Связаться, YoungLife, young, life, georgia, Грузиия, янг, лайф, янглайф, официальный, сайт">
  <meta name="description" content="Связаться с Young Life Грузия. mail@younglife.ge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta property="og:title" content="Young Life Контакты">
  <meta property="og:image" content="https://younglife.ge/images/og_logo.jpg">

<?php
//Try to include <includes-head.tpl>
try {
  if (!@include_once($rootFolder . 'includes/includes-head.tpl')) {
    throw new Exception('Can\'t open file &lt;includes-head.tpl&gt;');
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
  if (!@include_once($rootFolder . 'ru/includes/includes-before-content.php')) {
    throw new Exception('Can\'t open file &lt;includes-before-content&gt;');
  }
} catch (Exception $e) {
  echo $e->getMessage();
}
?>
<?php
//Try to inclide <contact.tpl>
try {
  if (!@include_once($rootFolder . 'ru/blocks/contact/contact.tpl')) {
    throw new Exception('Can\'t open file &lt;contact.tplgt;');
  }
 } catch (Exception $e) {
    echo $e->getMessage();
}
?>
<?php
//Try to include <includes-after-content.php>
try {
  if (!@include_once($rootFolder . 'ru/includes/includes-after-content.php')) {
    throw new Exception('Can\'t open file &lt;includes-after-content&gt;');
  }
} catch (Exception $e) {
  echo $e->getMessage();
}
?>
</body>
</html>
