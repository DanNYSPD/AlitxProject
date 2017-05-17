<?php 
/**
* 
*/
class ExamenEntidad 
{
	public $idExamen;
	public $version;
	public $arrPreguntas;
	function __construct($idExamen,$version,$arrPreguntas)
	{
		$this->idExamen=$idExamen;
		$this->version=$version;
		$this->arrPreguntas=$arrPreguntas;

	}

}

 ?>