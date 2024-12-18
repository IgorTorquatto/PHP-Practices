<?php

//podemos tipar atributos em uma classe

class Pessoa{

    private String $nome;
    private int $idade;

    function __construct($nome,$idade)
    {
        $this->nome = $nome;
        $this->idade = $idade;
    }

    public function getNome():String{
        return $this->nome;
    }

    public function setNome(String $newName){
        $this->nome = $newName;
    }
}

$pessoa1 = new Pessoa("Pedro",14);
$pessoa1->setNome("Joao");
echo $pessoa1->getNome();