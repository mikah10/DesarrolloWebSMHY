<?php
include ("conexion.php");
$id = $_POST['id'];
$nombre = $_POST['nombre'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];

    $sql = "INSERT INTO carrera (nombre) VALUES ('$nombre')";

    if ($conn->query($sql) === TRUE) {
        echo "Se creo el registro la carrera correctamente";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
<meta http-equiv="refresh" content="3; url=read_carrera.php" />
