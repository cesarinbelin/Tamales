<?php
include("conexion.php");

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
	$query="SELECT * FROM precio
            WHERE id_precio='1'";	
	$result=mysqli_query($conexion, $query);
    /* Arreglo Asociativo */
$row = mysqli_fetch_array($result, MYSQLI_NUM);

?>

<!DOCTYPE html>
<html> 
	<head>
		<meta charset="UTF-8">
		<title> TAMALES </title>
        <link rel="stylesheet" href="estilo.css" />
	</head>
<body>
		
<h1> MODIFICA PRECIO </h1>
		
		<p> Ingresa el nuevo precio del producto</p>
		<form name ="precio" id="formulario_precio" action='modifica_precio.php' method="post">			
            <label for="tama">Tamal: </label>
			<input type="int" name="tama" value="<?php echo $row[1]; ?>"><br/>
            <label for="tama_Oaxqueño">Tamal Oaxaqueño: </label>
			<input type="int" name="tama_Oaxaqueño" value="<?php echo $row[2]; ?>"><br/>
            <label for="atole_Chico">Atole Chico: </label>
			<input type="int" name="atole_Chico" value="<?php echo $row[3]; ?>"><br/>
            <label for="atole_Mediano">Atole Mediano: </label>
			<input type="int" name="atole_Mediano" value="<?php echo $row[4]; ?>"><br/>
            <label for="atole_Grande">Atole Grande: </label>
			<input type="int" name="atole_Grande" value="<?php echo $row[5]; ?>"><br/>
            <label for="cafe_Chico">Cafe Chico: </label>
			<input type="int" name="cafe_Chico" value="<?php echo $row[6]; ?>"><br/>
            <label for="cafe_Mediano">Cafe Mediano: </label>
			<input type="int" name="cafe_Grande" value="<?php echo $row[7]; ?>"><br/>
            <label for="pan">Pan: </label>
			<input type="int" name="pan" value="<?php echo $row[8]; ?>"><br/>
            <input type="submit" name="Guardar"><br/>
		</form>	
</body>
 <?php
	
		echo "<a href='modifica_precio.php'>MODIFICA PRECIO/a></br>";
 ?>