<?php
/**
 * Created by PhpStorm.
 * User: taranatarajan
 * Date: 6/27/18
 * Time: 4:51 PM
 */
session_start();
$_SESSION['score'] = 0;
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <style>
            h1{
                font-family: "Helvetica Neue";
                margin-left: 10%;
            }
            h2{
                font-family: "Helvetica";
                margin-left: 10%;
            }
            p{
                font-family: Helvetica;
                margin-left: 15%;
            }
            form{
                margin-left: 10%;
            }
        </style>
    </head>
    <body>
        <h1>Welcome to the Quiz</h1>
        <h2>Ready to play?</h2>
        <form action="quiz1.php" method="post">
            <input type="submit" placeholder="Yes!">
        </form>
    </body>
</html>
