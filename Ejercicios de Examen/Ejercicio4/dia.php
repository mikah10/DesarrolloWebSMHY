<?php 
$n= $_GET['n'];
$dias = [
    1 => 'Lunes',
    2 => 'Martes',
    3 => "Miércoles",
    4 => 'Jueves',
    5 => 'Viernes',
    6 => 'Sábado',
    7 => 'Domingo'
]
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>El dia relacionado con el numero es:</h3>
    <select>
        <?php foreach($dias as $key => $dia){ 
            $selected = ($key == $n) ? "selected" : "";
            echo "<option value='$key' $selected>$dia</option>";
         }
         echo ">$dia</option>"

         ?>

    </select>
    <br>
    <br>
    <a href="formulario.html">Volver al formulario</a>

</body>
</html>