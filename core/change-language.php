<?php

/**
 * Created by Visual Studio Code.
 * @author: Giorgi Khomaldishvili <khomaldi@yandex.ru> <https://github.com/khomaldi>
 * @copyright Copyright (c) 2019, Giorgi Khomaldishvili
 * @license none
 * Date: 13.02.2019 
 * 
 * @param string $link
 * @param string $result
 * @return string $russian (or $georgian)
 * This script changes the language based on the page address.
 */

$link = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

if (mb_stripos($link, '.ge/ru') == false) {
  $russian = explode('.ge', $link);
  $russian = $russian[0] . '.ge/ru' . $russian[1];
} else {
  $russian = $link;
}

if (mb_stripos($link, '.ge/ru') == true) {
  $georgian = explode('.ge/ru', $link);
  $georgian = $georgian[0] . '.ge' . $georgian[1];
} else {
  $georgian = $link;
}
?>
