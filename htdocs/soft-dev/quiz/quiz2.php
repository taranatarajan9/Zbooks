<?php
/**
 * Created by PhpStorm.
 * User: taranatarajan
 * Date: 6/27/18
 * Time: 5:01 PM
 */
session_start();
if (strtoupper($_POST["ans"]) == 'B') {
    $_SESSION['score'] = $_SESSION['score'] + 1;
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
            .correct{
                /*font-size: large;*/
                color: lightgreen;
            }
        </style>
    </head>
    <body>
    <p class="correct">The Correct Answer for the previous question was B, Washington DC</p>
    <h1>Question 2!</h1>
    <h2>What is the most densely populated state?</h2>
    <form action="quiz3.php" method="post">
        <p>a. California</p>
        <p>b. Texas</p>
        <p>c. New York</p>
        <p>d. Hawaii</p>
        <input type="text" placeholder="your answer" name="ans2">
        <input type="submit" name="submit">
    </form>
    </body>
</html>