<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
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

<div class="blog-articals">
    <?php foreach ($arResult["ITEMS"] as $arItem) : ?>
        <?php
        $LINK = $arItem["DETAIL_PAGE_URL"] ?? "javascript:void(0)";
        $AUTHOR = $arItem["DISPLAY_PROPERTIES"]["AUTHOR"]["VALUE"] ?? "Administrator";

        $this->AddEditAction(
            $arItem['ID'],
            $arItem['EDIT_LINK'],
            CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT")
        );
        $this->AddDeleteAction(
            $arItem['ID'],
            $arItem['DELETE_LINK'],
            CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"),
            array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM'))
        );
        ?>

        <div class="blog-artical" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
            <div class="blog-artical-info">
                <?php if ($arParams["DISPLAY_PICTURE"] != "N" && is_array($arItem["PREVIEW_PICTURE"])): ?>
                    <div class="blog-artical-info-img">
                        <a href="<?= $LINK ?>">
                            <img src="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>" title="<?= $arItem["NAME"] ?>" />
                        </a>
                    </div>
                <?php endif ?>
                <div class="blog-artical-info-head">
                    <h2>
                        <?php if ($arParams["DISPLAY_NAME"] != "N" && $arItem["NAME"]): ?>
                            <?php if (!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])): ?>
                                <a href="<?= $arItem["DETAIL_PAGE_URL"] ?>"><b><?= $arItem["NAME"] ?></b></a>
                            <?php else: ?>
                                <b><?= $arItem["NAME"] ?></b><br/>
                            <?php endif; ?>
                        <?php endif; ?>
                    </h2>

                    <?php if ($arParams["DISPLAY_DATE"] != "N" && $arItem["DISPLAY_ACTIVE_FROM"]): ?>
                        <h6>Posted on, <?= $arItem["DISPLAY_ACTIVE_FROM"] ?> by <a href="#"><?= $AUTHOR ?></a></h6>
                    <?php endif ?>
                </div>

                <?php if ($arParams["DISPLAY_PREVIEW_TEXT"] != "N" && $arItem["PREVIEW_TEXT"]): ?>
                    <div class="blog-artical-info-text">
                        <p>
                            <?= $arItem["PREVIEW_TEXT"]; ?>
                        </p>
                    </div>
                <?php endif; ?>

                <div class="artical-links">
                    <ul>
                        <?php if ($arParams["DISPLAY_DATE"] != "N" && $arItem["DISPLAY_ACTIVE_FROM"]): ?>
                            <li><small></small><span><?= $arItem["DISPLAY_ACTIVE_FROM"] ?></span></li>
                        <?php endif ?>

                        <li>
                            <a href="javascript:void(0)">
                                <small class="admin"></small>
                                <span><?= $AUTHOR ?></span>
                            </a>
                        </li>
                        <li><a href="javascript:void(0)"><small class="no"></small><span>No comments</span></a></li>
                        <li><a href="javascript:void(0)"><small class="posts"></small><span>View posts: <?= $arItem["SHOW_COUNTER"] ?: 0 ?></span></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    <?php endforeach; ?>

    <?php if ($arParams["DISPLAY_BOTTOM_PAGER"]): ?>
        <?= $arResult["NAV_STRING"] ?>
    <?php endif; ?>
</div>
