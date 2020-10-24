<?php
/**
 * Created by PhpStorm.
 * User: taranatarajan
 * Date: 6/27/18
 * Time: 4:10 PM
 */
    session_start();
    if(isset($_POST['submit'])) {
        $username = $_POST["username"];
        $password = $_POST["password"];

        if ($username == "tara" && $password == "123"){
            $_SESSION['valid']=1;
        }
    }

    if ($_SESSION['valid'] !== 1){
        header('LOCATION: login.php');
    }
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
        <h1>Welcome inside</h1>
    </body>
</html>
