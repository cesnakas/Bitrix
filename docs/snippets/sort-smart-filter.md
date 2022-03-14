---
layout: default
title: Сортировка в фильтре
parent: Сниппеты
nav_order: 0
---

# Сортировка параметров в фильтре

---

По умолчанию в smart.filter и catalog.smart.filter параметры сортируются в настройках инфоблока. Если нужно отсортировать по-другому, например по-алфавиту, то в шаблоне фильтра template.php надо найти нужны блок, допустим где формируются чекбоксы:

```php
ksort($arItem["VALUES"], SORT_NATURAL);
switch ($arItem["DISPLAY_TYPE"]) {
    ...
}
```
или
```php
default: // CHECKBOXES
ksort($arItem["VALUES"], SORT_NATURAL);
```

<br>
