<?php
// Page Options/Settings
$headLinks = ['Blog Post' => "javascript:void(0)"];
$pageTitle = "Blog Post";
$hasHeadline = true;

?>

<?php include_once "header-footer/header.php"; ?>

        <!-- start blog post section -->
        <section class="blogs">
            <div class="container">
                <div class="row">

                    <!--  start blog left-->
                    <div class="col-lg-9 col-md-12 padding-30px-right xs-padding-15px-right sm-margin-30px-bottom">
                        <div class="posts">
                            <!--  start post-->
                            <div class="post">
                                <div class="post-img">
                                    <a href="javascript:void(0);" class="width-100">
                                        <img src="img/blog/list-1.jpg" alt="">
                                    </a>
                                </div>
                                <div class="content">
                                    <div class="blog-list-simple-text">
                                        <div class="post-title">
                                            <h5>Powerful tool for your customer</h5>
                                        </div>
                                        <ul class="meta">
                                            <li>
                                                <a href="javascript:void(0);">
                                                    <i aria-hidden="true" class="fa fa-user"></i> Admin
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">
                                                    <i aria-hidden="true" class="fa fa-folder-open"></i> Business
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">
                                                    <i aria-hidden="true" class="fas fa-calendar-alt"></i> 10 JUN 2018 
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">
                                                    <i aria-hidden="true" class="fa fa-tags"></i> blog
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">
                                                    <i aria-hidden="true" class="fa fa-comments"></i> 0 Comments
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="post-cont">
                                        <p>consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident minim veniam.</p>
                                        <p class="special">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                        <p>consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident minim veniam.</p>
                                    </div>
                                    <div class="share-post">
                                        <span>Share Post</span>
                                            <ul>

                                                <?php include "lib/social-media.php"; ?>

                                            </ul>
                                    </div>
                                </div>
                            </div>
                            <!--  start post-->

                            <!--  start comment-->
                            <div class="comments-area">
                                <div class="title-g mb-50">
                                    <h3>Comments</h3>
                                </div>
                                <div class="comment-box">
                                    <div class="author-thumb">
                                        <img src="img/blog/01.png" alt="" class="rounded-circle width-85 xs-width-100">
                                    </div>
                                    <div class="comment-info">
                                        <h6><a href="javascript:void(0);">Alex Joyrina</a></h6>
                                        <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                        <div class="reply">
                                            <a href="javascript:void(0);">
                                                <i class="fa fa-reply" aria-hidden="true"></i> Reply
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="comment-box">
                                    <div class="author-thumb">
                                        <img src="img/blog/02.png" alt="" class="rounded-circle width-85 xs-width-100">
                                    </div>
                                    <div class="comment-info">
                                        <h6><a href="javascript:void(0);">Jama Karleny</a></h6>
                                        <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                        <div class="reply">
                                            <a href="javascript:void(0);">
                                                <i class="fa fa-reply" aria-hidden="true"></i> Reply
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="comment-box">
                                    <div class="author-thumb">
                                        <img src="img/blog/03.png" alt="" class="rounded-circle width-85 xs-width-100">
                                    </div>
                                    <div class="comment-info">
                                        <h6><a href="javascript:void(0);">Ivonne Drennen</a></h6>
                                        <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                        <div class="reply">
                                            <a href="javascript:void(0);">
                                                <i class="fa fa-reply" aria-hidden="true"></i> Reply
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end comment-->

                            <!--  start form-->
                            <div class="comment-form">
                                <div class="title-g mb-50">
                                    <h3>Post a Comment</h3>
                                </div>
                                <form class='form' id='comment-form' method='post'>
                                    <input type='hidden' name='form-name' value='contact-form' />
                                    <div class="controls">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <input id="form_name" type="text" name="name" placeholder="Name" required="required">
                                            </div>
                                            <div class="col-md-6">
                                                <input id="form_email" type="email" name="email" placeholder="Email" required="required">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <textarea id="form_message" name="message" placeholder="Message" rows="4" required="required"></textarea>
                                            </div>
                                            <div class="col-md-12">
                                                <button type="submit" class="butn medium"><span>Send Message</span></button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!--  end form-->
                        </div>
                    </div>
                    <!--  end blog left-->

                    <!--  start blog right-->
                    <div class="col-lg-3 col-md-12">
                        <div class="side-bar">
                            <div class="widget search">
                                <form method='post'>
                                    <input type="hidden" name="form-name" value="form 1" />
                                    <input type="search" name="search" placeholder="Type here ...">
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
        <!-- end blog post section -->

<?php include_once "header-footer/footer.php"; ?>