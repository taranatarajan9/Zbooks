<?php
/**
 * Created by PhpStorm.
 * User: taranatarajan
 * Date: 6/29/18
 * Time: 8:13 PM
 */
    if (isset($_POST['submit-btn'])) {
        $servername = "localhost";
        $username = "root";
        $password = "root";
        $database_name = "software_dev";

        $conn = mysqli_connect($servername, $username, $password, $database_name);

        $title = $_POST['title'];
        $detail = $_POST['detail'];
        $task_id = $_POST['task_id'];

        $sql = "UPDATE tasks SET title='{$title}', detail='{$detail}' WHERE id='{$task_id}'";

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
    <form action="edit.php" method="POST">
        <input type="text" placeholder="new title" name="title">
        <input type="text" placeholder="new detail" name="detail">
        <input type="hidden" name="task_id" value="<?php echo $_GET['id']; ?>">
        <input type="submit" name="submit-btn">

    </form>
</body>
</html>