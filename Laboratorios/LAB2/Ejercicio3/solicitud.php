<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>Tablero de Damas</h1>
    <form action="tabla.php" method="get">
        <label for="filas">Número de filas:</label>
        <input type="number" id="filas" name="filas" required><br><br>
        
        <label for="columnas">Número de columnas:</label>
        <input type="number" id="columnas" name="columnas" required><br><br>
        
        <label for="color">Color del tablero:</label>
        <select id="color" name="color">
            <option value="azul">Azul</option>
            <option value="rojo">Rojo</option>
            <option value="amarillo">Amarillo</option>
            <option value="verde">Verde</option>
            <option value="morado">Morado</option>
            <option value="rosa">rosa</option>
        </select><br><br>
        
        <input type="submit" value="Generar Tablero">
    </form>

</body>
</html>

