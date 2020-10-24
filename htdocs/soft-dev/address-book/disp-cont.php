<?php
/**
 * Created by PhpStorm.
 * User: taranatarajan
 * Date: 6/29/18
 * Time: 9:08 PM
 */
    $servername = 'localhost';
    $username = 'root';
    $password = 'root';
    $database_name = 'software_dev';

    $conn = mysqli_connect($servername, $username, $password, $database_name);

    $sql = 'SELECT * FROM address_book';
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
    <?php while ($array = mysqli_fetch_assoc($results)):?>
        <h2><a href="disp-one.php?id=<?php echo $array['id']; ?>"> <?php echo $array['first_name']; ?> <?php echo $array['last_name']; ?> </a></h2>
        <p><a href="delete-cont.php?id=<?php echo $array['id']; ?>">Delete</a> </p>
        <p><a href="edit-cont.php?id=<?php echo $array['id']; ?>">Edit</a> </p>
        <br>
    <?php endwhile; ?>
</body>
</html>
