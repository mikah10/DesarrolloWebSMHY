<?php
    session_start();
    include('connection.php');
    $nombre = $_POST['nombre'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM usuarios WHERE nombre = '$nombre' AND password = SHA1('$password')";
    $consulta = mysqli_query($con, $sql);
    $usuario = mysqli_fetch_array($consulta);
    if($usuario != null){
        $_SESSION["nivel"] = $usuario["nivel"];
        echo "Autenticado correctamente";
    } else {
        echo "No autenticado";
    }