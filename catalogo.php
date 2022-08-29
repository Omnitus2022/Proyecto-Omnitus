<?php include('header.php') ?> 
<div class="main-wrapper" style="transform: scale(1); margin-top: 44.8px;">
    <div class="main-wrapper_container">
        <div class="front_page_cat">

            <h1 class="cat_title">Catálogo</h1>

            <i class="fa-solid fa-magnifying-glass" id="lupa"></i><input type="text" placeholder="Search..." name="search" class="search">

        </div>

        <!--    CARDS    -->
        <div class="cont_wrapper">


            <div class="card">
                <div class="cont_card">
                    <div class="card_title">
                        <h2 class="card_title_name">
                           Something 
                        </h2>
                        <p class="card_precio">US$444</p> 
                    </div>
                    
                    <div class="card_cant">
                    <div class="card_cant--inputs"><input class="cant--inputs_prev" type="button" value="-"><input type="number" class="cant_cat cant--inputs_field" value="0"><input class="cant--inputs_next" type="button" value="+"></div>    
                    <label>
                        <input type="button">
                        <svg class="button_card" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--! Font Awesome Pro 6.1.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M96 0C107.5 0 117.4 8.19 119.6 19.51L121.1 32H541.8C562.1 32 578.3 52.25 572.6 72.66L518.6 264.7C514.7 278.5 502.1 288 487.8 288H170.7L179.9 336H488C501.3 336 512 346.7 512 360C512 373.3 501.3 384 488 384H159.1C148.5 384 138.6 375.8 136.4 364.5L76.14 48H24C10.75 48 0 37.25 0 24C0 10.75 10.75 0 24 0H96zM128 464C128 437.5 149.5 416 176 416C202.5 416 224 437.5 224 464C224 490.5 202.5 512 176 512C149.5 512 128 490.5 128 464zM512 464C512 490.5 490.5 512 464 512C437.5 512 416 490.5 416 464C416 437.5 437.5 416 464 416C490.5 416 512 437.5 512 464z"/></svg>
                    </label>
                    </div>
   
                </div>
            </div>



        </div>
    </div>
</div>


<script src="js/script.js"></script>
<script src="js/navbar.js"></script>
<script src="js/search.js"></script>
<?php include('footer.php') ?>