 <?php
/**
 * Created by PhpStorm.
 * User: taranatarajan
 * Date: 7/2/18
 * Time: 10:47 AM
 */
    if (isset($_POST['submit-btn'])) {
        $servername = "localhost";
        $username = "root";
        $password = "root";
        $database_name = "software_dev";

        $conn = mysqli_connect($servername, $username, $password, $database_name);

        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];
        $contact_id = $_POST['contact_id'];

        $sql = "UPDATE address_book SET first_name='{$first_name}', last_name = '{$last_name}', email='{$email}' WHERE id='{$contact_id}'";

        mysqli_query($conn, $sql);
    }
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
    <form action="edit-cont.php" method="POST">
        <input type="text" placeholder="new first name" name="first_name">
        <input type="text" placeholder="new last name" name="last_name">
        <input type="text" placeholder="new email" name="email">
        <input type="hidden" name="contact_id" value="<?php echo $_GET['id']; ?>">
        <input type="submit" name="submit-btn">

    </form>
    <a href="disp-cont.php">Return to all contacts</a>
</body>
</html>