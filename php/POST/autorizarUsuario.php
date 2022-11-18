<?php
$PATH = $_SERVER['DOCUMENT_ROOT'] . '/Proyecto-Omnitus/';

require_once($PATH . 'php/db/db.php');
require_once($PATH . 'php/models/usuario_model.php');

$usuario = new usuario_model();

if (isset($_POST['autorizarUsuario'])) {
    $nomUsu = $_POST["nomUsu"];

    if ($nomUsu != "") {
        $usuario->autorizarUsuario($nomUsu);
        echo "<script>alert(\"Datos ingresados con éxito.\");window.location='../controllers/gestionUsuarios_controller.php';</script>";
    } else {
        echo "<script>alert(\"Asegúrese de que los datos sean correctos.\");window.location='../controllers/gestionUsuarios_controller.php';</script>";
        exit;
    }
}
