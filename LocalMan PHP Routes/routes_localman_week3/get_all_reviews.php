    <?php
        require './header_connect_database.php';
            $sql="SELECT * FROM `review_table` WHERE 1";
            $all_data= $db_connection->query($sql);

            if ($all_data->num_rows > 0) {
            // output data of each row
            while($row = $all_data->fetch_assoc()) {
                    echo "Name: " . $row["name"] . "<br>" . "Review: " . $row["review"] . "<br>". "<br>";
                }
            } else {
                echo "0 results";
            }
            require './footer_connect_database.php';
            
            ?>