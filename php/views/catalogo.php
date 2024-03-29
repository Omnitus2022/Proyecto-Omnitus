<?php

include($PATH . '/php/header.php');
?>

<div class="main-wrapper main-wrapper--bottomPadding" style="transform: scale(1); padding-top: 44.8px;">
    <div class="main-wrapper_container">

        <div class="front_page_cat">

            <h1 class="cat_title">Catálogo</h1>
            <label class="searchbar">
                <svg class="magnifier" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <!--! Font Awesome Pro 6.1.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                    <path d="M500.3 443.7l-119.7-119.7c27.22-40.41 40.65-90.9 33.46-144.7C401.8 87.79 326.8 13.32 235.2 1.723C99.01-15.51-15.51 99.01 1.724 235.2c11.6 91.64 86.08 166.7 177.6 178.9c53.8 7.189 104.3-6.236 144.7-33.46l119.7 119.7c15.62 15.62 40.95 15.62 56.57 0C515.9 484.7 515.9 459.3 500.3 443.7zM79.1 208c0-70.58 57.42-128 128-128s128 57.42 128 128c0 70.58-57.42 128-128 128S79.1 278.6 79.1 208z" />
                </svg>
                <input type="text" placeholder="Buscar..." name="search" class="search"></label>

        </div>

        <!--    CARDS    -->
        <div class="cont_wrapper">

            <?php
            foreach ($dataStock as $dS) {

                $v = $variedad->getVariedad(intval($dS["idVariedad"]));
                $stockLim = $stock->getOneStock($v["idVariedad"]);
                $nom  = $variedad::limpiarNombre($v["nombre"]);
                $precio = intval($v["precio"] - ($v["precio"] * ($v["descuento"] / 100)));
                $unidad = "KG";
                if ($v["unidad"]) {
                    $unidad = "U";
                }

                echo '            
            <div class="card" id="c' . $v["idVariedad"] . '">
            <img class="loadlater" data-src="url(' . $v["imgUrl"] . ')">
            <div class="cont_card">
                <div class="card_title">
                    <h2 class="card_title_name">
                       ' . $nom . '
                    </h2>
                    <span><p class="card_precio">' . $precio . ' $</p> <p class="card_unidad">/ ' . $unidad . '</p></span>
                </div>
                
                <div class="card_cant">
                <div class="card_cant--inputs"><input class="cant--inputs_prev" type="button" value="-" onclick="decrease(c' . $v["idVariedad"] . ', ' . $precio . ')"><input type="number" class="cant_cat cant--inputs_field" value="0" onchange="cantidad(c' . $v["idVariedad"] . ', ' . $precio . ', ' . $stockLim . ')"><input class="cant--inputs_next" type="button" value="+" onclick="increase(c' . $v["idVariedad"] . ', ' . $precio . ', ' . $stockLim . ')"></div>    
                <label>
                    <input type="button">
                    <svg class="button_card" card-id="c' . $v["idVariedad"] . '" card-nom="'  . $nom . '"
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--! Font Awesome Pro 6.1.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M96 0C107.5 0 117.4 8.19 119.6 19.51L121.1 32H541.8C562.1 32 578.3 52.25 572.6 72.66L518.6 264.7C514.7 278.5 502.1 288 487.8 288H170.7L179.9 336H488C501.3 336 512 346.7 512 360C512 373.3 501.3 384 488 384H159.1C148.5 384 138.6 375.8 136.4 364.5L76.14 48H24C10.75 48 0 37.25 0 24C0 10.75 10.75 0 24 0H96zM128 464C128 437.5 149.5 416 176 416C202.5 416 224 437.5 224 464C224 490.5 202.5 512 176 512C149.5 512 128 490.5 128 464zM512 464C512 490.5 490.5 512 464 512C437.5 512 416 490.5 416 464C416 437.5 437.5 416 464 416C490.5 416 512 437.5 512 464z"/></svg>
                </label>
                </div>

            </div>
        </div>';
            }
            ?>


        </div>
    </div>
</div>

<div class="bottomArea">
    <!-- SHOPPING CART -->
    <div class="shoppingCart">
        <div class="shoppingCart-content">
            <!--  LISTAR PRODUCTOS -->
        </div>

    </div>
    <button class="showCart">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
            <path d="M96 0C107.5 0 117.4 8.19 119.6 19.51L121.1 32H541.8C562.1 32 578.3 52.25 572.6 72.66L518.6 264.7C514.7 278.5 502.1 288 487.8 288H170.7L179.9 336H488C501.3 336 512 346.7 512 360C512 373.3 501.3 384 488 384H159.1C148.5 384 138.6 375.8 136.4 364.5L76.14 48H24C10.75 48 0 37.25 0 24C0 10.75 10.75 0 24 0H96zM128 464C128 437.5 149.5 416 176 416C202.5 416 224 437.5 224 464C224 490.5 202.5 512 176 512C149.5 512 128 490.5 128 464zM512 464C512 490.5 490.5 512 464 512C437.5 512 416 490.5 416 464C416 437.5 437.5 416 464 416C490.5 416 512 437.5 512 464z" />
        </svg>
    </button>



</div>
<dialog class="modal confirmarCompra">

    <svg class="close_modal clickable" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
        <path d="M310.6 361.4c12.5 12.5 12.5 32.75 0 45.25C304.4 412.9 296.2 416 288 416s-16.38-3.125-22.62-9.375L160 301.3L54.63 406.6C48.38 412.9 40.19 416 32 416S15.63 412.9 9.375 406.6c-12.5-12.5-12.5-32.75 0-45.25l105.4-105.4L9.375 150.6c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0L160 210.8l105.4-105.4c12.5-12.5 32.75-12.5 45.25 0s12.5 32.75 0 45.25l-105.4 105.4L310.6 361.4z" />
    </svg>
    <div class="modal-content">
        <!-- LISTAR PRODUCTOS -->
    </div>
    <form action="/Proyecto-Omnitus/php/POST/hacerPedido.php" method="post">
        <label>¿Dentro de que horas puede recibir los productos?
            <select class="formCombo" name="horaPref">
                <option value="08:00 12:00">8 a 12</option>
                <option value="12:00 16:00">12 a 16</option>
                <option value="16:00 20:00">16 a 20</option>
            </select>
        </label>
        <select class="formCombo" name="metodoPago">
            <option value="0">Tarjeta de Crédito</option>
            <option value="1">Tarjeta de Débito</option>
            <option value="2">Efectivo</option>
        </select>
        <input type="submit" class="confirmarCompra-btn formBtn clickable" value="Hacer Pedido" name="hacerPedido">
    </form>
</dialog>
<script src="/Proyecto-Omnitus/js/catalogo.js"></script>
<script src="/Proyecto-Omnitus/js/script.js"></script>
<script src="/Proyecto-Omnitus/js/LogUsu.js"></script>
<script src="/Proyecto-Omnitus/js/search.js"></script>