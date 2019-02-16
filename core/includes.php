<?php
//Try to include <header.tpl>
try {
  if (!@include_once($rootFolder . 'blocks/header/header.tpl')) {
    throw new Exception('Can\'t open file <header.tpl>');
  }
} catch (Exception $e) {
  echo $e->getMessage();
}

//Try to include <map.tpl>
try {
  if (!@include_once($rootFolder . 'blocks/map-on-index/map.tpl')) {
    throw new Exception('Can\'t open file <map.tpl>');
  }
} catch (Exception $e) {
  echo $e->getMessage();
}

//Try to include <three-banners.tpl>
try {
  if (!@include_once($rootFolder . 'blocks/map-on-index/three-banners.tpl')) {
    throw new Exception('Can\'t open file <three-banners.tpl>');
  }
} catch (Exception $e) {
  echo $e->getMessage();
}

//Try to include <about.tpl>
try {
  if (!@include_once($rootFolder . 'blocks/map-on-index/about.tpl')) {
    throw new Exception('Can\'t open file <about.tpl>');
  }
} catch (Exception $e) {
  echo $e->getMessage();
}

//Try to include <footer.tpl>
try {
  if (!@include_once($rootFolder . 'blocks/footer/footer.tpl')) {
    throw new Exception('Can\'t open file <footer.tpl>');
  }
} catch (Exception $e) {
  echo $e->getMessage();
}
?>