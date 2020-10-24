<?php
/**
 * Created by PhpStorm.
 * User: taranatarajan
 * Date: 7/2/18
 * Time: 9:33 PM
 */
    session_start();
    $_SESSION['permission'] = 0;

    include "../includes/db.php";

    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email='{$email}' LIMIT 1";

    $result = mysqli_query($conn, $sql);

    $db_user_data = mysqli_fetch_assoc($result);


    if ($password == $db_user_data['password']) {
        $_SESSION['permission'] = 1;
        $_SESSION['user_id'] = $db_user_data['id'];
        header('Location: ../profile.php');
    } else {
        header('Location: ../index.php');
    }

?>