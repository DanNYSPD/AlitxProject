<html lang="es">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/bootstrap-theme.css" rel="stylesheet">
<link href="css/estilos.css" rel="stylesheet" type="text/css" media="screen" />
<script src="js/jquery-3.1.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>	
</head>
<body>

<div id="wrapper">
	<div id="menu"> 
		<ul>  
	<center>
			<li class="current_page_item"><a href="index.html">    <font color="black" face="Century Gothic" size="4"><b>Inicio</font></a></li>
			<li class="current_page_item"><a href="recursos.html">    <font color="black"face="Century Gothic" size="4">Referencias</font></a></li>
            <li class="current_page_item"><a href="contactanos.html">    <font color="black" face="Century Gothic" size="4">Contacto</font></a></li>
			<li class="current_page_item"><a href="logout.html">    <font color="black" face="Century Gothic" size="4">Cerrar Sesi&oacute;n</font></a></li> 
			<br> <br> <br>
			<center><img src="img/encabezado.jpeg" WIDTH=850 HEIGHT=65 BORDER=0 VSPACE=3 HSPACE=3> </center></a> 
         			</div>
	</div>

	
<div class="container">
<div class="row">

<br> <br> <br>
<br> <br> <br>
<h2 style="text-align:center">REGISTRO ALUMNOS</h2>
</div>
<div class="row">
<a href="nuevo.php" class="btn btn-primary">Nuevo Registro</a>
<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
<b>Grupo: </b>
<select name=grupo>
<option> 1 </option>
<option> 2 </option>
<option> 3 </option>
</select>
<!--<input type="text" id="grupo" name="grupo" value='0' /> -->

<input type="submit" id="enviar" name="enviar" value="Buscar" class="btn btn-info" />
</form>
</div>
<br>
<div class="row table-responsive">
<table class="table table-striped">
<thead>
<tr>
<th>No.control</th>
<th>Nombre Completo</th>
<th>Carrera</th>
<th>Semestre</th>
<th>Grupo</th>
<th>Email</th>
<th>Password</th>
<th></th>
<th></th>
</tr>
</thead>

<?php
//print_r($_POST);
require 'conexion.php';
$G=$_POST['grupo'];
if($G <> '0')
{
$valor = $_POST['grupo'];
if(!empty($valor)){
	
	switch($valor){
		case 1: $sql = "SELECT grupo1 FROM maestro";
		$i='grupo1';
		break;
				case 2: $sql = "SELECT grupo2 FROM maestro";
		$i='grupo2';
		break;
				case 3: $sql = "SELECT grupo3 FROM maestro";
		$i='grupo3';
		break;
	}

$reg=mysql_query($sql,$conexion);
$filas=mysql_num_rows($reg);

$row=mysql_fetch_array($reg);
$grupo=$row[$i];

	$sql =  "SELECT * FROM alumno where grupo='".$grupo."'";
	$reg=mysql_query($sql,$conexion);
	while ($row=mysql_fetch_array($reg)){
		$N=$row['nocontrol'];
echo "<tbody>";
echo "<tr><td>"; 
echo $row['nocontrol'];
echo "</td><td>";
echo $row['nombres'];
echo "</td><td>";
echo $row['carrera'];
echo "</td><td>";
echo $row['semestre']; 
echo "</td><td>";
echo $row['grupo'];
echo "</td><td>"; 
echo $row['email'];
echo "</td><td>";
echo $row['pass'];
echo "</td><td><a href='modificar.php?id=$N'><span class='glyphicon glyphicon-pencil'></span></a></td>";

}
}
}
?>

			</table>
			</div>
		</div>
		
			<center> <br> <br> <br> <br> <br> <br> <br> <br> <br> 
			 
	
<a align="left" href="grupos.html" title=""><font color="black" size="5">&#8656; VOLVER</font></a>
	</body>
</html>