<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

global $APPLICATION;
?>

<?php if (ERROR_404 !== "Y"): ?>
    </div>
    <div class="col-md-3 bann-left">
        <?php $APPLICATION->IncludeComponent(
            "bitrix:search.form",
            "sidebarSearch",
            array(
                "PAGE" => "#SITE_DIR#search/index.php",
                "USE_SUGGEST" => "N",
            ),
            false
        ); ?>

        <?php
        $APPLICATION->IncludeComponent(
            "bitrix:news.list",
            "sidebarRecentPosts",
            array(
                "COMPONENT_TEMPLATE" => "sidebarRecentPosts",
                "IBLOCK_TYPE" => "content",
                "IBLOCK_ID" => "3",
                "NEWS_COUNT" => "3",
                "SORT_BY1" => "ACTIVE_FROM",
                "SORT_ORDER1" => "DESC",
                "SORT_BY2" => "SORT",
                "SORT_ORDER2" => "ASC",
                "FILTER_NAME" => "",
                "FIELD_CODE" => array(
                    0 => "",
                    1 => "",
                ),
                "PROPERTY_CODE" => array(
                    0 => "",
                    1 => "",
                ),
                "CHECK_DATES" => "Y",
                "DETAIL_URL" => "",
                "AJAX_MODE" => "N",
                "AJAX_OPTION_JUMP" => "N",
                "AJAX_OPTION_STYLE" => "N",
                "AJAX_OPTION_HISTORY" => "N",
                "AJAX_OPTION_ADDITIONAL" => "",
                "CACHE_TYPE" => "A",
                "CACHE_TIME" => "36000000",
                "CACHE_FILTER" => "N",
                "CACHE_GROUPS" => "Y",
                "PREVIEW_TRUNCATE_LEN" => "",
                "ACTIVE_DATE_FORMAT" => "d.m.Y",
                "SET_TITLE" => "N",
                "SET_BROWSER_TITLE" => "N",
                "SET_META_KEYWORDS" => "N",
                "SET_META_DESCRIPTION" => "N",
                "SET_LAST_MODIFIED" => "N",
                "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                "ADD_SECTIONS_CHAIN" => "N",
                "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                "PARENT_SECTION" => "",
                "PARENT_SECTION_CODE" => "",
                "INCLUDE_SUBSECTIONS" => "Y",
                "STRICT_SECTION_CHECK" => "N",
                "DISPLAY_DATE" => "Y",
                "DISPLAY_NAME" => "Y",
                "DISPLAY_PICTURE" => "Y",
                "DISPLAY_PREVIEW_TEXT" => "Y",
                "PAGER_TEMPLATE" => ".default",
                "DISPLAY_TOP_PAGER" => "N",
                "DISPLAY_BOTTOM_PAGER" => "N",
                "PAGER_TITLE" => "Новости",
                "PAGER_SHOW_ALWAYS" => "N",
                "PAGER_DESC_NUMBERING" => "N",
                "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                "PAGER_SHOW_ALL" => "N",
                "PAGER_BASE_LINK_ENABLE" => "N",
                "SET_STATUS_404" => "N",
                "SHOW_404" => "N",
                "MESSAGE_404" => ""
            ),
            false
        ); ?>

        <?php $APPLICATION->IncludeComponent(
            "bitrix:catalog.section.list",
            "sidebarCategoryList",
            array(
                "ADD_SECTIONS_CHAIN" => "Y",
                "CACHE_FILTER" => "N",
                "CACHE_GROUPS" => "Y",
                "CACHE_TIME" => "36000000",
                "CACHE_TYPE" => "A",
                "COUNT_ELEMENTS" => "Y",
                "COUNT_ELEMENTS_FILTER" => "CNT_ACTIVE",
                "FILTER_NAME" => "sectionsFilter",
                "IBLOCK_ID" => "3",
                "IBLOCK_TYPE" => "content",
                "SECTION_CODE" => "",
                "SECTION_FIELDS" => array(
                    0 => "",
                    1 => "",
                ),
                "SECTION_ID" => $_REQUEST["SECTION_ID"],
                "SECTION_URL" => "",
                "SECTION_USER_FIELDS" => array(
                    0 => "",
                    1 => "",
                ),
                "SHOW_PARENT_NAME" => "Y",
                "TOP_DEPTH" => "1",
                "VIEW_MODE" => "LINE",
                "COMPONENT_TEMPLATE" => "sidebarCategoryList"
            ),
            false
        ); ?>

        <h3>Newsletter</h3>

        <div class="blo-top">
            <div class="name">
                <form>
                    <input type="text" placeholder="email" required="">
                </form>
            </div>
            <div class="button">
                <form>
                    <input type="submit" value="Subscribe">
                </form>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>

    <?php if ($APPLICATION->GetProperty('INDEX_PAGE') == "Y"): ?>
        <div class="clearfix"></div>
        <div class="fle-xsel">
            <ul id="flexiselDemo3">
                <li>
                    <a href="#">
                        <div class="banner-1">
                            <img src="<?= SITE_TEMPLATE_DEFAULT ?>/layout/images/6.jpg" class="img-responsive" alt="">
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <div class="banner-1">
                            <img src="<?= SITE_TEMPLATE_DEFAULT ?>/layout/images/5.jpg" class="img-responsive" alt="">
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <div class="banner-1">
                            <img src="<?= SITE_TEMPLATE_DEFAULT ?>/layout/images/1.jpg" class="img-responsive" alt="">
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <div class="banner-1">
                            <img src="<?= SITE_TEMPLATE_DEFAULT ?>/layout/images/4.jpg" class="img-responsive" alt="">
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <div class="banner-1">
                            <img src="<?= SITE_TEMPLATE_DEFAULT ?>/layout/images/6.jpg" class="img-responsive" alt="">
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <div class="banner-1">
                            <img src="<?= SITE_TEMPLATE_DEFAULT ?>/layout/images/1.jpg" class="img-responsive" alt="">
                        </div>
                    </a>
                </li>
            </ul>

            <script type="text/javascript">
                $(window).load(function () {

                    $("#flexiselDemo3").flexisel({
                        visibleItems: 5,
                        animationSpeed: 1000,
                        autoPlay: true,
                        autoPlaySpeed: 3000,
                        pauseOnHover: true,
                        enableResponsiveBreakpoints: true,
                        responsiveBreakpoints: {
                            portrait: {
                                changePoint: 480,
                                visibleItems: 2
                            },
                            landscape: {
                                changePoint: 640,
                                visibleItems: 3
                            },
                            tablet: {
                                changePoint: 768,
                                visibleItems: 3
                            }
                        }
                    });

                });
            </script>
            <div class="clearfix"></div>
        </div>
    <?php endif; ?>

