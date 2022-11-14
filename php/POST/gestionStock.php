<?php
$PATH = $_SERVER['DOCUMENT_ROOT'] . '/Proyecto-Omnitus/';
require($PATH . "php/db/db.php");
require_once($PATH . 'php/models/stock_model.php');

$stock = new stock_model();

if (isset($_POST['insertStock'])) {
    $idV = $_POST["idV"];
    $vol = $_POST["vol"];


    if ($idV != "" && $vol > 0) {
        $stock->insertStock($idV, $vol);
        echo "<script>alert(\"Datos ingresados con éxito.\");window.location='../controllers/stock_controller.php';</script>";
    } else {
        echo "<script>alert(\"Asegúrese de que los datos sean correctos.\");window.location='../controllers/stock_controller.php';</script>";
        exit;
    }
}

if (isset($_POST['bajarStock'])) {
    $idV = $_POST["idV_d"];
    $vol = $_POST["vol_d"];
    $stockLim = $stock->getOneStock($idV);

    if ($idV != ""  && $vol > 0) {
        $stock->bajarStock($idV, $vol, $stockLim);
        echo "<script>alert(\"Stock actualizado con éxito.\");window.location='../controllers/stock_controller.php';</script>";
    } else {
        echo "<script>alert(\"Asegúrese de que los datos sean correctos.\");window.location='../controllers/stock_controller.php';</script>";
        exit;
    }
}

if (isset($_POST['addStock'])) {
    $idV = $_POST["idV_u"];
    $vol = $_POST["vol_u"];

    if ($idV != ""  && $vol > 0) {
        $stock->addStock($idV, $vol);
        echo "<script>alert(\"Stock actualizado con éxito.\");window.location='../controllers/stock_controller.php';</script>";
    } else {
        echo "<script>alert(\"Asegúrese de que los datos sean correctos.\");window.location='../controllers/stock_controller.php';</script>";
        exit;
    }
}
