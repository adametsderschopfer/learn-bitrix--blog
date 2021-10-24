<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}
/**
 * @var $arResult
 * */

$chunkedItems = array_chunk($arResult["ITEMS"], 2);
$arResult["ITEMS"] = $chunkedItems;
unset($chunkedItems);

