<?php
include("conexion.php");

$tama = $_POST['tama'];
$tama_Oaxaqueño = $_POST['tama_Oaxaqueño'];
$atole_Chico = $_POST['atole_Chico'];
$atole_Mediano = $_POST['atole_Mediano'];
$atole_Grande = $_POST['atole_Grande'];
$cafe_Chico = $_POST['cafe_Chico'];
$cafe_Grande = $_POST['cafe_Grande'];
$pan = $_POST['pan'];

    /* UPDATE para la tabla precio */
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
	$query="UPDATE precio
            SET precio_Tamal='$tama', 
                precio_Tamal_Oaxaqueño='$tama_Oaxaqueño', 
                precio_Atole_Chico='$atole_Chico',
                precio_Atole_Mediano='$atole_Mediano', 
                precio_Atole_Grande='$atole_Grande', 
                precio_Atole_Mediano='$atole_Mediano',
                precio_Atole_Grande='$atole_Grande', 
                precio_Cafe_Chico='$cafe_Chico',
                precio_Cafe_Grande='$cafe_Grande',
                precio_Pan='$pan'
            WHERE id_precio='1'";	
    mysqli_query($conexion, $query) or die(mysqli_error($conexion));
    echo ("Si se pudo");
/*
    $result=mysqli_query($conexion, $query);
    /* Arreglo Asociativo 
$row = mysqli_fetch_array($result, MYSQLI_NUM);

*/
?>