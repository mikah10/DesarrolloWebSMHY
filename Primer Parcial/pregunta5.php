<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php include('conexion.php');

$sql = "SELECT correo, nombre,rol as nivel FROM usuario u;";    


echo $sql;
$resultado = $con->query($sql);
if ($resultado->num_rows > 0) {
?>
    <table class="styled-table">
        <thead>
            <tr>
                <th>Correo</th>
                <th>Nombre</th>
                <th>Nivel</th>
                <th>Operaciones</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = $resultado->fetch_assoc()) {
            ?>
                <tr>
                    <td><?php echo $row['correo']; ?></td>
                    <td><?php echo $row['nombre']; ?></td>
                    <td><?php echo $row['rol']; ?></td>
                    <td>
                        <a class="option-button" href="form_update_carrera.php?id=<?php echo $row['id']; ?>">Editar</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
<?php
} else {
?> <div class="no-data">No existen registros que mostrar</div>
<?php }
?>




</body>
</html>