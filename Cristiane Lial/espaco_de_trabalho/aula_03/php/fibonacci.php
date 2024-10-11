<?php
// Fibonacci

//$usuario = readline ("Digite um numero");
$anterior=1;
$atual = 2;
$proximo = $atual + $anterior;
echo $anterior . "\n";
echo $atual . "\n";
echo $proximo . "\n";
for ($i = 0; $proximo <= 2000; $i++){
     $anterior = $atual;
     $atual = $proximo;
     $proximo=$atual+ $anterior;


     echo "$proximo\n";
}


// for ($i = $usuario; $i <=100; $i++) {   
//     echo " $i\n";


// }
?>
