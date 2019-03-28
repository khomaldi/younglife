<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/core/main.php');
?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <!-- Title -->
  <title>Кто Мы</title>
  <link rel="alternate" hreflang="ru" href="https://younglife.ge/ru/pages/whoweare.php" />
  <link rel="alternate" hreflang="ka" href="https://younglife.ge/pages/whoweare.php" />

  <!-- Meta -->
  <meta charset="utf-8">
  <meta name="keywords" content="Мы, Информация, Команда, Лидеры, YoungLife, young, life, georgia, Грузия, янг, лайф, янглайф, официальный, сайт">
  <meta name="description" content="Young Life начинается с обеспокоенных молодых людей, которые проводят время, строя мосты подлинной дружбы с подростками &mdash; там где они есть, какие они есть. Поскольку их лидеры безоговорочно верят в них, подростки начинают понимать, что их жизнь имеет большую ценность, смысл и цель. Young Life предлагает подросткам приключения, гостеприимство и безусловную дружбу. Волонтёры Young Life и лидеры строят отношения с подростками, приглашая их на различные мероприятия: встречи под названием 'Клуб' и лагерь. Здесь подростки могут быть самими собой, получать удовольствие и размышлять над некоторыми самыми важными вопросами: 'Как мы можем проживать нашу жизнь?' и 'Почему мы здесь?' Для тех, кто хочет глубже исследовать эти вопросы своей жизни, мы предлагаем небольшие групповые собрания, которые позволяют подросткам более полно исследовать учение и жизнь Иисуса Христа.">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta property="og:title" content="Young Life Кто Мы">
  <meta property="og:image" content="https://younglife.ge/images/og_logo.jpg">

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
//Try to inclide <whoweare.html>
try {
  if (!@include_once($rootFolder . 'ru/blocks/whoweare/whoweare.html')) {
    throw new Exception('Can\'t open file &lt;whoweare.htmlgt;');
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

