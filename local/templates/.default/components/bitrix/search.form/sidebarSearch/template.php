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
$this->setFrameMode(true); ?>

<div class="b-search">
    <form action="<?= $arResult["FORM_ACTION"] ?>">
        <input
                type="text"
                value="Search"
                name="q"
                onfocus="this.value = '';"
                onblur="if (this.value === '') this.value = 'Search';"
        >
        <input type="submit" name="s" value="">
    </form>
</div>

