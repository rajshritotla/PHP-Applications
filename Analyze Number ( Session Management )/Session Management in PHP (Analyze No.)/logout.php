<?php
include './headerConnectDatabase.php';
$sql="DELETE FROM `data_table`";
        $db=$db_connection->query($sql);
include './footerDisconnectDatabase.php';
session_abort();
?>


<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="developerStyle.css"> 
        <link href="https://fonts.googleapis.com/css?family=Handlee" rel="stylesheet">
        <title>Analyze Numbers</title>
    </head>
    <in
    <body>
        <div main_div>
            <h1> Logout successful! Your data is deleted. Have a nice day!! </h1>
        </div>
    </body>
</html>