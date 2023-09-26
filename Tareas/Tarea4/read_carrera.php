<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilos_carreras.css">
</head>

<body>
    <div class="main-container">
        <?php include('conexion.php');
        $sql = "SELECT id, nombre FROM carrera";
        $resultado = $con->query($sql);
        if ($resultado->num_rows > 0) {
        ?>
            <table class="styled-table">
                <thead>
                    <tr>
                        <th>Nombres</th>
                        <th>Operaciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = $resultado->fetch_assoc()) {
                    ?>
                        <tr>
                            <td><?php echo $row['nombre']; ?></td>
                            <td>
                                <a class="option-button" href="form_update_carrera.php?id=<?php echo $row['id']; ?>">Editar</a>
                                <a class="option-button" href="delete_carrera.php?id=<?php echo $row['id']; ?>">Eliminar</a>
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
        <a href="formu_carrera.php" class="option-button">Agregar carrera</a>
    </div>
</body>

</html>
