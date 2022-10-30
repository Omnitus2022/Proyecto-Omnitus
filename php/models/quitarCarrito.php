<?php
session_start();
unset($_SESSION["products"][$_POST["id"]]);
include("./carrito.php");
