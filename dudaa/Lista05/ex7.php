<?php

$peso = 57;
$altura = 1.66;
$altura2 = $altura * $altura;
$IMC = $peso / $altura2;

if($IMC >= 19 && $IMC <= 24){
    echo "Você está no peso ideal!";
}
elseif($IMC >= 25 && $IMC <=29){
    echo "Você está com sobrepeso!";
}
elseif($IMC >= 30 && $IMC <=34){
    echo "Você está com obesidade grau 1";
}
elseif($IMC >= 35 && $IMC <=39){
    echo "Você está com obesidade grau 2";
}
elseif($IMC >= 40){
    echo "Você está com obesidade grau 3";
}
?>
