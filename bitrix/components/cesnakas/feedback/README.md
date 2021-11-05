# Feedback

### Вывод
```php
<?php
$APPLICATION->IncludeComponent(
  "cesnakas:feedback",
  ".default",
  [
    "EVENT_MESSAGE_ID" => ["7"],
    "OK_TEXT" => "Спасибо, ваше сообщение принято.",
    "EMAIL_TO" => "example@mail.com",
    "REQUIRED_FIELDS" => ["NAME", "PHONE", "EMAIL", "MESSAGE"],
    "USE_CAPTCHA" => "N",
    "USER_CONSENT" => "N",
    "USER_CONSENT_ID" => "1",
    "USER_CONSENT_IS_CHECKED" => "Y",
    "USER_CONSENT_IS_LOADED" => "N"
  ]
);?>
```

### Почтовые шаблоны
<small>Заходим в:</small>\
<small>Настройки → Настройки продукта → Почтовые и СМС события → Почтовые шаблоны</small>\
<small>Находим шаблон ID 7 [FEEDBACK_FORM]</small>\
<small>Создаем копию и/или меняем в нем данные сообщения:</small>
```text
Информационное сообщение сайта #SITE_NAME#
<br>
------------------------------------------
<br><br>
Вам было отправлено сообщение через форму обратной связи
<br>
Автор: <b>#AUTHOR#</b>
E-mail автора: <b>#AUTHOR_EMAIL#</b>
Телефон автора: <b>#AUTHOR_PHONE#</b>
<br>
Текст сообщения:
<br>
<b>#TEXT#</b>
<br><br>
Сообщение сгенерировано автоматически.
```
