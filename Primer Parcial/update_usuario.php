<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php include("conexion.php");
    $id = $_GET['id'];
    $sql = "SELECT * FROM usuario WHERE id = $id";
    $resultado = $con->query($sql);
    $row = $resultado->fetch_assoc();
    ?>
    <form action="update_usuario.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        <label for="">Correo</label>
        <input type="text" name="correo" value="<?php echo $row['correo']; ?>">
        <br>
        <label for="">Nombre</label>
        <input type="text" name="nombre" value="<?php echo $row['nombre']; ?>">
        <br>
        <label for="">Rol</label>
        <input type="text" name="rol" value="<?php echo $row['rol']; ?>">
        <br>
        <input type="submit" value="Actualizar">
    </form>
    

</body>

</html>