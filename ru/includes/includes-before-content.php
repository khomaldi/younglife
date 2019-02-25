<?php

//Try to include <header.tpl>
try {
  if (!@include_once($rootFolder . 'ru/blocks/header/header.tpl')) {
    throw new Exception('Can\'t open file <header.tpl>');
  }
} catch (Exception $e) {
  echo $e->getMessage();
}
?>
