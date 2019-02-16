<?php
require_once('core/main.php');
?>
<!DOCTYPE html>
<html lang="ka">
<head>
  <!-- Website title -->
  <title>Young Life საქართველო</title>

  <!-- Meta -->
  <meta charset="utf-8">
  <meta name="keywords" content="YoungLife, young, life, georgia, საქართველო, იანგ, ლაიფი, იანგლაიფი, ოფიციალური, საიტი">
  <meta name="description" content="«Young Life» &mdash; არის ორგანიზაცია რომელიც შედგება ერთი მიზნით გაერთიანებული ხალხისგან. მათი მთავარი მიზანი მოზარდების ცხოვრების გაუმჯობესებაა. ჩვენ ვეხმარებით ახალგაზრდებს საკუთარი ნიჭის აღმოჩენასა და განვითარებაში. ვასწავლით მათ, თავდაჯერებულად შეხვდნენ ყველა იმ გამოწვევას, რომლებსაც მათ ცხოვრება უგზავნის; გაუმკლავდნენ ყველა გამოწვევას, თავი აიმაღლონ იმედგაცრუებისა და სიბოროტის დასაძლევად; მიაღწიონ ყველა რეალისტურ ოცნებას; ისწავლონ საკუთარი თავის და გარშემომყოფების პატივისცემა.">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta property="og:title" content="Young Life საქართველო" />
  <meta property="og:image" content="https://younglife.ge/img/big_logo_og.jpg" />

  <!-- Favicon -->
  <link rel="shortcut icon" href="https://younglife.ge/images/favicon.ico" type="image/x-icon" />

  <!-- CSS Files -->
  <link href="/css/younglife.css" rel="stylesheet">
  <link href="/blocks/header/header.css" rel="stylesheet">
  <link href="/blocks/footer/footer.css" rel="stylesheet">
  <link href="/blocks/map/map.css" rel="stylesheet">
  <link href="/blocks/banners/banners.css" rel="stylesheet">

  <!-- JavaScript Files -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://younglife.ge/js/younglife.js"></script>

  <!-- Fonts links -->
  <link href="https://fonts.googleapis.com/css?family=PT+Serif:400,700|Roboto:300,400,500,700&amp;subset=cyrillic" rel="stylesheet">
  <link rel="stylesheet" href="//younglife/css/fonts/bpg-nino-mtavruli/css/bpg-nino-mtavruli.min.css">
  <link rel="stylesheet" href="//younglife/css/fonts/bpg-rioni/css/bpg-rioni.min.css">
</head>
<body>
<?php
//Try to include <includes-before-content.php>
try {
  if (!@include_once($rootFolder . 'core/includes-before-content.php')) {
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
//Try to include <includes-after-content.php>
try {
  if (!@include_once($rootFolder . 'core/includes-after-content.php')) {
    throw new Exception('Can\'t open file &lt;includes-after-content&gt;');
  }
} catch (Exception $e) {
  echo $e->getMessage();
}
?>
  <script src="/blocks/map/map.js"></script>
</body>
</html>
