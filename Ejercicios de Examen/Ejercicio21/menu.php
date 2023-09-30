<?php
include 'Estante.php';

session_start();

if (!isset($_SESSION['estante'])) {
    $_SESSION['estante'] = new Estante();
}
$estante = $_SESSION['estante'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $fila = intval($_POST['fila']);
    $libro = $_POST['libro'];
    $estante->insertarLibro($fila, $libro);
}

$armario = $estante->mostrarArmario();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Menú</title>
</head>
<body>

<h2>Insertar Libro</h2>
<form action="menu.php" method="post">
    Fila N: 1-3: <input type="number" name="fila" min="1" max="3" required><br><br>
    Libro: <input type="text" name="libro" required><br><br>
    <input type="submit" value="Insertar">
</form>

<h2>Contenido del Estante</h2>
<?php foreach ($armario as $fila => $libros) { ?>
    <h3>Fila <?php echo $fila ?></h3>
    <ul>
        <?php foreach ($libros as $libro) { ?>
            <li><?php echo $libro ?></li>
        <?php } ?>
    </ul>
<?php } ?>

</html>
