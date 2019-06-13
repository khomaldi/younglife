<?php

//Try to include <header.html>
try {
  if (!@include_once($_SERVER['DOCUMENT_ROOT'] . 'ru/blocks/header/header.html')) {
    throw new Exception('Can\'t open file &lt;header.html&gt;');
  }
} catch (Exception $e) {
  echo $e->getMessage();
}
?>
