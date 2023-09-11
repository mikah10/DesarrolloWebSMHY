<?php
include ("conexion.php");
$id = $_GET['id'];

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $id = $_GET['id'];

    $sql = "DELETE FROM carrera WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Se elimino la carrera correctamente";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
<meta http-equiv="refresh" content="3; url=read_carrera.php" />