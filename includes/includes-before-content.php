<?php

//Try to include <header.html>
try {
  if (!@include_once($rootFolder . 'blocks/header/header.html')) {
    throw new Exception('Can\'t open file <header.html>');
  }
} catch (Exception $e) {
  echo $e->getMessage();
}
?>
