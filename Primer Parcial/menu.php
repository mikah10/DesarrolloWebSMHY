<?php
require_once 'Calculadora.php'; // Asegúrate de que la ruta sea correcta

$a = isset($_GET['a']) ? floatval($_GET['a']) : 0;
$b = isset($_GET['b']) ? floatval($_GET['b']) : 0;
$operacion = isset($_GET['operacion']) ? $_GET['operacion'] : 'sumar';

$calculadora = new Calculadora($a, $b);

switch ($operacion) {
    case "sumar":
        $resultado = $calculadora->sumar();
        break;
    case "restar":
        $resultado = $calculadora->restar();
        break;
    case "multiplicar":
        $resultado = $calculadora->multiplicar();
        break;
    case "dividir":
        $resultado = $calculadora->dividir();
        break;
    default:
        $resultado = "Operación no válida";
        break;
}

echo "Resultado de $a $operacion $b es: $resultado";
?>
