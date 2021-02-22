<?php

	include "conexion.php";

	if (isset($_POST['updateVentas'])) {
		$idVenta = $_POST['idVenta'];
		$tipoVenta = $_POST ['tipoVenta'];
		$cliente = $_POST ['cliente'];
		$fechaVenta = $_POST ['fechaVenta'];
		$pedido = $_POST ['pedido'];
		//$idCampana = $_POST['idCampana'];		
		$producto = $_POST['producto'];		
		//$codigo = $_POST ['codigo'];
		$precioVenta= $_POST ['precioVenta'];
		$precioFinal = $_POST ['precioFinal'];
		$pago = $_POST ['pago'];
		
		if ($pedido == '')
        {
            $pedido = 'No Aplica';
        }
        if ($producto == '')
        {
            $producto = 'No Aplica';
        }

		$sql = "UPDATE ventas SET	idVenta='$idVenta',
									tipoVenta='$tipoVenta',
									cliente='$cliente',
									fechaVenta='$fechaVenta',
									pedido='$pedido',
									producto='$producto',
									codigo='na',
									precioVenta='$precioVenta',
									precioFinal='$precioFinal',
									pago='$pago'
				WHERE idVenta = '$idVenta'";

		
		$ejecutar = $conexion ->query($sql);

		if($ejecutar){
			echo "Correcto";
		}else {
			echo "Error";
			echo "$sql";
		}

	}