<?php

class Pessoa{
    private $nome;
    private $sobrenome;

    function __construct($nome,$sobrenome)
    {
        $this->nome = $nome;
        $this->sobrenome = $sobrenome;
    }

    function getNome():string{
        return "Meu nome é ". "$this->nome";
    }

    function getSobrenome():string{
        return "Meu sobrenome é ". "$this->sobrenome";
    }

    function getFullname():string{
        return "Meu nome completo é ". "$this->nome". " $this->sobrenome";
    }
}

//Ao criar a instância devemos obrigatoriamente satisfazer os parâmetros do construtor
$antonio = new Pessoa("Antônio", "da Silva");
echo $antonio->getFullname();