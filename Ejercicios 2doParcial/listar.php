<?php
include('conexion.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'], $_POST['nivel'])) {
    $usuarioId = $_POST['id'];
    $nuevoNivel = $_POST['nivel'];

    // Evitar inyección de SQL usando sentencias preparadas
    $updateSql = "UPDATE usuarios SET nivel = ? WHERE id = ?";
    $stmt = $con->prepare($updateSql);
    $stmt->bind_param("ii", $nuevoNivel, $usuarioId);

    if ($stmt->execute()) {
        // Devuelve el nuevo nivel para actualizar el botón en la interfaz
        echo $nuevoNivel;
        exit;
    } else {
        echo "Error al actualizar el nivel: " . $stmt->error;
    }
}

$sql = "SELECT id, usuario, nombrecompleto, cu, idcarrera, nivel FROM usuarios";
$resultado = $con->query($sql);
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuarios</title>
    <script src="script.js"></script>
    <link rel="stylesheet" href="estilo.css">
    <style>
button {
    width: 150px;
    height: 40px;
    font-size: 14px;
    margin: 5px;
}
button.rosa {
    background-color: pink;
    color: white;
}

button.morado {
    background-color: royalblue;
    color: white;
}

</style>
</head>

<body>
    <div id="lista-container">
        <?php
        if ($resultado->num_rows > 0) {
        ?>
            <table border="2">
                <div class ="cuadro">
                <tr>
                    <th class="cuadro">ID</th>
                    <th class="cuadro"><a>Correos</a></th>
                    <th class="cuadro"><a>Nombre Completo</a></th>
                    <th class="cuadro"><a>Nivel</a></th>
                    <th class="cuadro">Operación</th>
                </tr>
                </div>
                <?php while ($row = $resultado->fetch_assoc()) { ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['usuario']; ?></td>
                        <td><?php echo $row['nombrecompleto']; ?></td>
                        <td class="nivel"><?php echo ($row['nivel'] == 1) ? 'Administrador' : 'Usuario'; ?></td>
                        <td>
                            <button class="usuario <?php echo ($row['nivel'] == 1) ? 'morado' : 'rosa'; ?>" data-id="<?php echo $row['id']; ?>" data-nivel="<?php echo $row['nivel']; ?>" onclick="actualizarUsuario(this)">
                                <?php echo ($row['nivel'] == 1) ? 'Cambiar a Administrador' : 'Cambiar a Usuario'; ?>
                            </button>
                        </td>
                    </tr>
                <?php } ?>
            </table>
        <?php } else { ?>
            <div>No existen registros que mostrar</div>
        <?php } ?>
    </div>

    <script>
       function actualizarUsuario(btn) {
    var idUsuario = btn.getAttribute('data-id');
    var nivelActual = btn.getAttribute('data-nivel');

    var nuevoNivel = (nivelActual == 1) ? 0 : 1;

    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'listar.php', true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
            // Actualizar el botón con el nuevo nivel
            btn.setAttribute('data-nivel', xhr.responseText);
            btn.innerText = (xhr.responseText == 1) ? 'Cambiar a Usuario' : 'Cambiar a Administrador';

            btn.classList.remove('rosa', 'morado');
            btn.classList.add(xhr.responseText == 0 ? 'rosa' : 'morado');

            var fila = btn.closest('tr');
            var nivelCell = fila.querySelector('.nivel');
            nivelCell.innerText = (xhr.responseText == 1) ? 'Administrador' : 'Usuario';
        }
    };
    xhr.send('id=' + idUsuario + '&nivel=' + nuevoNivel);

    return false;
}
    </script>

    <?php
    $con->close();
    ?>
</body>

</html>
