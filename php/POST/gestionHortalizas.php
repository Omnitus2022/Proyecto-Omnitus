<?php
$PATH = $_SERVER['DOCUMENT_ROOT'] . '/Proyecto-Omnitus/';
require_once($PATH . 'php/views/empty.php');

require($PATH . "php/db/db.php");
require_once($PATH . 'php/models/variedad_model.php');
require_once($PATH . 'php/models/hortaliza_model.php');

$variedad = new variedad_model();
$hortaliza = new hortaliza_model();

if (isset($_POST['hortaliza'])) {
    $n = $_POST["nom"];
    $u = isset($_POST["uni"]);
    $tG = $_POST["tG"];
    $tC = $_POST["tC"];
    $mI = $_POST["mI"];
    $mF = $_POST["mF"];
    if ($n != "") {
        $hortaliza->insertHortaliza($n, $u, $tG, $tC, $mI, $mF);
        echo "<script>alert(\"Datos ingresados con éxito.\");window.location='../controllers/gestionHortalizas_controller.php';</script>";
    } else {
        echo "<script>alert(\"Asegúrese de que los datos sean correctos.\");window.location='../controllers/gestionHortalizas_controller.php';</script>";
        exit;
    }
}

if (isset($_POST['variedad'])) {
    $idH = $_POST["idH"];
    $nV = $_POST["nV"];
    $p = $_POST["p"];
    $img = $_POST["img"];

    if ($idH != "" && $p != "") {
        $variedad->insertVariedad($idH, $nV, $p, $img);
        echo "<script>alert(\"Datos ingresados con éxito.\");window.location='../controllers/gestionHortalizas_controller.php';</script>";
    } else {
        echo "<script>alert(\"Asegúrese de que los datos sean correctos.\");window.location='../controllers/gestionHortalizas_controller.php';</script>";
        exit;
    }
}
