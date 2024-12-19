<?php

class Humanos{
    private $masculino = [];
    private $feminino = [];
    private $desconhecidos = [];

    public function definir($sexo,$nome){
        $sex = strtoupper($sexo);

        if($sex == 'M'){
            array_push($this->masculino,$nome);
        }
        else if($sex == 'F'){
            array_push($this->feminino,$nome);
        }
        else{
            array_push($this->desconhecidos,$nome);
        }

    }

    public function get_masculino(){
        return $this->masculino;
    }

    public function get_feminino(){
        return $this->feminino;
    }

    public function get_desconhecidos(){
        return $this->desconhecidos;
    }
}
