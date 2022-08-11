# Bitrix Tools Kit

![bitrix](/docs/assets/images/bitrix.svg)

## Admin only
```php
<?php if ($GLOBALS["USER"]->IsAdmin()) { echo '<pre>'; var_dump($arResult); echo '</pre>'; } ?>
```

```php
<?php if ($GLOBALS["USER"]->IsAdmin()): ?>
    Content...
<?php endif; ?>
```
