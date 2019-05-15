<?php
require './header_connect_database.php';

        $sql_one_review="SELECT * FROM `review_table` WHERE 1";
        $db_name= $db_connection->query($sql_one_review);
         if ($db_name->num_rows > 0) {
         // output data of each row
         while($row = $db_name->fetch_assoc()) {
             if($row["name"]== $_GET['place'])    
                echo "Review of ". $_GET['place']. ": " .$row["review"];
                 }
         } 
         else {
             echo "0 results";
         }
         
         require './footer_connect_database.php';
            ?>
