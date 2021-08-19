<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();
use Bitrix\Main\Page\Asset;
?>
<!DOCTYPE html>
<html lang="<?=LANGUAGE_ID;?>">
<head>

<?php
	$APPLICATION->ShowHead();
	Asset::getInstance()->addString('<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, viewport-fit=cover, user-scalable=0">');
	Asset::getInstance()->addCss(SITE_TEMPLATE_PATH.'/css/main.css');
	Asset::getInstance()->addJs(SITE_TEMPLATE_PATH.'/js/main.js');
?>

    <title><?$APPLICATION->ShowTitle()?></title>

    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">

</head>
<body>

	<?$APPLICATION->ShowPanel()?>

    <header>

    </header>

    <main role="main">
