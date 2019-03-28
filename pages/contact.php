<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/core/main.php');

?>
<!DOCTYPE html>
<html lang="ka">
<head>
  <!-- Title -->
  <title>კონტაქტები</title>
  <link rel="alternate" hreflang="ka" href="https://younglife.ge/pages/contact.php" />
  <link rel="alternate" hreflang="ru" href="https://younglife.ge/ru/pages/contact.php" />

  <!-- Meta -->
  <meta charset="utf-8">
  <meta name="keywords" content="კონტაქტი, მოგვწერეთ, YoungLife, young, life, georgia, saqartvelo, საქართველო, იანგ, ლაიფი, იანგლაიფი, ოფიციალური, საიტი">
  <meta name="description" content="დაუკავშირდი Young Life Georgia-ს. mail@younglife.ge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta property="og:title" content="Young Life კონტაქტები">
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
  if (!@include_once($rootFolder . 'includes/includes-before-content.php')) {
    throw new Exception('Can\'t open file &lt;includes-before-content&gt;');
  }
} catch (Exception $e) {
  echo $e->getMessage();
}
?>
<?php
//Try to inclide <contact.html>
try {
  if (!@include_once($rootFolder . 'blocks/contact/contact.html')) {
    throw new Exception('Can\'t open file &lt;contact.htmlgt;');
  }
 } catch (Exception $e) {
    echo $e->getMessage();
}
?>
<?php
//Try to include <includes-after-content.php>
try {
  if (!@include_once($rootFolder . 'includes/includes-after-content.php')) {
    throw new Exception('Can\'t open file &lt;includes-after-content&gt;');
  }
} catch (Exception $e) {
  echo $e->getMessage();
}
?>
</body>
</html>

