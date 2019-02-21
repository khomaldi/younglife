<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/core/main.php');
?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <!-- Title -->
  <title>Мероприятия</title>
  <link rel="alternate" hreflang="ru" href="https://younglife.ge/ru/pages/events.php" />
  <link rel="alternate" hreflang="ka" href="https://younglife.ge/pages/events.php" />

  <!-- Meta -->
  <meta charset="utf-8">
  <meta name="keywords" content="Мероприятия, клуб, лагерь, events, club, camp, YoungLife, young, life, georgia, Грузия, янг, лайф, янглайф, официальный, сайт">
  <meta name="description" content="Мероприятия в Young Life: клуб и лагерь. Клуб Young Life &mdash; это место, где рады каждому подростку! Ребятам свойственно увлекаться музыкой, фильмами, книгами и поиском своего призвания. Они любят проводить время в компании настоящих друзей, и мы стремимся стать для них таковыми. Во время клуба подростки принимают участие в различного рода играх, конкурсах, и т.п., кроме этого, мы играем в настольные игры (у нас их целая коллекция). Также на клубах мы общаемся с ребятами на интересующие каждого темы, в частности, о Боге и ценностях жизни. В конце каждого мероприятия ребят ждёт бесплатное угощение в виде сладостей, кофе и печенек. Каждый год более 100 000 подростков по всему миру проводят неделю в лагере Young Life, получая впечатления, которые многие называют лучшими в своей жизни. Наш лагерь включает в себя приключения, много веселья, вкусную еду, и отличных спикеров, которые понимают и уважают подростков. Мы всегда ищем способы быть инновационными в создании лучших впечатлений для ребят. Лагерь Young Life открыт для каждого подростка, включая тех, кого часто упускают из виду: подростков из неблагополучных семей, подростков с ограниченными возможностями и матерей-подростков.">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta property="og:title" content="Young Life Мероприятия">
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
//Try to inclide <events.tpl>
try {
  if (!@include_once($rootFolder . 'ru/blocks/events/events.tpl')) {
    throw new Exception('Can\'t open file &lt;events.tplgt;');
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
