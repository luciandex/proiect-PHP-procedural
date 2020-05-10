<?php
//Options
$menu = 'WHERE `parent_id` = 2'
?>

<ul class="navbar-nav ml-auto active" id="nav">
    <?php
    getLinksFromDB($conn, "menu_items", '<li><a href="', 'url', '">', $menu, 'text', '</a></li>');
    ?>
</ul>



