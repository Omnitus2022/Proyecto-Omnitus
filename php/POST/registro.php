<?php
$PATH = $_SERVER['DOCUMENT_ROOT'] . '/Proyecto-Omnitus/';

require($PATH . "php/db/db.php");
if (isset($_POST['registro'])) {

    $nom = $_POST['nom'];
    $pwd = MD5($_POST['pwd']);
    $pwdVerif = $_POST['pwdVerif'];
    $email = $_POST['email'];
    $nombre = $_POST['nombre'];
    $numeroPuerta = $_POST['numeroPuerta'];
    $calle = $_POST['calle'];
    $esquina = $_POST['esquina'];

    $esEmpresa = $_POST['esEmpresa'];

    if ($usu != "" && $pwd != "") {

        $db = db::connect();

        $sql = "SELECT * FROM Usuario WHERE nom = '$usu' AND pwd ='$pwd'";
        $numfilas = mysqli_num_rows($db->query($sql));

        if ($numfilas > 0) {

            $sqlperfil = "SELECT * FROM Usuario WHERE nom = '$usu'";
            $result = $db->query($sqlperfil);
            $data = $result->fetch_assoc();
            if ($data["autorizado"]) {
                if (!isset($_SESSION)) {
                    session_start();
                }
                $_SESSION['usu'] = $data['nom'];
                $_SESSION['esEmpresa'] = $data['esEmpresa'];
                $_SESSION['esDirectivo'] = $data['esDirectivo'];
                $_SESSION['esAdmin'] = $data['esAdmin'];
                $_SESSION['esHuerta'] = $data['esHuerta'];
                $_SESSION['esRepartidor'] = $data['esRepartidor'];
                $_SESSION['esInformatico'] = $data['esInformatico'];
                $_SESSION['idClienteAsociado'] = $data['idCliente'];
                $_SESSION['idHuertaAsociada'] = $data['idHuerta'];
                require_once($PATH . 'php/controllers/redirect_controller.php');
            } else {
                echo "<script>alert(\"Usuario y/o contraseña incorrectos.\");window.location='/Proyecto-Omnitus/index.php';</script>";
            }
        } else {
            echo "<script>alert(\"Usuario y/o contraseña incorrectos.\");window.location='/Proyecto-Omnitus/index.php';</script>";
            exit;
        }
    }
}
