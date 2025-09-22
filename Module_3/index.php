<?php
    $num = -5;
    if($num < 0){
        echo "$num is less than 0";
        }

        echo "<br>";

    $age = 15;
    if(($age > 12) && ($age < 20)){
        echo "You are a teenager";
    }

    echo "<br>";

    if ($age < 20){
        echo "You are under 18";
    }
    else{
        echo "You are an adult";
    }

         echo "<br>";
         
    if($num < 0){
        echo "The value of $num is a negative number.";
    }
    else if($num == 0){
        echo "The value of $num is 0.";
    }
    else{
        echo "The valueof $num is a positive number";
    }
?>