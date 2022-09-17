<?php

$H = 1.70;
$Sexo = "Feminino";

if($Sexo == "Masculino"){
    echo "$Sexo ". (72.7 * $H)- 58;
}
else if ($Sexo == "Feminino"){
    echo "$Sexo ". (62.1 * $H)- 44.7;
}
?>