<?php include($PATH.'/php/header.php') ;
$cCount = 0;
if(empty($_SESSION['usu'])){
    
    echo "<script>window.location='/Proyecto-Omnitus/index.php';</script>";
    
}else{
    
    if(!$_SESSION['esInformatico']){
        echo "<script>alert(\"No tienes los permisos para ver esta página.\");window.location='/Proyecto-Omnitus/php/views/redirect.php';</script>";
    }
    
}
?> 


<div class="main-wrapper" style="transform: scale(1); padding-top: 44.8px;">
    <div class="main-wrapper_container">
        <div class="container__content gestionForm">
            <section>
            <form action="/Proyecto-Omnitus/php/POST/gestionUsuarios.php" method="post">
            <h2>Usuario</h2>  
                <select class="formCombo" name="idC">
                        <option value="">- - - Id del Cliente - - -</option>
                    <?php 
                        $cli = $cliente->listarClientes();
                        
                        foreach ($cli as $c) {
                            $cliWeb = $cWeb->getCWeb($c["idCliente"])[$cCount];
                            $cCount++;
                            
                            echo '<option value='.$c["idCliente"].'>'.$c["idCliente"].' - '.$cliWeb["nombre"].'</option>';
                        }
                        ?>

                </select>

                <input class="inputC" placeholder="Nombre*" type="text" name="nomUsu">
                <input class="inputC" placeholder="Contraseña*" type="password" name="pwdUsu">
                <label>¿Es Empresa? <input type="checkbox" name="esEmp"></label>
                <label>¿Es Directivo? <input type="checkbox" name="esDir"></label>
                <label>¿Es Administrador? <input type="checkbox" name="esAdm"></label>
                <label>¿Es Huerta? <input type="checkbox" name="esHue"></label>
                <label>¿Es Repartidor? <input type="checkbox" name="esRep"></label>
                <label>¿Es Informático? <input type="checkbox" name="esInf"></label>

                <input class="formBtn clickable" type="submit" value="Enviar" name="usuario">

            </form>

            </section>
        </div>
    </div>
</div>
<script src="/Proyecto-Omnitus/js/script.js"></script>
<script src="/Proyecto-Omnitus/js/LogUsu.js"></script>
<?php include($PATH.'/php/footer.php') ?> 