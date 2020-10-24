<?php
/**
 * Created by PhpStorm.
 * User: taranatarajan
 * Date: 6/26/18
 * Time: 5:46 PM
 */
    $to_do_list = array("clean","cook","bathe");
    $paitent_data = array('height' => 123, "weight" => 234, "temp" => 97);
    $to_do_list[] = "homework";
    print_r($to_do_list);
    echo '<br>';
    echo $to_do_list[2];
    echo'<br>';
    $paitent_data["kids"] = 3;
    echo '<br>';
    echo $paitent_data['height'];
    echo'<br>';
    print_r($paitent_data);
?>

