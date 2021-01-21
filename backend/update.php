<?php
	include "conexion.php";

	if (isset($_POST['update'])) {
		$idPedido = $_POST['idPedido'];
		$idCampana = $_POST['idCampana'];
		$fechaIni = $_POST['fechaIni'];
		$fechaFin = $_POST ['fechaFin'];
		$cliente = $_POST ['cliente'];
		$producto = $_POST ['producto'];
		$descripcion = $_POST ['descripcion'];
		$codigo = $_POST ['codigo'];
		$unidades = $_POST ['unidades'];
		$pagina= $_POST ['pagina'];
		$precio = $_POST ['precio'];
		$precioFinal = $_POST ['precioFinal'];
		$reventa = $_POST ['reventa'];

		$sql = "UPDATE pedidos SET 	idCampana='$idCampana',
									fechaIni='$fechaIni',
									fechaFin='$fechaFin',
									cliente='$cliente',
									producto='$producto',
									descripcion='$descripcion',
									codigo='$codigo',
									unidades='$unidades',
									pagina='$pagina',
									precio='$precio',
									precioFinal='$precioFinal',
									reventa='$reventa'
				WHERE idPedido = '$idPedido'";

		
		$ejecutar = $conexion ->query($sql);

		if($ejecutar){
			echo "Correcto";
		}else {
			echo "Error";
		}

	}