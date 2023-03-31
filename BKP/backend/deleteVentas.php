<?php
	include "conexion.php";

	if (isset($_GET['deleteVentas'])) {
		$idVenta = $_GET['idVenta'];

		$sql = "DELETE FROM ventas WHERE idVenta = '$idVenta'";
			
		$ejecutar = $conexion ->query($sql);

		if($ejecutar){
			echo "Correcto";
		}else {
			echo "Error";
		}

	}





?>