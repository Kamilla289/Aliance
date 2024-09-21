<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width">
  <link rel="stylesheet" href="css/swiper-bundle.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/normalize.css">
  <title>Aliance Production</title>
</head>
<body class="front-page">
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
  <nav class="navbar navbar-mobile">
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
        <li class="header-nav-item"><a href="about.php" class="header-nav-link">О компании</a></li>
        <li class="header-nav-item"><a href="contracts.php" class="header-nav-link">Контрактное производство</a></li>
        <li class="header-nav-item"><a href="trademarks.php" class="header-nav-link">Собственные торговые марки</a></li>
        <li class="header-nav-item"><a href="#" class="header-nav-link">Новости</a></li>
        <li class="header-nav-item"><a href="./contact.php" class="header-nav-link">Контакты</a></li>
      </ul>
      <div class="header-phone">
        <svg class="phone" width="24" height="24">
          <use href="img/sprite.svg#phone"></use>
        </svg>
        <a href="tel:+74996861014" class="header-phone-link">+7 (499) 686-10-14</a>
      </div>
      <!-- /.header-phone -->
<button class="navbar-button button" data-toggle="modal" data-target="#feedback-modal">
  <svg class="button-icon" width="24" height="24">
    <use href="img/sprite.svg#phone"></use>
  </svg>
  <span class="button-text">Получить консультацию</span>
</button>
  </nav>
  <!-- /.navbar -->
  <header class="header header-image">

<div class="container">
  <div class="header-content">
    <div class="seporator"></div>
    <h1 class="header-title">Комплексное обеспечение товарами и расходными материалами бизнеса
    </h1>
    <p class="header-text">
      Высокий уровень вовлечения представителей целевой аудитории является четким доказательством простого факта: высококачественный прототип будущего проекта напрямую зависит от анализа существующих паттернов поведения.
    </p>
    <button class="button header-button" data-toggle="modal" data-target="#feedback-modal">Подробнее о компании</button>
   </div>
   <!-- /.header-content -->

        <!-- контейнер слайдера -->
        <div class="swiper header-slider">
          <!-- обертка -->
          <ul class="swiper-wrapper header-features">
            <!-- слайды -->
            <li class="swiper-slide header-features-item">
              <img src="img/time.svg" alt="время" class="icon-header-svg" width="21" height="28">
                <p class="header-features-text">Непрерывная работа c 2017 года</p>
            </li>
            <li class="swiper-slide header-features-item">
              <img src="img/sertificate.svg" alt="сертификация" class="icon-header-svg" width="29" height="29">
                <p class="header-features-text">Вся продукция сертифицирована</p>
            </li>
            <li class="swiper-slide header-features-item">
              <svg class="icon-header-svg" width="25px" height="28px">
                <use href="img/sprite.svg#control"></use>
              </svg>
              <p class="header-features-text">Контроль качества на всех этапах</p>
            </li>
            <li class="swiper-slide header-features-item">
              <svg class="icon-header-svg" width="35px" height="26px">
                <use href="img/sprite.svg#delivery"></use>
              </svg>
              <p class="header-features-text">Возможны поставки по всей России</p>
            </li>
            <li class="swiper-slide header-features-item">
              <svg class="icon-header-svg" width="32px" height="25px">
                <use href="img/sprite.svg#speed"></use>
              </svg>
              <p class="header-features-text">Оперативное производство</p>
            </li>
          </ul>
          <!-- кнопки навигации -->
          <div class="slider-buttons">
            <div class="slider-button-prev">
              <svg width="36" height="24">
                <use href="img/sprite.svg#arrow-prev"></use>
              </svg>
            </div>
            <div class="slider-button-next">
              <svg width="36" height="24">
                <use href="img/sprite.svg#arrow-next"></use>
              </svg>
            </div>
          </div>
          <!-- /.slider-buttons -->
        </div>  
    <!-- /.header-features -->
</div>
<!-- /.container -->
  </header>

  <?php include_once('./template-parts/steps.php');?>

  <?php 
  $block_title_production = "Контрактное производство";
  include_once('./template-parts/contract-cards.php');?>
    
    <?php $block_title = "Собственные торговые марки";
     include_once('./template-parts/trademarks-block.php');?>
    <!-- /.section trademark -->

    <?php include_once('./template-parts/founder.php');?>
     <!-- /.section founder -->

    <?php include_once('./template-parts/clients.php');?>
    <?php $block_title_blog = "Блог экспертов в области производства";
    include_once('./template-parts/blog-cards.php');?>
    <?php include_once('footer.php');?>