<?php
$con = new mysqli("localhost", "root", "", "bd_alumnos");
if ($con->connect_error) {
    die ("Fallo al conectar a MySQL: " . $con->connect_error);
}
?>
