<?php
	include "conexion.php";

	if (isset($_POST['insertClientes'])) 
		{
			$nombreCliente = $_POST ['nombreCliente'];
			$mail = $_POST ['mail'];
			$loConozcoDe = $_POST ['loConozcoDe'];
			$fechaAlta = $_POST['fechaAlta'];
			$direccion = $_POST ['direccion'];
			$telefono = $_POST ['telefono'];

			$sql="INSERT INTO clientes 
				VALUES (null, '$nombreCliente', '$mail', '$loConozcoDe', '$fechaAlta', '$direccion', '$telefono')";

	
			$ejecutar = $conexion ->query($sql);


			if($ejecutar)
				{
					echo "Correcto";
				}
				else 
					{
						echo "Error";
                        print("FALLAAAAAAAA");
					}

		}

?>