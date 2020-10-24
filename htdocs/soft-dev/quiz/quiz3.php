<?php
/**
 * Created by PhpStorm.
 * User: taranatarajan
 * Date: 6/27/18
 * Time: 5:01 PM
 */
session_start();
if (strtoupper($_POST['ans2']) == 'A') {
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
<p class="correct">The Correct Answer for the previous question was A, California</p>
<h1>Question 3!</h1>
<h2>What is the longest river in the US?</h2>
<form action="quiz-final.php" method="post">
    <p>a. Rio Grande River</p>
    <p>b. Mississippi River</p>
    <p>c. Missouri River</p>
    <p>d. Colorado River</p>
    <input type="text" placeholder="your answer" name="ans3">
    <input type="submit" name="submit">
</form>
</body>
</html>