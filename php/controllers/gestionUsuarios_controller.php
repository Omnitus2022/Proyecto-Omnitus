<?php
$PATH = $_SERVER['DOCUMENT_ROOT'] . '/Proyecto-Omnitus/';
$TITLE = "Gestión de Usuarios";
require_once($PATH . 'php/db/db.php');
require_once($PATH . 'php/models/usuario_model.php');
require_once($PATH . 'php/models/cliente_model.php');
require_once($PATH . 'php/models/huerta_model.php');

$usuario = new usuario_model();
$huerta = new huerta_model();
$cliente = new cliente_model();
$listaClientes = $cliente->listarClientes();
$listaUsuarios = $usuario->listarUsuarios();

if (!isset($_SESSION)) {
    session_start();
}
require_once($PATH . 'php/views/gestionUsuarios.php');
