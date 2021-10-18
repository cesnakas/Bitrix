```php
<?php
$APPLICATION->IncludeComponent("bitrix:catalog.smart.filter", "main",
  [
    "IBLOCK_ID" => "1", // Инфоблок
    "IBLOCK_TYPE" => "catalog", // Тип инфоблока
    "SECTION_ID" => $_REQUEST["SECTION_ID"], // ID раздела инфоблока
    "SECTION_CODE" => $_REQUEST["SECTION_CODE"], // Код раздела
    
    "SEF_MODE" => "Y", // Включить ЧПУ (Y/N)
    "SEF_RULE" => "/catalog/#SECTION_CODE#/filter/#SMART_FILTER_PATH#/apply/", // Правило для обработки
    "SECTION_CODE_PATH" => "", // Путь из символьных кодов раздела. Не обязателен
    "SMART_FILTER_PATH" => $_REQUEST["SMART_FILTER_PATH"], // Блок ЧПУ фильтра
    
    "FILTER_NAME" => "arrFilter", // Имя выходящего массива для фильтрации
    "COMPONENT_TEMPLATE" => ".default", // Дублирует шаблон компонента, можно удалить
    "HIDE_NOT_AVAILABLE" => "Y", // скрыть товары кол-во <= 0 (Y/N)
    "TEMPLATE_THEME" => "", // Цветовая тема
    "FILTER_VIEW_MODE" => "vertical", // Вид отображения фильтра (vertical / horizontal)
    "POPUP_POSITION" => "right", // Позиция отображения popup (left/right)
    "DISPLAY_ELEMENT_COUNT" => "Y", // Показывать кол-во элементов в блоке
    
    "CACHE_TYPE" => "A", // Тип кеширования (A/Y/N)
    "CACHE_TIME" => "360000", // Время кеширования (сек.)
    "CACHE_GROUPS" => "Y", // Учитывать права доступа (Y/N)
    "SAVE_IN_SESSION" => "N", // Сохранять установки фильтра в сессии пользователя (Y/N)
    "INSTANT_RELOAD" => "Y", // Моментальная фильтрация на AJAX
    "PAGER_PARAMS_NAME" => "arrPager", // Имя массива с переменными для ссылок в постраничной навигации
    
    "PRICE_CODE" => ["BASE"], // Тип цены
    "CONVERT_CURRENCY" => "Y", // цены в одной валюте (Y/N)
    "CURRENCY_ID" => "RUB", // Валюта, в которую будут сконвертированы цены
    "SHOW_ALL_WO_SECTION" => "Y", // отображать все элементы инфоблока, если не указан раздел (Y/N)
  ],
  false
);?>
```