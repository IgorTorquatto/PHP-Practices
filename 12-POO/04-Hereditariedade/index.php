<?php

class Animal{
    protected $nome;
    protected $tipo;

    function __construct($nome,$tipo)
    {
        $this->nome = $nome;
        $this->tipo = $tipo;
    }

    function getTipo():string{
        return "Eu sou do tipo $this->tipo";
    }

    function getNome():string{
        return "Meu nome é $this->nome";
    }
}

class Gato extends Animal{

    function miar():string{
        return "Miau";
    }

}

class Cachorro extends Animal{

    function latir():string{
        return "Au au";
    }
    
}

$bartolomeu = new Cachorro("Bartolomeu","Doméstico");
$edi = new Gato("Edi","Selvagem");

echo $bartolomeu->getNome() . PHP_EOL;
echo $bartolomeu->latir() . PHP_EOL;
echo $edi->getNome() . PHP_EOL;
echo $edi->getTipo() . PHP_EOL;
echo $edi->miar() . PHP_EOL;