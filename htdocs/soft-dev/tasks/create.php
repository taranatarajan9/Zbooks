<?php
/**
 * Created by PhpStorm.
 * User: taranatarajan
 * Date: 6/29/18
 * Time: 2:06 PM
 */
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $database_name = "software_dev";

    $conn = mysqli_connect($servername, $username, $password, $database_name);
    $title = $_POST['title'];
    $detail = $_POST['detail'];

    $sql = "INSERT INTO tasks {title, detail} VALUES ('{$title}', '{$detail}')";
    mysqli_query($conn, $sql);
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
        <form action="create.php" method="post">
            <input type="text" placeholder="title" name="title">
            <input type="text" name="detail" placeholder="detail">

            <input type="submit">
        </form>
    </body>
</html>