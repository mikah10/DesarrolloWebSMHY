<?php
include ("conexion.php");
$nombre = $_POST['nombre'];
$sql="INSERT INTO carrera (nombre) VALUES ('$nombre')";
 //echo $sql;
 if ($con->query($sql) === TRUE) {
    echo "Se creo el registro la carrera correctamente";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}

$con->close()
?>
<meta http-equiv="refresh" content="3; url=read_carrera.php" />


