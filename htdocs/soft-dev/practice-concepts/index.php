<?php
    $first_name = 'Tara';
    $last_name = 'Natarajan';
    $link = 'http://i0.kym-cdn.com/entries/icons/original/000/017/618/pepefroggie.jpg';
    echo '<h1>'  . $first_name . ' ' . $last_name . '</h1>';
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

    <h1><?php echo $first_name . ' ' . $last_name; ?></h1>
    <p><?php echo $first_name . ' ' . $last_name; ?></p>
    <img src= <?php echo $link; ?> />

</body>
</html>
