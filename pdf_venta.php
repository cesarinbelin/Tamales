<?php
include("conexion.php");
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
	$query="SELECT * FROM venta
            WHERE id_Venta='3'";	
	$result=mysqli_query($conexion, $query);
    /* Arreglo Asociativo */
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);

    /* Arreglo de Precios */ 

echo("Id_Venta: ") . $row["id_Venta"] . ("<br/>");
echo("Tamal de Verde: ") . $row["tama_Verde"] . ("<br/>");
echo("Tamal de Rajas: ") . $row["tama_Rajas"] . ("<br/>");
echo("Tamal de Mole: ") . $row["tama_Mole"] . ("<br/>");
echo("Tamal de Dulce: ") . $row["tama_Dulce"] . ("<br/>");
echo("Atole Chico: ") . $row["atole_Chico"] . ("<br/>");
echo("Atole Mediano: ") . $row["atole_Mediano"] . ("<br/>");
echo("Atole Grande: ") . $row["atole_Grande"] . ("<br/>");

    
?>	


