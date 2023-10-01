<?php

class Examen {
    private $n;      // Número para la serie Fibonacci
    private $cadena; // Cadena para la pirámide
    private $a, $b, $c; // Números para calcular el mayor

    public function __construct($n, $cadena, $a, $b, $c) {
        $this->n = $n;
        $this->cadena = $cadena;
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }
    public function calcularFibonacci() {
        $fib = [0, 1]; // Inicia con los primeros dos números de la serie Fibonacci
        for($i = 2; $i < $this->n; $i++) {
            $fib[] = $fib[$i - 1] + $fib[$i - 2];
        }
        return $fib;
    }

    public function calcularMayor() {
        $numeros = [$this->a, $this->b, $this->c];
        $mayor = max($numeros);
        return ['numeros' => $numeros, 'mayor' => $mayor];
    }

    public function piramide() {
        $len = strlen($this->cadena);
        $result = [];
    
        for($i = 1; $i <= $len; $i++) {
            $spaces = str_repeat(' ', $len - $i); // Genera espacios en función de la longitud de la cadena
            $result[] = $spaces . substr($this->cadena, 0, $i);
        }
    
        return $result;
    }
    
    
    
}

$opcion = $_POST['opcion'];
$examen = null;

switch($opcion) {
    case 'fibonacci':
        $n = intval($_POST['n']);
        $examen = new Examen($n, "", 0, 0, 0);
        $fib = $examen->calcularFibonacci();
        foreach($fib as $num) {
            echo $num . " ";
        }
        break;

    case 'mayor':
        $a = intval($_POST['a']);
        $b = intval($_POST['b']);
        $c = intval($_POST['c']);
        $examen = new Examen(0, "", $a, $b, $c);
        $result = $examen->calcularMayor();
        foreach($result['numeros'] as $num) {
            if ($num === $result['mayor']) {
                echo "<strong>" . $num . "</strong> ";
            } else {
                echo $num . " ";
            }
        }
        break;

    case 'piramide':
        $cadena = $_POST['cadena'];
        $examen = new Examen(0, $cadena, 0, 0, 0);
        $piramide = $examen->piramide();
        foreach($piramide as $linea) {
            echo $linea . "<br>";
        }
        break;
}

echo "<br><a href='menu.php'>Regresar</a>";
?>
