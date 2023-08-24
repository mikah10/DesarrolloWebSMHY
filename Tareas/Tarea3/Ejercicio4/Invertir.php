<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado de Cadena Invertida</title>
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['cadena'])) {
    $cadenaOriginal = $_POST['cadena'];
    $cadenaInvertida = strrev($cadenaOriginal);  // Usamos strrev() para invertir la cadena
    echo "Cadena original: " . htmlspecialchars($cadenaOriginal) . "<br>";
    echo "Cadena invertida: " . htmlspecialchars($cadenaInvertida);
} else {
    echo "Por favor, regresa e introduce una cadena.";
}
?>

</body>
</html>
