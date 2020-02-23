<?php

	require 'conecta.php';

	$sql = "select * from tareas";
	$result = mysqli_query($conn, $sql);


	if (mysqli_num_rows($result) != 0) {
		$first = true;
		while ($row = mysqli_fetch_assoc($result)) {
			if ($first) {
				print($row['titulo'].'-'.$row['descripcion'].'-'.$row['fecha']);
				$first = false;
			}
			else print('_'.$row['titulo'].'-'.$row['descripcion'].'-'.$row['fecha']);
		}

	}
	else print('No hay filas');
	
?>
