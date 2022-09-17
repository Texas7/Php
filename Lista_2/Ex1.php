<?php

    $number = $_POST['number'];


    if ($number > 0){
        echo "$number = Positivo";
    } 
    else if($number < 0){
        echo "$number = Negativo";
    }
    else{
        echo "$number = Zero";
    }

?>