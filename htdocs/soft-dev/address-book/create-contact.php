<?php
/**
 * Created by PhpStorm.
 * User: taranatarajan
 * Date: 6/29/18
 * Time: 8:50 PM
 */
    $servername = 'localhost';
    $username = 'root';
    $password = 'root';
    $database_name = 'software_dev';

    $conn = mysqli_connect($servername,$username,$password,$database_name);

    $first_name = $_POST['first'];
    $last_name = $_POST['last'];
    $email = $_POST['email'];

    $sql = "INSERT INTO address_book (first_name, last_name, email) VALUES ('{$first_name}', '{$last_name}', '{$email}')";

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
    <form action = "create-contact.php" method="POST">
        <input type="text" placeholder="First Name" name="first">
        <input type="text" placeholder="Last Name" name="last">
        <input type="text" placeholder="Email Address" name="email">
        <input type="submit" name="submit-btn">
    </form>

</body>
</html>