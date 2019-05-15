<?php

 $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname= "analyze_numerical_data_week4";

                $db_connection = new mysqli($servername, $username, $password, $dbname);
                // Check connection
                if ($db_connection->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                } 
?>