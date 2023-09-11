<?php
if (!isset($_COOKIE['contador']))
 {
    setcookie("contador",1,time()+3600*60);
    $contador=1;
 }
 else
 {
    $contador=$_COOKIE['contador'];
    $contador++;
    setcookie("contador",$contador+1,time()+3600*60);
 }

    echo "Has visitado esta página $contador veces";
?>

<?php
session_start();
if (!isset($_SESSION['contador']))
 {
    $_SESSION['contador']=1;
    $contador=1;
 }
 else
 {
    $contador=$_SESSION['contador'];
    $contador++;
    $_SESSION['contador']=$contador;
 }

    echo "Has visitado esta página $contador veces";