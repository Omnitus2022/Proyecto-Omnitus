<?php
if (!isset($_SESSION)) {
    session_start();
}

$_SESSION["products"][substr($_POST["id"], 1)] = [
    "nombre" => $_POST["nombre"],
    "cantidad" => $_POST["cantidad"]
];

foreach ($_SESSION["products"] as $prod) {
    echo '
<div class="shoppingCart__product">
<div class="shoppingCart__product-name">' . $prod["nombre"] . '</div>
<div class="shoppingCart__product-qty">' . $prod["cantidad"] . '</div>
<div class="shoppingCart__product-remove">X</div>
</div>';
}
