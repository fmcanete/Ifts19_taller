<?php
	include "conexion.php";

	if (isset($_POST['insert'])) 
		{
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

			$sql="INSERT INTO pedidos 
				VALUES ('$idPedido', '$idCampana', '$fechaIni', '$fechaFin', '$cliente', '$producto', '$descripcion', '$codigo', '$unidades', '$pagina', '$precio', '$precioFinal', '$reventa')";

	
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