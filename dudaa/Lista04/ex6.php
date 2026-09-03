<?php

$idade = 14;
$deficiencia = "sim";
$gestante = "não";

if($idade >= 60 || $deficiencia == "sim" || $gestante == "sim"){
    echo "Atendimento prioritário‼️‼️";
}
else{
    echo "Atendimento normal✅✅";
}
?>