<?php
//usuario digita 10 numeros
//Programa fala quantos deles é maior do que 10
// Pergunta 1: Como verifico se um numero é maior que 10?
//if (numero>10)
// Pergunta 2: Como faço para contar quantos numeros 
// maiores que 10 existem levando em conta o que o
// usuario digitou?
$saomaiores = 0; 
for($i=0; $i<10; $i++){
    $numero = readline ("Digite um numero:");

    if($numero > 10){
        $saomaiores++;
    }
}

print ("Existem $saomaiores números maiores que 10\n");
?>



?>