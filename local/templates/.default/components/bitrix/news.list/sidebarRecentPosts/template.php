<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
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
$this->setFrameMode(true);
?>

<h3><?= Loc::getMessage('BLOCK_TITLE') ?></h3>

<div class="blo-top">
    <?php
    foreach ($arResult["ITEMS"] as $arItem): ?>
        <?php
        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));

        $detailPicture = CFile::ResizeImageGet(
            $arItem["PREVIEW_PICTURE"],
            [
                "width" => 100,
                "height" => 100,
            ],
            BX_RESIZE_IMAGE_EXACT,
            true
        );
        $arItem["PREVIEW_PICTURE"]["SRC"] = $detailPicture['src'];
        unset($detailPicture);
        ?>

        <div class="blog-grids" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
            <div class="blog-grid-left">
                <a href="<?= $arItem["DETAIL_PAGE_URL"] ?>">
                    <img
                            src="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>"
                            class="img-responsive"
                            alt="<?= $arItem["PREVIEW_PICTURE"]["ALT"] ?>"
                            title="<?= $arItem["PREVIEW_PICTURE"]["TITLE"] ?>"
                    >
                </a>
            </div>
            <div class="blog-grid-right">
                <h4><a href="<?= $arItem["DETAIL_PAGE_URL"] ?>"><?= TruncateText($arItem["NAME"], 15) ?></a></h4>
                <?php
                if ($arParams["DISPLAY_PREVIEW_TEXT"] != "N" && $arItem["PREVIEW_TEXT"]): ?>
                    <p><?= TruncateText($arItem["PREVIEW_TEXT"], 45); ?></p>
                <?php
                endif; ?>
            </div>
            <div class="clearfix"></div>
        </div>
    <?php
    endforeach; ?>
</div>