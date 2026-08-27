<?php

//Cadastro de um funcionário novo no sistema
$nome = "Jonh Wick";
$acesso = 3;

if ($acesso == 1){
    echo "Bem vindo $nome. você tem acesso básico ao sistema";
}
elseif($acesso == 2){
    echo "Bem vindo $nome. Você tem acesso intermediário ao sistema";
}
elseif($acesso == 3){
    echo "Bem vindo $nome. Você tem acesso intermediário ao sistema";
}
else{
    echo "Erro. Número de acesso inválido!";
}
?>