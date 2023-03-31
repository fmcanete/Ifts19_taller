
<?php
	include "conexion.php";
	
	$data = array();
	$sql = 'SELECT * FROM pedidos';
	$ejecutar = $conexion->query($sql);
	
	while($row = mysqli_fetch_object($ejecutar))
	{
		$data[] = $row;
	}
	
	echo json_encode($data, JSON_UNESCAPED_UNICODE);

	
?>