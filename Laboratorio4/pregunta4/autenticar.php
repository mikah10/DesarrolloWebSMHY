<?php
$usuarioValido = "admin";
$contrasenaValida = "123";

$data = json_decode(file_get_contents('php://input'), true);
$usuario = $data['username'];
$contrasena = $data['password'];

// Verifica si los datos son correctos
if ($usuario === $usuarioValido && $contrasena === $contrasenaValida) {
    session_start();
    $_SESSION['nivel'] = 'autenticado';

    echo "autenticado correctamente";
} else {
    echo "no autenticado";
}
?>
