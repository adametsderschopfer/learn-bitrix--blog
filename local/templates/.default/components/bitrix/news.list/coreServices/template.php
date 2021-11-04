<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

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

<div class="grid_1 text-center">
    <h3 class="m_3">Our Core Services</h3>

    <div class="clearfix"></div>
    <?php foreach ($arResult["ITEMS"] as $arItem): ?>
        <?php
        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
        ?>
        <div class="col-md-4 box_1" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
            <img src="<?= $arItem['DETAIL_PICTURE']['SRC'] ?>" width="64px" height="64px" alt="">
            <h3><?= $arItem['NAME'] ?></h3>
            <p>
                <?= $arItem['DETAIL_TEXT'] ?>
            </p>
        </div>
    <?php endforeach; ?>
    <div class="clearfix"></div>
</div>
