<?php 
	include("php/validarSession.php");
	if(!esMaestro()){
	//	echo "No eres maestro";
		header("Location:php/error.php"."?"."msjError=NO TIENE PERMISO DE MAESTRO");
	}

 ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <title>Men&uacute; Maestro</title>
    <meta charset="utf-8">
	
	
    <link type="text/css" href="./css/sty.css" rel="stylesheet" />
</head>
 

<BODY BACKGROUND="white">

<blockquote><div align=justify><p>
<div id="wrapper">
	<div id="menu"> 
		<ul>  <center>
	<img WIDTH=1050 HEIGHT=85 src="img/f5.png"><br> <br>
			<li class="current_page_item"><a href="index2.html"><font face="courier new" size="5" color="green" ><b>Inicio</a></li>
			<li class="current_page_item"><a href="referencias.html"><font face="courier new" color="green" ><b>Referencias</a></li>
            <li class="current_page_item"><a href="contacto.html"><font face="courier new"color="green" ><b>Contacto</a></li>
			<li class="current_page_item"><a href="logout.php"><font face="courier new" size="5" color="green" ><b>Cerrar Sesi&oacute;n</a></li>
			
         			
</div>
	</div>
    <div id="registrar">
            
    </div>
    <div id="envoltura"> 
        <div id="contenedor"><br><br><br>
 <center> <b> <font face="Century Gothic" size="6" color="black">Men&uacute; Maestro</a> <b></br> </font>
            <div id="cabecera">
			
         
			 </div>
 
            <div id="cuerpo">
		
 
                <form id="form-login" action="#" method="post" >
			 		  
          <br>
 
                   <div id="pie"><font face="courier new" size="5" color="blue"> Grupos
				   </div></font></a><a href="index.php" title=""> <img src="img/grupos.png" border="0"></a>  
					<br> <br>
					<br>
					
					 <div id="pie"><font face="courier new" size="5" color="blue">Contenido de la Unidad II  </div></font></a><a href="menualu1.html" title=""> <img src="img/mtd.jpg" border="0"></a>  
					</font><br>
					<br>
					<br>
			<br>
	
					
		
	
			
					
					<a href="index2.html" title=""><img src="img/ini.jpg" width=100 height=90 border="0"></a>
                </form>
            </div>
			
			<div id="pie"> <font color="gray" size="2">Plataforma Teoria de Conjuntos</div>
        </div><!-- fin contenedor -->
 
    </div>
 
</body>
 
</html>

