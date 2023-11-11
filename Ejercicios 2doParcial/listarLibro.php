<?php
include('conexion.php');

$orden = isset($_GET['orden']) ? $_GET['orden'] : 'id';
$sql = "SELECT id, imagen, titulo FROM libros ORDER BY $orden";
$resultado = $con->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="script.js"></script>

    <title>Lista de Libros</title>
</head>

<body>

    <?php
    if ($resultado->num_rows > 0) {
    ?>
        <table border="2">
            <tr>
            <th><a href="#" onclick="Pregunta1('listarLibro.php?orden=titulo')">Título</a></th>
                <th>Imagen</th>
            </tr>
            <?php while ($row = $resultado->fetch_assoc()) { ?>
                <tr>
                    <td><?php echo $row['titulo']; ?></td>
                    <td><img src="imagenes/<?php echo $row['imagen']; ?>" alt="Libro" height="150"></td>
                   
                </tr>
            <?php } ?>
        </table>
    <?php } else { ?>
        <div>No existen registros que mostrar</div>
    <?php } ?>

</body>

</html>

<?php
$con->close();
?>
