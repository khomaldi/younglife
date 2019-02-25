<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/core/main.php');
?>
<!DOCTYPE html>
<html lang="ru">

<head>
  <!-- Title -->
  <title>Рустави</title>
  <link rel="alternate" hreflang="ru" href="https://younglife.ge/ru/pages/clubs/rustavi.php" />
  <link rel="alternate" hreflang="ka" href="https://younglife.ge/pages/clubs/rustavi.php" />

  <!-- Meta -->
  <meta charset="utf-8">
  <meta name="keywords" content="Рустави, Rustavi, YoungLife, young, life, georgia, Грузия, янг, лайф, янглайф, официальный, сайт">
  <meta name="description"
    content="Young Life клуб в Рустави. Руставский клуб. Адрес: 2-ой проход Месхишвили около 8-го корпуса. Время: Понедельник 17:00. Контакты: +995-598-36-96-97">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta property="og:title" content="Young Life Рустави" />
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
//Try to inclide <rustavi.tpl>
try {
  if (!@include_once($rootFolder . 'ru/blocks/clubs/rustavi/rustavi.tpl')) {
    throw new Exception('Can\'t open file &lt;rustavi.tplgt;');
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

