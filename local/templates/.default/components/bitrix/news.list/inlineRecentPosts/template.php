<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
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

<div class="nam-matis">
    <?php foreach ($arResult['ITEMS'] as $arChunk): ?>
        <div class="nam-matis-top">
            <?php foreach ($arChunk as $arItem): ?>
                <?php
                $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));

                $detailPicture = CFile::ResizeImageGet(
                    $arItem["PREVIEW_PICTURE"],
                    [
                        "width" => 365,
                        "height" => 230,
                    ],
                    BX_RESIZE_IMAGE_EXACT,
                    true
                );

                $arItem["PREVIEW_PICTURE"]['SRC'] = $detailPicture['src'];
                unset($detailPicture);
                ?>

                <div class="col-md-6 nam-matis-1" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
                    <a href="<?= $arItem["DETAIL_PAGE_URL"] ?>">
                        <img
                                src="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>"
                                alt="<?= $arItem["PREVIEW_PICTURE"]["ALT"] ?>"
                                title="<?= $arItem["PREVIEW_PICTURE"]["TITLE"] ?>"
                                class="img-responsive"
                        >
                    </a>
                    <h3><a href="<?= $arItem["DETAIL_PAGE_URL"] ?>"><?= $arItem["NAME"] ?></a></h3>
                    <p>
                        <?= TruncateText($arItem['PREVIEW_TEXT'], 170) ?>
                    </p>
                </div>
            <?php endforeach; ?>

            <div class="clearfix">
            </div>
        </div>
    <?php endforeach; ?>
</div>
