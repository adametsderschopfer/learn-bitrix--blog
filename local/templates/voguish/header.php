<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

use Bitrix\Main\Page\Asset;

global $APPLICATION;

/**
 * INCLUDE ASSETS
 * */

Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/layout/js/jquery.min.js');
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/layout/js/jquery.flexisel.js');
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/layout/js/responsiveslides.min.js');

Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/layout/css/bootstrap.css');
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/layout/css/style.css');

Asset::getInstance()->addString('<link href="http://fonts.googleapis.com/css?family=Libre+Baskerville:400,700" rel="stylesheet" type="text/css" />');
Asset::getInstance()->addString('<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" type="text/css" />');
Asset::getInstance()->addString('<meta name="viewport" content="width=device-width, initial-scale=1">');
?>

<!DOCTYPE html>
<html lang="<?= LANGUAGE_ID ?>">
<head>
    <?php $APPLICATION->ShowHead(); ?>
    <title><?php $APPLICATION->ShowTitle(); ?></title>
</head>
<body>

<!--ADMIN PANEL-->
<div id="panel"><?php $APPLICATION->ShowPanel() ?></div>

<header class="header">
    <div class="container">
        <div class="logo">
            <a href="/">
                <?php $APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    ".default",
                    [
                        "AREA_FILE_SHOW" => "file",
                        "PATH" => SITE_TEMPLATE_PATH . "/include/header/logo.php",
                        "EDIT_TEMPLATE" => "",
                    ],
                    false,
                  ) ?>
            </a>
        </div>

        <?php $APPLICATION->IncludeComponent(
            "bitrix:menu",
            "main.menu",
            array(
                "COMPONENT_TEMPLATE" => ".default",
                "ROOT_MENU_TYPE" => "main",
                "MENU_CACHE_TYPE" => "N",
                "MENU_CACHE_TIME" => "3600",
                "MENU_CACHE_USE_GROUPS" => "Y",
                "MENU_CACHE_GET_VARS" => "",
                "MAX_LEVEL" => "1",
                "CHILD_MENU_TYPE" => "left",
                "USE_EXT" => "N",
                "DELAY" => "N",
                "ALLOW_MULTI_SELECT" => "N",
            ),
            false
        ); ?>

        <!-- script-for-nav -->
        <script>
            $("span.menu").click(function () {
                $(".head-nav ul").slideToggle(300, function () {
                    // Animation complete.
                });
            });
        </script>
        <!-- script-for-nav -->
        <div class="clearfix"></div>
    </div>
</header>

<main class="container">
    <?php if (ERROR_404 !== "Y"): ?>
    <div class="col-md-9 bann-right">
        <?php endif; ?>
