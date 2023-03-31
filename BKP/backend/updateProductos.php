<?php
	include "conexion.php";

	if (isset($_POST['updateProductos'])) {
		$idProducto = $_POST['idProducto'];
		$producto = $_POST ['producto'];
		$descripcion = $_POST ['descripcion'];
		$codigo = $_POST ['codigo'];
		$idCampana = $_POST['idCampana'];		
		$fechaFin = $_POST ['fechaFin'];
		$precioUnitario = $_POST ['precioUnitario'];
		$precioVenta = $_POST ['precioVenta'];

		$sql = "UPDATE productos SET 	idProducto='$idProducto',
										producto='$producto',
										descripcion='$descripcion',
										codigo='$codigo',
										idCampana='$idCampana',
										fechaFin='$fechaFin',
										precioUnitario='$precioUnitario',
										precioVenta='$precioVenta'
				WHERE idProducto = '$idProducto'";

		
		$ejecutar = $conexion ->query($sql);

		if($ejecutar){
			echo "Correcto";
		}else {
			echo "Error";
		}

	}