<?php

use Bitrix\Main\Localization\Loc;

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
<noindex>
    <div class="b-tag-weight">
        <h3>Tags Weight</h3>
        <ul>
            <?php if ($arParams["SHOW_CHAIN"] != "N" && !empty($arResult["TAGS_CHAIN"])): ?>
                <?php foreach ($arResult["TAGS_CHAIN"] as $tags): ?>
                    <li>
                        <a href="<?= $tags["TAG_PATH"] ?>" rel="nofollow"><?= $tags["TAG_NAME"] ?></a>
                    </li>
                <?php endforeach; ?>
            <?php endif; ?>

            <?php if (is_array($arResult["SEARCH"]) && !empty($arResult["SEARCH"])): ?>
                <?php foreach ($arResult["SEARCH"] as $key => $res): ?>
                    <li>
                        <a href="<?= $res["URL"] ?>" rel="nofollow"><?= $res["NAME"] ?></a>
                    </li>
                <?php endforeach; ?>
            <?php else: ?>
                <li>
                    <span><?= Loc::getMessage("SEARCH_NOTHING_TO_FOUND") ?></span>
                </li>
            <?php endif; ?>
        </ul>
    </div>
</noindex>
