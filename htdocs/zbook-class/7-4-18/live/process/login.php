<?php
/**
 * Created by PhpStorm.
 * User: taranatarajan
 * Date: 7/2/18
 * Time: 9:33 PM
 */
    session_start();

    $servername = "localhost";
    $username = "root";
    $password = "root";
    $db_table = "zbook_live";

    $conn = mysqli_connect($servername, $username, $password, $db_table);

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
        echo $db_user_data['email'];
        echo '<br>';
        echo $db_user_data['password'];
        //header('Location: ../index.php');
    }

?>