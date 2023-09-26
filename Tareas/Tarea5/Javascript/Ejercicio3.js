<script>
function parImpar(num) { 
    if (num % 2 == 0) {
        return "El numero es par";
    } else {
        return "El numero es impar";
    }
}

let num = parseInt(prompt("Introduce un número"));
alert(parImpar(num));

</script>