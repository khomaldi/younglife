<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/core/main.php');
?>
<!DOCTYPE html>
<html lang="ka">
<head>
  <!-- Title -->
  <title>Young Life საქართველო</title>
  <link rel="alternate" hreflang="ka" href="https://younglife.ge" />
  <link rel="alternate" hreflang="ru" href="https://younglife.ge/ru" />

  <!-- Meta -->
  <meta charset="utf-8">
  <meta name="keywords" content="მთავარი, YoungLife, young, life, georgia, saqartvelo, საქართველო, იანგ, ლაიფი, იანგლაიფი, ოფიციალური, საიტი">
  <meta name="description" content="«Young Life» &mdash; არის ორგანიზაცია რომელიც შედგება ერთი მიზნით გაერთიანებული ხალხისგან. მათი მთავარი მიზანი მოზარდების ცხოვრების გაუმჯობესებაა. ჩვენ ვეხმარებით ახალგაზრდებს საკუთარი ნიჭის აღმოჩენასა და განვითარებაში. ვასწავლით მათ, თავდაჯერებულად შეხვდნენ ყველა იმ გამოწვევას, რომლებსაც მათ ცხოვრება უგზავნის; გაუმკლავდნენ ყველა გამოწვევას, თავი აიმაღლონ იმედგაცრუებისა და სიბოროტის დასაძლევად; მიაღწიონ ყველა რეალისტურ ოცნებას; ისწავლონ საკუთარი თავის და გარშემომყოფების პატივისცემა.">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta property="og:title" content="Young Life საქართველო">
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
//Try to include <map.html>
try {
  if (!@include_once($rootFolder . 'blocks/map/map.html')) {
    throw new Exception('Can\'t open file &lt;map.html&gt;');
  }
} catch (Exception $e) {
  echo $e->getMessage();
}
?>
<?php
//Try to inclide <banners.html>
try {
  if (!@include_once($rootFolder . 'blocks/banners/banners.html')) {
    throw new Exception('Can\'t open file &lt;banners.htmlgt;');
  }
 } catch (Exception $e) {
    echo $e->getMessage();
}
?>
<?php
//Try to inclide <about.html>
try {
  if (!@include_once($rootFolder . 'blocks/about/about.html')) {
    throw new Exception('Can\'t open file &lt;about.htmlgt;');
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

