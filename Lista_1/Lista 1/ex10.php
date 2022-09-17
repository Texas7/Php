<?php

$x = 1;
$y = 2;
$z = 3;

if($x > $y && $y > $z){
    echo "$x <br>";
    echo "$z - $y - $x";
}
else if($x > $z && $z > $y){
    echo "$x <br>";
    echo "$y - $z - $x";
}
else if($y > $x && $x > $z){
    echo "$y <br>";
    echo "$z - $x - $y";
}
else if($y > $z && $z > $x){
    echo "$y <br>";
    echo "$x - $z - $y";
}
else if($z > $y && $y > $x){
    echo "$z <br>";
    echo "$x - $y - $z";
}
else if($z > $x && $x > $y){
    echo "$z <br>";
    echo "$y - $x - $z";
}
?>