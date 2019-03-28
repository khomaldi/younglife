<?php

//Try to include <footer.html>
try {
  if (!@include_once($rootFolder . 'ru/blocks/footer/footer.html')) {
    throw new Exception('Can\'t open file <footer.html>');
  }
} catch (Exception $e) {
  echo $e->getMessage();
}
?>
