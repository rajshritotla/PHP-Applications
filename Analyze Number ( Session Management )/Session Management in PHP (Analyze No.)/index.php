<!DOCTYPE html>
<?php 
include './headerConnectDatabase.php';
session_start();
$_SESSION['login_user']="rajshri";
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/pure-min.css" integrity="sha384-nn4HPE8lTHyVtfCBi5yW9d20FjT8BJwUXyWZT9InLYax14RDjBj46LmSztkmNP9w" crossorigin="anonymous">
        <link rel="stylesheet" href="developerStyle.css"> 
        <link href="https://fonts.googleapis.com/css?family=Handlee" rel="stylesheet">
        <title>Analyze Numbers</title>
    </head>
    <in
    <body>
        <div main_div>
            <form class="pure-form pure-form-aligned" action="analyze_data.php" method="post">
                <fieldset>
                    <legend>Hi! Let's go, enter data and click 'Done' to see results</legend>
                    <div>
                        <label>Data:</label>
                        <input id="data" name="data" type="text" placeholder="Enter Here">
                    </div>
                    <div>
                        <button type="submit" class="pure-button pure-button-primary">Done</button>
                    </div>
                </fieldset>
            </form>
        </div>
        
    </body>
</html>
<?php include './footerDisconnectDatabase.php'; ?>