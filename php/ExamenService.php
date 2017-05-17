<?php 
require_once 'conexionMysqli.php';
require_once 'MainModel.php';
require_once 'entidades/ExamenEntidad.php';
/**
* 
*/
class ExamenService extends MainModel
{
	/**
	 * [obtiene "una version de examen predefinida de la bd" de un examen a partir su id]
	 * @param  string $idExamen [id del examen, por ejemplo examen del primer pacial]
	 * @return [ExamenEntidad]           [un array con las preguntas de una version del examen]
	 */
	public function obtenerExamen($idExamen,$numero=10)
	{
		if(!is_int($idExamen)){
			$this->setError("id del examen debe ser int $idExamen");
			return null;
		}
		//var_dump($idExamen);
		//echo "<br>";
		$arrVesiones=$this->getVersionesDeExamen($idExamen);
		if(!$arrVesiones){
			$this->setError("No hay versiones del examen del id $idExamen");
			return null;
		}
		$version=$this->seleccionaVersion($arrVesiones);
		if(!$version){
			$this->setError("No se pudo escoger una version del examen $idExamen");
			return null;
		}
		$arrRes=null;
		//sql no ok
		$sql="select P.idPregunta,P.descripcion,opcion1,opcion2,opcion3,respuesta from Pregunta as P where P.idExamen=$idExamen and P.version=$version limit 10 ;";
		$arrRes=consultarAssocD($sql);
		//var_dump($arrRes);
		if($arrRes){
			$this->ok();
			$examenEntidad= new ExamenEntidad($idExamen,$version,$arrRes);
			return $examenEntidad;
		}else{
			$this->setError("error");
		}			
		return $arrRes;
	}
	public function seleccionaVersion($arrVesiones){
		$length=count($arrVesiones);
		if($length>=1){
			if($length==1)
				return $arrVesiones[0];
			$numVersion=rand(0,$length-1);
			//var_dump($numVersion);
			return $arrVesiones[$numVersion]["version"];
		}

	}
	public function getVersionesDeExamen($idExamen2)
	{
		//echo "**";
		//var_dump($idExamen2);
		//if(!is_array($idExamen)){return null;	}
		//echo "++";
		$sql="select DISTINCT  P.version from Pregunta as P where P.idExamen=$idExamen2;";
		//$sql="select version from Examen_pregunta where idExamen=$idExamen;";
		$arrVesiones=consultarAssocD($sql);
		/*if(!$arrVesiones)
			$this->setError();
			*/
		return $arrVesiones;

	}
	
}//class end

 ?>