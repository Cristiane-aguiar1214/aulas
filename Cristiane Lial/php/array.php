<?php

$lista = ["café","acuçar","manteiga", "pão"];
array_push($lista,"queijo");
//for($i=0; $i<count($lista); $i++){
//echo "$lista[$i]\n";
//}
sort($lista);
// Inserir presunto porem de forma que continue ordenado
// array_splice: 1. sua lista
// 2. posição que voce quer inserir
// 3. Quer remover elementos? Se não quiser, coloque 0
// 4. Elemento que voce quer inserir
array_splice($lista,4,0,"presunto");
foreach($lista as $item){
    echo "$item\n";
}

$ultimo = array_pop($lista);
// echo $ultimo


?>