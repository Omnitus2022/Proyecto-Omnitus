<?php
$PATH = $_SERVER['DOCUMENT_ROOT'] . '/Proyecto-Omnitus/';
$TITLE = "Gestión de Huertas";
require_once($PATH . 'php/db/db.php');
require_once($PATH . 'php/models/huerta_model.php');

$huerta = new huerta_model();

if (!isset($_SESSION)) {
    session_start();
}
require_once($PATH . 'php/views/gestionMetas.php');
