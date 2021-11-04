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

<div class="banner">
    <div class="header-slider">
        <div class="slider">
            <div class="callbacks_container">
                <ul class="rslides" id="slider">
                    <? foreach ($arResult["ITEMS"] as $arItem): ?>
                        <?
                        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));

                        $detailPicture = CFile::ResizeImageGet(
                            $arItem["PREVIEW_PICTURE"],
                            [
                                "width" => 795,
                                "height" => 500,
                            ],
                            BX_RESIZE_IMAGE_EXACT,
                            true
                        );

                        $arItem["PREVIEW_PICTURE"]['SRC'] = $detailPicture['src'];
                        unset($detailPicture);
                        ?>

                        <li id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
                            <img
                                    src="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>"
                                    alt="<?= $arItem["PREVIEW_PICTURE"]["ALT"] ?>"
                                    title="<?= $arItem["PREVIEW_PICTURE"]["TITLE"] ?>"
                                    class="img-responsive"
                            >

                            <div class="caption">
                                <h3><?= $arItem["NAME"] ?></h3>
                                <p>
                                    <?= TruncateText($arItem["PREVIEW_TEXT"], 200); ?>
                                </p>
                                <br>
                            </div>
                        </li>
                    <? endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
</div>
