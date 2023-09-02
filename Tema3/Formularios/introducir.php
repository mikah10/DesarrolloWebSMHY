<?php
$n=$_GET['n'];

for($i=1;$i<=$n;$i++)
{
?>
    <input type="number" name="numero<?php echo $i?>">

<?php    
}
?>
