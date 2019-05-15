<?php
require './header_connect_database.php';
        $old_place=$_GET['old_place'];
        $update_place=$_GET['update_place'];
        $update_review=$_GET['update_review'];
        $sql="UPDATE `review_table` SET `name`='$update_place',`review`='$update_review' WHERE `name`='$old_place'";
        $db_name= $db_connection->query($sql);
        echo "Updated ".$_GET['update_place'];
         
         
         require './footer_connect_database.php';
            ?>
