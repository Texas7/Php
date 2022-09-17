<?php

$number = $_POST['number'];
$sexo = $_POST['sexo'];

if($sexo == "M"){
    echo 'Peso ideal: ' .(72.7*$number)- 58;
}
else if($sexo == "F"){
    echo 'Peso ideal: ' .(62.1*$number)- 58;
}else{
    echo 'inválido';
}

?>