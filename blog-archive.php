<?php require_once "php_project.php"; ?>
<?php
// Page Options/Settings
$headLinks = ['Blog Archive' => "javascript:void(0)"];
$pageTitle = "Blog Archive";
$hasHeadline = true;

$articles = getObjects($conn, "SELECT * FROM `blog`");

?>

<?php include_once "header-footer/header.php"; ?>

    <!-- start blog grid section -->
    <section class="blogs ">
        <div class="container">
            <div class="row">

                <!--  start blog left-->
                <div class="col-lg-9 col-md-12 padding-30px-right xs-padding-15px-right">
                    <div class="row">

                        <!-- start post -->

                        <?php
                        foreach ($articles as $article) include "lib/blog-article.php";
                        ?>

                        <!-- end post -->

                    </div>
                </div>
                <!--  end blog left-->

                <!--  start blog right-->
                <div class="col-lg-3 col-md-12">
                    <div class="side-bar">
                        <div class="widget search">
                            <form method='post'>
                                <input type="hidden" name="form-name" value="form 1"/>
                                <label>
                                    <input type="search" name="search" placeholder="Type here ...">
                                </label>
                                <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                            </form>
                        </div>

                        <div class="widget">
                            <div class="widget-title">
                                <h6>Recent Posts</h6>
                            </div>
                            <ul>
                                <li><a href="javascript:void(0);">You don't want Traveling as your enemy!</a></li>
                                <li><a href="javascript:void(0);">Good City Has Written All Over It.</a></li>
                                <li><a href="javascript:void(0);">he 20 Best Lightroom Presets You Need.</a></li>
                                <li><a href="javascript:void(0);">Pride of the Performers For Hundred Years.</a></li>
                                <li><a href="javascript:void(0);">Time will be for you what you want it to be.</a></li>
                            </ul>
                        </div>

                        <div class="widget">
                            <div class="widget-title">
                                <h6>Recent Comments</h6>
                            </div>
                            <ul>
                                <li><a href="javascript:void(0);">10 sport Trends to Try in 2018</a></li>
                                <li><a href="javascript:void(0);">Every thing design for your.</a></li>
                            </ul>
                        </div>

                        <div class="widget">
                            <div class="widget-title">
                                <h6>Archives</h6>
                            </div>
                            <ul>
                                <li><a href="javascript:void(0);">January 2018</a></li>
                                <li><a href="javascript:void(0);">February 2018</a></li>
                                <li><a href="javascript:void(0);">March 2018</a></li>
                            </ul>
                        </div>

                        <div class="widget">
                            <div class="widget-title">
                                <h6>Categories</h6>
                            </div>
                            <ul>
                                <li><a href="javascript:void(0);">Business - 45</a></li>
                                <li><a href="javascript:void(0);">Consultancy - 33</a></li>
                                <li><a href="javascript:void(0);">Finance - 23</a></li>
                                <li><a href="javascript:void(0);">Investment - 09</a></li>
                                <li><a href="javascript:void(0);">Development - 21</a></li>
                                <li><a href="javascript:void(0);">Professional - 12</a></li>
                                <li><a href="javascript:void(0);">Planning - 07</a></li>
                                <li><a href="javascript:void(0);">Saving - 15</a></li>
                                <li><a href="javascript:void(0);">Banking - 10</a></li>
                            </ul>
                        </div>

                        <div class="widget">
                            <div class="widget-title">
                                <h6>Follow Us</h6>
                            </div>
                            <ul class="social-listing">

                                <?php include "lib/social-media.php"; ?>

                            </ul>
                        </div>

                    </div>
                </div>
                <!--  end blog right-->
            </div>
        </div>
    </section>
    <!-- end blog grid section -->

<?php include_once "header-footer/footer.php"; ?>