//Restaurar base de datos bd_alumnos.sql Al Presionar Pregunta 5 debe mostrar los datos de 
la tabla usuarios utilizando llamado pregunta5.php, en una tabla con los campos: correo , 
nombre completo, nivel si el nivel=1 debe mostrar la leyenda administrador caso contrario 
mostrar usuario y una columna operación que dice Cambiar a Usuario en el caso del nivel 1 
y Cambiar a Administrador en el caso de ser Usuario. operaciones
<?php
$con = new mysqli("localhost", "root", "", "bd_alumnos");
if ($con->connect_error) {
    die("conexion fallada" . $con->connect_error);
}
?>



