<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

use Bitrix\Main\Localization\Loc;

/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
?>
<div class="search-page">
    <form action="" method="GET">
        <input type="text" name="q" value="<?= $arResult["REQUEST"]["QUERY"] ?>" size="40"/>
        <input type="submit" value="<?= Loc::getMessage("SEARCH_GO") ?>"/>
    </form>

    <?php
    if ($arResult["ERROR_CODE"] != 0) {
        ShowNote(Loc::getMessage("SEARCH_NOTHING_TO_FOUND"));
    } elseif (count($arResult["SEARCH"]) > 0) { ?>
        <div style="display:flex; flex-direction: column;">
            <?php
            foreach ($arResult["SEARCH"] as $arItem): ?>
                <a href="<?= $arItem["URL"] ?>">
                    <span>(<?= $arItem['ITEM_ID'] ?>)</span>
                    <span><?= $arItem["TITLE"] ?></span>
                </a>
            <?php
            endforeach; ?>
        </div>
    <?php } else {
        ShowNote(Loc::getMessage("SEARCH_NOTHING_TO_FOUND"));
    } ?>

    <?php if ($arParams["DISPLAY_BOTTOM_PAGER"] != "N") {
        echo $arResult["NAV_STRING"];
    } ?>
</div>