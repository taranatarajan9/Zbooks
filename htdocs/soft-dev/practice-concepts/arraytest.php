<?php
/**
 * Created by PhpStorm.
 * User: taranatarajan
 * Date: 6/27/18
 * Time: 5:43 AM
 */
//    $students_gender['female'][] = 'jen';
//    $students_gender['female'][] = 'leslie';
//    $students_gender['female'][] = 'sherie';
//    $students_gender['male'][] = 'mike';
//    $students_gender['male'][] = 'bob';
//    $students_gender['male'][] = 'bill';
    $students_gender = array(
        "male" => array('mike', 'bob', 'bill'),
        "female" => array('jen', 'leslie', 'sherie')
    );
    echo '<pre>';
    print_r($students_gender);
    echo '</pre>';

?>