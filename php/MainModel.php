<?php 
/**
* 
*/
class MainModel 
{
	protected $error=false;
	protected $errorMsj=null;
	protected $test=true;
	/**
	 * [devulve true si hubo un error en la ultima operacion,false en caso de no error]
	 * @return [type] [description]
	 */
	public function test($test)
	{
		$this->test=$test;
	}
	public function getError()
	{
		return $this->error;
	}
	/**
	 * [setea si hay o no error, si se pasa errorMsj, entonces atumantiamente setea a true, sino se le pasa arguemtno todo fue ok]
	 * @param string $errorMsj [description]
	 */
	public function setError($errorMsj=""){
		echo $errorMsj;
		$this->error=true;
		$this->errorMsj=($errorMsj=="")?null:$errorMsj;
	}
	public function getErrorMsj()
	{
		return $this->errorMsj;
	}
	public function ok()
	{
		$this->error=false;
		$this->errorMsj=null;
	}
}
 ?>