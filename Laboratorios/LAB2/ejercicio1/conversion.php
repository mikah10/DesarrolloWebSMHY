<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cantidad = $_POST["cantidad"];
    $unidad1 = $_POST["unidad1"];
    $unidad2 = $_POST["unidad2"];

    if ($unidad1 == $unidad2) {
        echo "<p>La cantidad es la misma en ambas unidades.</p>";
    } elseif ($unidad1 == "mm" && $unidad2 == "cm") {
        $resultado = $cantidad / 10;
        echo "<p>$cantidad milímetros son $resultado centímetros.</p>";
    } elseif ($unidad1 == "mm" && $unidad2 == "dm") {
        $resultado = $cantidad / 100;
        echo "<p>$cantidad milímetros son $resultado decímetros.</p>";
    } elseif ($unidad1 == "mm" && $unidad2 == "m") {
        $resultado = $cantidad / 1000;
        echo "<p>$cantidad milímetros son $resultado metros.</p>";
    } elseif ($unidad1 == "mm" && $unidad2 == "km") {
        $resultado = $cantidad / 1000000;
        echo "<p>$cantidad milímetros son $resultado kilómetros.</p>";
    } elseif ($unidad1 == "cm" && $unidad2 == "mm") {
        $resultado = $cantidad * 10;
        echo "<p>$cantidad centímetros son $resultado milímetros.</p>";
    } elseif ($unidad1 == "cm" && $unidad2 == "dm") {
        $resultado = $cantidad / 10;
        echo "<p>$cantidad centímetros son $resultado decímetros.</p>";
    } elseif ($unidad1 == "cm" && $unidad2 == "m") {
        $resultado = $cantidad / 100;
        echo "<p>$cantidad centímetros son $resultado metros.</p>";
    } elseif ($unidad1 == "cm" && $unidad2 == "km") {
        $resultado = $cantidad / 100000;
        echo "<p>$cantidad centímetros son $resultado kilómetros.</p>";
    } elseif ($unidad1 == "dm" && $unidad2 == "mm") {
        $resultado = $cantidad * 100;
        echo "<p>$cantidad decímetros son $resultado milímetros.</p>";
    } elseif ($unidad1 == "dm" && $unidad2 == "cm") {
        $resultado = $cantidad * 10;
        echo "<p>$cantidad decímetros son $resultado centímetros.</p>";
    } elseif ($unidad1 == "dm" && $unidad2 == "m") {
        $resultado = $cantidad / 10;
        echo "<p>$cantidad decímetros son $resultado metros.</p>";
    } elseif ($unidad1 == "dm" && $unidad2 == "km") {
        $resultado = $cantidad / 10000;
        echo "<p>$cantidad decímetros son $resultado kilómetros.</p>";
    } elseif ($unidad)
}
?>
    </div>
</body>
</html>
