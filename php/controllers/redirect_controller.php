<?php
$PATH = $_SERVER['DOCUMENT_ROOT'] . '/Proyecto-Omnitus/';
$TITLE = "Herramientas";
require_once($PATH . 'php/db/db.php');
if (!isset($_SESSION)) {
    session_start();
}
require_once($PATH . 'php/views/redirect.php');
