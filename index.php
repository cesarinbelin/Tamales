<?php
include("conexion.php");
?>
<!DOCTYPE html>
<html> 
	<head>
		<meta charset="UTF-8">
		<title> TAMALES </title>
        <link rel="stylesheet" href="estilo.css" />
	</head>
<body>		
	<div class="container"> 
		<div class="title">Ingresa cuantos tamales mandaste</div>
			<form name ="venta" id="formulario_venta" action='venta.php' method="post">
				<div class="user-details">
					<div class="input-box">
						<label for="tamaVerde">Tamal de Verde: </label>
						<input type="int" name ="tama_Verde">
						<label for="tamaVerde">Sobraron: </label>
						<input type="int" name ="tama_Verde_sobraron"><br/>

						<label for="tamaRajas">Tamal de Rajas: </label>
						<input type="int" name="tama_Rajas">
						<label for="tamaRajas">Sobraron: </label>
						<input type="int" name="tama_Rajas_sobraron"><br/>

						<label for="tamaMole">Tamal de Mole: </label>
						<input type="int" name="tama_Mole">
						<label for="tamaMole">Sobraron: </label>
						<input type="int" name="tama_Mole_sobraron"><br/>
						
						<label for="tamaDulce">Tamal de Dulce: </label>
						<input type="int" name="tama_Dulce">
						<label for="tamaDulce">Sobraron: </label>
						<input type="int" name="tama_Dulce_sobraron"><br/>

						<label for="atoChico">Atole Chico: </label>
						<input type="int" name="atole_Chico">
						<label for="atoChico">Sobraron: </label>
						<input type="int" name="atole_Chico_sobraron"><br/>

						<label for="atoMed">Atole Mediano: </label>
						<input type="int" name="atole_Mediano"><br/>
						<label for="atoMed">Sobraron: </label>
						<input type="int" name="atole_Mediano_sobraron"><br/>

						<label for="atoGra">Atole Grande: </label>
						<input type="int" name="atole_Grande">
						<label for="atoGra">Sobraron: </label>
						<input type="int" name="atole_Grande_sobraron"><br/>

						<label for="cafeChico">Cafe Chico: </label>
						<input type="int" name="cafe_Chico">
						<label for="cafeChico">Sobraron: </label>
						<input type="int" name="cafe_Chico_sobraron"><br/>

						<label for="cafeGrande">Cafe Grande: </label>
						<input type="int" name="cafe_Grande">
						<label for="cafeGrande">Sobraron: </label>
						<input type="int" name="cafe_Grande_sobraron"><br/>

						<label for="pan">Pan: </label>
						<input type="int" name="pan">
						<label for="pan">Sobraron: </label>
						<input type="int" name="pan_sobraron"><br/>

						<div class="button">
							<input type="submit" value="Guardar">
						</div>
					</div>
				</div>
		</form>	
	</div>	
</body>

<?php
echo "<a href='form_precios.php'>  MODIFICA PRECIOS/a></br>";
?>