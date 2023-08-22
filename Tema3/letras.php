<?php

$a=array('a','b','c');
echo $a[0];
echo $a[3];
echo "<br>";
echo $a[4];
echo "<br>";
for ($i=0; $i<count($a); $i++)
{
    echo $a[$i];
    echo "<br>";
}
foreach($a as $indice=>$elemento)
{
    echo $indice. "=>" .$elemento;
    echo "<br>";
}
