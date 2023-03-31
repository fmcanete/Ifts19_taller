<?php
	include "conexion.php";

	if (isset($_GET['deleteProductos'])) {
		$idProducto = $_GET['idProducto'];

		$sql = "DELETE FROM productos WHERE idProducto = '$idProducto'";
			
		$ejecutar = $conexion ->query($sql);

		if($ejecutar){
			echo "Correcto";
		}else {
			echo "Error";
		}

	}





?>