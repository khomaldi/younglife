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

  <!-- JavaScript Files -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://younglife.ge/js/younglife.js"></script>

  <!-- Required links -->
  <link href="https://fonts.googleapis.com/css?family=PT+Serif:400,700|Roboto:300,400,500,700&amp;subset=cyrillic" rel="stylesheet">
</head>
<body>
<?php
//Try to include <includes.php>
try {
  if (!@include_once($rootFolder . 'core/includes.php')) {
    throw new Exception('Can\'t open file <includes.php>');
  }
} catch (Exception $e) {
  echo $e->getMessage();
}
?>
  <script src="https://younglife.ge/js/imageMapResizer.js"></script>
  <script src="https://younglife.ge/js/mapsToolTips.js"></script>
  <script>
       $('map').imageMapResize() ;
  </script>
</body>
</html>
