<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Snake Eyes</title>

            <link href="https://fonts.googleapis.com/css?family=PT+Sans+Narrow" rel="stylesheet">
            <style>
                #backgroundStyle{
                        margin: 2%;
                        background-image: url(https://naturallycuriouswithmaryholland.files.wordpress.com/2013/08/8-5-13-snake-eyes.jpg?w=768);
                        background-repeat: no-repeat;
                        background-size: 25% 100%;
                }
                .description{
                        font-size: 22px;
                        font-family: 'PT Sans Narrow', sans-serif;
                        text-align: left;
                        font-weight: bolder;
                }	
            </style>
    </head>
    <body id="backgroundStyle" class="description">
        <?php
            $snake_eye=0;
            $roll=0;
            echo"dice 1|dice 2"."<br>";
            while(!$snake_eye){
                $dice1= mt_rand ( 1, 6);
                $dice2= mt_rand ( 1, 6);
                echo $dice1."   |   ";
                echo $dice2."<br>";
                $roll=$roll+1;
                if($dice1==$dice2){
                    if($dice1==1){
                        $snake_eye=1;
                    }
                }
            }
            echo "<br>"."Total roll took for snake eyes are ".$roll;
        ?>
    </body>
</html>
