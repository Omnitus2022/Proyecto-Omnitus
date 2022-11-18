<?php
if (!isset($_SESSION)) {
    session_start();
}
if (isset($_SESSION['usu'])) {
    echo 'success';
}
