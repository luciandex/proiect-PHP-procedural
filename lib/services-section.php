<?php

$services = getObjects($conn, "SELECT * FROM `services`");

?>


<section class="padding-30px-tb sm-no-padding-top xs-no-padding">
    <div class="container">

        <div class="section-heading title-style9">
            <span class="badge">Services</span>
            <h3>What we do</h3>
        </div>

        <div class="row">

            <?php
            foreach ($services as $service) {
                echo
                    '<div class="col-lg-4 col-md-6 col-sm-12 display-table sm-display-inline margin-40px-bottom sm-margin-30px-bottom">
                <span class="display-table-cell sm-display-inline-block vertical-align-top"><i class="' . $service['icon'] . ' font-size30 md-font-size28 sm-font-size26 text-theme-color xs-margin-5px-top"></i></span>
                <div class="width-90 sm-width-80 margin-20px-left xs-margin-15px-left sm-display-inline-block">
                    <span class="display-block alt-font font-weight-700 text-uppercase letter-spacing-1 margin-5px-bottom">' . $service['service'] . '</span>
                    <p class="no-margin">' . $service['description'] . '</p>
                </div>
            </div>';
            }
            ?>

        </div>

    </div>
</section>
