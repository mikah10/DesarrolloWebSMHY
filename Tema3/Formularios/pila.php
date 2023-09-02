<?php
 class pila {
    private $pila=array();
    private $tope=0;
    public function __construct() {
        $this->tope=0;
    }
    public function insertar($elemento) {
        $this->pila[$this->tope]=$elemento;
        $this->tope++;
    }
    public function pop() {
        $this->tope--;
        $elemento=$this->pila[$this->tope];
        unset($this->pila[$this->tope]);
        return $elemento;
    }
    public function top() {
        return $this->pila[$this->tope-1];
    }
    public function estaVacia() {
        return $this->tope==0;
    }
    public function size() {
        return $this->tope;
    }
    public function __toString() {
        $cadena="";
        for($i=0;$i<$this->tope;$i++) {
            $cadena.=$this->pila[$i]."<br>";
        }
        return $cadena;
    }
 } 


