<?php



function getSql($valor){
	$sql="";
	// aagregar where para selecciona al maestro que inicio session
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
	return $sql;
}
function getGrupo($valor){
	$sql="";
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
	return $i;	
}


?>