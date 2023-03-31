<?php
	include "conexion.php";

	if (isset($_POST['insertVentas'])) 
		{
			//$idVenta = $_POST['idVenta'];
			$tipoVenta= $_POST ['tipoVenta'];
			$cliente = $_POST ['cliente'];
			$fechaVenta = $_POST ['fechaVenta'];
			$idCampana = $_POST['idCampana'];
			$producto = $_POST ['producto'];
			//$codigo = $_POST ['codigo'];
			$precioVenta = $_POST['precioVenta'];
			$precioFinal = $_POST ['precioFinal'];
			$pago = $_POST ['pago'];

			$sql="INSERT INTO ventas 
				VALUES (null, '$tipoVenta', '$cliente', '$fechaVenta', '$idCampana', '$producto', 'na', '$precioVenta', '$precioFinal', '$pago')";

	
			$ejecutar = $conexion ->query($sql);


			if($ejecutar)
				{
					echo "Correcto";
				}
				else 
					{
						echo "Error SQL\n";
                        //print("$idVenta");
                        print("$pago");
					}

		}

?>