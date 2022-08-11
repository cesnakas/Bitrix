<?php
use Bitrix\Main\Engine\CurrentUser;
use Bitrix\Main\Page\Asset;
use Bitrix\Main\UI\Extension;
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();
?>
<!DOCTYPE html>
<html lang="<?=LANGUAGE_ID?>">
<head>

    <?php
	$APPLICATION->ShowHead();
    // Meta tags & etc
	Asset::getInstance()->addString('<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, viewport-fit=cover, user-scalable=0">');
    // Bootstrap
    Extension::load('ui.bootstrap4');
    // Custom CSS / JS
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/main.css');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/main.js');
    // Analytics
    include_once $_SERVER['DOCUMENT_ROOT'] . '/local/include/analytics.php';
    ?>

    <title><?php $APPLICATION->ShowTitle()?></title>

    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">

</head>
<body>

    <?= (CurrentUser::get()->isAdmin()) ? $APPLICATION->ShowPanel() : null ?>

    <header>

    </header>

    <main role="main">
