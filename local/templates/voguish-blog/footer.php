<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

global $APPLICATION;
?>

</div>
<div class="blog-content-right">
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
	"bitrix:search.tags.cloud", 
	"tags", 
	array(
		"CACHE_TIME" => "3600",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "N",
		"COLOR_NEW" => "3E74E6",
		"COLOR_OLD" => "C0C0C0",
		"COLOR_TYPE" => "N",
		"FILTER_NAME" => "",
		"FONT_MAX" => "50",
		"FONT_MIN" => "10",
		"PAGE_ELEMENTS" => "15",
		"PERIOD" => "",
		"PERIOD_NEW_TAGS" => "",
		"SHOW_CHAIN" => "N",
		"SORT" => "CNT",
		"TAGS_INHERIT" => "Y",
		"URL_SEARCH" => "/search/index.php",
		"WIDTH" => "100%",
		"arrFILTER" => array(
		),
		"COMPONENT_TEMPLATE" => "tags"
	),
	false
); ?>

</div>
<div class="clearfix"></div>

</div>
</div>
<!-- /Blog -->

<div class="footer">
    <div class="copyright">
        <?php $APPLICATION->IncludeComponent(
            "bitrix:main.include",
            ".default",
            [
                "AREA_FILE_SHOW" => "file",
                "PATH" => SITE_TEMPLATE_DEFAULT . "/include/footer/copyrights.php",
                "EDIT_TEMPLATE" => "",
                "COMPONENT_TEMPLATE" => ".default"
            ], false) ?>
    </div>
</div>
</div>
</body>
</html>
