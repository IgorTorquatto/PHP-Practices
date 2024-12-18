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

    function emitirSom():string{
        return "Som";
    }
}

class Cachorro extends Animal{

    function emitirSom():string{
        return "au au";
    }
    
}

$bartolomeu = new Cachorro("Bartolomeu","Doméstico");
echo $bartolomeu->emitirSom();