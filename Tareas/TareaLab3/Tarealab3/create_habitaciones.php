<?php
include("conexion.php");
$id=$_POST['id'];
$nro=$_POST['numero'];
$id_tipo_habitacion=$_POST['tipo de habitacion'];
$bano_privado=$_POST['bano privado'];
$precio=$_POST['precio'];

$sql="INSERT INTO habitacion(id,nro,id_tipo_habitacion,bano_privado,espacio,precio) values
 ('$id', '$nro','$id_tipo_habitacion','$bano_privado','$espacio', '$precio') ";

 //echo $sql;
 if ($con->query($sql) === TRUE) {
    echo "Se registro correctamente";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}
$con->close()
?>
<meta http-equiv="refresh" content="3; url=read.php" />

