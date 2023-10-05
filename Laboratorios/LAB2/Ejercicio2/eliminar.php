<?php
include 'funciones.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $arr = $_POST["arr"];
    $mayor = $_POST["mayor"];

    $result = elimina_nmayores($arr, $mayor);

    echo "<h2>Resultado:</h2>";
    echo "<p>El arreglo original es:</p>";
    echo "<p>" . implode(", ", $arr) . "</p>";
    echo "<p>El arreglo después de eliminar los elementos mayores que " . $mayor . " es:</p>";
    echo "<p>" . implode(", ", $result) . "</p>";
}
?>
