
<?php

 include($PATH.'/php/header.php');
 $i=0;
 ?> 
 
<div class="main-wrapper" style="transform: scale(1); padding-top: 44.8px;">
    <div class="main-wrapper_container">

        <div class="front_page_cat">

            <h1 class="cat_title">Catálogo</h1>
    <label class="searchbar">
        <svg class="magnifier"
            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.1.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M500.3 443.7l-119.7-119.7c27.22-40.41 40.65-90.9 33.46-144.7C401.8 87.79 326.8 13.32 235.2 1.723C99.01-15.51-15.51 99.01 1.724 235.2c11.6 91.64 86.08 166.7 177.6 178.9c53.8 7.189 104.3-6.236 144.7-33.46l119.7 119.7c15.62 15.62 40.95 15.62 56.57 0C515.9 484.7 515.9 459.3 500.3 443.7zM79.1 208c0-70.58 57.42-128 128-128s128 57.42 128 128c0 70.58-57.42 128-128 128S79.1 278.6 79.1 208z"/></svg>
        <input type="text" placeholder="Buscar..." name="search" class="search"></label>

        </div>

        <!--    CARDS    -->
        <div class="cont_wrapper">

        <?php 
        foreach ($dataStock as $dS) {
            
            $v = $variedad->getVariedad(intval($dS["idVariedad"]))[$i];
            $h = $hortaliza->getHortaliza(intval($v["idHortaliza"]))[$i];
            $i++;
            $unidad = "KG";
            if ($h["unidad"]) {
                $unidad = "U";
            }
            
            echo '            
            <div class="card">
            <img style="background-image:url('.$v["imgUrl"].')">
            <div class="cont_card">
                <div class="card_title">
                    <h2 class="card_title_name">
                       '.$h["nombre"].' '.$v["nombreVariedad"].'
                    </h2>
                    <span><p class="card_precio">'.$v["precio"].' $</p> <p>/ '.$unidad.'</p></span>
                </div>
                
                <div class="card_cant">
                <div class="card_cant--inputs"><input class="cant--inputs_prev" type="button" value="-"><input type="number" class="cant_cat cant--inputs_field" value="0"><input class="cant--inputs_next" type="button" value="+"></div>    
                <label>
                    <input type="button">
                    <svg class="button_card" 
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


<script src="/Proyecto-Omnitus/js/script.js"></script>
<script src="/Proyecto-Omnitus/js/LogUsu.js"></script>
<script src="/Proyecto-Omnitus/js/search.js"></script>
<?php include($PATH.'/footer.php') ?>