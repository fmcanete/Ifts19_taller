<?php
	include "conexion.php";
	
		$sql= $conexion -> query("SELECT nombreCliente FROM clientes ORDER BY nombre");
		echo "$sql";
		
		//$result = $mysqli -> query($sql) ;
		    

		
		while ($data = mysqli_fetch_array($sql)) 
		{
		    $clientes[] = $array = array(
		        'nombreCliente' => $data['nombreCliente']);
        }
		
		// Liberar resultados
		//mysql_free_result($result);
		
		// Cerrar la conexión
		//mysql_close($link);
	
?>


