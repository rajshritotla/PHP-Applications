<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/pure-min.css" integrity="sha384-nn4HPE8lTHyVtfCBi5yW9d20FjT8BJwUXyWZT9InLYax14RDjBj46LmSztkmNP9w" crossorigin="anonymous">
        <link rel="stylesheet" href="developerStyle.css"> 
        <link href="https://fonts.googleapis.com/css?family=Handlee" rel="stylesheet">
        <title>Analyze Numbers</title>
    </head>
    <body>
        <div main_div>
            <form method="post" class="pure-form pure-form-stacked" action="index.php">
                <fieldset>
                    <legend>Login</legend>

                    <label for="userid">User Id</label>
                    <input name="userid" type="text" placeholder="User Id">
                    <span class="pure-form-message">This is a required field.</span>

                    <label for="password">Password</label>
                    <input id="password" type="password" placeholder="Password">

                    <label for="remember" class="pure-checkbox">
                        <input id="remember" type="checkbox"> Remember me
                    </label>

                    <input type="submit" class="pure-button pure-button-primary" value="Sign In">
                </fieldset>
            </form>
        </div>
    </body>
</html>
