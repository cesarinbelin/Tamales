<?php
include("conexion.php");


echo ("Si llegamos aqui. \n") . ("<br />");

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);


$result = mysqli_query($conexion, "SELECT * FROM venta");

$rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
foreach ($rows as $row) {
    printf("id Venta = %s Tamal de Verde = %s <br />", $row["id_Venta"], $row["tama_Verde"]) . ("<br />");
}



?>

