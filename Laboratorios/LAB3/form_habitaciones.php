<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <?php include('conexion.php');
    $sql = "SELECT id,nro,id_tipo_habitacion,bano_privado,espacio,precio from habitacion";
    $resultado = $con->query($sql);
    ?>

    <form action="create_habitaciones.php" method="post">
        <div>
            <label for="nro">numero</label>
            <input type="text" name="numero" id="cuad">
        </div>
        <div>
            <label for="id_tipo_habitacion">tipo de habitacion</label>
            <input type="number" name="id_tipo_habitacion" id="cuad">
        </div>
        <div>
            <label for="bao_privado">bano privado</label>
            <input type="number" name="bano privado" id="cuad">
        </div>
        <div>
            <label for="espacio">espacio</label>
            <input type="number" name="espacio" id="cuad">
        </div>
        <div>
            <label for="precio">precio de habitacion</label>
            <input type="number" name="precio" id="cuad">
        </div>
        <input type="submit" value="Crear" id="cuadcrear">


    </form>

</body>

</html>