<?php include($PATH.'/php/header.php') ;

if(empty($_SESSION['usu'])){
    
    echo "<script>window.location='/Proyecto-Omnitus/index.php';</script>";
    
}else{
    
    if($_SESSION['esInformatico']){
        echo "<script>alert(\"No tienes los permisos para ver esta página.\");window.location='/Proyecto-Omnitus/php/views/redirect.php';</script>";
    }else{
        echo $_SESSION['usuario'];
    }
    
}
?> 


<div class="main-wrapper" style="transform: scale(1); margin-top: 44.8px;">
    <div class="main-wrapper_container">
        <div class="container__content gestionHortalizas">
            <section>
          
        
            <form action="/Proyecto-Omnitus/php/POST/gestionHortalizas.php" method="post">
            <h2>Hortaliza</h2>  
                <input class="inputC" placeholder="Nombre*" type="text" name="nom">
                
                <input class="inputC" placeholder="Tiempo de Germinación (Días)" type="text" name="tG">
                <input class="inputC" placeholder="Tiempo de Cosecha (Días)" type="text" name="tC">
                <input class="inputC" placeholder="Inicio época de siembra (Mes)" type="text" name="mI">
                <input class="inputC" placeholder="Fin época de siembra (Mes)" type="text" name="mF">
                <label>¿Por unidad? <input type="checkbox" name="uni"></label>

                <input class="formBtn clickable" type="submit" value="Enviar" name="hortaliza">

            </form>
           
            
            <form action="/Proyecto-Omnitus/php/POST/gestionHortalizas.php" method="post">
            <h2>Variedad</h2>
                <select class="formCombo" name="idH">
                    <option value="">- - - Id de la Hortaliza - - -</option>
                <?php 
                    $hort = $hortaliza->listarHortalizas();
                    
                    foreach ($hort as $h) {
                        echo '<option value="'.$h["idHortaliza"].'">'.$h["idHortaliza"].' ('.$h["nombre"].')</option>';
                    }
                    ?>
                </select>

                <input class="inputC" placeholder="Nombre" type="text" name="nV">
                <input class="inputC" placeholder="Precio*" type="text" name="p">
                <input class="inputC" placeholder="Link de la imagen" type="text" name="img">
                <input class="formBtn clickable" type="submit" value="Enviar" name="variedad">

            </form>
            </section>

        </div>
    </div>
</div>
<script src="/Proyecto-Omnitus/js/script.js"></script>
<script src="/Proyecto-Omnitus/js/LogUsu.js"></script>
<?php include($PATH.'/php/footer.php') ?> 