<?php

if(isset($_GET['b']) && isset($_GET['h'])) {
    $b = floatval($_GET['b']);
    $h = floatval($_GET['h']);
    
    $area = ($b * $h) / 2;
    
    echo "El área del triángulo es: " . $area;
} else {
    echo "Por favor, introduzca los valores de base y altura.";
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Resultado</title>
</head>
<body>

<a href="ejercicio3.php">Regresar</a>

</body>
</html>
