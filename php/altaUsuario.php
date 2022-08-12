<?php

if(isset($_DIALOG['enviardatos'])){
	
	$usu = $_DIALOG['usu'];
	$psw = MD5($_DIALOG['psw']); 
	$nom = $_DIALOG['nom']; 
	$tip = $_DIALOG['tipo'];
    $dir = MD5($_DIALOG['dir']); 
    $tel = MD5($_DIALOG['tel']);
	
	if($usu!="" && $psw!="" && $nom!="" && $tip!="" && $dir!="" && $tel!="" ){
		
		require("conexion.php");
		$sqlAlta = "INSERT INTO usuario VALUE('$usu','$psw','$nom','$tip','$dir','$tel')";
		$query = $conexion->query($sqlAlta);
		
		if ($query == NULL) {
			echo "<script>alert('No se pudo realizar el alta de registro.');window.location='../index.php';</script>";
			exit;
		}else{
			echo "<script>alert('Registro realizado con éxito.');window.location='../index.php';</script>";
			exit;
		}
		
	}else{
		$msgA = "<span style='color:red;'>Error: No pueden quedar campos vacíos.</span>";
		header("location:../index.php");
	}

	$conexion->close();
}
?>