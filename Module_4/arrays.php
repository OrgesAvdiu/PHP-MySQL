<?php
/*
    $sports = ['Football', 'Basketball', 'VoleyBall'];
    echo $sports[1];

    "<br>";

    echo end($sports);

    "<br>";

    echo count($sports);

    "<br>";


    $sports = array('Football', 'Basketball', 'VoleyBall');
    for($i = 0; $i < 3; $i++){
        echo $sports[$i], "\n";
    }


    $sports = array('Football', 'Basketball', 'VoleyBall');
    array_push($sports, "Golf");
    var_dump($sports);

    $sports = array('Football', 'Basketball', 'VoleyBall', 'Golf');
    array_pop($sports);
    var_dump($sports);


    $sports = array('Football', 'Basketball', 'VoleyBall', 'Golf');
    array_unshift($sports, 'Tennis');
    var_dump($sports);
*/
    $sports = array('Football', 'Basketball', 'VoleyBall', 'Golf');
    array_shift($sports);
    var_dump($sports);
?>