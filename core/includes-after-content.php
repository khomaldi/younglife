<?php

//Try to include <footer.tpl>
try {
  if (!@include_once($rootFolder . 'blocks/footer/footer.tpl')) {
    throw new Exception('Can\'t open file <footer.tpl>');
  }
} catch (Exception $e) {
  echo $e->getMessage();
}
?>