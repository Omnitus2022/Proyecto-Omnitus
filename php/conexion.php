<?php

	$conexion = new mysqli('localhost', 'root', '', 'omnitus2022.sql');
	if ($conexion->connect_errno) {
		echo "Lo sentimos, este sitio web está experimentando problemas.";
		exit;
	}
	
?>