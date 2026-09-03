<?php

$nota1 = 9;
$nota2 = 5;
$nota3 = 8;
$media = ($nota1 + $nota2 + $nota3) / 3;

if($media >= 6){
    echo "Aluno Aprovado!!✅✅";
}
elseif($media >= 5 && $media <7){
    echo "Tem direito a recuperação!!‼️‼️";
}
else{
    echo "Aluno Reprovado!!🚫🚫";
}
?>