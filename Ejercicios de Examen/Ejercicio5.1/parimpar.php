<?php 
$n= $_GET['n'];
$numero = $_GET['n'];

if($numero % 2 == 0){
    echo "El numero $numero es par";
}else{  
    echo "El numero $numero es impar";
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
    <br>
    <br>
<a href="form.html">Volver</a>
</body>
</html>