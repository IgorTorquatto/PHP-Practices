<?php

class Numero{
    private $numero;

    function __construct($num)
    {
        $this->numero = $num;
    }

    public function get_numero(){
        return $this->numero;
    }

    public function par_ou_impar():String{
        if($this->numero % 2 == 0){
            return "par";
        }else{
            return "impar";
        }
    }

    public function tabuada():array{
        $tabuada = [];
        for($i=0; $i<=10;$i++){
            array_push($tabuada,$this->numero * $i);
        }
        return $tabuada;
    }

    public function raiz_quadrada(){
        return sqrt($this->numero);
    }
}