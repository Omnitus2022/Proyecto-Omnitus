<?php
 $PATH = $_SERVER['DOCUMENT_ROOT'].'/Proyecto-Omnitus/';
 $TITLE = "Gestión de Usuarios";
 require_once($PATH.'php/db/db.php');
 require_once($PATH.'php/models/usuario_model.php');


$usuario = new usuario_model();

if(isset($_POST['usuario'])){
    $idC = $_POST["idC"];
    $nomUsu = $_POST["nomUsu"];
    $pwdUsu = $_POST["pwdUsu"];
    $esEmp = isset($_POST["esEmp"]);
    $esDir = isset($_POST["esDir"]);
    $esAdm = isset($_POST["esAdm"]);
    $esHue = isset($_POST["esHue"]);
    $esRep = isset($_POST["esRep"]);
    $esInf = isset($_POST["esInf"]);
    if ($nomUsu != "" && $pwdUsu != "") {
		$usuario->insertUsuario($idC, $nomUsu, $pwdUsu, $esEmp, $esDir, $esAdm, $esHue, $esRep, $esInf);	
        echo "<script>alert(\"Datos ingresados con éxito.\");window.location='../controllers/gestionUsuarios_controller.php';</script>";
    }else {
        echo "<script>alert(\"Asegúrese de que los datos sean correctos.\");window.location='../controllers/gestionUsuarios_controller.php';</script>";
        exit;    
    }
}
