<?php
/**
 * Created by PhpStorm.
 * User: taranatarajan
 * Date: 7/2/18
 * Time: 10:47 AM
 */
    $servername = 'localhost';
    $username = 'root';
    $password = 'root';
    $database_name = 'software_dev';

    $conn = mysqli_connect($servername, $username, $password, $database_name);

    $contact_id = $_GET['id'];

    $sql = "DELETE FROM address_book WHERE id='{$contact_id}'";

    mysqli_query($conn, $sql);

    header("LOCATION: disp-cont.php");
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