<?php
$PATH = $_SERVER['DOCUMENT_ROOT'] . '/Proyecto-Omnitus/';


require_once($PATH . 'php/db/db.php');
require_once($PATH . 'php/models/table_model.php');
require_once($PATH . 'php/models/usuario_model.php');

$usuario = new usuario_model();
$table = new table_model();
$tableName = "Usuario";
$primaryKey = "nom";

if (isset($_POST['createUsuario'])) {
    $idC = $_POST["idC_c"];
    $nomUsu = $_POST["nomUsu_c"];
    $pwdUsu = $_POST["pwdUsu_c"];
    $esEmp = isset($_POST["esEmp_c"]);
    $esDir = isset($_POST["esDir_c"]);
    $esAdm = isset($_POST["esAdm_c"]);
    $esHue = isset($_POST["esHue_c"]);
    $esRep = isset($_POST["esRep_c"]);
    $esInf = isset($_POST["esInf_c"]);
    if ($esHue) {
        $idHuerta = $_POST["idH_c"];
    } else {
        $idHuerta = "";
    }

    if ($nomUsu != "" && $pwdUsu != "") {
        $usuario->insertUsuario($idC, $nomUsu, $pwdUsu, $esEmp, $esDir, $esAdm, $esHue, $esRep, $esInf, $idHuerta);
        echo "<script>alert(\"Datos ingresados con éxito.\");window.location='../controllers/gestionUsuarios_controller.php';</script>";
    } else {
        echo "<script>alert(\"Asegúrese de que los datos sean correctos.\");window.location='../controllers/gestionUsuarios_controller.php';</script>";
        exit;
    }
}
if (isset($_POST['updateUsuario'])) {
    $idC = $_POST["idC_u"];
    echo $idC;
    $nomUsu = $_POST["nomUsu_u"];
    $pwdUsu = $_POST["pwdUsu_u"];
    $esEmp = isset($_POST["esEmp_u"]);
    $esDir = isset($_POST["esDir_u"]);
    $esAdm = isset($_POST["esAdm_u"]);
    $esHue = isset($_POST["esHue_u"]);
    $esRep = isset($_POST["esRep_u"]);
    $esInf = isset($_POST["esInf_u"]);
    if ($esHue) {
        $idHuerta = $_POST["idH_u"];
    } else {
        $idHuerta = "";
    }

    if ($nomUsu != "") {
        $usuario->updateUsuario($idC, $nomUsu, $pwdUsu, $esEmp, $esDir, $esAdm, $esHue, $esRep, $esInf, $idHuerta);
        echo "<script>alert(\"Datos ingresados con éxito.\");window.location='../controllers/gestionUsuarios_controller.php';</script>";
    } else {
        echo "<script>alert(\"Asegúrese de que los datos sean correctos.\");window.location='../controllers/gestionUsuarios_controller.php';</script>";
        exit;
    }
}

if (isset($_POST['deleteUsuario'])) {

    $nomUsu = $_POST["nomUsu_d"];


    if ($nomUsu != "") {
        $table->deleteValue($tableName, $primaryKey, $nomUsu);
        echo "<script>alert(\"Datos eliminados con éxito.\");window.location='../controllers/gestionUsuarios_controller.php';</script>";
    } else {
        echo "<script>alert(\"Asegúrese de que los datos sean correctos.\");window.location='../controllers/gestionUsuarios_controller.php';</script>";
        exit;
    }
}
