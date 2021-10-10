<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();
use Bitrix\Main\Page\Asset;
?>
<!DOCTYPE html>
<html lang="<?=LANGUAGE_ID?>">
<head>

<?php
	$APPLICATION->ShowHead();
	// meta
	Asset::getInstance()->addString('<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, viewport-fit=cover, user-scalable=0">');
	// Bootstrap
	use Bitrix\Main\UI\Extension;
	Extension::load('ui.bootstrap4');
	// CSS
	Asset::getInstance()->addCss(SITE_TEMPLATE_PATH.'/styles.css');
	// JS
	Asset::getInstance()->addJs(SITE_TEMPLATE_PATH.'/script.js');
?>

	<title><?$APPLICATION->ShowTitle()?></title>

	<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">

</head>
<body>

	<div id="panel"><?$APPLICATION->ShowPanel()?></div>
