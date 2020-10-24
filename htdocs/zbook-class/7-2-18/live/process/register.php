<?php
/**
 * Created by PhpStorm.
 * User: taranatarajan
 * Date: 7/2/18
 * Time: 8:44 PM
 */
    $servername = 'localhost';
    $username = "root";
    $password = "root";
    $db_table = "zbook_live";

    $conn = mysqli_connect($servername, $username, $password, $db_table);
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $user_password = $_POST['password'];
    $bday = $_POST['year'] . '-' . $_POST['month'] . '-' . $_POST['day'];
    $gender = $_POST['gender'];
    $info = array($first_name, $last_name, $email, $user_password, $bday, $gender);
    print_r($info);
    $sql = "INSERT INTO users (first_name, last_name, email, password, bday, gender) VALUES('{$first_name}','{$last_name}','{$email}','{$user_password}', '{$bday}','{$gender}')";
    mysqli_query($conn, $sql);
    mysqli_close($conn);
    header("LOCATION: ../index.php");

?>