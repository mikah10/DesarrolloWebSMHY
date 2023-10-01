<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .rojo{
            color: red;
        }
        .negrita{
            font-weight: bold;
        }
    </style>
</head>
<body>
    
<h2>Los Doatos Ingresados son:</h2>
<?php 
if (isset($_GET['nombre']) && isset($_GET['ciudad'])){
    $nombre = $_GET['nombre'];
    $ciudad = $_GET['ciudad'];
    echo "<p>Nombre: <span class='rojo'>$nombre</span></p>";
    echo "<p>Ciudad: <span class='negrita'>$ciudad</span></p>";
}else{
    echo "Por favor, introduzca los valores de nombre y ciudad.";

}
?><a href="formulario.html">Regresar al formulario</a>

</body>
</html>