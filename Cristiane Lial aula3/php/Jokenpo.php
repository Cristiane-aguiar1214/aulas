<?php

$jogador1 = readline( "faça sua jogada: ");
//$jogador2 = readline("faça sua jogada:");
$jogadas = ["pedra","papel","tesoura"];

$jogador2 =$jogadas[array_rand($jogadas)];
echo "$jogador2\n"; 

if( ($jogador1==="pedra"&& $jogador2=== "tesoura") ||
($jogador1=== "tesoura"&& $jogador2=== "papel") ||
($jogador1=== "papel"&& $jogador2=== "pedra")){
    echo "Jogador1 Ganhou\n";
}
else if ($jogador1 === $jogador2){
    echo "Empate\n";
}
else{
    echo"jogador 2 Ganhou!\n";
}


