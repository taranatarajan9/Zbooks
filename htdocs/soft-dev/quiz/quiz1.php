<?php
/**
 * Created by PhpStorm.
 * User: taranatarajan
 * Date: 6/27/18
 * Time: 4:53 PM
 */
session_start();
echo $_SESSION['score'];
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
                margin-left: 4%;
            }
            form{
                margin-left: 10%;
            }
        </style>
    </head>
    <body>
    <h1>Question 1!</h1>
    <h2>What is the capital of the United States?</h2>
    <form action="quiz2.php" method="post">
        <p>a. New York</p>
        <p>b. Washington DC</p>
        <p>c. San Francisco</p>
        <p>d. Florida</p>
        <input type="text" placeholder="your answer" name="ans">
        <input type="submit" name="submit">
    </form>

    </body>
</html>

