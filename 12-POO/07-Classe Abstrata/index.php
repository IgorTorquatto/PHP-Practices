<?php
//Em classes abstratas os métodos são apenas declarados mas não é implemtado sua funcionalidade
//isso deve ser feito obrigatoriamente pela classe que herda a classe abstrata
//a classe que extende a classe abstrata deve usar o mesmo acess modifier ou outro menos restritivo.
//podemos passar parâmetros adicionais aos métodos na classe que extende a classe abstrata

abstract class Pessoa{
    abstract public function cumprimentar();
    abstract public function despedir();
}

class Homem extends Pessoa{
    public function cumprimentar():string{
        return "oi";
    }
    public function despedir():string{
        return "tchau";
    }
}

$joao = new Homem();
echo $joao->cumprimentar();