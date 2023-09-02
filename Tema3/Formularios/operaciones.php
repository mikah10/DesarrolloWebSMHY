<?php
$operacion=$_GET['operacion'];
$a=$_GET['a'];
$b=$_GET['b'];

switch($operacion)
{
    case "suma":
        $c=$a+$b;
        echo "<p>La suma de $a y $b es $c</p>";
        break;
    case "resta":
        $c=$a-$b;
        echo "<p>La resta de $a y $b es $c</p>";
        break;
    case "multiplicacion":
        $c=$a*$b;
        echo "<p>La multiplicacion de $a y $b es $c</p>";
        break;
    case "division":
        $c=$a/$b;
        echo "<p>La division de $a y $b es $c</p>";
        break;
}