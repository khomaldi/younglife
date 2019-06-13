<?php

//Try to include <footer.html>
try {
  if (!@include_once($_SERVER['DOCUMENT_ROOT'] . 'blocks/footer/footer.html')) {
    throw new Exception('Can\'t open file &lt;footer.html&gt;');
  }
} catch (Exception $e) {
  echo $e->getMessage();
}
?>
