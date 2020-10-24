<?php

    if (isset($_POST['submit-btn'])) {

        $servername = "localhost";
        $username = "root";
        $password = "root";
        $database_name = "software_dev";

        $conn = mysqli_connect($servername, $username, $password, $database_name);

        $title = $_POST['title'];
        $detail = $_POST['detail'];

        $sql = "INSERT INTO tasks (title, detail) VALUES ('{$title}', '{$detail}')";

        mysqli_query($conn, $sql);

//        print_r($title);
//        print_r($detail);
    }

?>


<!doctype html>
<html lang="en">
    <head>
        
    </head>
    <body>
        <a href="all.php"> See all tasks</a>

        <form action="create-2.php" method="POST">
            <input type="text" placeholder="title" name="title">
            <input type="text" placeholder="details" name="detail">

            <input type="submit" name="submit-btn">
        </form>
    
    
    </body>
</html>