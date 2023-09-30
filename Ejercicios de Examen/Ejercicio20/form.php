<?php
session_start();

if (isset($_GET['n'])) {
    $_SESSION['n'] = intval($_GET['n']);
    header("Location: vector.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="form.php" method="get">
        <label for="n">Ingrese el tamaño del vector</label>
        <input type="number" name="n">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>