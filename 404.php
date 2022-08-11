<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/main/include/urlrewrite.php');

CHTTP::SetStatus('404 Not Found');

@define('ERROR_404', 'Y');

require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php');
$APPLICATION->SetTitle('404 Not Found');
?>

    <a href="<?= SITE_DIR ?>">Back</a>

<?php
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/footer.php');
?>