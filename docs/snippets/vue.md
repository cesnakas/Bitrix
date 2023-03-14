---
layout: default
title: Vue
parent: Сниппеты
nav_order: 0
---

# Vue

---

Подключается Vue на нужной странице
```php
\Bitrix\Main\UI\Extension::load("ui.vue");
```

Вместо обычного `new Vue()` нужно писать `BX.Vue.create()`

<br>
