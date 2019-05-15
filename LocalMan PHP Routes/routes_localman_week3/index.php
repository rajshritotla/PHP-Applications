<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Localman</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body main_div>
        
        <?php require './header_connect_database.php'; ?>
        
            
            <form action="get_all_reviews.php" method="GET">
                <div>
                <label>&#9832 Get all reviews</label>
                <input type="submit" value="Get All Reviews">    
                </div>
            </form>
            
            <form action="getOneReview.php" method="GET">
                <div>
                    <label>&#9832 Get review of</label> 
                    <select name="place">
                        <?php 
                        $sql_name="SELECT `name` FROM `review_table` WHERE 1";
                        $db_name= $db_connection->query($sql_name);
                        if ($db_name->num_rows > 0) {
                        // output data of each row
                        while($row = $db_name->fetch_assoc()) {
                            ?>
                            <option value="<?php echo $row["name"]; ?>"> <?php echo $row["name"]; ?> </option>
                            <?php
                                        }
                                } else {
                                    echo "0 results";
                                }
                        ?>
                    </select><br><br><br>
                    <input type="submit" value="Get Review">
                </div>
            </form>
            <form action="addReview.php" method="GET">
                    <label>&#9832 Add review:</label><br>
                    <div>
                        <label>Name: </label>
                        <input type="text" name="new_place">
                    </div>
                    <br><br>
                    <div>
                        <label>Review: </label>
                        <input type="text" name="new_review"><br>
                    </div>
                    <div>
                            <input type="submit" value="Add">    
                    </div>
            </form>
            <form action="deleteReview.php" method="GET">
                     <label>&#9832 Delete review of</label> 
                    <select name="place">
                    <?php 
                        $sql_name="SELECT `name` FROM `review_table` WHERE 1";
                        $db_name= $db_connection->query($sql_name);

                        if ($db_name->num_rows > 0) {
                        // output data of each row
                        while($row = $db_name->fetch_assoc()) {
                            ?>
                            <option value="<?php echo $row["name"]; ?>"> <?php echo $row["name"]; ?> </option>
                            <?php
                                        }
                                } else {
                                    echo "0 results";
                                }
                            ?>
                    </select>
                    <br><br><br>
                    <input type="submit" value="Delete">
                    
            </form>
            
            
            
                <form action="update">
                    
                    <div><label>&#9832 Enter the Place you want to update: </label><input type="text" name="old_place"></div><br><br>
                    <div><label>&nbsp;Update New Place: </label><input type="text" name="update_place"></div><br><br>
                    <div><label>&nbsp;Update New Review: </label><input type="text" name="update_review"></div><br><br>
                    <div><input type="submit" value="Update"></div>
                    
                        
                    
                </form>
            
            
                
            
    </body>
</html>

<?php require './footer_connect_database.php'; ?>