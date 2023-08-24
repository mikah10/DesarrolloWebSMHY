<?php 
     if (isset($_GET["medida"])) { 
         $medida = $_GET["medida"]; 
  
         echo "<h2>Tablero de Ajedrez de : $medida x $medida:</h2>"; 
         echo "<table border='4'>"; 
  
         for ($i = 1; $i <= $medida; $i++) { 
             echo "<tr>"; 
             for ($j = 1; $j <= $medida; $j++) { 
                 $color = ($i + $j) % 2 == 0 ? 'white' : 'black'; 
                 echo "<td style='width: 50px; height: 50px; background-color: $color;'></td>"; 
             } 
             echo "</tr>"; 
         } 
  
         echo "</table>"; 
     } 
 ?>