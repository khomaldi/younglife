<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/core/main.php');
?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <!-- Title -->
  <title>Young Life Грузия</title>
  <link rel="alternate" hreflang="ru" href="https://younglife.ge/ru" />
  <link rel="alternate" hreflang="ka" href="https://younglife.ge" />

  <!-- Meta -->
  <meta charset="utf-8">
  <meta name="keywords" content="Главная, YoungLife, young, life, georgia, Грузия, янг, лайф, янглайф, официальный, сайт">
  <meta name="description" content="«Young Life» &mdash; это организационное название группы взрослых из различных слоёв общества, объединенных одной целью: улучшить жизнь подростков. Мы помогаем молодёжи раскрывать и развивать свои таланты, учим их с уверенностью смотреть в лицо всем вызовам, которые бросает нам жизнь, справляться с давлением, возвышаться над разочарованиями и враждебностью, добиваться реалистичных целей и относиться к себе и окружающим с уважением.">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta property="og:title" content="Young Life Грузия">
  <meta property="og:image" content="https://younglife.ge/images/og_logo.jpg">

<?php
//Try to include <includes-head.html>
try {
  if (!@include_once($rootFolder . 'includes/includes-head.html')) {
    throw new Exception('Can\'t open file &lt;includes-header.html&gt;');
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
//Try to include <map.html>
try {
  if (!@include_once($rootFolder . 'ru/blocks/map/map.html')) {
    throw new Exception('Can\'t open file &lt;map.html&gt;');
  }
} catch (Exception $e) {
  echo $e->getMessage();
}
?>
<?php
//Try to inclide <banners.html>
try {
  if (!@include_once($rootFolder . 'ru/blocks/banners/banners.html')) {
    throw new Exception('Can\'t open file &lt;banners.htmlgt;');
  }
 } catch (Exception $e) {
    echo $e->getMessage();
}
?>
<?php
//Try to inclide <about.html>
try {
  if (!@include_once($rootFolder . 'ru/blocks/about/about.html')) {
    throw new Exception('Can\'t open file &lt;about.htmlgt;');
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

