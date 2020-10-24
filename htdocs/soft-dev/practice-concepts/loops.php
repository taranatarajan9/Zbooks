<?php
/**
 * Created by PhpStorm.
 * User: taranatarajan
 * Date: 6/27/18
 * Time: 7:34 AM
 */
    for ($i = 0; $i <10; $i++){
        echo $i**2;
        echo '<br>';

    }
    $vacation = array("Hawaii" => 1200, "India" => 3500, "Europe" => 5600, "Brazil" => 2500);
    foreach($vacation as $key => $value){
        echo $key . " costs $" . $value . " which means ";
        if ($value > 3000){
            echo $key . " exceeds your budget of $3000";
            echo '<br>';
        }
        else{
            echo "you can afford to visit " . $key;
            echo '<br>';
        }
    }
    $gas_prices = array(1, 1.5, 2, 2.5,);
    foreach ($gas_prices as $value){
        echo "$value";
        echo '<br>';
}
    $students_gender = array(
        array('mike', 'bob', 'bill'),
        array('jen', 'leslie', 'sherie')
    );
    foreach ($students_gender as $value){
//        echo $value;
//        echo '<br>';
        foreach ($value as $obj){
            echo "$obj";
            echo'<br>';
        }
    }
?>