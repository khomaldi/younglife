<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/core/main.php');
?>
<!DOCTYPE html>
<html lang="ka">
<head>
  <!-- Title -->
  <title>ღონისძიებები</title>

  <!-- Meta -->
  <meta charset="utf-8">
  <meta name="keywords" content="ღონისძიებები, კლუბი, ბანაკი, events, club, camp, YoungLife, young, life, younglife, georgia, საქართველო, იანგ, ლაიფი, იანგლაიფი, ოფიციალური, საიტი">
  <meta name="description" content="ღონისძიებები Young Life-ში: კლუბი და ბანაკი. Young Life კლუბი არის ის ადგილი სადაც ყოველ მოზარდს ელოდებიან და უხარიათ მათი მისვლა! ახალგაზრდებს ბუნებრივია იტაცებს მუსიკა, ფილმები, წიგნები, ცხოვრებისეული მოწოდება. მათ უყვართ დროის გატარება ნამდვილ მეგობრებთან, ჩვენ სწორედაც რომ ამას ვცდილობთ, გავხდეთ მათთვის ნამდვილი მეგობრები. კლუბის მსვლელობის დროს, მოზარდები მონაწილეობას ღებულობენ სხვადასხვა თამაშებში, კონკურსებში და სხვა. გარდა ამისა, ჩვენ ვთამაშობთ სამაგიდო თამაშებს (მთელი კოლექცია გვაქვს სამაგიდო თამაშების). ასევე კლუბში ჩვენ ვსაუბრობთ მათთვის საინტერესო თემებზე: ღმერთზე, ცხოვრებისეულ ფასეულობებზე. ღონისძიების ბოლოს, ახალგაზრდებს ელოდებათ უფასო სასუსნავები. ყოველწლიურად, დაახლოებით  100 000 მოზარდი იღებს მონაწილეობას საზაფხულო ბანაკში. აქ მიღებული შთაბეჭდილებები და მოგონებები ბევრი მათგანისთვის დაუვიწყარი ხდება. ჩვენი ბანაკები დატვირთულია გასაოცარი თავგადასავლებით, მხიარულებით, გემრიელი საკვებით, არაჩვეულებივი სპიკერებით, რომლებსაც ესმით და პატივს სცემენ ახალგაზრდებს. ყოველ ჯერზე ჩვენ ვცდილობთ ვიყოთ კრეატიულები და ინოვაციურები რათა საუკეთესო შთაბეჭდილება შევუქმნათ მოზარდებს. Young Life ბანაკი ღიაა ყოველი ახალგაზრდისთვის, მათთვის ვისაც საზოგადოება არ იღებს და უმნიშვნელოდ მიიჩნევს სამყარო. მოზარდები ღარიბი ოჯახებიდან, მოზარდები შეზღუდული შესაძლებლობებით და ახალგაზრდა დედები.">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta property="og:title" content="Young Life ღონისძიებები">
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
//Try to inclide <events.tpl>
try {
  if (!@include_once($rootFolder . 'blocks/events/events.tpl')) {
    throw new Exception('Can\'t open file &lt;events.tplgt;');
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
