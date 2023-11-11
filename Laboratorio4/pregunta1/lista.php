<?php
// Crear datos con la información proporcionada
$datos = array(
    array(
        "Nro" => 1,
        "Apellidos Nombre" => "Juan Perez",
        "Edad" => 25,
        "Materia" => "SIS-256",
        "Nota" => 83
    ),
    array(
        "Nro" => 2,
        "Apellidos Nombre" => "Ricardo Luna",
        "Edad" => 30,
        "Materia" => "SIS-258",
        "Nota" => 70
    ),
    array(
        "Nro" => 3,
        "Apellidos Nombre" => "Teresa Tomasa",
        "Edad" => 26,
        "Materia" => "SIS-256",
        "Nota" => 84
    ),
    array(
        "Nro" => 4,
        "Apellidos Nombre" => "Favian Umbre",
        "Edad" => 24,
        "Materia" => "SIS-258",
        "Nota" => 70
    )
);


$json_data = json_encode($datos);
header('Content-Type: application/json');
echo $json_data;
?>

