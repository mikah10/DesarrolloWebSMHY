<?php
include('conexion.php');

$sql = "SELECT titulo, imagen FROM libros";
$result = $con->query($sql);

$libros = [];

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $libros[] = ["titulo" => $row["titulo"], "imagen" => $row["imagen"]];
    }
}

$con->close();


if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['libro'])) {
    
    $libroSeleccionado = $_POST['libro'];

  
    $libro = array_filter($libros, function ($libro) use ($libroSeleccionado) {
        return $libro['titulo'] === $libroSeleccionado;
    });


    $imagen = !empty($libro) ? reset($libro)['imagen'] : null;

    echo json_encode(['imagen' => $imagen]);
    exit(); 
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos</title>
    <script src="script.js"></script>
</head>
<body>

<form id="formularioLibro">
    <label for="selectLibros">Selecciona un libro:</label>
    <select id="selectLibros" name="libro" onchange="actualizarImagen();">
        <?php foreach ($libros as $libro): ?>
            <option value="<?php echo $libro['titulo']; ?>"><?php echo $libro['titulo']; ?></option>
        <?php endforeach; ?>
    </select>
</form>
<div id="divImagen">
    <?php

    if (!empty($libros)) {
        echo '<img src="' . $libros[0]['imagen'] . '" alt="' . $libros[0]['titulo'] . '" id="imagenLibro">';
    }
    ?>
</div>

<script>
    function actualizarImagen() {
        var selectLibros = document.getElementById('selectLibros');
        var divImagen = document.getElementById('divImagen');
        var imagenLibro = document.getElementById('imagenLibro');

        var libroSeleccionado = selectLibros.options[selectLibros.selectedIndex].value;

     
        var xhr = new XMLHttpRequest();
        xhr.open('POST', 'datos.php', true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.onreadystatechange = function () {
            if (xhr.readyState == 4 && xhr.status == 200) {
               
                var respuesta = JSON.parse(xhr.responseText);
                imagenLibro.src = respuesta.imagen;
            }
        };
        xhr.send('libro=' + libroSeleccionado);

        return false;
    }
</script>

</body>
</html>
