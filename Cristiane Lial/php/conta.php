<?php
//Vamos criar um sistema bancário com
//saque,deposito,extrato,transferencia

class Conta{
    public $saldo;
    public $numeroconta;
    public $titular;
    public $extrato;

    public function __construct($titular, $numeroconta, $saldo=0){
        $this->titular = $titular;
        $this->numeroconta = $numeroconta;
        $this->saldo = $saldo;
        $this->extrato =[];
    }
public function saque($valor){
    if($valor < 0){
        echo "valor inválido";
    }
else if ($this->saldo >= $valor){
$this->saldo = $this->saldo - $valor;
//$this -> saldo -=$valor;
$saida = "Deposito realizado com sucesso.\n";
$saida = $saida . "saldo atual: $this -> saldo.\n";
array_push ($this-> extrato, $saida);


}

else{
    echo "saldo insuficiente\n.";

}
}

public function deposito ($valor){
    if($valor>0){
$this->saldo+=$valor;
echo "Deposito realizado com sucesso\n";
echo "saldo atual: R$ $this->saldo.\n";
    }
    else{
        echo "valor invalido\n";
    }


    }

    public function transferencia ($destinatario, $valor){
        if ($valor<=0){
            echo "valor inválido\n";
        }
        else if($this->saldo >= $valor){
            $this->saldo -= $valor;
            $destinatario->saldo += $valor;
            $saida = "Transferencia efetuada com sucesso.\n";
            $saida = $saida ."$destinatario -> titular recebeu $valor.\n";
            $saida = $saida . "saldo atual: $this->saldo.\n";
            array_push ($destinatario->extrato,$saida);

            $saida2="tranferencia recebida com sucesso.\n";
            $saida2=$saida2 . "$this->titular envio $valor\n";
            $saida2=$saida2 . "saldo atual: $destinatario->extrato";


            }

        }
        public function verificarextrato(){
            echo"extrato do(a) $this->titular.\n";
            foreach($this->extrato as $operaçao){
                echo$operaçao;

        
            }
            echo"fim do extrato\n";
            echo str_repeat("-",30)."\n";


        }
}


$conta1 = new Conta("Renan","10000", 500);
$conta2 = new conta ("maria,"20000"
$conta1->deposito(100);
$conta1->transferencia ($conta2,200);















?>