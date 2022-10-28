<?php
session_start();

$_SESSION["products"][substr($_POST["id"], 1)] = [
    "id" => substr($_POST["id"], 1),
    "nombre" => $_POST["nombre"],
    "cantidad" => $_POST["cantidad"]
];
echo '<h2>Productos</h2>
<div>
';
foreach ($_SESSION["products"] as $prod) {
    echo '
<div class="shoppingCart__product">
<div class="shoppingCart__product-name">' . $prod["nombre"] . '</div>
<div class="shoppingCart__product-qty">' . $prod["cantidad"] . '</div>
<div class="shoppingCart__product-remove"><button>X</button></div>
</div>';

    echo '</div>';
}
