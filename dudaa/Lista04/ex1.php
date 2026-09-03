<?php

$idade = 16;
$ingresso = "sim";

echo "Bem vindo ao CineAmor <br>";

if($idade >= 18 && $ingresso == "sim"){
    echo "Você pode entrar e assistir!";
}
else{
    echo "Idade não permitida ou sem ingresso!";
}
?>