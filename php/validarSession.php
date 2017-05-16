<?php
	/**
	 * retorna un
	 */
	const NVL_ALUMNO="ALUMNO";
	const NVL_MAESTRO="MAESTRO";

	const CL_NOMBRE="nombre";
	const CL_NIVEL="nivel";
	const CL_NOCONTROL="no_control";
	const CL_USUARIO="usuario";//actuara como id, ya queno hay usuaris repetidos
	function estaLogeado()
	{
		session_start();
		//preguntamos si $_SESSION["nombre"], ya que es la variable con la que registramos la session
		if(!isset($_SESSION["nombre"])){
			return false;
		}
		return true;
	}
	function esMaestro(){
		if(estaLogeado()){
			if(isset($_SESSION[CL_NIVEL])){ //s
				if($_SESSION[CL_NIVEL]==MAESTRO){
					return 	true;
				}				
			}
		}
		return false;
	}
	function esAlumno(){
		if(estaLogeado()){
			if(isset($_SESSION[CL_NIVEL])){
				if($_SESSION[CL_NIVEL]==NVL_ALUMNO)
					return true;
			}
		}
		return false;
	}

	function iniciarSessionAlumno($nombre, $no_control){
		session_start();
		$_SESSION[CL_NOMBRE] = $nombre;
		$_SESSION[CL_NIVEL]=NVL_ALUMNO;
		$_SESSION[CL_NOCONTROL]=$no_control;
	}
	function iniciarSessionMaestro($nombre, $usuario){
		session_start();
		$_SESSION[CL_NOMBRE] = $nombre;
		$_SESSION[CL_NIVEL]=NVL_MAESTRO;
		$_SESSION[CL_USUARIO]=$usuario;
		
	}

 ?>