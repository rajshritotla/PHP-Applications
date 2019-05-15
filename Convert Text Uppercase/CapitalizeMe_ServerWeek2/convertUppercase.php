<?php
    session_start();
    $_SESSION['uppercase_script']= strtoupper($_REQUEST['lowercase_script']);
    $_REQUEST['lowercase_script']= "";
    header('Location: http://localhost/PhpProject1/index.php');
?>