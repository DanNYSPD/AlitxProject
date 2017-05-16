
 
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
				<h3 style="text-align:center" > <font color="blue">NUEVO REGISTRO </font></h3>
			</div>
			
			<form class="form-horizontal" method="POST" action="guardar.php" autocomplete="off">
				<div class="form-group">
					<label for="nocontrol" class="col-sm-2 control-label">No.Control</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="nocontrol" name="nocontrol" placeholder="NoControl" required>
					</div>
				</div>

            <div class="form-group">
					<label for="nombres" class="col-sm-2 control-label">Nombre Completo</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="nombres" name="nombres" placeholder="Nombre Completo" required>
					</div>
				</div>
				
				<div class="form-group">
					<label for="carrera" class="col-sm-2 control-label">Carrera</label>
					<div class="col-sm-10">
						<input type="carrera" class="form-control" id="carrera" name="carrera" placeholder="Carrera">
					</div>
				</div>
				
				<div class="form-group">
					<label for="semestre" class="col-sm-2 control-label">Semestre</label>
					<div class="col-sm-10">
						<input type="semestre" class="form-control" id="semestre" name="semestre" placeholder="Semestre">
					</div>
				</div>
				
				<div class="form-group">
					<label for="grupo" class="col-sm-2 control-label">Grupo</label>
					<div class="col-sm-10">
						<input type="grupo" class="form-control" id="grupo" name="grupo" placeholder="Grupo">
					</div>
				</div>
				
				<div class="form-group">
					<label for="email" class="col-sm-2 control-label">Email</label>
					<div class="col-sm-10">
						<input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
					</div>
				</div>
				
				<div class="form-group">
					<label for="pass" class="col-sm-2 control-label">Password</label>
					<div class="col-sm-10">
						<input type="pass" class="form-control" id="pass" name="pass" placeholder="Password" required>
					</div>
				</div>
				
				
				
				
				
				
				
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10"> <center>
					
						<a href="index.php" class="btn btn-default"><font color="blue" size="3">Regresar</a> </font>
						<button type="submit" class="btn btn-primary">Guardar</button></center></center>
					
					</div>
				</div>
			</form>
		</div>
	</body>
</html>