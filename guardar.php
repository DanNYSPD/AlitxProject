<?php
	
	require 'conexion.php';
	
	$nocontrol = $_POST['nocontrol'];
	$nombres = $_POST['nombres'];
	$carrera = $_POST['carrera'];
	$semestre = $_POST['semestre'];
	$grupo = $_POST['grupo'];
	$email = $_POST['email'];
	$pass = $_POST['pass'];
	
	
	$sql = "INSERT INTO alumno (nocontrol, nombres, carrera, semestre, grupo, email, pass) 
	VALUES ('$nocontrol','$nombres','$carrera','$semestre', '$grupo','$email','$pass')";
    mysql_query($sql,$conexion);
	
?>
 
<html lang="es">
	<head>
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap-theme.css" rel="stylesheet">
		<script src="js/jquery-3.1.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>	
	</head>
	
	<body>
		<div class="container">
			<div class="reg">
				<div class="reg" style="text-align:center"> <br> <br>
				<img src="img/guardado.png"  align="center" WIDTH=180 HEIGHT=200 BORDER=0 VSPACE=3 HSPACE=3><br>
					<?php if($sql) { ?>
						<h3>REGISTRO GUARDADO</h3>
						<?php } else { ?>
						<h3>ERROR AL GUARDAR</h3>
					<?php } ?>
					
					<br> <br><a href="index.php" class="btn btn-primary">Regresar</a>
					
				</div>
			</div>
		</div>
	</body>
</html>