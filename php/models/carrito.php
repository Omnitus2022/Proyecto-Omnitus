<?php
if (!isset($_SESSION)) {
    session_start();
}
echo '<h2>Productos</h2>
<div>
';
$TOTAL = 0;
foreach ($_SESSION["products"] as $prod) {
    $TOTAL += intval($prod["precio"]);
    echo '
<div class="shoppingCart__product">
<div class="shoppingCart__product-name">' . $prod["nombre"] . '</div>
<div class="shoppingCart__product-qty">' . $prod["cantidad"] . '</div>
<div class="shoppingCart__product-price">' . $prod["precio"] . ' $</div>
<div class="shoppingCart__product-remove" productId="' . $prod["id"] . '">
<svg class="clickable" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
<path d="M310.6 361.4c12.5 12.5 12.5 32.75 0 45.25C304.4 412.9 296.2 416 288 416s-16.38-3.125-22.62-9.375L160 301.3L54.63 406.6C48.38 412.9 40.19 416 32 416S15.63 412.9 9.375 406.6c-12.5-12.5-12.5-32.75 0-45.25l105.4-105.4L9.375 150.6c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0L160 210.8l105.4-105.4c12.5-12.5 32.75-12.5 45.25 0s12.5 32.75 0 45.25l-105.4 105.4L310.6 361.4z" />
</svg>
</div>
</div>';

    echo '</div>';
}
if ($TOTAL > 0) {

    echo '<span>';
    echo '<h2 class="shoppingCart--total">TOTAL:</h2>';
    echo '<h2 class="shoppingCart--total">$' . $TOTAL . '</h2>';
    if (!isset($_POST['checkout'])) {
        echo '
    <svg class="shoppingCart--btn" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
         viewBox="0 0 511.999 511.999" style="enable-background:new 0 0 511.999 511.999;" xml:space="preserve">
    <g>
        <g>
            <path d="M298.666,383.999h-128c-11.782,0-21.333,9.552-21.333,21.333c0,11.782,9.552,21.333,21.333,21.333h128
                c11.782,0,21.333-9.552,21.333-21.333C320,393.551,310.448,383.999,298.666,383.999z"/>
        </g>
    </g>
    <g>
        <g>
            <path d="M341.333,298.666H170.666c-11.782,0-21.333,9.552-21.333,21.333s9.552,21.333,21.333,21.333h170.667
                c11.782,0,21.333-9.552,21.333-21.333S353.115,298.666,341.333,298.666z"/>
        </g>
    </g>
    <g>
        <g>
            <path d="M298.666,213.333h-128c-11.782,0-21.333,9.552-21.333,21.333s9.552,21.333,21.333,21.333h128
                c11.782,0,21.333-9.552,21.333-21.333S310.448,213.333,298.666,213.333z"/>
        </g>
    </g>
    <g>
        <g>
            <path d="M341.333,127.999H170.666c-11.782,0-21.333,9.552-21.333,21.333c0,11.782,9.552,21.333,21.333,21.333h170.667
                c11.782,0,21.333-9.552,21.333-21.333C362.666,137.551,353.115,127.999,341.333,127.999z"/>
        </g>
    </g>
    <g>
        <g>
            <path d="M434.83,1.624c-7.967-3.3-17.148-1.476-23.249,4.625L384,33.83L356.419,6.249c-8.33-8.331-21.838-8.331-30.17,0
                L298.666,33.83L271.085,6.249c-8.33-8.331-21.838-8.331-30.17,0L213.333,33.83L185.752,6.249c-8.33-8.331-21.838-8.331-30.17,0
                L128,33.83L100.417,6.249C94.316,0.146,85.14-1.676,77.168,1.624C69.196,4.926,64,12.704,64,21.333v469.333
                c0,11.782,9.552,21.333,21.333,21.333h341.333c11.782,0,21.333-9.552,21.333-21.333V21.333C448,12.704,442.803,4.926,434.83,1.624
                z M405.333,469.333H106.666V72.837l6.249,6.248c8.33,8.331,21.838,8.331,30.17,0l27.581-27.581l27.583,27.581
                c8.33,8.331,21.838,8.331,30.17,0L256,51.504l27.583,27.581c8.33,8.331,21.838,8.331,30.17,0l27.581-27.581l27.583,27.581
                c8.33,8.331,21.838,8.331,30.17,0l6.248-6.248V469.333z"/>
        </g>
    </g>
    <g>
    </g>
    <g>
    </g>
    <g>
    </g>
    <g>
    </g>
    <g>
    </g>
    <g>
    </g>
    <g>
    </g>
    <g>
    </g>
    <g>
    </g>
    <g>
    </g>
    <g>
    </g>
    <g>
    </g>
    <g>
    </g>
    <g>
    </g>
    <g>
    </g>
    </svg>';
    }

    echo '</span>';
}
$_SESSION["importeTotal"] = $TOTAL;
