<?php

$valor = 110;
$valormin_entrega = 99.9;
$idade = 15;
$idademin_bebida = 18;
$estoque = 5;
$qnt_pedida = 6;
$status = "pago";

if($valor >= $valormin_entrega){
    echo "Pedido com frete grátis!";
}
else{
    echo "Pedido com frete de R$10,00";
}
echo "<br>";

if($idade >= $idademin_bebida){
    echo "Venda de bebida liberada!";
}
else{
    echo "Você ainda é de menor, não faça isso, bebida negada!";
}

echo "<br>";

if($estoque >= $qnt_pedida){
    echo "Pedido realizado!";
}
else{
    echo "Seu produto está em falta, tente mais tarde!";
}

echo "<br>";

if($status == "pago"){
    echo "Pedido pago!";
}
else{
    echo "Pague o pedido!";
}

?>