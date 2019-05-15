<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Capitalize Me</title>
        <link href="https://fonts.googleapis.com/css?family=PT+Sans+Narrow" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Arima+Madurai" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lusitana" rel="stylesheet">
        <style>
            #LowerTextTextArea{
                width: 40%;
                height: 200px;
                background-color: bisque; 
            }
            .title{
                text-transform: uppercase;
                font-weight: bold;
                font-size: 24px;
                font-family: 'PT Sans Narrow', sans-serif;
                font-family: 'Lusitana', serif;
                font-family: 'Arima Madurai', cursive;
                color: navy;
                text-align: left;
                line-height: 20%;
            }
            .desc{
                font-size: 24px;
                font-family: 'PT Sans Narrow', sans-serif;
                color: indigo;
                text-align: left;
                background-color: bisque;
                width:fit-content;
                height: fit-content;
            }
        </style>
    </head>
    <body style="background: silver">
        <?php
            session_start();
        ?>
        
        <form method="post" action="convertUppercase.php">
            <textarea name="lowercase_script" class="desc" id="LowerTextTextArea"></textarea>   
            <div>
                <input type="submit" style="background-color: crimson;" value="Convert Uppercase">
            </div>
        </form>
        <br>
        <br>
        <h1 class="title">UPPERCASE SCRIPT:</h1>
        <p class="desc" name="uppercase_script"><?php echo $_SESSION['uppercase_script']; session_unset();?>
        </p>
    </body>
</html>
