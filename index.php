<?php

include ("./class/ClaseTriangulo.php"); 
$triangulo = new Triangulo(Null); 
print_r($triangulo->tabla()); 
?> 

<table style="margin: 0 auto"
    <tr><h3 style="text-align: center; color: blueviolet"> EL AREA ES: </h3> </tr>
    <tr><td style="text-align: center"> <?php echo "".$triangulo->area($_POST['altura'], $_POST['base']);?></td></tr>
</table>
<br>
<table style="margin: 0 auto">
 <tr><h3 style="text-align: center; color: blue"> EL PERIMETRO ES: </h3> </tr>
<tr><td style="text-align: center"> <?php echo "".$triangulo->perimetro($_POST['altura'], $_POST['base']);?></td></tr>
</table>