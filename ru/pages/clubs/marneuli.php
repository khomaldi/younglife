<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/core/main.php');
?>
<!DOCTYPE html>
<html lang="ru">

<head>
  <!-- Title -->
  <title>Марнеули</title>

  <!-- Meta -->
  <meta charset="utf-8">
  <meta name="keywords" content="Марнеули, Marneuli, YoungLife, young, life, younglife, georgia, Грузия, янг, лайф, янглайф, официальный, сайт">
  <meta name="description"
    content="Young Life клуб в Марнеули. Марнеульский клуб. Адрес: ул. Михаила Джавахишвили, перулок 4, дом 5. Время: Воскресенье 16:00. Контакты: +995-551-960-616">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta property="og:title" content="Young Life Марнеули" />
  <meta property="og:image" content="https://younglife.ge/images/og_logo.jpg" />

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
//Try to inclide <marneuli.tpl>
try {
  if (!@include_once($rootFolder . 'ru/blocks/clubs/marneuli/marneuli.tpl')) {
    throw new Exception('Can\'t open file &lt;marneuli.tplgt;');
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
