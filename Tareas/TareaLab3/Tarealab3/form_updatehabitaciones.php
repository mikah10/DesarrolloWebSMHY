<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <?php include("conexion.php");
    $id=$_GET['id'];
    $sql="SELECT nro,id_tipo_habitacion,bano_privado,espacio,precio from habitacion where id=$id";
    $resultado=$con->query($sql);
    $row = $resultado->fetch_assoc();
    
    ?>
    <form action="update_habitacion.php" method="post">

        <div>
            <label for="nro">numero</label>
            <input type="number" name="numero" value="<?php echo $row['numero']?>" id="cuad">
        </div>
        <div>
            <label for="id_tipo_habitacion">Tipo de habitacion</label>
            <input type="number" name="id_tipo_habitacion" value="<?php echo $row['id_tipo_habitacion']?>" id="cuad">
        </div>
        <div>
            <label for="bano_privado">Bano Privado</label>
            <input type="number" name="bano_privado" value="<?php echo $row['bano_privado']?>" id="cuad">
        </div>
        <div>
            <label for="espacio">espacio</label>
            <input type="number" name="espacio" value="<?php echo $row['espacio']?>" id="cuad">
        </div>
        <div>
            <label for="precio">precio</label>
            <input type="number" name="precio" value="<?php echo $row['precio']?>" id="cuad">
        </div>
        <input type="hidden" name="id" value="<?php echo $id?>">
        <input type="submit" value="Editar" id="cuadcrear">


    </form>

</body>

</html>