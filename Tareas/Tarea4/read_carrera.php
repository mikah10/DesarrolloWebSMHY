<!DOCTYPE html>
<html>
<head>
    <title>Carreras</title>
</head>
<body>
<?php
include ('conexion.php');

$sql = "SELECT id, nombre FROM carrera";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
?>

<h2>Carreras</h2>
<a href="form_create.php">Agregar nueva carrera</a>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Acciones</th>
    </tr>
    <?php
    while($row = $result->fetch_assoc()) {
    ?>
    <tr>
        <td><?php echo $row["id"]; ?></td>
        <td><?php echo $row["nombre"]; ?></td>
        <td><a href="form_update_carrera.php?id=<?php echo $row["id"]; ?>">Editar</a> | <a href="delete.php?id=<?php echo $row["id"]; ?>">Eliminar</a></td>
    </tr>
    <?php
    }
    ?>
</table>
<?php
} else {
?> <div>No existen carreras que mostrar</div>
<?php
}

</body>
</html>
