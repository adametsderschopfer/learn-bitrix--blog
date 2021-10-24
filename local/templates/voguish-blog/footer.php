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

    <!--start-twitter-weight-->
    <div class="twitter-weights">
        <h3>Tweet Widget</h3>
        <div class="twitter-weight-grid">
            <h4><span> </span>John Doe</h4>
            <p>Lorem ipsum dolor sit amet, consectetur elit,labore et dolore magna aliqua. <a href="#">http://t.co/h12k</a></p>
            <i><a href="#">2 days ago</a></i>
        </div>
        <div class="twitter-weight-grid">
            <h4><span> </span>John Doe</h4>
            <p>Lorem ipsum dolor sit amet, consectetur elit,labore et dolore magna aliqua. <a href="#">http://t.co/h12k</a></p>
            <i><a href="#">2 days ago</a></i>
        </div>
        <a class="twittbtn" href="#">See all Tweets</a>
    </div>
    <!--//End-twitter-weight-->
    <!-- start-tag-weight-->
    <div class="b-tag-weight">
        <h3>Tags Weight</h3>
        <ul>
            <li><a href="#">Lorem</a></li>
            <li><a href="#">consectetur</a></li>
            <li><a href="#">dolore</a></li>
            <li><a href="#">aliqua</a></li>
            <li><a href="#">sit amet</a></li>
            <li><a href="#">ipsum</a></li>
            <li><a href="#">Lorem</a></li>
            <li><a href="#">consectetur</a></li>
            <li><a href="#">dolore</a></li>
            <li><a href="#">aliqua</a></li>
            <li><a href="#">sit amet</a></li>
            <li><a href="#">ipsum</a></li>
        </ul>
    </div>
    <!---- //End-tag-weight---->
</div>
<div class="clearfix"> </div>

</div>
</div>
<!-- /Blog -->

<div class="footer">
    <div class="col-md-3 foot-1">
        <h4>Quick Links</h4>
        <ul>
            <li><a href="#">||   Lorem Ipsum passage</a></li>
            <li><a href="#">||   Finibus Bonorum et</a></li>
            <li><a href="#">||   Treatise on the theory</a></li>
        </ul>
    </div>
    <div class="col-md-3 foot-1">
        <h4>Favorite Resources</h4>
        <ul>
            <li><a href="#">||   Characteristic words</a></li>
            <li><a href="#">||   combined with a handful</a></li>
            <li><a href="#">||   which looks reasonable</a></li>
        </ul>
    </div>
    <div class="col-md-3 foot-1">
        <h4>About Us</h4>
        <ul>
            <li><a href="#">||  Even slightly believable</a></li>
            <li><a href="#">||  Hidden in the middle</a></li>
            <li><a href="#">||  Ipsum therefore always</a></li>
        </ul>
    </div>
    <div class="col-md-3 foot-1">
        <h4>Custom Menu</h4>
        <ul>
            <li><a href="#">||  Internet tend to repeat</a></li>
            <li><a href="#">||  Alteration in some form</a></li>
            <li><a href="#">||  This book is a treatise</a></li>
        </ul>
    </div>

    <div class="clearfix"> </div>
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
</div>
</div>
</body>
</html>
