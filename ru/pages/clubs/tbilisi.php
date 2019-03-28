<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/core/main.php');
?>
<!DOCTYPE html>
<html lang="ru">

<head>
  <!-- Title -->
  <title>Тбилиси</title>
  <link rel="alternate" hreflang="ru" href="https://younglife.ge/ru/pages/clubs/tbilisi.php" />
  <link rel="alternate" hreflang="ka" href="https://younglife.ge/pages/clubs/tbilisi.php" />

   <!-- Meta -->
   <meta charset="utf-8">
  <meta name="keywords" content="Тбилиси, Rbilisi, YoungLife, young, life, georgia, Грузия, янг, лайф, янглайф, официальный, сайт">
  <meta name="description"
    content="Young Life клуб в Тбилиси. Тбилисский клуб. Адрес: Каргаретели 9 (офис 'cartwheels'). Время: Суббота 16:00. Контакты: +995-598-78-27-32">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta property="og:title" content="Young Life Тбилиси" />
  <meta property="og:image" content="https://younglife.ge/images/og_logo.jpg" />

<?php
//Try to include <includes-head.html>
try {
  if (!@include_once($rootFolder . 'includes/includes-head.html')) {
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
  if (!@include_once($rootFolder . 'ru/includes/includes-before-content.php')) {
    throw new Exception('Can\'t open file &lt;includes-before-content&gt;');
  }
} catch (Exception $e) {
  echo $e->getMessage();
}
?>
<?php
//Try to inclide <rustavi.html>
try {
  if (!@include_once($rootFolder . 'ru/blocks/clubs/tbilisi/tbilisi.html')) {
    throw new Exception('Can\'t open file &lt;tbilisi.htmlgt;');
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

