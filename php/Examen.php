<?php 
require_once 'conexionMysqli.php';
/**
* 
*/
class Examen 
{
	/**
	 * [obtiene "una version de examen predefinida de la bd" de un examen a partir su id]
	 * @param  string $idExamen [id del examen, por ejemplo examen del primer pacial]
	 * @return [type]           [un array con las preguntas de una version del examen]
	 */
	public function obtenerExamen($idExamen)
	{
		$arrVesiones=getVersionesDeExamen($idExamen);
			$arrRes=null;
			//sql no ok
			$sql="select grupo1,grupo2,grupo3 from maestro where usuario='$usuario';";
			$arrRes=consultarAssocD($sql);
			if($arrRes){
				
			}
			
			return $arrRes;
	}
	public function getVersionesDeExamen($idExamen='')
	{
		$sql="select version from Examen_pregunta where idExamen=$idExamen;";
		return consultarAssocD($sql);

	}
	
}

 ?>