<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="css/swiper-bundle.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/normalize.css">
    <title> <?= $page_title ?> - Aliance Production</title>
  </head>
<body>
  <div class="mobile-menu">
    <ul class="mobile-menu-nav">
      <li class="mobile-menu-nav-item"><a href="./about.php" class="mobile-menu-link">О компании</a></li>
      <li class="mobile-menu-nav-item"><a href="./contracts.php" class="mobile-menu-link">Контрактное производство</a>
      <ul class="mobile-submenu">
        <li class="mobile-submenu-item">
          <a class="mobile-submenu-link" href="./avtohim.php">Автомобильная химия</a>
        </li>
        <li class="mobile-submenu-item">
          <a class="mobile-submenu-link" href="#">Бытовая химия</a>
        </li>
        <li class="mobile-submenu-item">
          <a class="mobile-submenu-link" href="#">Дезинфицирующие средства</a>
        </li>
        <li class="mobile-submenu-item">
          <a class="mobile-submenu-link" href="#">Пищевые аэрозоли</a>
        </li>
        <li class="mobile-submenu-item">
          <a class="mobile-submenu-link" href="#">Косметическая продукция</a>
        </li>
        <li class="mobile-submenu-item">
          <a class="mobile-submenu-link" href="#">Краски аэрозольные</a>
        </li>
      </ul>
      </li>
      <li class="mobile-menu-nav-item"><a href="./trademarks.php" class="mobile-menu-link">Собственные торговые марки</a>
        <ul class="mobile-submenu">
          <li class="mobile-submenu-item">
            <a class="mobile-submenu-link" href="./avtohim-ag.php">Автохимия AG-Tech</a>
          </li>
          <li class="mobile-submenu-item">
            <a class="mobile-submenu-link" href="#">Автохимия AP</a>
          </li>
        </ul>
      </li>
      <li class="mobile-menu-nav-item"><a href="#" class="mobile-menu-link">Новости</a></li>
      <li class="mobile-menu-nav-item"><a href="./contact.php" class="mobile-menu-link">Контакты</a></li>
    </ul>
    <a href="tel:+74996861014" class="mobile-phone">+7 (499) 686-10-14</a>
    <div class="mobile-info">
      <svg class="location" width="16" height="16">
        <use href="img/sprite.svg#location"></use>
      </svg>
      <address class="mobile-info-address">г. Москва, Холодильный пер. 4к1с8</address>
    </div>
    <div class="mobile-info">
      <svg class="email" width="16" height="12">
        <use href="img/sprite.svg#email"></use>
      </svg>
      <a href="mailto:a.dragunov@tdaliance.ru" class="mobile-info-email">a.dragunov@tdaliance.ru</a>
    </div>
    <svg class="vk" width="20" height="16">
      <use href="img/sprite.svg#vk"></use>
    </svg>
    <svg class="instagram" width="16" height="16">
      <use href="img/sprite.svg#instagram"></use>
    </svg>
    <!-- /.mobile-info -->
  </div>
  <nav class="navbar navbar-light navbar-mobile">
    <a href="#" class="mobile-menu-toggle">
      <div class="mobile-menu-line"></div>
      <div class="mobile-menu-line"></div>
      <div class="mobile-menu-line"></div>
    </a>
    <a href="./" class="header-logo">
      <svg class="logo-svg logo-light" width="140px" height="44px">
        <use href="img/sprite.svg#logo-light"></use>
      </svg>
      <svg class="logo-svg logo-dark" width="140px" height="44px">
        <use href="img/sprite.svg#logo"></use>
      </svg>
    </a>
      <ul class="header-nav">
        <li class="header-nav-item"><a href="./about.php" class="header-nav-link">О компании</a></li>
        <li class="header-nav-item"><a href="./contracts.php" class="header-nav-link">Контрактное производство</a></li>
        <li class="header-nav-item"><a href="./trademarks.php" class="header-nav-link">Собственные торговые марки</a></li>
        <li class="header-nav-item"><a href="#" class="header-nav-link">Новости</a></li>
        <li class="header-nav-item"><a href="#" class="header-nav-link">Контакты</a></li>
      </ul>
      <div class="header-phone">
        <svg class="phone" width="24" height="24">
          <use href="img/sprite.svg#phone"></use>
        </svg>
        <a href="tel:+74996861014" class="header-phone-link">+7 (499) 686-10-14</a>
      </div>
      <!-- /.header-phone -->
<button class="navbar-button button" data-toggle="modal">
  <svg class="button-icon" width="24" height="24">
    <use href="img/sprite.svg#phone"></use>
  </svg>
  <span class="button-text">Получить консультацию</span>
</button>
  </nav>
  <!-- /.navbar -->

  <div class="header-internal header-internal-image">
    <div class="header-content-internal">
      <div class="seporator seporator-internal"></div>
      <div class="header-title header-title-internal"><?= $page_title ?></div>
      <nav class="crumbs">
        <ul class="nav-crumbs-list">
          <li><a href="#" class="nav-crumbs">Главная</a></li>
          <li><a href="#" class="nav-crumbs">Контрактное производство</a></li>
          <li><a href="#" class="nav-crumbs"><?= $page_title ?></a></li>
        </ul>
      </nav>
      <img src="img/avto-him.png" alt="фото банок" class="avto-him">
    </div>
  </div>