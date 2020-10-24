<?php
/**
 * Created by PhpStorm.
 * User: taranatarajan
 * Date: 6/27/18
 * Time: 11:22 AM
 */
    $shirt_prices = array(10, 11, 26);
    $shirt_brands = array("Gucci" => 150, "LV" => 402, "OffWhite" => 650);
    $shirt_owners = array(
        "Jen" => array("blue", "red", "green", "orange"),
        "Marcus" => array("purple", "blue", "pink", "yellow"),
        "Olivia" => array("green", "blue", "red", "orange")
    );
    foreach($shirt_prices as $value){
        echo $value;
        echo"<br>";
    }
    foreach($shirt_brands as $key => $value){
        echo $key . " => $". $value;
        echo"<br>";
    }
    foreach($shirt_owners as $key => $value){
        echo $key;
        echo"<br>";
            foreach ($value as $color){
                echo $color. " ";
            }
            echo '<br>';
    }
?>