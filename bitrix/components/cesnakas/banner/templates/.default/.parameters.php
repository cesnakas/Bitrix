<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

use \Bitrix\Main\Localization\Loc;
Loc::loadMessages(__FILE__);

$set = [
    'LINK' => Loc::getMessage("BANNER_LINK"),
    'SRC'  => Loc::getMessage("BANNER_SRC"),
];

$arTemplateParameters = [
    "LINK" => [
        "PARENT" => "BASE",
        "NAME"   => Loc::getMessage("BANNER_LINK"),
        "SIZE"   => "2",
        "COLS"   => "46",
    ],
    "ALT" => [
        "PARENT" => "BASE",
        "NAME"   => Loc::getMessage("BANNER_ALT"),
        "SIZE"   => "2",
        "COLS"   => "46",
    ],
    "SRC" => [
        "PARENT"  => "DATA_SOURCE",
        "NAME"    => Loc::getMessage("BANNER_LINK"),
        "TYPE"    => "FILE",
        "REFRESH" => "Y",
        "SIZE"    => "2",
        "COLS"    => "46",
    ],
];
