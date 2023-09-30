<?php 

class cola{
    private $elementos = [];
    private $tipo;

    public function __construct($tipo){
        if($tipo === 'Normal' || $tipo === 'Dobleentrada'){
            $this->tipo = $tipo;
        }else{
            echo "Tipo de cola no existe";
        }    
    }
    public function insertarDelante($elemento){
        if($this->tipo === 'Doubleentrada'){
            array_unshift($this->elementos, $elemento);
        }else{
            echo "No se puede insertar un elemento de tipo normal";
        }
    }
    public function insertarDetras($elemento){
        array_push($this->elementos, $elemento);
    }

    public function eliminar(){
        if(count($this->elementos)> 0){
            array_shift($this->elementos);
        }else{
            echo "No hay elementos para eliminar";
        }
    }
    public function mostrar(){
        return $this->elementos;
    }



}

