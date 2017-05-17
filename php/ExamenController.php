<?php
require_once("ExamenService.php");
require_once("Response.php");
	if(isset($_POST['operacion'])){
		$operacion=$_POST['operacion'];
		switch ($operacion) {
			case 'obtenerExamen':
				if(!isset($_POST['idExamen'])){
					die("No se recibio atributo: 'idExamen'");
				}else{
					$idExamen=$_POST['idExamen'];
					obtenerExamen($idExamen);
					die();
				}

				break;
			
			default:
				# code...
				break;
		}
	} 
	if ($_SERVER['REQUEST_METHOD'] != 'POST') {
		die("Error metodo no soportado");
	}
	if(!isset($_POST['respuestas'])){
		die("no se recibio el recurso esperado:'respuestas'");
	}
	if(!isset($_POST['idExamen'])){
		die("No se recibio atributo: 'idExamen'");
	}
	
	$arr=$_POST['respuestas'];
	$idExamen=$_POST['idExamen'];
	//asi vemos que variable enviamos
	var_dump($arr);
	if(esValidoExamen($arr)){

	}
	

	function esValidoExamen($arrr=array())
	{
		$resul="";
	/*	if($arrr.lenght()<10){
			$resul="No se enviaron todas las respuestas";
		}
	*/	
		echo "----";
		foreach ($arrr  as $key => $value) {
			echo "idPregunta".$value["name"];
			echo "<br>";
			if(!isset($value["name"])||!isset($value["value"])){
				$resul="falta el atributo name o value en la respuesta";
			}
			echo "respuesta de pregunta".$value["value"];
		}

		# code...
	}
	function convertir($arr=array()){
		$arrModelado=array();
		foreach ($arr as $key => $value) {
			$arrModelado[$key]= array('idPregunta' =>$value["name"] ,'respuesta'=>$value["value"]);
			
		}
	}
	function obtenerExamen($id)
	{
		//ob_end_clean();
		ob_end_clean();
		$idI=intval($id);
		$examen= new ExamenService();
		$objExamenEntidad=$examen->obtenerExamen($idI);	
		//	var_dump($arrExamen);
		if($objExamenEntidad){
			if($objExamenEntidad->arrPreguntas){
				$arrPreguntas=$objExamenEntidad->arrPreguntas;
				if(count($arrPreguntas)>=10){
					echo json_encode(new Response($objExamenEntidad,200,"ok"));
					return;
				}else{
					echo json_encode(new Response(null,404,"error en el numero de preguntas"));
					return;
				}
			}
		}
		echo json_encode(new Response(null,404,"error No se encontro"));
		return;

	}

 ?>