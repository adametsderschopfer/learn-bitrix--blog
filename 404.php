<?php
global $APPLICATION;
const SHOW_SIDEBAR = "N";

include_once($_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/main/include/urlrewrite.php');

CHTTP::SetStatus("404 Not Found");

require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");

$APPLICATION->SetTitle("404 Not Found");
?>
<div class="main">
    <div class="error-404 text-center">
        <h1>404</h1>
        <p>this link dead link</p>
        <a class="b-home" href="/">Back to Home</a>
    </div>
</div>
<?php require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php");