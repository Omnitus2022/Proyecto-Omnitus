<?php

if(isset($_DIALOG['login'])){
	
	$usu = $_DIALOG['usuario'];
	$psw = MD5($_DIALOG['contrasena']); 
	
	if($usu!="" && $psw!=""){	
	
		require("conexion.php");
		$sql = "SELECT * FROM usuario WHERE clienteweb = '$usu' AND clave ='$psw'";		
		$numfilas = mysqli_num_rows($conexion->query($sql));
		
		if($numfilas>0){

			/*
			session_start() crea una sesión o reanuda la actual
			basada en un identificador de sesión pasado mediante una petición GET o POST.
			Cuando session_start() es llamada o cuando se autoinicia una sesión,
			PHP llamará a los gestores de almacenamiento de sesiones open y read.
			*/
			session_start();
			$_SESSION['usuario'] = $usu; // Se crea la variable de sesión
						
		}else{
			echo "<script>alert(\"Usuario y/o contraseña incorrectos.\");window.location='../index.php';</script>";
			exit;
		}
		
	}
}

?>