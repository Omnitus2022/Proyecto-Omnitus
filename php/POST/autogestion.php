<?php
$PATH = $_SERVER['DOCUMENT_ROOT'].'/Proyecto-Omnitus/';
require($PATH."php/db/db.php");
require_once($PATH.'php/models/variedad_model.php');
require_once($PATH.'php/models/hortaliza_model.php');

$variedad = new variedad_model();
$hortaliza = new hortaliza_model();

if(isset($_POST['hortaliza'])){
    $n = $_POST["nom"];
    $u = $_POST["uni"];
    $tG = $_POST["tG"];
    $tC = $_POST["tC"];
    $mI = $_POST["mI"];
    $mF = $_POST["mF"];
    if ($n != "") {
		$hortaliza->insertHortaliza($n, $u, $tG, $tC, $mI, $mF);	
        echo "<script>alert(\"Datos ingresados con éxito.\");window.location='../controllers/autogestion_controller.php';</script>";
    }else {
        echo "<script>alert(\"Asegúrese de que los datos sean correctos.\");window.location='../controllers/autogestion_controller.php';</script>";
        exit;    
    }
}
