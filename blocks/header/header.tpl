<?php
//Try to include <change-language.php>
try {
  if (!@include_once($rootFolder . 'core/change-language.php')) {
    throw new Exception('Can\'t open file &lt;change-language.php&gt;');
  }
} catch (Exception $e) {
  echo $e->getMessage();
}
?>
<header class="header">
  <div class="header__logo">
    <a href="https://younglife.ge"><img src="https://younglife.ge/images/logo/logo_header_195x38.png" alt="Young Life"></a>
  </div>
  <nav class="navigation">
    <ul class="navigation__menu">
      <li><a class="menu__link geo-font-mtavruli" href="https://younglife.ge">მთავარი</a></li>
      <li><a class="menu__link geo-font-mtavruli" href="https://younglife.ge/pages/whoweare.php">ჩვენს შესახებ</a></li>
      <li><a class="menu__link geo-font-mtavruli" href="https://younglife.ge/pages/events.php">ღონისძიებები</a></li>
      <li>
        <a class="menu__link geo-font-mtavruli menu__dropdown">კლუბები</a>
        <ul class="menu__submenu">
          <li><a class="submenu__link geo-font-mtavruli" href="https://younglife.ge/pages/clubs/tbilisi.php">თბილისი</a></li>
          <li><a class="submenu__link geo-font-mtavruli" href="https://younglife.ge/pages/clubs/rustavi.php">რუსთავი</a></li>
          <li><a class="submenu__link geo-font-mtavruli" href="https://younglife.ge/pages/clubs/marneuli.php">მარნეული</a></li>
        </ul>
      </li>
      <li><a class="menu__link geo-font-mtavruli" href="https://younglife.ge/pages/contact.php">კონტაქტები</a></li>
      <li><a class="menu__link geo-font-mtavruli menu__link_disable" href="#">დახმარება</a></li>
    </ul>
  </nav>
  <div class="languages">
    <a href="<?php echo $georgian; ?>" class="languages__language language__link_active" title="ქართული">
      <img src="https://younglife.ge/images/logo/lang_ka_32x22.png" alt="ქართული">
    </a>
    <a href="https://younglife.ge/en" class="languages__language language__link_disable" title="English">
      <img src="https://younglife.ge/images/logo/lang_en_32x22.png" alt="English">
    </a>
    <a href="<?php echo $russian; ?>" class="languages__language" title="Русский">
      <img src="https://younglife.ge/images/logo/lang_ru_32x22.png" alt="Русский">
    </a>
  </div>
  <a href="#" class="header__toggle"><img class="toggle__img" src="https://younglife.ge/images/logo/toggle_icon.png" alt="show"></a>
</header>
<div class="header-invisible-clone"></div>

