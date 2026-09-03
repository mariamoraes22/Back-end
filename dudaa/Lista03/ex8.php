<?php

$nome = "Maria";
$senha = "123456";
$confirmarsenha = "123456";
$data_nasc = "22-07-2009";

if($nome != " "){
    echo "Nome válido!";
}
else{
    echo "Nome Inválido!";
}
echo "<br>";

if($senha == $confirmarsenha){
    echo "Senha confirmada!";
}
else{
    echo "Senha não confirmada!";
}
echo "<br>";

echo $data_nasc;
?>