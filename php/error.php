<?php 
	const NO_PERMISO="NO_PERMISO";
	const NVL_MAESTRO="MAESTRO";
	const CL_TIPOERROR="tipo_error";
	$msj="Error";
	if(isset($_GET[CL_TIPOERROR])){
		if($_GET[CL_TIPOERROR]=NO_PERMISO){
			$msj." no tienes permiso";
		}


		echo $msj;
	}
	
 ?>

 <!DOCTYPE html>
<html>	
	<body>
		<h1>Error</h1>
		<h4>
		<?php echo $_REQUEST["msjError"]; ?></h4>
		<a href="../index.html">Volver a inicio</a>
	</body>
</html>