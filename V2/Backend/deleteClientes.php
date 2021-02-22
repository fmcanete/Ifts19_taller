<?php
	include "conexion.php";

	if (isset($_GET['deleteClientes'])) {
		$idCliente = $_GET['idCliente'];

		$sql = "DELETE FROM clientes WHERE idCliente = '$idCliente'";
			
		$ejecutar = $conexion ->query($sql);

		if($ejecutar){
			echo "Correcto";
		}else {
			echo "Error";
		}

	}





?>