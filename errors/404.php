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
    <meta name="keywords" content="">
    <meta name="description" content="">
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
<div width="320px" height="320px">
    <img style="width: 320px; height: 320px; margin: 0 auto;" src="https://younglife.ge/images/logo/404.svg">
</div>
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