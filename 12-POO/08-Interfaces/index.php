<?php
//Assim como as classes são modelos para a criação de objetos
//Interfaces são modelos para a criação de classes
//Assim as classes criadas a partir de interfaces devem implementar os métodos da interface
//São importantes para vermos o conceito de polimorfismo

interface Animal{
    public function vocalizar();
}

class Lobo implements Animal{
    public function vocalizar()
    {
        echo 'uivar';
    }
}

class Cachorro implements Animal{
    public function vocalizar()
    {
        echo 'latir';
    }
}

$bob = new Lobo();
$bob->vocalizar();