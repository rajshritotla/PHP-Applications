<?php
require './header_connect_database.php';
        
        $place=$_GET['place'];
        $sql="DELETE FROM `review_table` WHERE name='$place'";
        $db_name= $db_connection->query($sql);
        echo "Deleted ".$_GET['place'];
         
         
         require './footer_connect_database.php';
            ?>
