<?php
include("conexion.php");
include("index.php");

/*
 *venta.php
 *Recibe los datos de alumno index.
 */
$tama_Verde = $_POST['tama_Verde'];
$tama_Rajas = $_POST['tama_Rajas'];
$tama_Mole = $_POST['tama_Mole'];
$tama_Dulce = $_POST['tama_Dulce'];
$atole_Chico = $_POST['atole_Chico'];
$atole_Mediano = $_POST['atole_Mediano'];
$atole_Grande = $_POST['atole_Grande'];
$cafe_Chico = $_POST['cafe_Chico'];
$cafe_Grande = $_POST['cafe_Grande'];
$pan = $_POST['pan'];

if($conexion){
    $query="INSERT INTO venta (id_Venta, tama_Verde, tama_Rajas, tama_Mole, tama_Dulce, 
                                     atole_Chico, atole_Mediano, atole_Grande, cafe_Chico, cafe_Grande, pan)
                   VALUES ('', '$tama_Verde', 
                                '$tama_Rajas', 
                                '$tama_Mole', 
                                '$tama_Dulce', 
                                '$atole_Chico', 
                                '$atole_Mediano', 
                                '$atole_Grande',
                                '$cafe_Chico',
                                '$cafe_Grande',
                                '$pan');";
    mysqli_query($conexion, $query) or die (mysqli_error($conexion));
}
    echo "<a href='pdf_venta.php'> CALCULO VENTA/a></br>";
	
?>