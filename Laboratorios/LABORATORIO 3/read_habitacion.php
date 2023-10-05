<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <h1>TIPO HABITACION</h1>
    <?php include('conexion.php');

$sql = "SELECT id,nro,id_tipo_habitacion,bano_privado,espacio,precio FROM habitacion";

    $resultado = $con->query($sql);
    if ($resultado->num_rows > 0) {
    ?>
        <table = border="1">
            <tr>
                <th>NUMERO DE HABITACION</th>
                <th>TIPO DE HABITACION</th>
                <th>BANIO PRIVADO</th>
                <th>ESPACIO</th>
                <th>PRECIO</th>
                <th>Operaciones</th>
            </tr>
            <?php while ($row = $resultado->fetch_assoc()) {
            ?>
                <tr>
                    
                    <td><?php echo $row['nro']; ?></td>
                    <td><?php echo $row['id_tipo_habitacion']; ?></td>
                    <td><?php echo $row['bano_privado']; ?></td>
                    <td><?php echo $row['espacio']; ?></td>
                    <td><?php echo $row['precio']; ?></td>
                    <td>                        
                        <div class="operaciones">
                        <div class="operaciones_item">
                        <a href="form_updatehabitaciones.php?id=<?php echo $row['id'];?>">Editar</a>
                        </div>
                        <div class="operaciones_itemE">
                        <a href="delete.php?id=<?php echo $row['id'];?>">Eliminar</a>
                        </div>
                        <div class="operaciones_itemE">
                        <a href="fotografia.php?id=<?php echo $row['id'];?>">Fotografia</a>
                        </div>
                        </div> </td>

                </tr>

            <?php } ?>
        </table>

    <?php
    } else {
    ?> <div>No existen registros que mostrar</div>
    <?php }
    ?>
<div class="op">

<div class="operaciones_item1">
<a href="form_habitaciones.php">Registrar una Habitacion</a>
</div>

</body>

</html>