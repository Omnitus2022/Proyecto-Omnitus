login
<?php
$PATH = $_SERVER['DOCUMENT_ROOT'].'/Proyecto-Omnitus/';

if(isset($_POST['login'])){
	
	$usu = $_POST['usu'];
	$pwd = MD5($_POST['pwd']);
	
	echo $usu;
	echo "pwd:";
	echo $pwd;
	if($usu!="" && $pwd!=""){	
		require("db/db.php");
		$db = db::connect();
		
		$sql = "SELECT * FROM Usuario WHERE nom = '$usu' AND pwd ='$pwd'";		
		$numfilas = mysqli_num_rows($db->query($sql));
		
		
		if($numfilas>0){

			$sqlperfil = "SELECT * FROM Usuario WHERE nom = '$nom'";
			$result = $db->query($sqlperfil);
			$data = $result->fetch_assoc(); 		
			var_dump($data);
			
			header($PATH.'php/controllers/autogestion_controller.php');
			session_start();
			$_SESSION['usu'] = $data['nom'];
			$_SESSION['perfil'] = $data['rol'];	
			$_SESSION['esEmpresa'] = $data['esEmpresa'];	
			$_SESSION['esDirectivo'] = $data['esDirectivo'];	
			$_SESSION['esAdmin'] = $data['esAdmin'];	
			$_SESSION['esHuerta'] = $data['esHuerta'];	
			$_SESSION['esRepartidor'] = $data['esRepartidor'];	
			$_SESSION['esInformatico'] = $data['esInformatico'];	

			if ($_SESSION['esInformatico']) {
				// Redirect
			}
		}else{
			echo "<script>alert(\"Usuario y/o contraseña incorrectos.\");window.location='../index.php';</script>";
			exit;
		}
		
	}
}

?>