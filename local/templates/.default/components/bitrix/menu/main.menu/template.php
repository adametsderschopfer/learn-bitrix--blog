<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

/** @var array $arParams */
?>

<?php if (!empty($arResult)): ?>
    <div class="head-nav">
        <span class="menu"></span>
        <ul class="cl-effect-1">
            <?php foreach ($arResult as $arItem): ?>
                <?php if ($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1) {
                    continue;
                }
                ?>

                <li <?= $arItem["SELECTED"] ? "class='active'" : "" ?>>
                    <a href="<?= $arItem["LINK"] ?>"><?= $arItem["TEXT"] ?></a>
                </li>
            <?php endforeach ?>
            <div class="clearfix"></div>
        </ul>
    </div>
<?php endif ?>
