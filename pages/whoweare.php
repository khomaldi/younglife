<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/core/main.php');
?>
<!DOCTYPE html>
<html lang="ka">
<head>
  <!-- Title -->
  <title>ჩვენს შესახე</title>
  <link rel="alternate" hreflang="ka" href="https://younglife.ge/pages/whoweare.php" />
  <link rel="alternate" hreflang="ru" href="https://younglife.ge/ru/pages/whoweare.php" />

  <!-- Meta -->
  <meta charset="utf-8">
  <meta name="keywords" content="ჩვენს, შესახებ, გუნდი, ლიდერები, ინფორმაცია, YoungLife, young, life, georgia, saqartvelo, საქართველო, იანგ, ლაიფი, იანგლაიფი, ოფიციალური, საიტი">
  <meta name="description" content="Young Life შედგება იმ ადამიანებით რომლებსაც ადარდებთ სხვები, დროს ატარებენ მოზარდებთან და ამყარებენ მეგობრულ ურთეიერთობებს. Young Life-ის ლიდერი ყველას ღებულობს ისეთს როგორებიც არიან. ლიდერები უსიტყვოდ ენდობიან ახალგაზრდებს, რის გამოც ბევრი მათგანი იწყებს დაფიქრებას ცხოვრებისეულ ფასეულობებზე, თუ რაოდენ ძვირფასები არიან ისინი და რომ მათ ცხოვრებას გააჩნია აზრი და მიზანი. Young Life მოზარდებს თავგადასავლებს, სტუმართმოყვარეობას და უპირობო მეგობრობას სთავაზობს.">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta property="og:title" content="Young Life ჩვენს შესახებ">
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
//Try to inclide <whoweare.tpl>
try {
  if (!@include_once($rootFolder . 'blocks/whoweare/whoweare.tpl')) {
    throw new Exception('Can\'t open file &lt;whoweare.tplgt;');
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

