<?php

class Humano{
    public String $nome;

    public function __construct(String $nome) {
        $this->nome = $nome;
    }
}

class Funcionario extends Humano{
    private int $id;
    public function __construct($nome,$id)
    {
        parent::__construct($nome);
        $this->id= $id;
    }
}