<?php require_once "php_project.php"; ?>

    <!DOCTYPE html>
    <html lang="en">

    <head>

        <!-- metas -->
        <meta charset="utf-8">
        <meta name="author" content="PHP Student"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="keywords" content="PHP Site, Numismatic, Shop"/>
        <meta name="description" content="Numismatic World & Trade"/>

        <!-- title  -->
        <title>Numismatic World & Trade</title>

        <!-- CSS  -->
        <?php include_once "css/css.php" ?>

    </head>

<body>

    <!-- start page loading -->
    <div id="preloader">
        <div class="row loader">
            <div class="loader-icon"></div>
        </div>
    </div>
    <!-- end page loading -->

    <!-- start main-wrapper section -->
<div class="main-wrapper">

    <!-- start header section -->
    <header class="header-style1 menu_area-light">
        <div id="top-bar">
            <div class="container">
                <div class="row">

                    <div class="col-md-9 col-xs-12">
                        <div class="top-bar-info">
                            <ul>
                                <li><i class="fas fa-mobile-alt"></i>(+40) 21 254 654</li>
                                <li><i class="fas fa-envelope"></i>office@numismaticwt.com</li>
                                <li><i class="fas fa-calendar-alt"></i><?php echo "Today is " . date("l d M Y"); ?></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-xs-12 col-md-3 xs-display-none">
                        <ul class="top-social-icon">

                            <?php include "lib/social-media.php"; ?>

                        </ul>
                    </div>

                </div>
            </div>
        </div>

        <div class="navbar-default">

            <!-- start top search -->
            <div class="top-search bg-theme">
                <div class="container">
                    <form class="search-form" action="/search.php" method="GET" accept-charset="utf-8">
                        <div class="input-group">
                                <span class="input-group-addon cursor-pointer">
                                    <button class="search-form_submit fas fa-search font-size18 text-white"
                                            type="submit"></button>
                                </span>
                            <label>
                                <input type="text" class="search-form_input form-control" name="s" autocomplete="on"
                                       placeholder="Type & hit enter...">
                            </label>
                            <span class="input-group-addon close-search"><i
                                        class="fas fa-times font-size18 line-height-28 margin-5px-top"></i></span>
                        </div>
                    </form>
                </div>
            </div>
            <!-- end top search -->

            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 col-lg-12">
                        <div class="menu_area alt-font">
                            <nav class="navbar navbar-expand-lg navbar-light no-padding">

                                <div class="navbar-header navbar-header-custom">
                                    <!-- start logo -->
                                    <a href="/index.php" class="navbar-brand logo2">
                                        <img id="logo" src="/img/logo.png" alt="logo"></a>
                                    <!-- end logo -->
                                </div>

                                <div class="navbar-toggler"></div>

                                <!-- menu area --> <!-- style="display: none;"-->
                                <?php include_once "lib/main-menu.php"; ?>
                                <!-- end menu area -->


                                <!-- start attribute navigation SHOP cart -->

                                <?php include_once "shop/shop-cart-header.php"; ?>

                                <!-- end attribute navigation SHOP cart -->

                                <!-- thumb and logged on menu-->
                                <!--                                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">-->
                                <ul class="nav navbar-nav navbar-right">
                                    <li class="dropdown user-dropdown">

                                        <?php if ($_SESSION == false)
                                            echo '<a><i class="fas fa-user-plus"></i></a>
                                                  <ul><li class="!font-size20"><a href="' . BASE_URL . 'login.php">Login</a></li>
                                                  <li><a href="' . BASE_URL . 'registration.php">Registration</a></li>
                                                  </ul>';
                                        ?>

                                        <?php if ($_SESSION == true) {
                                            echo <<<_DROP
                                                <a href="" role="button">
                                                <img id="thumb" src="/img/thumb.jpg" alt="" class="rounded-circle">
                                                <ul class="dropdown-menu">
                                                <li><a href="/profile.php">Profile</a></li>
                                                <li><a href="#">Calendar</a></li>
                                                <li><a href="#"><span class="badge float-right badge-danger">42</span>Messages</a></li>
                                                <li role="separator" class="divider"></li>
                                                <li><a href="#">Account Settings</a></li>
                                                <li><a href="/logout.php">Log Out</a></li>
                                                </ul></a>
                                            _DROP;
                                        }
                                        ?>

                                   </li>
                                </ul>
                                <!--                                </div>-->
                                <!-- thumb and logged on menu-->

                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </header>
    <!-- end header section -->

<?php
if ($hasHeadline ?? false) {
    include_once "lib/headline.php";
}
?>