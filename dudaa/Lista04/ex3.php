<?php

$email = "dudamoraes@gmail.com";
$senha = "123456";

echo "Bem vindo ao FACEBOOK <br>";

if($email == "dudamoraes@gmail.com" && $senha == "123456"){
    echo "Acesso Liberado!! <br>";
    header ("Location: https://www.facebook.com");
}
else{
    echo "Email ou senha incorretos!";
}
?>