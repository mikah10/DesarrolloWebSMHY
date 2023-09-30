<?php
session_start();

if (!isset($_SESSION['n'])) {
    header("Location: form.php");
    exit();
}

$n = $_SESSION['n'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $vector1 = $_POST['vector1'];
    $vector2 = $_POST['vector2'];
    
    $result = 0;
    for ($i = 0; $i < $n; $i++) {
        $result += $vector1[$i] * $vector2[$i];
    }
    
    echo "Resultado de la multiplicación: " . $result;
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
<form action="vector.php" method="post">
        Vector 1 (1xn):
        <?php for ($i = 0; $i < $n; $i++) { ?>
            <input type="number" name="vector1[]">
        <?php } ?>
        <br><br>
        
        Vector 2 (nx1):
        <?php for ($i = 0; $i < $n; $i++) { ?>
            <input type="number" name="vector2[]">
        <?php } ?>
        <br><br>
        
        <input type="submit" value="Multiplicar">
    </form
</body>
</html>