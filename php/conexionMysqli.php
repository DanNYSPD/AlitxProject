
<?php
	//si no tienes contraseña solo envia dos parametros
error_reporting(E_ALL);
 function conectarBD()
{
	$mysqli = mysqli_connect("localhost", "root","","u2cr1");
//	echo "vairblae: ". var_dump($conexion);

	if($mysqli->connect_errno){
		imprimirError($mysqli);
		return false;
	}
	return $mysqli;
}
function imprimirError($mysqli){
		echo "Error: Fallo al conectarse a MySQL debido a: \n";
	    echo "Errno: " . $mysqli->connect_errno . "\n";
	    echo "Error: " . $mysqli->connect_error . "\n";
}
//consultamos , devuelve el objeto mysqli_result
function consultar($sql,$mysqli){
	$arrRes=null;
	if(!is_string($sql)||$sql==""){
		echo "Error: el query no es string";
		throw new Exception("AcessoBD->realizarConsulta:Falta indicar la consulta");
   		
	}
	if($mysqli->connect_errno){
		imprimirError($mysqli);
		throw new Exception("AcessoBD->realizarConsulta:Falta conexion a la BD");
		//return -1;
	}
	//retorna un resultado en ok, si fallo retorna el query retorna false;
	//Retorna FALSE en caso de error. Si una consulta del tipo SELECT, SHOW, DESCRIBE o EXPLAIN es exitosa, mysqli_query() retornará un objeto mysqli_result.
	try{
		$resultado=$mysqli->query($sql);
		//echo $sql;
	}catch(Exception $E){
        throw $E;
    }
	//var_dump($resultado);
	if(!$resultado){//puede devilver false si el query es incooreco
		echo "</br>Lo sentimos, este sitio web está experimentando problemas.";

	    // De nuevo, no hacer esto en un sitio público, aunque nosotros mostraremos
	    // cómo obtener información del error
	    echo "Error: La ejecución de la consulta falló debido a: \n";
	    echo "Query: " . $sql . "\n";
	    echo "Errno: " . $mysqli->errno . "\n";
	    echo "Error: " . $mysqli->error . "\n";
	}
	if($resultado->num_rows === 0){
		// ¡Oh, no ha filas! Unas veces es lo previsto, pero otras
    // no. Nosotros decidimos. En este caso, ¿podría haber sido
    // actor_id demasiado grande? 
    	echo "Lo sentimos. No se pudo encontrar una coincidencia .Inténtelo de nuevo.";
    	echo "<br>-".$sql."-"."<br>";
    	return false;
	}
	
	return $resultado;
}
	
	/**obtiene el resultado en forma de un array numerico (indice numerico)(numero-valor), donde cada fila(row) es un array numerico tambien (numero-valor)
	 * @param  [type]
	 * @param  [type]
	 * @return [Arreglo numerico con filas en forma de arreglo numerico]
	 */
	function consultarNum($sql,$mysqli){
		$x=0;
  		$y=0;
		$arrRes=null;
		$sContenido="";

		$resultado=consultar($sql,$mysqli);
		if($resultado){
			if($resultado){
		      while ($arFila=$resultado->fetch_assoc()) {
			       foreach ($arFila as $sContenido) {
			       		 $arrRes[$x][$y]=$sContenido;
			        	$y++;
			       }
		       $x++;
		       $y=0;
		      }			
			}
		}
		return $arrRes;
	}

	/**obtiene el resultado en forma de un array numerico(indice numerico) (numero-valor), donde cada fila(row) es un array asociativo (clave-valor)
	 * @param  [type]
	 * @param  [mysqli object]
	 * @return [Arreglo numerico con filas en forma de arreglo asociadtivo]
	 */
	function consultarAssoc($sql,$mysqli){
		$arrRes=null;
		$sContenido="";

		$resultado=consultar($sql,$mysqli);
		if($resultado){
			if($resultado){
				$arrRes= array();
		      while ($arFila=$resultado->fetch_assoc()) {
		      //	var_dump($arFila);
		      //	echo "<br>";
			     $arrRes[]=$arFila;
		      }
		      echo "$sql";
		      echo json_encode($arrRes);			
		      echo "<br>fin json encone<br>";
			}
		}

		return $arrRes;
	}
	function consultarAssocBeta($sql,$mysqli){
		$arrRes=null;
		$sContenido="";

		$resultado=consultar($sql,$mysqli);
		if($resultado){
			if($resultado){
				
		     $arrRes=$resultado->fetch_all(MYSQLI_ASSOC);
		      
		    /*  
		      echo "$sql";
		      echo "<br>inicio json encone<br>";
		      echo json_encode($arrRes);			
		      echo "<br>fin json encone<br>";
		      */
			}
		}

		return $arrRes;
	}
	
	
	function consultarAssocD($sql)
	{
		$conexion=conectarBD();
		mysqli_set_charset($conexion, 'utf8');
		return consultarAssocBeta($sql,$conexion);
	}	
	/**
	 * @param  [type]
	 * @param  [type]
	 * @return [type] devuelve UNA SOLA fila del primer resultado (aplica intermente un indice[0])
	 */
	function consultarPrimero($sql,$mysqli){
		
		$i=0;
  		
		$arrRes=null;
		$sContenido="";

		$resultado=consultar($sql,$mysqli);
		if($resultado){
			if($resultado){
				$arrRes= array();

		      while ($arFila=$resultado->fetch_assoc()) {
		      	if($i==1){//en caso de que el query no inclura in limit con uno basta
		      		return $arrRes[0];//devolvermos la fila
		      	}	
			     $arrRes[]=$arFila;
			     $i++;
		      }			
			}
		}
		return $arrRes;
	}	

	
	function desconectar(){
		$mysqli->close();
	}	
?>

