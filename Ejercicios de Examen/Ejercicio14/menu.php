<!DOCTYPE html>
<html>
<head>
    <title>Menú de opciones</title>
</head>
<body>

<?php
$opcion = isset($_POST['opcion']) ? $_POST['opcion'] : '';
?>

<form action="menu.php" method="post">
    <select name="opcion" onchange="this.form.submit()">
        <option value="select" selected>Selecciona una opción</option>
        <option value="fibonacci" <?= $opcion === 'fibonacci' ? 'selected' : '' ?>>Fibonacci</option>
        <option value="mayor" <?= $opcion === 'mayor' ? 'selected' : '' ?>>Mayor</option>
        <option value="piramide" <?= $opcion === 'piramide' ? 'selected' : '' ?>>Pirámide</option>
    </select>
</form>

<?php
if($opcion === 'fibonacci') {
    echo '<form action="procesar.php" method="post">
    <input type="hidden" name="opcion" value="fibonacci">
    Ingrese n: <input type="text" name="n">
    <input type="submit" value="Calcular">
    </form>';
} elseif ($opcion === 'mayor') {
    echo '<form action="procesar.php" method="post">
    <input type="hidden" name="opcion" value="mayor">
    Ingrese a: <input type="text" name="a">
    Ingrese b: <input type="text" name="b">
    Ingrese c: <input type="text" name="c">
    <input type="submit" value="Calcular">
    </form>';
} elseif ($opcion === 'piramide') {
    echo '<form action="procesar.php" method="post">
    <input type="hidden" name="opcion" value="piramide">
    Ingrese cadena: <input type="text" name="cadena">
    <input type="submit" value="Mostrar">
    </form>';
}
?>

</body>
</html>
