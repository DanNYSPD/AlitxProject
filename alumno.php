<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php
	session_start();
?>
    <head>
    	<!-- BEGGINING OF SOURCE REQUIREMENTS -->
    	<script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/jquery-ui.js"></script>
        <script type="text/javascript" src="js/jquery.blurhouse.min.js"></script>
        <script type="text/javascript" src="js/jquery.materialripple.js"></script>
        <script type="text/javascript" src="js/cookie.js"></script>
        <!-- ENDING OF SOURCE REQUIREMENTS -->
        <!-- BEGGINING OF ARMESIS SOURCE CODE -->
        <script type="text/javascript" src="js/arm.elemental.ui.js"></script>
        <link rel="stylesheet" href="css/arm.elemental.ud.css" type="text/css" media="screen" />
        <!-- ENDING OF ARMESIS SOURCE CODE -->
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta class="viewport" name="viewport" content="">
        <meta class="temaColor" name="theme-color" content="#FFF">
        <title></title>
    </head>
    <body>
    <noscript>
    	<div class="noscript-window">
	    	<div class="noscript-w-title">Faltan tecnologías</div>
            <div class="noscript-w-stitle">Este sitio web necesita de la tecnología JavaScript para funcionar adecuadamente y obtener la experiencia más completa. Si lo ha deshabilitado intencionalmente, por favor vuelva a activarlo.</div>
        </div>
    </noscript>
    <header>
        <div class="H-margin">
            <img src="image/encabezado.jpg" width="953" height="185" />
        </div>
    </header>
    <section class="mainframe">
        <div class="m-margin">
            <div class="m-m-title">CUENTA DE ALUMNO <?php echo $_SESSION['nombre'];?></div>
        </div>
    </section>
    <footer>
    	<div class="f-margin">Derechos Reservados - Instituto Tencológico de Orizaba</div>
    </footer>
   	</body>
</html>