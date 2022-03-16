---
layout: default
title: Элементов в разделе
parent: Сниппеты
nav_order: 0
---

# Количество элементов в разделе

---

Если нужно посчитать количество элементов в разделе

```php
$arSelect = Array("ID", "IBLOCK_ID", "NAME", "PROPERTY_СВОЙСТВО_ЭЛЕМЕНТА");
$arFilter = Array("IBLOCK_ID" => 1, "ACTIVE" => "Y", "PROPERTY_СВОЙСТВО_ЭЛЕМЕНТА" => $arResult['ID']);
$qty = CIBlockElement::GetList(Array(), $arFilter, false, $arSelect)->selectedRowsCount();
--
echo $qty;
```
<br>
