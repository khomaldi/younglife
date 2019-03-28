<?php
session_start();

/* If user has been authorized */
if (isset($_SESSION['logged_user'])) {
  echo "<script>self.location='http://younglife/profile/profile.php?lang=ru';</script>";
} else { }

require_once($_SERVER['DOCUMENT_ROOT'] . '/core/main.php');
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <!-- Title -->
    <title>Вход</title>
    <link rel="alternate" hreflang="ka" href="https://younglife.ge" />
    <link rel="alternate" hreflang="ru" href="https://younglife.ge/ru" />

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
    
    <!-- TEMP SCRIPT! DELETE -->
    <script src="https://younglife/ru/blocks/signup/signup.js"></script>
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
      if (!@include_once($rootFolder . 'ru/blocks/signup/signup.html')) {
        throw new Exception('Can\'t open file &lt;signup&gt;');
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
