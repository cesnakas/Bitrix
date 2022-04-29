<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

$set = array(
    'LINK' => 'Ссылка при клике на баннер',
    'SRC'  => 'Ссылка на изображение',
);

$arTemplateParameters = [];
foreach ($set as $k => $val) {
    $arTemplateParameters[$k] = [
        'NAME' => $val,
        'COLS' => 35,
        'ROWS' => 3
    ];
}
