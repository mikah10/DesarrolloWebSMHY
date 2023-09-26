/*1. Realizar un programa para calcular el mayor y el menor de tres números, solicite mediante prompts los números e imprima el mayor y el menor*/   
<script>
var num1 = prompt("Introduce el primer número");
var num2 = prompt("Introduce el segundo número");
var num3 = prompt("Introduce el tercer número");

let mayor = num1;
let menor = num1;

if (num2 > mayor) {
    mayor = num2;
}
if (num2 < menor) {
    menor = num2;
}

if (num3 > mayor) {
    mayor = num3;
}   

alert("El mayor es " + mayor + " y el menor es " + menor);

</script>


