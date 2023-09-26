<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero = $_POST["numero"];
    $longitud = $_POST["longitud"];
    $mayor = $_POST["mayor"];

    $arr = array();
    for ($i = 0; $i < $longitud; $i++) {
        array_push($arr, $numero);
    }

    include 'eliminar.php';
}
?>
