<?php
include("conexion.php");
$nombres=$_POST['correos'];
$apellidos=$_POST['nombres'];
$CU=$_POST['rol'];
$idcarrera=$_POST["operacion"];
$id=$_POST['id'];

$sql="UPDATE  usuario set correos='$correos',nombres='$nombres',rol='$rol', operacion = $operacion
WHERE  id=$id ";
 //echo $sql;
 if ($con->query($sql) === TRUE) {
    echo "Se actualizo el registro correctamente";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}
?>
<meta http-equiv="refresh" content="3; url=read.php" />