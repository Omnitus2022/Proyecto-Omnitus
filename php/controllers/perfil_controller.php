<?php
$PATH = $_SERVER['DOCUMENT_ROOT'] . '/Proyecto-Omnitus/';
$TITLE = "Perfil";
require_once($PATH . 'php/db/db.php');
require_once($PATH . 'php/models/usuario_model.php');
require_once($PATH . 'php/models/cliente_model.php');
require_once($PATH . 'php/models/cWeb_model.php');
require_once($PATH . 'php/models/cEmpresa_model.php');


$usuario = new usuario_model();
$cliente = new cliente_model();
$cWeb = new cWeb_model();
$cEmpresa = new cEmpresa_model();

if (!isset($_SESSION)) {
    session_start();
}

$cId = $_SESSION['idClienteAsociado'];
$cli = $cliente->getOneCliente($cId);

if($_SESSION["esEmpresa"]){
$cE = $cEmpresa->getOneCEmpresa($cId);
}else{
$cW = $cWeb->getOneCWeb($cId);
}



require_once($PATH . 'php/views/perfil.php');
