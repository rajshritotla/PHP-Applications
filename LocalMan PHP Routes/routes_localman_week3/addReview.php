<?php
require './header_connect_database.php';
        
        $new_place=$_GET['new_place'];
        $new_review=$_GET['new_review'];
        $sql="INSERT INTO `review_table`(`name`, `review`) VALUES ('$new_place','$new_review')";
        $db_name= $db_connection->query($sql);
        echo "Added ".$_GET['new_place'];
         
         
         require './footer_connect_database.php';
            ?>
