<?php
	include "conexion.php";

	if (isset($_GET['delete'])) {
		$idPedido = $_GET['idPedido'];

		$sql = "DELETE FROM pedidos WHERE idPedido = '$idPedido'";
			
		$ejecutar = $conexion ->query($sql);

		if($ejecutar){
			echo "Correcto";
		}else {
			echo "Error";
		}

	}





?>