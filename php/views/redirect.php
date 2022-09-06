<?php
include($PATH.'php/header.php');
?>
<?php 

session_start();

if(empty($_SESSION['usuario'])){
    
    header('location:index.php');
    
}else{
    
    if($_SESSION['perfil']=='0'){
        echo "<script>alert(\"No tienes permisos de admin.\");window.location='pedidos.php';</script>";
    }else{
        echo $_SESSION['usuario'].", tu perfil es: ".$_SESSION['perfil'];
    }
    
}
?>

<div class="main-wrapper" style="transform: scale(1); margin-top: 44.8px;">
    <div class="main-wrapper_container">

    </div>
</div>

<script src="/Proyecto-Omnitus/js/script.js"></script>
<script src="/Proyecto-Omnitus/js/LogUsu.js"></script>
<?php
include($PATH.'php/footer.php');
?>