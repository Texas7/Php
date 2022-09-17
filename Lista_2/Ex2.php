<?php

$number = $_POST['number'];

for($aux = 0; $aux <= 10; $aux++){
    echo  $number .'x'. $aux.'='. $number * $aux . '<br>';
}

?>