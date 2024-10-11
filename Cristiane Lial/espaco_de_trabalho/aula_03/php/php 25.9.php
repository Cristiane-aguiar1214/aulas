
<?php
//Usuario insere sua idade
// Se menor de idade -> imprima 3 programas infantis
// Se maior de idade -> imprima 3 carros com seus preços

function listarCarros(){
    echo "Opala,R$ 60.000\nVectra, R$ 15.000\nGol,R$75.000\n";

}
function listarprogramasinfantis(){
    echo "Tom&Jerry\nPicaPau\nLooneyToones\n";
}
$idade = readline (" Digite sua idade: ");

if($idade >= 18){
listarcarros();
}

else{
    listarprogramasinfantis();

}



