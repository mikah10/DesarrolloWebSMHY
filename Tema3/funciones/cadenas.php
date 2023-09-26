<?php
include('funciones.php');
$cadena=$_GET['cadena'];

 echo "cadena recibida:".$cadena;
 echo "<br>";
 echo "cadena de mayusculas:".strtoupper($cadena);
 echo "<br>";
 echo "cadena de minusculas:".strtolower($cadena);
 $palabras=explode(" ", $cadena);
 echo "<br>";
 echo "cantidad de palabras:".count($palabras);
 echo "<br>";
 foreach ($palabras as $palabra) {
     echo $palabra."<br>";
 }



