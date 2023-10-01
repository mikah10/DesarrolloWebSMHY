
<?php

$cadena1 = isset($_POST['cadena1']) ? $_POST['cadena1'] : '';
$cadena2 = isset($_POST['cadena2']) ? $_POST['cadena2'] : '';

if (strpos($cadena1, $cadena2) !== false) {
    $cadena1SinCadena2 = str_replace($cadena2, '', $cadena1);
    echo $cadena1 . " tiene la palabra " . $cadena2 . " y sin ella se ve así: " . $cadena1SinCadena2;
} else {
    echo $cadena1 . " no tiene la palabra " . $cadena2;
}
?>
