<?php
$PATH = $_SERVER['DOCUMENT_ROOT'] . '/Proyecto-Omnitus/';

require_once($PATH . 'php/views/empty.php');
require_once($PATH . 'php/db/db.php');
require_once($PATH . 'php/models/usuario_model.php');
require_once($PATH . 'php/models/cliente_model.php');
require_once($PATH . 'php/models/cWeb_model.php');
require_once($PATH . 'php/models/cEmpresa_model.php');


if (!isset($_SESSION)) {
    session_start();
}

$usuario = new usuario_model();
$currUser = $usuario->getOneUsuario($_SESSION["usu"]);
$cliente = new cliente_model();
$cWeb = new cWeb_model();
$cEmpresa = new cEmpresa_model();
if (isset($_POST['actualizarPerfil'])) {
    $pwdV = MD5($_POST["pwd_verif"]);
    if ($pwdV == $currUser["pwd"]) {
        $nomUsu = $_POST["nomUsu"];
        $email = $_POST["email"];
        $cedula = $_POST["cedula"];
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $rut = $_POST["rut"];
        $calle = $_POST["calle"];
        $esq = $_POST["esq"];
        $puerta = $_POST["puerta"];
        $nombreEmpresa = $_POST["nombreEmpresa"];
        if ($email != "" && $calle != "" && $esq != "" && $puerta != "") {
            $cliente->actualizarPerfil($_SESSION["idClienteAsociado"], $email, $calle, $puerta, $esq);
            if ($_SESSION["esEmpresa"]) {
                if ($email != "" && $rut != "" && $nombreEmpresa != "") {
                    $cEmpresa->actualizarPerfil($_SESSION["idClienteAsociado"], $rut, $nombreEmpresa);
                    echo "<script>alert(\"Datos actualizados con éxito.\");window.location='../controllers/perfil_controller.php';</script>";
                } else {
                    echo "<script>alert(\"Asegúrese de que los datos sean correctos.\");window.location='../controllers/perfil_controller.php';</script>";
                    exit;
                }
            } else {
                if ($email != "" && $cedula != "" && $nombre != "" && $apellido != "") {
                    $cWeb->actualizarPerfil($_SESSION["idClienteAsociado"], $cedula, $nombre, $apellido);
                    echo "<script>alert(\"Datos actualizados con éxito.\");window.location='../controllers/perfil_controller.php';</script>";
                } else {
                    echo "<script>alert(\"Asegúrese de que los datos sean correctos.\");window.location='../controllers/perfil_controller.php';</script>";
                    exit;
                }
            }
        } else {
            echo "<script>alert(\"Asegúrese de que los datos sean correctos.\");window.location='../controllers/perfil_controller.php';</script>";
        }
    } else {
        echo "<script>alert(\"Contraseña incorrecta.\");window.location='../controllers/perfil_controller.php';</script>";
    }
}
if (isset($_POST['actualizarContraseña'])) {
    $pwdV = MD5($_POST["pwd_verif_u"]);
    if ($pwdV == $currUser["pwd"]) {
        $newPwd = $_POST["pwd"];
        $pwdConf = $_POST["pwdConf"];
        if (strlen($newPwd) >= 4 || strlen($pwdConf) >= 4) {
            if ($newPwd == $pwdConf) {
                $usuario->updatePassword($currUser["nom"], $newPwd);
                echo "<script>alert(\"Contraseña actualizada con éxito.\");window.location='../controllers/perfil_controller.php';</script>";
            } else {
                echo "<script>alert(\"Las contraseñas no coinciden.\");window.location='../controllers/perfil_controller.php';</script>";
            }
        } else {
            echo "<script>alert(\"Asegúrese de que la contraseña sea válida.\");window.location='../controllers/perfil_controller.php';</script>";
        }
    } else {
        echo "<script>alert(\"Contraseña incorrecta.\");window.location='../controllers/perfil_controller.php';</script>";
    }
}
