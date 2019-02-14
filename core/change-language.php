<?php

/**
 * Created by Visual Studio Code.
 * @author: Giorgi Khomaldishvili <khomaldi@yandex.ru> <https://github.com/khomaldi>
 * @copyright Copyright (c) 2019, Giorgi Khomaldishvili
 * @license none
 * Date: 13.02.2019
 * 
 * This script changes the language based on the page address.
 */

$link = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

if (mb_stripos($link, '/ru/') == true) {
  $georgian = implode(explode('ru/', $link));
} else {
  $georgian = $link;
}

if (mb_stripos($link, '/ru') == false) {
  $russian = explode('e/', $link);
  $russian = $russian[0] . 'e/ru/' . $russian[1];
} else {
  if ($link == 'https://younglife.ge/ru/') {
    $russian = 'https://younglife.ge/ru';
  } else {
    $russian = $link;
  }
}
?>
