<?php

// 1. Crear un arreglo con números del 1 al 20.
$numeros = range(1, 20); 

// 2. Definir dos arreglos vacíos para guardar los números pares e impares.
$pares = [];
$impares = [];

// 3. Usar un ciclo foreach para recorrer cada número en el arreglo $numeros.
foreach ($numeros as $numero) {
    // 4. Dentro del ciclo, usar una condición para verificar si el número es par.
    if ($numero % 2 == 0) {
        // Si el número es par, añadirlo al arreglo $pares.
        $pares[] = $numero;
    } else {
        // Si el número es impar, añadirlo al arreglo $impares.
        $impares[] = $numero;
    }
}

// 5. Imprimir ambos arreglos.
echo "Números pares: ";
print_r($pares);  // print_r es una función que imprime de manera legible la estructura de un arreglo.

echo "<br>";  // <br> es una etiqueta HTML que crea un salto de línea en la salida.

echo "Números impares: ";
print_r($impares);

?>
