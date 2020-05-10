<!-- start clients section -->
<section class="bg-light-gray">
    <div class="container">
        <div class="owl-carousel owl-theme clients" id="clients">
            <?php
            getLinksFromDB($conn, "partners", '<div class="item"><img alt="partner-image" src="', 'item_logo', '"></div>');
            ?>
        </div>
    </div>
</section>
<!-- end clients section -->


