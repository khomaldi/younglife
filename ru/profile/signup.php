<?php
session_start();

/* If user has been authorized */
if (isset($_SESSION['logged_user'])) {
  echo "<script>self.location='https://younglife.ge/ru/profile/profile.php';</script>";
} else { }

require_once($_SERVER['DOCUMENT_ROOT'] . 'ru/profile/core/main.php');
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <!-- Title -->
    <title>Регистрация</title>
    <link rel="alternate" hreflang="ka" href="https://younglife.ge/profile/signup.php" />
    <link rel="alternate" hreflang="ru" href="https://younglife.ge/ru/profile/signup.php" />

    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="keywords" content="Регистрация, YoungLife, young, life, georgia">
    <meta name="description" content="Регистрация на сайте YoungLife.ge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:title" content="Young Life Грузия">
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
 //Try to include <signup.html>
    try {
      if (!@include_once($rootFolder . 'ru/profile/blocks/signup/signup.html')) {
        throw new Exception('Can\'t open file &lt;signup.html&gt;');
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
