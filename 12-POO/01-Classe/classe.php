<?php

class Fruta {
    public $nome;
    public $cor;
    public $valor;

    public function apresentar(): string{
        return "Meu nome é {$this->nome} tenho a cor {$this->cor} e custo {$this->valor} R$";
    }
}

$laranja = new Fruta();
$laranja->nome = "laranja";
$laranja->cor = "laranja";
$laranja->valor = 40;
echo $laranja->apresentar();