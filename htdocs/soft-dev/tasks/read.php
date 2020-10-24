<?php
/**
 * Created by PhpStorm.
 * User: taranatarajan
 * Date: 6/29/18
 * Time: 5:34 PM
 */
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $database_name = "software_dev";

    $conn = mysqli_connect($servername, $username, $password, $database_name);
    $task_id = $_GET['id'];
    $sql = "SELECT * FROM tasks WHERE id='{$task_id}'";
    $results = mysqli_query($conn, $sql);
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
    <?php while ($array = mysqli_fetch_assoc($results)) : ?>
        <p>ID: <?php echo $array['id']; ?></p>
        <h2> TITLE: <?php echo $array['title'];?></h2>
        <h3>Details: <?php echo $array['detail']; ?></h3>

    <?php endwhile; ?>

    <a href="all.php">See All Tasks</a>
</body>
</html>