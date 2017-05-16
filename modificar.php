<?php
require 'conexion.php';
//print_r($_GET);
$id = $_GET['id'];
$sql = "SELECT * FROM alumno WHERE nocontrol = '$id'";

$reg=mysql_query($sql,$conexion);
$filas=mysql_num_rows($reg);
$row=mysql_fetch_array($reg);

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
			<div class="row">
				<h3 style="text-align:center"><font color="blue">MODIFICAR REGISTRO</font></h3>
			</div>
               
			
			<form class="form-horizontal" method="POST" action="update.php" autocomplete="off">
				<div class="form-group">
					<label for="nombre" class="col-sm-2 control-label">No.Control</label>
					<div class="col-sm-10">
					    <?php echo $row['nocontrol']; ?>
						<input type="hidden" id="id" name="nocontrol" value="<?php echo $row['nocontrol']; ?>" />
					</div>
				</div>   
		
				<div class="form-group">
					<label for="nombres" class="col-sm-2 control-label">Nombre </label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="nombres" name="nombres" placeholder="Nombre Completo" value="<?php echo $row['nombres']; ?>" required>
					</div>
				</div>
				
			
				<div class="form-group">
					<label for="carrera" class="col-sm-2 control-label">Carrera</label>
					<div class="col-sm-10">
						<input type="csrrera" class="form-control" id="carrera" name="carrera" placeholder="Carrera" value="<?php echo $row['carrera']; ?>" >
					</div>
				</div>
				
				<div class="form-group">
					<label for="semestre" class="col-sm-2 control-label">Semestre</label>
					<div class="col-sm-10">
						<input type="semestre" class="form-control" id="semestre" name="semestre" placeholder="Semestre" value="<?php echo $row['semestre']; ?>" >
					</div>
				</div>
				
				
				
				<div class="form-group">
					<label for="grupo" class="col-sm-2 control-label">Grupo</label>
					<div class="col-sm-10">
						<input type="grupo" class="form-control" id="grupo" name="grupo" placeholder="Grupo" value="<?php echo $row['grupo']; ?>" >
					</div>
				</div>
				
				<div class="form-group">
					<label for="email" class="col-sm-2 control-label">Email</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="email" name="email" placeholder="Email" value="<?php echo $row['email']; ?>" >
					</div>
				</div>
				
				<div class="form-group">
					<label for="pass" class="col-sm-2 control-label">Password</label>
					<div class="col-sm-10">
						<input type="pass" class="form-control" id="pass" name="pass" placeholder="Password" value="<?php echo $row['pass']; ?>" >
					</div>
				</div>
				
				
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10"> <center>
						<a href="index.php" class="btn btn-default"><font color="black">Regresar </font></a>
						<a href="eliminar.php?id=<?php echo $row['nocontrol']; ?>"
						" class="btn btn-default"><font color="blue">Eliminar </font></a>
						<button type="submit" class="btn btn-primary">Guardar</button>
					</div>
				</div>
			</form>
		</div>
	</body>
</html>