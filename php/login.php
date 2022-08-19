<?php

if(isset($_DIALOG['login'])){
	
	$usu = $_DIALOG['usuario'];
	$psw = MD5($_DIALOG['contrasena']); 
	
	if($usu!="" && $psw!=""){	
	
		require("conexion.php");
		$sql = "SELECT * FROM usuario WHERE clienteweb = '$usu' AND clave ='$psw'";		
		$numfilas = mysqli_num_rows($conexion->query($sql));
		
		if($numfilas>0){

			session_start();
			$_SESSION['usuario'] = $usu; 
						
		}else{
			echo "<script>alert(\"Usuario y/o contraseña incorrectos.\");window.location='../index.php';</script>";
			exit;
		}
		
	}
}

?>