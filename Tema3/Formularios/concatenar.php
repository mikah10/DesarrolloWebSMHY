<?php
$n=$_POST['n'];
$suma=0;
for($i=1;$i<=$n;$i++)
{
    $suma=$suma+$_POST["numero$i"];
}
echo "<p>La suma de los $n numeros es $suma</p>";
?>