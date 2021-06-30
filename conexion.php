<?php

	$servidor="localhost";
	$nombreusuario="root";
	$password="";
	$db="tamales";

	$conexion=new mysqli($servidor, $nombreusuario, $password, $db);
	
	if($conexion -> connect_error){
		die("Conexion fallada: " . $conexion -> connect_error);
	}


?>