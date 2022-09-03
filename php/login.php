login
<?php

if(isset($_POST['login'])){
	require("db/db.php");
	$usu = $_POST['usu'];
	$pwd = MD5($_POST['pwd']); 
	$db = db::connect();
	if($usu!="" && $pwd!=""){	
	
		
		$sql = "SELECT * FROM Usuario WHERE nom = '$usu' AND pwd ='$pwd'";		
		$numfilas = mysqli_num_rows($db->query($sql));
		
		
		if($numfilas>0){
			$sqlperfil = "SELECT nom, esEmpresa, esDirectivo, esAdmin, esHuerta, esRepartidor, esInformatico FROM Usuario WHERE nom = '$usu'";
			
			$result = $db->query($sqlperfil);
			$data = $result -> fetch_assoc(); 			
			
			if($data['rol']=="1"){
				
				//header('location:facturacion.php');
				echo "1";
			}else if($data['rol']=="0"){
				
				//header('location:pedidos.php');
				echo "0";

			}
			
			session_start();
			$_SESSION['usu'] = $data['nom'];
			$_SESSION['perfil'] = $data['rol'];	
		}else{
			echo "<script>alert(\"Usuario y/o contraseña incorrectos.\");window.location='../index.php';</script>";
			exit;
		}
		
	}
}

?>