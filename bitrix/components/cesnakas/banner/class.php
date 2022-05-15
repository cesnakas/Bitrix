<?php

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

class CesnakasBanner extends \CBitrixComponent
{
    public function onPrepareComponentParams($params)
    {
        return $params;
    }

    public function executeComponent()
    {
        $this->includeComponentTemplate();
    }
}
