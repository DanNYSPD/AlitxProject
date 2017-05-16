<?php

require 'conexion.php';
//print_r($_GET);
 $id = $_GET['id'];
$sql = "DELETE FROM alumno WHERE nocontrol = '$id'";
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

				<div class="reg" style="text-align:center">
				<img src="img/eliminado.png"  align="center" WIDTH=180 HEIGHT=200 BORDER=0 VSPACE=3 HSPACE=3>
					<?php if($sql ) { ?>
						<h3><font color="red"><br>REGISTRO ELIMINADO</h3>
						<?php } else { ?>
						<h3> <br> <br> <br>ERROR AL ELIMINAR</h3>
				<?php } ?>
				
				<div class="col-sm-offset-2 col-sm-10"> <center> <br><br>
						<a href="index.php" class="btn btn-default"><font color="black">Regresar </font></a>
						</center>
				
				</div>
			</div>
		</div>
	</body>
</html>