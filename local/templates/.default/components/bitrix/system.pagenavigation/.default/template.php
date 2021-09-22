<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

$strNavQueryString = ($arResult["NavQueryString"] != "" ? $arResult["NavQueryString"] . "&amp;" : "");
$strNavQueryStringFull = ($arResult["NavQueryString"] != "" ? "?" . $arResult["NavQueryString"] : "");

if ($arResult["NavPageCount"] > 1) {
    ?>
    <nav>
        <ul class="pagination">
            <?
            if ($arResult["bDescPageNumbering"] === true):
                $bFirst = true;
                if ($arResult["NavPageNomer"] < $arResult["NavPageCount"]):
                    if ($arResult["bSavePage"]):
                        ?>
                        <li>
                            <a href="<?= $arResult["sUrlPath"] ?>?<?= $strNavQueryString ?>PAGEN_<?= $arResult["NavNum"] ?>=<?= ($arResult["NavPageNomer"] + 1) ?>"
                               aria-label="Previous">
                                <span aria-hidden="true">«</span>
                            </a>
                        </li>
                    <?
                    else:
                        if ($arResult["NavPageCount"] == ($arResult["NavPageNomer"] + 1)):
                            ?>
                            <li>
                                <a href="<?= $arResult["sUrlPath"] ?><?= $strNavQueryStringFull ?>"
                                   aria-label="Previous">
                                    <span aria-hidden="true">«</span>
                                </a>
                            </li>
                        <?
                        else:
                            ?>
                            <li>
                                <a href="<?= $arResult["sUrlPath"] ?>?<?= $strNavQueryString ?>PAGEN_<?= $arResult["NavNum"] ?>=<?= ($arResult["NavPageNomer"] + 1) ?>"
                                   aria-label="Previous">
                                    <span aria-hidden="true">«</span>
                                </a>
                            </li>
                        <?
                        endif;
                    endif;
                    ?>
                    <?

                    if ($arResult["nStartPage"] < $arResult["NavPageCount"]):
                        $bFirst = false;
                        if ($arResult["bSavePage"]):
                            ?>
                            <li><a href="#">1</a></li>
                            <li>
                                <a href="<?= $arResult["sUrlPath"] ?>?<?= $strNavQueryString ?>PAGEN_<?= $arResult["NavNum"] ?>=<?= $arResult["NavPageCount"] ?>">1</a>
                            </li>
                        <?
                        else:
                            ?>
                            <li><a href="<?= $arResult["sUrlPath"] ?><?= $strNavQueryStringFull ?>">1</a></li>
                        <?
                        endif;
                        ?>
                        <?
                        if ($arResult["nStartPage"] < ($arResult["NavPageCount"] - 1)):
                            ?>
                            <!--                            <span class="blog-page-dots">...</span>-->
                        <?
                        endif;
                    endif;
                endif;
                do {
                    $NavRecordGroupPrint = $arResult["NavPageCount"] - $arResult["nStartPage"] + 1;

                    if ($arResult["nStartPage"] == $arResult["NavPageNomer"]):
                        ?>
                        <li class="active">
                            <a href="javascript:void(0)"><?= $NavRecordGroupPrint ?></a>
                        </li>
                    <?
                    elseif ($arResult["nStartPage"] == $arResult["NavPageCount"] && $arResult["bSavePage"] == false):
                        ?>
                        <li>
                            <a href="<?= $arResult["sUrlPath"] ?><?= $strNavQueryStringFull ?>"><?= $NavRecordGroupPrint ?></a>
                        </li>
                    <?
                    else:
                        ?>
                        <li>
                            <a href="<?= $arResult["sUrlPath"] ?>?<?= $strNavQueryString ?>PAGEN_<?= $arResult["NavNum"] ?>=<?= $arResult["nStartPage"] ?>"><?= $NavRecordGroupPrint ?></a>
                        </li>

                    <?
                    endif;
                    ?>
                    <?

                    $arResult["nStartPage"]--;
                    $bFirst = false;
                } while ($arResult["nStartPage"] >= $arResult["nEndPage"]);

                if ($arResult["NavPageNomer"] > 1):
                    if ($arResult["nEndPage"] > 1):
                        if ($arResult["nEndPage"] > 2):
                            ?>
                            <!--                            <span class="blog-page-dots">...</span>-->
                        <?
                        endif;
                        ?>
                        <li>
                            <a href="<?= $arResult["sUrlPath"] ?>?<?= $strNavQueryString ?>PAGEN_<?= $arResult["NavNum"] ?>=1"><?= $arResult["NavPageCount"] ?></a>
                        </li>
                    <?
                    endif;

                    ?>
                    <li>
                        <a href="<?= $arResult["sUrlPath"] ?>?<?= $strNavQueryString ?>PAGEN_<?= $arResult["NavNum"] ?>=<?= ($arResult["NavPageNomer"] - 1) ?>"
                           aria-label="Next">
                            <span aria-hidden="true">»</span>
                        </a>
                    </li>
                <?
                endif;

            else:
                $bFirst = true;

                if ($arResult["NavPageNomer"] > 1):
                    if ($arResult["bSavePage"]):
                        ?>
                        <li>
                            <a href="<?= $arResult["sUrlPath"] ?>?<?= $strNavQueryString ?>PAGEN_<?= $arResult["NavNum"] ?>=<?= ($arResult["NavPageNomer"] - 1) ?>"
                               aria-label="Previous">
                                <span aria-hidden="true">«</span>
                            </a>
                        </li>
                    <?
                    else:
                        if ($arResult["NavPageNomer"] > 2):
                            ?>
                            <li>
                                <a href="<?= $arResult["sUrlPath"] ?>?<?= $strNavQueryString ?>PAGEN_<?= $arResult["NavNum"] ?>=<?= ($arResult["NavPageNomer"] - 1) ?>"
                                   aria-label="Previous">
                                    <span aria-hidden="true">«</span>
                                </a>
                            </li>
                        <?
                        else:
                            ?>
                            <li>
                                <a href="<?= $arResult["sUrlPath"] ?><?= $strNavQueryStringFull ?>"
                                   aria-label="Previous">
                                    <span aria-hidden="true">«</span>
                                </a>
                            </li>
                        <?
                        endif;

                    endif;
                    ?>
                    <?

                    if ($arResult["nStartPage"] > 1):
                        $bFirst = false;
                        if ($arResult["bSavePage"]):
                            ?>
                            <li>
                                <a href="<?= $arResult["sUrlPath"] ?>?<?= $strNavQueryString ?>PAGEN_<?= $arResult["NavNum"] ?>=1">1</a>
                            </li>
                        <?
                        else:
                            ?>
                            <li>
                                <a href="<?= $arResult["sUrlPath"] ?><?= $strNavQueryStringFull ?>">1</a>
                            </li>
                        <?
                        endif;
                        ?>
                        <?
                        if ($arResult["nStartPage"] > 2):
                            ?>
                            <!--                            <span class="blog-page-dots">...</span>-->
                        <?
                        endif;
                    endif;
                endif;

                do {
                    if ($arResult["nStartPage"] == $arResult["NavPageNomer"]):
                        ?>
                        <li class="active">
                            <a href="javascript:void(0)"><?= $arResult["nStartPage"] ?></a>
                        </li>
                    <?
                    elseif ($arResult["nStartPage"] == 1 && $arResult["bSavePage"] == false):
                        ?>
                        <li>
                            <a href="<?= $arResult["sUrlPath"] ?><?= $strNavQueryStringFull ?>"><?= $arResult["nStartPage"] ?></a>
                        </li>
                    <?
                    else:
                        ?>
                        <li>
                            <a href="<?= $arResult["sUrlPath"] ?>?<?= $strNavQueryString ?>PAGEN_<?= $arResult["NavNum"] ?>=<?= $arResult["nStartPage"] ?>">
                                <?= $arResult["nStartPage"] ?>
                            </a>
                        </li>
                    <?
                    endif;
                    ?>
                    <?
                    $arResult["nStartPage"]++;
                    $bFirst = false;
                } while ($arResult["nStartPage"] <= $arResult["nEndPage"]);

                if ($arResult["NavPageNomer"] < $arResult["NavPageCount"]):
                    if ($arResult["nEndPage"] < $arResult["NavPageCount"]):
                        if ($arResult["nEndPage"] < ($arResult["NavPageCount"] - 1)):
                            ?>
<!--                            <span class="blog-page-dots">...</span>-->
                        <?
                        endif;
                        ?>
                    <li>
                        <a href="<?= $arResult["sUrlPath"] ?>?<?= $strNavQueryString ?>PAGEN_<?= $arResult["NavNum"] ?>=<?= $arResult["NavPageCount"] ?>">
                            <?= $arResult["NavPageCount"] ?>
                        </a>
                    </li>
                    <?
                    endif;
                    ?>
                    <li>
                        <a href="<?= $arResult["sUrlPath"] ?>?<?= $strNavQueryString ?>PAGEN_<?= $arResult["NavNum"] ?>=<?= ($arResult["NavPageNomer"] + 1) ?>">
                            <span aria-hidden="true">»</span>
                        </a>
                    </li>
                <?
                endif;
            endif;

            if ($arResult["bShowAll"]):
                if ($arResult["NavShowAll"]):
                    ?>
                <li>
                    <a href="<?= $arResult["sUrlPath"] ?>?<?= $strNavQueryString ?>SHOWALL_<?= $arResult["NavNum"] ?>=0"><?= GetMessage("nav_paged") ?> qweqwe</a>
                </li>
                    <a class="blog-page-pagen"
                       ></a>
                <?
                else:
                    ?>
                <li>
                    <a href="<?= $arResult["sUrlPath"] ?>?<?= $strNavQueryString ?>SHOWALL_<?= $arResult["NavNum"] ?>=1"><?= GetMessage("nav_all") ?> rtyrty</a>
                </li>
                <?
                endif;
            endif
            ?>
        </ul>
    </nav>
    <?
}
?>