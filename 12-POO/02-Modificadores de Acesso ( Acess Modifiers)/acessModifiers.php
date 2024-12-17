<?php

//PROPRIEDADES e MÉTODOS podem ter modos de acesso distintos sendo eles:

//public (padrão) -> pode ser acessado por todos 
//protected -> pode ser acessado dentro da própria classe ou em derivados dessa classe
//private -> só pode ser acessado dentro da classe

class Veiculo {
    public $nome;
    protected $ano;
    private $valor = 10;

    public function set_ano($age){
        $this->ano = $age;
    }

    public function get_valor(){
        return $this->valor;
    }
}

$carro = new Veiculo();
$carro->nome = "Carro1";
$carro->set_ano(1995);
echo $carro->get_valor();