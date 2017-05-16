
<?php
	//si no tienes contraseña solo envia dos parametros
error_reporting(E_ALL);
 function conectarBD()
{
	$conexion=mysql_connect("localhost", "root");
//	echo "vairblae: ". var_dump($conexion);
//echo "string";
	if($conexion){ //si conexccion ok entonces accedemos a la bd
		echo "conexion creada";
		$bd_seleccionada=	mysql_select_db("u2cr", $conexion);
		
		if($bd_seleccionada){ //no solo hay que conectarse, tambien hay que probar la bd
			echo "base de datos accedida";
			return $conexion;
		}
		else {
			echo "no se accedio a bd";
			return false;
		}		
	}
}
//consultamos 
function consultar($sql,$conexion){
	if(!is_string($sql)){
		echo "no es string";
	}
	$reg=false;
	if($conexion){
		$reg=mysql_query($sql,$conexion);
	}
	return $reg;
}
	
?>

