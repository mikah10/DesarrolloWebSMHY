<?php 
include 'cola.php';

session_start();
if(!isset($_SESSION['cola'])){
    $_SESSION['cola'] = new cola('Dobleentrada');
}

$cola = $_SESSION['cola'];

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $elemento = $_POST['elemento'];
    $accion = $_POST['accion'] ?? '';

    if($accion === 'insertarDelante'){
        $cola->insertarDelante($elemento);
    }else if($accion === 'insertarDetras'){
        $cola->insertarDetras($elemento);
    }else if($accion === 'eliminar'){
        $cola->eliminar();
    }
}

$elementos = $cola->mostrar();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h2>OPERACIONES DE COLA</h2>
<form action="menu.php" method= "post">
    <label for="elemento">Elemento</label>
    <input type="text" name="elemento" required>
    <br><br>
    <label for="accion">Acción</label>
    <select name="accion" id="accion">
        <option value="insertarDelante">Insertar Delante</option>
        <option value="insertarDetras">Insertar Detras</option>
        <option value="eliminar">Eliminar</option>
    </select>
    <br><br>
    <input type="submit" value="Enviar">

</form>

<h2>Contenido de la cola</h2>
<ul>
    <?php foreach($elementos as $elemento){ ?>
        <li><?php echo $elemento ?></li>
    <?php } ?>
</ul>

</body>
</html>