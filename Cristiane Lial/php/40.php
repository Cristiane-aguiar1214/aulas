<?php
//Digitar 10 numeros, somar e fazer
// a média

$lista=[];
$somatorio=0;

for($i=0; $i<10;$i++){
$numero = readline("Digite um numero:");
//usando lista
$lista[$i] = $numero;
// Sem usar Lista
$somatorio += $numero;
// $somatorio = $somatorio + $numero

}
echo "A soma é $somatorio\n";
//echo " A soma é: " . array_sum($lista)."\n";
$media = $somatorio/10;
//$media = array_sum($lista)/count($lista);
echo "A média é $media\n";

?>






