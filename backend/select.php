<?php
	include "conexion.php";

		$data= array();

		if($_POST['seleccionar'])
		{
			$idPedido = $_POST['idPedido'];
		


		$sql = "SELECT * FROM item WHERE idPedido = $idPedido";
			
		$ejecutar = $conexion ->query($sql);

		
		WHILE($row = mysqli_fetch_object($ejecutar)){
			$data[] = $row;
		}

		echo json_encode($data);

		echo "Error";
        print("FALLAAAAAAAA");
	}				


?>