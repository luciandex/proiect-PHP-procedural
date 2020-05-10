<?php
//Options
$media = 'WHERE `parent_id` = 1';

getLinksFromDB($conn, "menu_items", '<li><a href="', 'url', '"><i class="',$media,'icon','"></i></a></li>');

?>

