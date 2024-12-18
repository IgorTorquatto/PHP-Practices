<?php

// como a função "emitirSom" é do tipo 'final' ela não pode ser sobrescrita

class Animal{
    protected $nome;
    protected $tipo;

    public function __construct($nome,$tipo)
    {
        $this->nome = $nome;
        $this->tipo = $tipo;
    }

    public function getTipo():string{
        return "Eu sou do tipo $this->tipo";
    }

    public function getNome():string{
        return "Meu nome é $this->nome";
    }

    final function emitirSom():string{
        return "Som";
    }
}

class Cachorro extends Animal{

    //function emitirSom():string{
       // return "au au";
    //}
    
}

$bartolomeu = new Cachorro("Bartolomeu","Doméstico");
echo $bartolomeu->emitirSom();