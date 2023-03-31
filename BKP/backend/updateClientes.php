<?php
	include "conexion.php";

	if (isset($_POST['updateClientes'])) {
		$idCliente = $_POST['idCliente'];
		$nombreCliente = $_POST ['nombreCliente'];
		$mail = $_POST ['mail'];
		$loConozcoDe = $_POST ['loConozcoDe'];
		$fechaAlta = $_POST['fechaAlta'];		
		$direccion = $_POST ['direccion'];
		$telefono = $_POST ['telefono'];

		$sql = "UPDATE clientes SET 	idCliente='$idCliente',
										nombreCliente='$nombreCliente',
										mail='$mail',
										loConozcoDe='$loConozcoDe',
										fechaAlta='$fechaAlta',
										direccion='$direccion',
										telefono='$telefono'
				WHERE idCliente = '$idCliente'";

		
		$ejecutar = $conexion ->query($sql);

		if($ejecutar){
			echo "Correcto";
		}else {
			echo "Error";
		}

	}