<?php

// Page Options/Settings
$pageTitle = "Home"; // getPageName()
$menulnk = [];
$hasHeadline = false;


?>

<?php include_once "header-footer/header.php"; ?>

    <!-- start banner section-->
    <section class="bg-img banner-section cover-background full-screen" data-overlay-dark="6"
             data-background="img/banner.jpg">

        <div class="container absolute-middle-center z-index-9">

            <div class="row">
                <div class="col-lg-7 sm-margin-40px-bottom">
                    <h1 class="font-size50 md-font-size42 sm-font-size38 xs-font-size30 font-weight-800 text-white">Take
                        direction of your business success.</h1>
                    <p class="width-95 xs-width-100 font-size16 xs-display-none line-height-30 xs-font-size14 xs-line-height-26 font-size20 text-white">
                        Trusted and professional business consultant to fulfill your dreams with latest technology
                        putting on project.</p>
                    <div class="margin-30px-top sm-margin-25px-top"><a href="javascript:void(0)"
                                                                       class="butn theme white-hover"><span>Get Started</span></a>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="display-table sm-display-inherit height-100 center-col">
                        <div class="display-table-cell vertical-align-middle">
                            <div class="display-inline-block about-video vertical-align-middle">
                                <a class="video video_btn video_btn-style1 small" href="about.php"><i
                                            class="fas fa-play"></i></a>
                            </div>
                            <div class="display-inline-block vertical-align-middle font-weight-700 font-size16 xs-font-size14 margin-25px-left text-white">
                                Watch<span class="text-uppercase display-block">intro video</span></div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- start banner shape -->
        <div class="banner-shape">
            <img src="img/banner-shape.png" alt=""/>
        </div>
        <!-- end banner shape -->

    </section>
    <!-- end banner section-->

    <!-- start about section -->
    <section class="zigzag-section">
        <div class="container">
            <div class="row align-items-center no-gutters">
                <div class="col-lg-6 col-sm-12">
                    <img src="img/content/about-05.jpg" alt=""/>
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="padding-20px-tb padding-60px-lr md-padding-30px-lr sm-no-padding-lr sm-padding-40px-tb zigzag-block">
                        <span class="title">Welcome to Numismatic World & Trade</span>
                        <h4 class="font-weight-700">Focus on what makes you in a creative business</h4>
                        <p>Duis Integration aute irure design in reprehenderit in voluptate velit esse cillum dolore eu
                            fugiat nulla pariatur excepteur sint.</p>
                        <a href="about.php" class="readmore">read more</a>
                    </div>
                </div>
            </div>
            <div class="row align-items-center no-gutters">
                <div class="col-lg-6 order-2 order-lg-1">
                    <div class="padding-20px-tb padding-50px-lr md-padding-30px-lr sm-no-padding-lr sm-padding-40px-tb mobile-padding-20px-bottom zigzag-block">
                        <span class="title">Who we are</span>
                        <h4 class="font-weight-700 margin-30px-bottom md-margin-25px-bottom sm-margin-15px-bottom">Our
                            Mission and Vision</h4>
                        <ul class="list-style2">
                            <li><span>01</span>
                                <p>Our mission dolor in lacus ullamcorper euis nec et. Morbi mollis, enim vitae.</p>
                            </li>
                            <li><span>02</span>
                                <p>Our vision dolor in lacus ullamcorper euis nec et. Morbi mollis, enim vitae.</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2">
                    <img src="img/content/about-06.jpg" alt=""/>
                </div>
            </div>
        </div>
    </section>
    <!-- end about section -->

    <!-- start service section -->

<?php

    include_once "lib/services-section.php";

?>

    <!-- end service section -->

    <!-- start news section -->
    <section>
        <div class="container">
            <div class="section-heading title-style9">
                <span class="badge">News</span>
                <h3>Recent news</h3>
            </div>

            <div class="row">
                <div class="col-lg-8 col-md-12 sm-margin-30px-bottom">
                    <div class="blog-style-8 owl-theme owl-carousel">

                        <div class="services-block9">
                            <div class="service-pic">
                                <img src="img/blog/blog-12.jpg" alt=""/>
                                <span class="date">May 10</span>
                            </div>
                            <div class="service-desc">
                                <h6 class="text-white"><a href="javascript:void(0)">Good novel, provide good
                                        confidence</a></h6>
                                <a href="javascript:void(0)">Book</a>,
                                <a href="javascript:void(0)">Interested</a>
                            </div>
                        </div>

                        <div class="services-block9">
                            <div class="service-pic">
                                <img src="img/blog/blog-13.jpg" alt=""/>
                                <span class="date">Jun 25</span>
                            </div>
                            <div class="service-desc">
                                <h6 class="text-white"><a href="javascript:void(0)">Make design for business it
                                        timeless.</a></h6>
                                <a href="javascript:void(0)">Design</a>,
                                <a href="javascript:void(0)">Corporate</a>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-lg-4 col-md-12">
                    <div class="newsletter-block bg-img cover-background theme-overlay" data-overlay-dark="9"
                         data-background="img/content/news-letter.jpg">
                        <div class="position-relative z-index-9">

                            <h4>Coin of the Month</h4>
                            <p class="md-display-none">Malesuada varius luctus urna duis placerat maecenas primis velit
                                blandit varius placerat luctus urna maecenas.</p>
                            <form method="post">
                                <input type="hidden" name="form-type" value="contact">
                                <div class="row">
                                    <div class="col-md-12 padding-30px-tb">
                                        <img src="img/coin-of-week.jpg" alt="coin of week">
                                    </div>
                                    <div class="col-md-12">
                                        <button type="submit" class="butn medium white-hover"><span>View story</span>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end news section -->


<?php include_once "header-footer/footer.php"; ?>