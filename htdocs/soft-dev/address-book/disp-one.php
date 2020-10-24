<?php
/**
 * Created by PhpStorm.
 * User: taranatarajan
 * Date: 6/29/18
 * Time: 9:47 PM
 */
    $servername = 'localhost';
    $username = 'root';
    $password = 'root';
    $database_name = 'software_dev';

    $conn = mysqli_connect($servername, $username, $password, $database_name);
    $contact_id = $_GET['id'];
    $sql = "SELECT * FROM address_book WHERE id='{$contact_id}'";
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
        <p> ID: <?php echo $array['id']; ?></p>
        <h2> FIRST NAME: <?php echo $array['first_name'];?></h2>
        <h2> LAST NAME: <?php echo $array['last_name'];?></h2>
        <h3>EMAIL: <?php echo $array['email'];?></h3>
    <?php endwhile; ?>
    <a href="disp-cont.php">See All Contacts</a>
</body>
</html>