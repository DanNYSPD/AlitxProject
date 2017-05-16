<?php
include("db.php");
include("gral.php");
include("php/validarSession.php");
$c = new db();
//session_start();
switch($_POST['action']){
	case 'login':
		$us = $_POST['usuario'];
		$cl = $_POST['clave'];
		$c->q("SELECT * FROM alumno WHERE nocontrol = '".$us."' AND pass = '".$cl."' LIMIT 1;");
		if ($c->nr()> 0){
			$row = $c->fr();
			//var_dump($row);
			//var_dump($row[0]);
			//pasamos nombre de persona y numeroControl
			iniciarSessionAlumno($row[0],$row[1]);
			
			header("Location:menualu.php");
		} else{
			$c->q("SELECT * FROM maestro WHERE usuario = '".$us."' AND pass = '".$cl."' LIMIT 1;");
			if ($c->nr() > 0){
				$row = $c->fr();
				//pasmoa nombre y usuario
				iniciarSessionMaestro($row[0],$row[1]);
				
			header("Location:menuma.php");
				
			} else {
			die('<br> <br> <br><br><center><img src="img/error.png"  WIDTH=180 HEIGHT=200 BORDER=0 VSPACE=3 HSPACE=3><br> <br><font color="red" size="6" > <center>
			<b>No esta registrado o Usuario/Contrase&ntilde;a Incorrecta.</a></font
			<br><br> <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
			<a href="login.html" title><img align="left" src="img/volver.png" width=90 height=70 border="0"></a></div>
           
			<a href="index.html" title=""><img src="img/ini.png" width=100 height=80></a>
			<center><font face="Century Gothic" color="gray"  size="2" >Plataforma Teoria de Conjuntos</div></font></center><br />');
			}
		}
			break;
	}
$c->cl();


?>