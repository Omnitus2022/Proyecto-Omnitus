<?php
$PATH = $_SERVER['DOCUMENT_ROOT'] . '/Proyecto-Omnitus/';
$TITLE = "Autorizar usuarios";
require_once($PATH . 'php/db/db.php');
require_once($PATH . 'php/models/usuario_model.php');

if (!isset($_SESSION)) {
    session_start();
}

$usuario = new usuario_model();
$listaUsuarios = $usuario->pendientes();

require_once($PATH . 'php/views/autorizarUsuario.php');
