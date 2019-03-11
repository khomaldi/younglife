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
    <meta name="keywords" content="Вход, авторизация, YoungLife, young, life, georgia">
    <meta name="description" content="Вход на сайт YoungLife.ge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:title" content="Young Life Грузия">
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
      if (!@include_once($rootFolder . 'ru/includes/includes-before-content.php')) {
        throw new Exception('Can\'t open file &lt;includes-before-content&gt;');
      }
    } catch (Exception $e) {
      echo $e->getMessage();
    }
    ?>
    <?php
 //Try to include <login.tpl>
    try {
      if (!@include_once($rootFolder . 'ru/blocks/login/login.tpl')) {
        throw new Exception('Can\'t open file &lt;login&gt;');
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
 