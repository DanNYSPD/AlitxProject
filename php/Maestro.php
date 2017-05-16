<?php 
require_once 'conexionMysqli.php';
	

	/**
	* 
	*/
	class Maestro 
	{
		
		public function consultarGrupos($usuario='')
		{
			$arrRes=null;
			$conexion=conectarBD();
			if($conexion){	
				$sql="select grupo1,grupo2,grupo3 from maestro where usuario='$usuario';";
				$arrRes=consultarAssoc($sql,$conexion);
				if($arrRes){
					if(count($arrRes)>=1){
						return $arrRes[0];
					}
				}
			}
			return $arrRes;
		}
		
	}

 ?>