<?php
    include("connection.php");
    $sql = "SELECT * FROM libros";
    $consulta = mysqli_query($con, $sql);
?>
<table border=1>
    <tr>
        <th>Imagen</th>
        <th>Titulo</th>
        <th>Autor</th>
        <th>Año</th>
        <th>Operaciones</th>
    </tr>
    <?php while($libro = mysqli_fetch_array($consulta)){ ?>
        <tr>
            <td><img src="images/<?php echo $libro["imagen"]; ?>" height="150"></td>
            <td><?php echo $libro["titulo"]; ?></td>
            <td><?php echo $libro["autor"]; ?></td>
            <td><?php echo $libro["anio"]; ?></td>
            <td> <span class="buttons">Eliminar</span> <span class="buttons">Editar</span></td>
        </tr>
    <?php } ?>
</table>