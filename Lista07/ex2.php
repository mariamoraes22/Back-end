<?php

function verificarIdade($idade) {
    if ($idade >= 18) {
        return "Você é maior de idade. Pode tirar carta!<br><br>";
    } else {
        return "Você é menor de idade. Só de UBER rs <br><br>";
    }
}
echo verificarIdade(17);
echo verificarIdade(44);
echo verificarIdade(15);
echo verificarIdade(18);
?>