<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/core/main.php');
?>
<!DOCTYPE html>
<html lang="ka">
<head>
  <!-- Title -->
  <title>Young Life საქართველო</title>

  <!-- Meta -->
  <meta charset="utf-8">
  <meta name="keywords" content="მთავარი, YoungLife, young, life, younglife, georgia, საქართველო, იანგ, ლაიფი, იანგლაიფი, ოფიციალური, საიტი">
  <meta name="description" content="«Young Life» &mdash; არის ორგანიზაცია რომელიც შედგება ერთი მიზნით გაერთიანებული ხალხისგან. მათი მთავარი მიზანი მოზარდების ცხოვრების გაუმჯობესებაა. ჩვენ ვეხმარებით ახალგაზრდებს საკუთარი ნიჭის აღმოჩენასა და განვითარებაში. ვასწავლით მათ, თავდაჯერებულად შეხვდნენ ყველა იმ გამოწვევას, რომლებსაც მათ ცხოვრება უგზავნის; გაუმკლავდნენ ყველა გამოწვევას, თავი აიმაღლონ იმედგაცრუებისა და სიბოროტის დასაძლევად; მიაღწიონ ყველა რეალისტურ ოცნებას; ისწავლონ საკუთარი თავის და გარშემომყოფების პატივისცემა.">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta property="og:title" content="Young Life საქართველო">
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
  if (!@include_once($rootFolder . 'includes/includes-before-content.php')) {
    throw new Exception('Can\'t open file &lt;includes-before-content&gt;');
  }
} catch (Exception $e) {
  echo $e->getMessage();
}
?>
<?php
//Try to include <map.tpl>
try {
  if (!@include_once($rootFolder . 'blocks/map/map.tpl')) {
    throw new Exception('Can\'t open file &lt;map.tpl&gt;');
  }
} catch (Exception $e) {
  echo $e->getMessage();
}
?>
<?php
//Try to inclide <banners.tpl>
try {
  if (!@include_once($rootFolder . 'blocks/banners/banners.tpl')) {
    throw new Exception('Can\'t open file &lt;banners.tplgt;');
  }
 } catch (Exception $e) {
    echo $e->getMessage();
}
?>
<?php
//Try to inclide <about.tpl>
try {
  if (!@include_once($rootFolder . 'blocks/about/about.tpl')) {
    throw new Exception('Can\'t open file &lt;about.tplgt;');
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
