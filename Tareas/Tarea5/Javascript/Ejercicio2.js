<script>
function factorial(num) {
    if (num == 0) {
        return 1;
    } else {
        return num * factorial(num - 1);
    }
}

let num = parseInt(prompt("Introduce un número"));
alert("El factorial de " + num + " es " + factorial(num));  


</script>