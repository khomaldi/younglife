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

  <!-- JavaScript Files -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://younglife.ge/js/younglife.js"></script>

  <!-- Required links -->
  <link href="https://fonts.googleapis.com/css?family=PT+Serif:400,700|Roboto:300,400,500,700&amp;subset=cyrillic" rel="stylesheet">
</head>
<body>
<?php
//Try to include header
try {
  require_once($rootFolder . 'blocks/header/header.tpl');
} catch (Exception $e) {
  echo 'Can\'t open file "header.tpl"';
}

//Try to include map.tpl
/* try {
  require_once($rootFolder . 'blocks/map-on-index/map.tpl');
} catch (Exception $e) {
  echo 'Can\'t open file "map.tpl"';
} */

/* //Try to include three-banners.tpl
try {
  require_once($rootFolder . 'blocks/map-on-index/three-banners.tpl');
} catch (Exception $e) {
  echo 'Can\'t open file "three-banners.tpl"';
}

//Try to include about.tpl
try {
  require_once($rootFolder . 'blocks/map-on-index/about.tpl');
} catch (Exception $e) {
  echo 'Can\'t open file "about.tpl"';
}

//Try to include footer.tpl
try {
  require_once($rootFolder . 'blocks/footer/footer.tpl');
} catch (Exception $e) {
  echo 'Can\'t open file "footer.tpl"';
} */
?>
  <script src="https://younglife.ge/js/imageMapResizer.js"></script>
  <script src="https://younglife.ge/js/mapsToolTips.js"></script>
  <script>
       $('map').imageMapResize() ;
  </script>
</body>
</html>
