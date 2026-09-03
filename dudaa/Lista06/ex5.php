<?php

$opcao = 2;
echo '<h1 style="color: red;">MARIO BROS</h1><br>';
echo "1 - Jogar <br>";
echo "2 - Ver personagens <br>";
echo "3 - Ver ranking <br>";
echo "4 -Configurações <br>";
echo "5 - Sair <br><br>";

switch($opcao) {
    case 1:
        echo "Iniciando o jogo...";
        break;
    case 2:
        echo "Escolha um personagem... <br>";
        echo "Mario, Luigi, Peach, Bowser";
        break;
    case 3:
        echo "Abrindo ranking... <br>";    
        echo "1. Jogador1 - 100 pontos <br>";
        echo "2. Jogador2 - 80 pontos <br>";
        echo "3. Jogador3 - 60 pontos <br>";
        break;
    case 4:
        echo "Abrindo configurações...";
        break;
    case 5:
        echo "Saindo do jogo...";
        break;
    default:
        echo "Opção inválida!";
}
?>
