
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
	<br><img WIDTH=1100 HEIGHT=85 src="img/f5.png">
			<br> <br><br> <br> 
			<li class="current_page_item"><a href="index2.html"><font face="courier new" size="4" color="green" >Inicio</a></li>
			<li class="current_page_item"><a href="referencias.html"><font face="courier new" color="green" >Referencias</a></li>
            <li class="current_page_item"><a href="contacto.html"><font face="courier new"color="green" >Contacto</a></li>
			<li class="current_page_item"><a href="logout.php"><font face="courier new" size="4" color="green" >Cerrar Sesi&oacute;n</a></li>
			<br> <br> <br> <br> <br>
			</a> 
         			</div>
	</div>

	
<div class="container">
<div class="row">

<br> <br> <br><br> <br>
<br> <br> <br>
<font face="courier new" size="6" color="gray"><b><center>CONTROL DE ALUMNOS</font> <br> <br>
</div>
<div class="row">
<a href="nuevo.php" class="btn btn-primary"> Nuevo Registro</a><br> <br>
<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
<b><font size="4"color="black">Grupo: </b>
<select name=grupo>
<?php 
	require_once('php/Maestro.php');
	$maestro = new Maestro();
	$usuario="ian09";

	$arrGrupos=null;
	$arrGrupos=$maestro->consultarGrupos($usuario);

	if(!$arrGrupos==null){
		var_dump($arrGrupos);
		echo "<option >".$arrGrupos["grupo1"]."</option>";
		echo "<option>".$arrGrupos["grupo2"]."</option>";
		echo "<option>".$arrGrupos["grupo3"]."</option>";	
	}
	echo "sads>";
	
 ?>
 <!--
<option> 1 </option>
<option> 2 </option>
<option> 3 </option>
-->
</select>
<!--<input type="text" id="grupo" name="grupo" value='0' /> -->

<input type="submit" id="enviar" name="enviar" value="Buscar" onclick="consultarGrupo()" class="btn btn-info" />


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
require_once 'php/conexionMysqli.php';
require_once 'php/indexBussines.php';
//debeemos siempre que recibimos por post o get verificar que se recibio dicha variable
if(!isset($_GET['grupo'])){
	die("no se recivio atributo grupo");
}

$i="";
$br="</br>";
//para testear
$TAG=basename(__FILE__, '.php');
//echo $TAG;
//end
	
$valor = $_GET['grupo'];
if(!empty($valor)){
	
	$sql=getSql($valor);
	$i=getGrupo($valor);
	$conexion=conectarBD();
	if($conexion){	
	
	$primero=consultarPrimero($sql,$conexion);
	echo $br."asdadada";
	$grupo=$primero[$i];
	//sql para consultar a los alumnos del grupo
	$sql =  "SELECT * FROM alumno where grupo='".$grupo."'";

	$arrRes2=consultarAssoc($sql,$conexion);
	if(!$arrRes2){
		die("no se obtuvo resultado");
	}
	//echo $br."--";
	//var_dump($arrRes2);
	//var_dump($reg->fetch_assoc());
	//echo $br."--";
	//die();
		foreach ($arrRes2 as $row) {
		 	
		 
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

		}// while fin
	}
}else{
		echo "else emty";
}

?>

			</table>
			</div>
		</div>
		
			<center> <br> <br> <br> <br> <br> <br> <br> <br> <br> 
			 
	
<a href="menuma.html" title><img align="left" src="img/volver.png" width=100 height=90 border="0"></a>
	<script>
		
		function consultarGrupo() {
			
		}
	</script>
	</body>
</html>