<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Capitalize Me</title>
        <link href="https://fonts.googleapis.com/css?family=PT+Sans+Narrow" rel="stylesheet">
        <style>
            .desc{
                font-size: 24px;
                font-family: 'PT Sans Narrow', sans-serif;
                color: indigo;
                text-align: left;
                background-color: cyan;
                width: 40%;
                height: 200px;
            }
        </style>
    </head>
    <body style="background: silver; margin: 2%">
            <textarea class="desc" id="lowercas_script"></textarea>   
            <br>
            <div>
                <button type="button" onclick="tryAjax()">Convert Uppercase</button>
            </div>
            <br>
            <div id="uppercase_script" class="desc">
                Result is...
            </div>
            <script type="text/javascript">
                
                function tryAjax(){
                    var lowercase_script;
                    if(window.XMLHttpRequest){
                        xmlhttp=new XMLHttpRequest();
                        }else{
                        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
                        }
                        xmlhttp.onreadystatechange=function(){
                            if(xmlhttp.readyState===4 && xmlhttp.status===200){
                                document.getElementById('uppercase_script').innerHTML=xmlhttp.responseText;
                            }
                        };
                        
                    $lowercase_script= document.getElementById('lowercas_script').value;
                    xmlhttp.open("GET","convertUppercase.php?lowercase_script="+$lowercase_script,true);
                    xmlhttp.send(null);

                }
            </script>
    </body>
</html>
