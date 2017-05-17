<?php 
require_once 'ExamenService.php';
require_once 'entidades/ExamenEntidad.php';
//getVersionesDeExamenTest(1);

obtenerExamentest(1);
//seleccionaVersionTest(1);
 function getVersionesDeExamenTest($id)
{
	$examen= new ExamenService();
	$arrVesiones=$examen->getVersionesDeExamen($id);
	var_dump($arrVesiones);
	if(!$arrVesiones){
		echo "null";
	}else{
		echo "s";
	}
}
 function obtenerExamentest($id){	
	//var_dump($id);
	echo "<br>";
	$examen= new ExamenService();
	$arrExamen=$examen->obtenerExamen($id);	
	var_dump($arrExamen);
	echo"..";
	echo json_encode($arrExamen,JSON_UNESCAPED_UNICODE);
	//$objExamenEntidad= new ExamenEntidad($id);
}
function seleccionaVersionTest($id){
	echo "--";
	$examen= new ExamenService();
	$arrVesiones=$examen->getVersionesDeExamen($id);
	var_dump($arrVesiones);
	$version=$examen->seleccionaVersion($arrVesiones);
	var_dump($version);

	}
	


 ?>