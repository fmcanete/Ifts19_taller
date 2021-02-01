<?php
	include "conexion.php";

	if (isset($_POST['insertProductos'])) 
		{
//			$idProducto = $_POST['idProducto'];
			$producto = $_POST ['producto'];
			$descripcion = $_POST ['descripcion'];
			$codigo = $_POST ['codigo'];
			$idCampana = $_POST['idCampana'];
			$fechaFin = $_POST ['fechaFin'];
			$precioUnitario = $_POST ['precioUnitario'];
			$precioVenta = $_POST ['precioVenta'];

			$sql="INSERT INTO productos 
				VALUES (null, '$producto', '$descripcion', '$codigo', '$idCampana', '$fechaFin', '$precioUnitario', '$precioVenta')";

	
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