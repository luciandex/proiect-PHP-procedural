<?php
// Page Options/Settings
//$footerLinks = ['Search Results' => "javascript:void(0)"];
//$hasFooterLnk = true;

$quickLinks1 = 'WHERE `parent_id` = 3';
$quickLinks2 = 'WHERE `parent_id` = 4';

?>

<?php require_once "php_project.php"; ?>

<?php include_once "lib/footer-help-bar.php"; ?>

<?php include_once "lib/partners.php"; ?>

<!-- start footer section -->
<footer class="no-padding-bottom">


    <div class="container">
        <div class="row">

            <div class="col-lg-4 col-md-6 sm-margin-30px-bottom">

                <img alt="footer-logo" src="/img/logo.png">
                <p class="margin-25px-top margin-20px-bottom">Nemo enim enim voluptatem quia voluptas sit aspernatur aut
                    odit aut fugit, sed quia consequr magni dolores eos qui ratione voluptatem.</p>
                <ul class="footer-list">
                    <li>
                        <span class="d-inline-block vertical-align-top font-size18"><i
                                    class="fas fa-map-marker-alt text-theme-color"></i></span>
                        <span class="d-inline-block width-85 vertical-align-top padding-10px-left">74 Guild Street 542B, Great North MT.</span>
                    </li>
                    <li>
                        <span class="d-inline-block vertical-align-top font-size18"><i
                                    class="fas fa-mobile-alt text-theme-color"></i></span>
                        <span class="d-inline-block width-85 vertical-align-top padding-10px-left">(+40) 21 254 654</span>
                    </li>
                    <li>
                        <span class="d-inline-block vertical-align-top font-size18"><i
                                    class="far fa-envelope text-theme-color"></i></span>
                        <span class="d-inline-block width-85 vertical-align-top padding-10px-left">office@numismaticwt.com</span>
                    </li>
                </ul>

            </div>

            <div class="col-lg-4 col-md-6 sm-margin-30px-bottom">
                <h3 class="text-white">Quick Links</h3>
                <div class="row">
                    <div class="col-md-6 no-padding-right xs-padding-15px-right">
                        <ul class="footer-list">

                            <?php
                            getLinksFromDB($conn, "menu_items", '<li><a href="', 'url', '">', $quickLinks1, 'text', '</a></li>');
                            ?>

                        </ul>
                    </div>

                    <div class="col-md-6 no-padding-right xs-padding-15px-right">
                        <ul class="footer-list">

                            <?php
                            getLinksFromDB($conn, "menu_items", '<li><a href="', 'url', '">', $quickLinks2, 'text', '</a></li>');
                            ?>

                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="padding-30px-left sm-no-padding-left">
                    <h3 class="text-white">Newsletter</h3>
                    <p class="margin-20px-bottom">Nemo enim enim voluptatem quia voluptas sit aspernatur.</p>
                    <p class="margin-20px-bottom">Odit aut fugit, sed quia consequr magni dolores eos qui ratione.</p>
                    <form>
                        <div class="form-group footer-subscribe">
                            <input type="email" placeholder="Subscribe with us" id="Email1" class="form-control">
                            <a class="butn theme grey-hover"><span>Join</span></a>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

    <div class="footer-bar no-margin-top"> <!-- no-margin-top added -->
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-left xs-text-center xs-margin-5px-bottom">
                    <div class="footer-social-icons small">
                        <ul>

                            <?php include "lib/social-media.php"; ?>

                        </ul>
                    </div>
                </div>
                <div class="col-md-6 text-right xs-text-center">
                    <p class="xs-margin-5px-top xs-font-size13">
                        &copy; 2019 - <?php echo date('Y') ?> Numismatic World & Trade</p>
                </div>
            </div>
        </div>
    </div>

</footer>
<!-- end footer section -->

</div>
<!-- end main-wrapper section -->

<!-- start scroll to top -->
<a href="javascript:void(0)" class="scroll-to-top"><i class="fas fa-angle-up" aria-hidden="true"></i></a>
<!-- end scroll to top -->

<!-- all js include start -->

<!-- Java script -->
<script src="/js/core.min.js"></script>

<!-- search -->
<script src="/search/search.js"></script>

<!-- zoom js -->
<script src="/js/xzoom.js"></script>

<!-- hammer js -->
<script src="/js/jquery.hammer.min.js"></script>

<!-- custom scripts -->
<script src="/js/main.js"></script>

<!-- all js include end -->

</body>

</html>