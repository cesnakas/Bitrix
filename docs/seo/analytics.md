---
layout: default
title: Аналитика
parent: SEO
nav_order: 0
---

# Аналитика / Метрика

---

Для корректной работы аналитики/метрики и т.п. скриптов, которые должны находиться в начале страницы, в теге `<head>...</head>`. Нужно добавить атребут предусмотренный Битрикс `data-skip-moving="true"`.

Пример: ``<script type=”text/javascript” data-skip-moving="true" src=”...”></script>``

```JS
data-skip-moving="true"
```