<?php endif; ?>

<footer class="footer">
    <div class="col-md-3 foot-1">
        <h4>Quick Links</h4>
        <ul>
            <li><a href="#">|| Lorem Ipsum passage</a></li>
            <li><a href="#">|| Finibus Bonorum et</a></li>
            <li><a href="#">|| Treatise on the theory</a></li>
        </ul>
    </div>
    <div class="col-md-3 foot-1">
        <h4>Favorite Resources</h4>
        <ul>
            <li><a href="#">|| Characteristic words</a></li>
            <li><a href="#">|| combined with a handful</a></li>
            <li><a href="#">|| which looks reasonable</a></li>
        </ul>
    </div>
    <div class="col-md-3 foot-1">
        <h4>About Us</h4>
        <ul>
            <li><a href="#">|| Even slightly believable</a></li>
            <li><a href="#">|| Hidden in the middle</a></li>
            <li><a href="#">|| Ipsum therefore always</a></li>
        </ul>
    </div>
    <div class="col-md-3 foot-1">
        <h4>Custom Menu</h4>
        <ul>
            <li><a href="#">|| Internet tend to repeat</a></li>
            <li><a href="#">|| Alteration in some form</a></li>
            <li><a href="#">|| This book is a treatise</a></li>
        </ul>
    </div>

    <div class="clearfix"></div>
    <div class="copyright">
        <?php $APPLICATION->IncludeComponent(
            "bitrix:main.include",
            ".default",
            [
                "AREA_FILE_SHOW" => "file",
                "PATH" => SITE_TEMPLATE_DEFAULT . "/include/footer/copyrights.php",
                "EDIT_TEMPLATE" => ""
            ], false) ?>
    </div>
</footer>

</main>

<script type="application/x-javascript">
    window.addEventListener("load", function () {
        setTimeout(hideURLbar, 0);
    }, false);

    function hideURLbar() {
        window.scrollTo(0, 1);
    }
</script>

<script>
    $(function () {
        $("#slider").responsiveSlides({
            auto: true,
            nav: true,
            speed: 500,
            namespace: "callbacks",
            pager: true,
        });
    });
</script>

</body>
</html>
