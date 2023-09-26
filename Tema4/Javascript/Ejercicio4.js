<script>
function palindromo(cadena) {
    let textoLimpio = cadena.toLowerCase().replace(/[^a-z]/g, "");

    let textoInvertido = textoLimpio.split("").reverse().toString();
    return textoLimpio == textoInvertido;

}

let cadena = prompt("Introduce una cadena de texto");
if (palindromo(cadena)) {
    alert("Es palíndromo");
} else {
    alert("No es palíndromo");
}

</script>