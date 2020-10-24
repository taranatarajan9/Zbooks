<?php
/**
 * Created by PhpStorm.
 * User: taranatarajan
 * Date: 6/28/18
 * Time: 7:01 PM
 */
session_start();
if (strtoupper($_POST['ans3']) == 'C'){
    $_SESSION['score'] = $_SESSION['score'] +1;
}
session_destroy();
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
        .final{
            font-size: 30px;
            color: lightgreen;
        }
        .correct{
            /*font-size: large;*/
            color: green;
        }
    </style>
</head>
<body>
    <p class="correct">The Correct Answer for the previous question was C, Missouri River</p>
    <h1 class ="final">Your Score is <?php echo $_SESSION['score'] ?></h1>
    <p>Return to beginning?</p>
    <form action="quiz-intro.php" method="post">
        <input type="submit" name="return">
    </form>

</body>
</html>