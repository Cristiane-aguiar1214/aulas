<?php
//usuario digita um numero
// usuario escolhe um numero
// se a soma dos 2 numeros forem par o usuario vence
//se for impar, o computador vence

function ehParOuImpar($usuario,$computador){
$soma = $usuario + $computador;
//Se a soma é um numero par
if($soma%2==0){
    echo"usuario ganhou\n";
}
else{
    
    echo "Computador ganhou\n";
}
}
$usuario = readline ( "Digite um numero:");
$computador = rand(1,100);

ehParOuImpar($usuario, $computador);

?>