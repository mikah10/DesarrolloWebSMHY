<?php
include ('pila.php');
$p=new Pila();
$valor=$_GET['valor'];
$p->insertar($valor);
>?
<meta http-equiv="refresh" content="0;URL=../index.php">