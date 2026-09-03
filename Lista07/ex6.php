<?php
function calcularMedia($nota1, $nota2, $nota3) {
    $soma = $nota1 + $nota2 + $nota3;
    $media = $soma / 3;
    return $media;
}

echo calcularMedia(8, 9, 7) . "<br>";
echo calcularMedia(10, 6, 8) . "<br>";
echo calcularMedia(5, 7, 9) . "<br>";
?>