<?php 
class Response{
	public $responseBody;
	public $codigo;
	public $msj;
	function __construct($responseBody,$codigo,$msj="")
	{
		$this->responseBody=$responseBody;
		$this->codigo=$codigo;
		$this->msj=$msj;

	}
}
?>