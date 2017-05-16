
	
	<?php 
	$servidor = "localhost"; $usuario = "root"; $pass = ""; $base_datos = "mdu2";
	//Conexión al servidor de bases de datos $descriptor = mysql_connect($servidor,$usuario, $pass) ; 
	//Se selecciona la base de datos 
	mysql_select_db($base_datos,$descriptor); //Se cierra la conexión cuando terminemos 
	mysql__close ( $descriptor) ; ?> 