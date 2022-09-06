<?php include($PATH.'/php/header.php') ;

?> 
<div class="main-wrapper" style="transform: scale(1); margin-top: 44.8px;">
    <div class="main-wrapper_container">
        Hortaliza
        <form action="/Proyecto-Omnitus/php/POST/autogestion.php" method="post">
            <input class="inputC" placeholder="Nombre" type="text" name="nom">
            ¿Por unidad?<input type="radio" name="uni">
            <input class="inputC" placeholder="Tiempo de Germinación (Días)" type="text" name="tG">
            <input class="inputC" placeholder="Tiempo de Cosecha (Días)" type="text" name="tC">
            <input class="inputC" placeholder="Inicio época de siembra (Mes)" type="text" name="mI">
            <input class="inputC" placeholder="Fin época de siembra (Mes)" type="text" name="mF">
            <input type="submit" value="Enviar" name="hortaliza">

        </form>

        Variedad
        <form action="/Proyecto-Omnitus/php/POST/autogestion.php" method="post">
            <select name="idH">
                <option value=""></option>
            <?php 
                $hort = $hortaliza->listarHortalizas();
                
                
                foreach ($hort as $h) {
                    echo '<option value="'.$h["idHortaliza"].'">'.$h["idHortaliza"].' ('.$h["nombre"].')</option>';
                }
                ?>
            </select>

            <input class="inputC" placeholder="" type="text" name="nV">
            <input class="inputC" placeholder="" type="text" name="p">
            <input class="inputC" placeholder="" type="text" name="img">
            <input type="submit" value="Enviar" name="variedad">

        </form>
    </div>
</div>
<script src="/Proyecto-Omnitus/js/script.js"></script>
<script src="/Proyecto-Omnitus/js/LogUsu.js"></script>
<?php include($PATH.'/php/footer.php') ?> 