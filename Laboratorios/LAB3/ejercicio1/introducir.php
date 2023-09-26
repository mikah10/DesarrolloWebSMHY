<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversion de unidades </title>
    <style>
        .box {
			border: 2px solid yellow;
			padding: 20px;
			margin: auto;
			width: 50%;
			background-color: grey;
			color: white;
			text-align: center;
		}
    </style>

</head>
<body>
<div class="box">

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
			Cantidad: <input type="number" name="cantidad" required><br><br>
			Unidad de medida:
			<select name="unidad1">
				<option value="mm">Milímetro</option>
				<option value="cm">Centímetro</option>
				<option value="dm">Decímetro</option>
				<option value="m">Metro</option>
				<option value="km">Kilómetro</option>
			</select><br><br>
			Unidad de destino:
			<select name="unidad2">
				<option value="mm">Milímetro</option>
				<option value="cm">Centímetro</option>
				<option value="dm">Decímetro</option>
				<option value="m">Metro</option>
				<option value="km">Kilómetro</option>
			</select><br><br>
			<input type="submit" name="submit" value="Convertir">
		</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cantidad = $_POST["cantidad"];
    $unidad1 = $_POST["unidad1"];
    $unidad2 = $_POST["unidad2"];

    if ($unidad1 == $unidad2) {
        echo "<p>La cantidad es la misma en ambas unidades.</p>";
    } elseif ($unidad1 == "mm" && $unidad2 == "cm") {
        $resultado = $cantidad / 10;
        echo "<p>$cantidad milímetros son $resultado centímetros.</p>";
    } elseif ($unidad1 == "mm" && $unidad2 == "dm") {
        $resultado = $cantidad / 100;
        echo "<p>$cantidad milímetros son $resultado decímetros.</p>";
    } elseif ($unidad1 == "mm" && $unidad2 == "m") {
        $resultado = $cantidad / 1000;
        echo "<p>$cantidad milímetros son $resultado metros.</p>";
    } elseif ($unidad1 == "mm" && $unidad2 == "km") {
        $resultado = $cantidad / 1000000;
        echo "<p>$cantidad milímetros son $resultado kilómetros.</p>";
    } elseif ($unidad1 == "cm" && $unidad2 == "mm") {
        $resultado = $cantidad * 10;
        echo "<p>$cantidad centímetros son $resultado milímetros.</p>";
    } elseif ($unidad1 == "cm" && $unidad2 == "dm") {
        $resultado = $cantidad / 10;
        echo "<p>$cantidad centímetros son $resultado decímetros.</p>";
    } elseif ($unidad1 == "cm" && $unidad2 == "m") {
        $resultado = $cantidad / 100;
        echo "<p>$cantidad centímetros son $resultado metros.</p>";
    } elseif ($unidad1 == "cm" && $unidad2 == "km") {
        $resultado = $cantidad / 100000;
        echo "<p>$cantidad centímetros son $resultado kilómetros.</p>";
    } elseif ($unidad1 == "dm" && $unidad2 == "mm") {
        $resultado = $cantidad * 100;
        echo "<p>$cantidad decímetros son $resultado milímetros.</p>";
    } elseif ($unidad1 == "dm" && $unidad2 == "cm") {
        $resultado = $cantidad * 10;
        echo "<p>$cantidad decímetros son $resultado centímetros.</p>";
    } elseif ($unidad1 == "dm" && $unidad2 == "m") {
        $resultado = $cantidad / 10;
        echo "<p>$cantidad decímetros son $resultado metros.</p>";
    } elseif ($unidad1 == "dm" && $unidad2 == "km") {
        $resultado = $cantidad / 10000;
        echo "<p>$cantidad decímetros son $resultado kilómetros.</p>";
    } elseif ($unidad1);
}
?>
</div>
</body>
</html>
