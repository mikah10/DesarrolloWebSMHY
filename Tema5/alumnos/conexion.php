<?php
$con =  new mysqli("localhost", "root", "", "bd_alumnos");
if ($con->connect_errno) {
    echo "Fallo al conectar a MySQL: " . $con->connect_error;
}
?>
```