<?php
$PATH = $_SERVER['DOCUMENT_ROOT'] . '/Proyecto-Omnitus/';

require($PATH . "php/db/db.php");
require($PATH . "php/models/usuario_model.php");
require($PATH . "php/models/cliente_model.php");
require($PATH . "php/models/cWeb_model.php");
require($PATH . "php/models/cEmpresa_model.php");

$usuario = new usuario_model();
$cliente = new cliente_model();
$cWeb = new cWeb_model();
$cEmpresa = new cEmpresa_model();
if (isset($_POST['registro'])) {

    $idCliente = uniqid("CLI_");
    $nom = $_POST['nom'];
    $pwd = $_POST['pwd'];
    $pwdVerif = $_POST['pwdVerif'];
    $email = $_POST['email'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $numeroPuerta = $_POST['numeroPuerta'];
    $calle = $_POST['calle'];
    $esquina = $_POST['esquina'];
    $CI = $_POST['CI'];
    $RUT = $_POST['RUT'];
    $esEmpresa = $_POST['esEmpresa'];
    if ($pwd == $pwdVerif && $pwd != "" && $nom != "" && $email != "" && $nombre != "" && $numeroPuerta != "" && $calle != "" && $esquina != "") {
        if ((isset($CI) && $apellido != "") || isset($RUT)) {
            $cliente->registroCliente($idCliente, $email, $numeroPuerta, $calle, $esquina);
            $usuario->insertUsuario($idCliente, $nom, MD5($pwd), $esEmpresa, '', '', '', '', '', '');


            if ($esEmpresa) {
                if ($RUT != "") {
                    $cEmpresa->insertCEmpresa($idCliente, $RUT, $nombre);
                    $stringAlert = "Petición de usuario generada con éxito.";
                    echo "<script>alert(\"$stringAlert\");window.location='/Proyecto-Omnitus/index.php';</script>";
                } else {
                    echo "<script>alert(\"Asegúrese de ingresar todos los datos.\");window.location='/Proyecto-Omnitus/index.php';</script>";
                }
            } else {
                if ($apellido != "" && $CI != "") {
                    $cWeb->insertCWeb($idCliente, $CI, $nombre, $apellido);
                    $stringAlert = "Petición de usuario generada con éxito.";
                    echo "<script>alert(\"$stringAlert\");window.location='/Proyecto-Omnitus/index.php';</script>";
                } else {
                    echo "<script>alert(\"Asegúrese de ingresar todos los datos.\");window.location='/Proyecto-Omnitus/index.php';</script>";
                }
            }
        } else {
            echo "<script>alert(\"Asegúrese de ingresar todos los datos y que sean correctos.\");window.location='/Proyecto-Omnitus/index.php';</script>";
        }
    }
}
