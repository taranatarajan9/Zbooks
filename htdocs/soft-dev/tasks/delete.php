<?php
/**
 * Created by PhpStorm.
 * User: taranatarajan
 * Date: 6/29/18
 * Time: 7:47 PM
 */
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $database_name = "software_dev";
    
    $conn = mysqli_connect($servername, $username, $password, $database_name);

    $task_id = $_GET['id'];
    
    $sql = "DELETE FROM tasks WHERE id='{$task_id}'";

    mysqli_query($conn, $sql);

    header("LOCATION: all.php");
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

</body>
</html>