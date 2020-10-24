<?php
/**
 * Created by PhpStorm.
 * User: taranatarajan
 * Date: 6/29/18
 * Time: 5:17 PM
 */
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $database_name = "software_dev";

    $conn = mysqli_connect($servername, $username, $password, $database_name);

    $sql = 'SELECT * FROM tasks';

    $results = mysqli_query($conn, $sql);

//    while ($array = mysqli_fetch_assoc($results)){
//        echo $array['id'] . $array['title'];
//        echo'<hr>';
//    }
?>
<!doctype html>
<html lang="en">
    <head>

    </head>
    <body>
        <h3><a href="create-2.php">Create a new task</a></h3>
        <br>
        <hr>
        <?php while ($array = mysqli_fetch_assoc($results)): ?>
            <h2><a href="read.php?id=<?php echo $array['id']; ?>"><?php echo $array['title']; ?></a></h2>
            <p><a href="delete.php?id=<?php echo $array['id']; ?>">Delete</a> </p>
            <p><a href="edit.php?id=<?php echo $array['id']; ?>">Edit</a> </p>
            <br>
            <hr>
        <?php endwhile; ?>
    </body>
</html>
