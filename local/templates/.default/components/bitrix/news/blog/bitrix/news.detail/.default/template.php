<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
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

$commentsCount = $arResult["PROPERTIES"]["BLOG_COMMENTS_CNT"]["VALUE"];
?>


<?php if ($arParams["DISPLAY_PICTURE"] != "N" && is_array($arResult["DETAIL_PICTURE"])): ?>
    <img
            alt="<?= $arResult["DETAIL_PICTURE"]["ALT"] ?>"
            title="<?= $arResult["DETAIL_PICTURE"]["TITLE"] ?>"
            src="<?= $arResult["DETAIL_PICTURE"]["SRC"] ?>"
            class="img-responsive"
    />
<?php endif ?>

<p id="__content__">
    <?php if ($arResult["DETAIL_TEXT"] <> ''): ?>
        <?= $arResult["DETAIL_TEXT"]; ?>
    <?php endif; ?>
</p>

<br>

<div class="artical-links">
    <ul>
        <?php if ($arParams["DISPLAY_DATE"] != "N" && $arResult["DISPLAY_ACTIVE_FROM"]): ?>
            <li><small> </small><span><?= $arResult["DISPLAY_ACTIVE_FROM"] ?></span></li>
        <?php endif; ?>
        <li><a href="javascript:void(0)"><small
                        class="admin"> </small><span><?= $arResult["DISPLAY_PROPERTIES"]["AUTHOR"]["VALUE"] ?? "Administrator" ?></span></a>
        </li>
        <li><a href="javascript:void(0)"><small class="no"> </small><span><?= $commentsCount ? $commentsCount . ' Comments' : "No comments" ?></span></a></li>
        <li><a href="javascript:void(0)"><small class="posts"> </small><span>View posts: <?= $arResult["SHOW_COUNTER"] ?: 0 ?></span></a></li>
    </ul>
</div>
