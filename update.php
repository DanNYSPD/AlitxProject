<?php
	
	require 'conexion.php';
	//print_r($_POST);
	$nocontrol = $_POST['nocontrol'];
	$nombres = $_POST['nombres'];
	$carrera = $_POST['carrera'];
	$semestre = $_POST['semestre'];
	$grupo = $_POST['grupo'];
	$email = $_POST['email'];
	$pass = $_POST['pass'];
	
	$sql="UPDATE alumno SET nombres='$nombres',carrera='$carrera',semestre='$semestre',grupo='$grupo',email='$email', pass='$pass' WHERE nocontrol = '$nocontrol'";
	mysql_query($sql,$conexion);
	
	//$reg=mysql_query($sql,$conexion);
	
	
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
								<img src="img/modificar.png"  align="center" WIDTH=180 HEIGHT=200 BORDER=0 VSPACE=3 HSPACE=3>
					<?php if($sql ) { ?>
						<h3><font color="#FACC2E">REGISTRO MODIFICADO</h3>
						<?php } else { ?>
						<h3>ERROR AL MODIFICAR</h3>
					<?php } ?>
					
				
					<div class="col-sm-offset-2 col-sm-10"> <center> <br> 
						<a href="index.php" class="btn btn-default"><font color="black"><b>Regresar </font></a>
					
				</div>
			</div>
		</div>
	</body>
</html>