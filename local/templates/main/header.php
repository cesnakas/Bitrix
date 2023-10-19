<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Engine\CurrentUser;
use Bitrix\Main\Page\Asset;
?>
<!DOCTYPE html>
<html lang="<?= LANGUAGE_ID ?>" data-bs-theme="dark">
<head>

  <?php
  $APPLICATION->ShowHead();

  // Meta tags & etc
  Asset::getInstance()->addString('<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, viewport-fit=cover, user-scalable=0">');

  // Custom CSS & JS
  Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/main.css');
  Asset::getInstance()->addString('<script src="' . SITE_TEMPLATE_PATH . '/js/main.js" data-skip-moving="true"></script>', false, 'BEFORE_CSS');

  // Script bottom page
  Asset::getInstance()->setJsToBody(true);

  // Analytics
  include_once $_SERVER['DOCUMENT_ROOT'] . '/local/include/analytics.php';
  ?>

  <title><?php $APPLICATION->ShowTitle() ?></title>

  <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">

</head>
<body>

  <?= (CurrentUser::get()->isAdmin()) ? $APPLICATION->ShowPanel() : null ?>

  <header class="navbar navbar-expand-lg bg-body-tertiary" role="banner">
    <div class="container">
      <a class="navbar-brand" href="<?= SITE_DIR ?>">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbar">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="<?= SITE_DIR ?>">Главная</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= SITE_DIR ?>news/">Новости</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" aria-disabled="true">Disabled</a>
          </li>
        </ul>
        <form class="d-flex ms-auto" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </header>

  <main role="main">
