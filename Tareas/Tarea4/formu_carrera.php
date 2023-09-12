<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Carrera</title>
    <link rel="stylesheet" href="estilos_carrera.css">
</head>

<body>
    <?php include('conexion.php'); ?>

    <form action="create_carrera.php" method="post">
        <div>
            <label for="nombre">Nombre de la Carrera:</label>
            <input type="text" name="nombre">
        </div>
        
        <input type="submit" value="Agregar Carrera">
    </form>

    <h3>Carreras existentes:</h3>
    <ul>
        <?php 
        $sql = "SELECT id, nombre FROM carrera";
        $resultado = $con->query($sql);
        while ($row = $resultado->fetch_assoc()) { 
        ?>
            <li><?php echo $row['nombre'] ?></li>
        <?php } ?>
    </ul>

</body>

</html>
