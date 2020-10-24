<?php
/**
 * Created by PhpStorm.
 * User: taranatarajan
 * Date: 6/27/18
 * Time: 7:18 AM
 */
    $ingredients = array("sugar", "butter", "flour");
    print_r($ingredients);
    echo '<br>';
    $vacation = array("Hawaii" => 1200, "India" => 3500, "Europe" => 5600);
    print_r($vacation);
    echo '<br>';
    $ingredients[]="eggs";
    $vacation["Brazil"] = 2300;
    print_r($ingredients);
    echo '<br>';
    print_r($vacation);
    echo '<br>';

    $student_names = array(
        array("last" => "smith", "first" => "james"),
        array("first" => "greg", "last" => "billy")
    );
    echo '<pre>';
    print_r($student_names);
    echo '</pre>';
    echo '<br>';
    echo $student_names[0]["last"];
?>
