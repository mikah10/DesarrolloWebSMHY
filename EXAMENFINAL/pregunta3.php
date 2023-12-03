<?php
    $materia = $_GET['materia'];

    include("conexion.php");
    $sql = "SELECT fotografia, nombres_apellidos FROM alumnos WHERE materia = '$materia'";
    $consulta = mysqli_query($con, $sql);
?>
<table border=1>
    <tr>
        <th>Imagen</th>
        <th>Nombre y Apellidos</th>
        <?php for($i = 0; $i < $numero; $i++) {?>
            <th>Cuadro <?php echo $i+1?></th>
        <?php } ?>
    </tr>
    <?php while($alumno = mysqli_fetch_array($consulta)){ ?>
        <tr>
            <td><?php echo $CU["CU"];?> ></td>
            <td><?php echo $alumno["nombres_apellidos"]; ?></td>
            <?php for($i = 0; $i < $numero; $i++) {?>
                <td></td>
            <?php } ?>
        </tr>
    <?php } ?>
</table>