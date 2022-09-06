<?php
$PATH = $_SERVER['DOCUMENT_ROOT'].'/Proyecto-Omnitus/';
require($PATH."php/db/db.php");
if(isset($_POST['login'])){
	
	$usu = $_POST['usu'];
	$pwd = MD5($_POST['pwd']);
	
	if($usu!="" && $pwd!=""){	
		
		$db = db::connect();
		
		$sql = "SELECT * FROM Usuario WHERE nom = '$usu' AND pwd ='$pwd'";		
		$numfilas = mysqli_num_rows($db->query($sql));
		
		
		if($numfilas>0){

			$sqlperfil = "SELECT * FROM Usuario WHERE nom = '$usu'";
			$result = $db->query($sqlperfil);
			$data = $result->fetch_assoc();
			
			header('location:/Proyecto-Omnitus/php/controllers/redirect_controller.php');
			session_start();
			$_SESSION['usu'] = $data['nom'];
			$_SESSION['perfil'] = $data['rol'];	
			$_SESSION['esEmpresa'] = $data['esEmpresa'];	
			$_SESSION['esDirectivo'] = $data['esDirectivo'];
			$_SESSION['esAdmin'] = $data['esAdmin'];
			$_SESSION['esHuerta'] = $data['esHuerta'];
			$_SESSION['esRepartidor'] = $data['esRepartidor'];	
			$_SESSION['esInformatico'] = $data['esInformatico'];	


		}else{
			echo "<script>alert(\"Usuario y/o contraseña incorrectos.\");window.location='../index.php';</script>";
			exit;
		}
		
	}
}

?>