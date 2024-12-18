<?php
//Métodos estáticos são métodos que podem ser acessados sem que seja necessário instanciar a classe

class Animal{
    private $nome;
    
    function __construct($nome)
    {
        $this->nome = $nome;
    }

    static public function emitirSom(){
        echo 'teste';
    }
}

Animal::emitirSom();