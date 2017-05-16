<?php 
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

 ?>