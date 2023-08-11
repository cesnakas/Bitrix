# Bitrix Tools Kit

## Admin only
```php
<?php
if ($GLOBALS["USER"]->IsAdmin()) {
    echo '<pre>';
    var_dump($arResult);
    echo '</pre>';
} ?>
```

```php
<?php if ($GLOBALS["USER"]->IsAdmin()): ?>
    Content...
<?php endif; ?>
```
