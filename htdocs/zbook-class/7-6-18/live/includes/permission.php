<?php
/**
 * Created by PhpStorm.
 * User: taranatarajan
 * Date: 7/24/18
 * Time: 11:25 AM
 */
    session_start();

    if ($_SESSION['permission'] !== 1){
        header("Location: index.php");
    }
?>