<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php include('conexion.php');

    $sql = "SELECT a.id,nombres,apellidos,CU,c.nombre as carrera FROM alumno a
    LEFT JOIN carrera c on a.idcarrera=c.id ";

    $resultado = $con->query($sql);
    if ($resultado->num_rows > 0) {
    ?>
        <table>
            <tr>
                <th>Nombres</th>
                <th>Operaciones</th>
            </tr>
            <?php while ($row = $resultado->fetch_assoc()) {
            ?>
                <tr>
                    <td><?php echo $row['nombres']; ?></td>
                    <td><?php echo $row['carrera']; ?></td>
                    <td><a href="form_update_carrera.php?id=<?php echo $row['id'];?>">Editar</a>
                        <a href="delete_carrera.php?id=<?php echo $row['id'];?>">Eliminar</a>
                </td>

                </tr>

            <?php } ?>
        </table>

    <?php
    } else {
    ?> <div>No existen registros que mostrar</div>
    <?php }
    ?>

    <a href="formu_carrera.php">Agregar carrera</a>




</body>

</html>
