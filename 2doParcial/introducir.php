<?php
    $suma = $_GET['suma'];
    for($i = 0; $i < $suma; $i++){ ?>
    <input type="number" class="cuadro">
<?php } ?>
<button onclick="calcular()">Calcular</button>