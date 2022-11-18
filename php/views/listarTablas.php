<?php
include($PATH . 'php/header.php');

if (empty($_SESSION['usu'])) {

    echo "<script>window.location='/Proyecto-Omnitus/index.php';</script>";
} else {

    if (!$_SESSION['esInformatico']) {
        echo "<script>alert(\"No tienes los permisos para ver esta página.\");window.location='/Proyecto-Omnitus/php/views/redirect.php';</script>";
    }
}
?>
<div class="main-wrapper" style="transform: scale(1); padding-top: 44.8px;">
    <div class="main-wrapper_container">
        <div class="container__content">

            <?php
            $tNames = ["Usuario", "Cliente", "Feria", "Hortaliza", "Huerta", "Pedido", "Stock", "Traslado", "Variedad", "cEmpresa", "cWeb", "estadoPedido", "feriaVende", "huertaCosecha", "huertaCultivo", "infoVariedad", "listaClientes", "pedidoTraslado", "pedidoVariedad","productosPedido","totalCooperativa"];
            foreach ($tNames as $tName) {
                $table = new table_model();
                $t = $table->getTable($tName);
                $tempT = $t[0];
                $columns = [];
                foreach ($tempT as $tVal) {

                    array_push($columns, array_search($tVal, $tempT));
                    array_shift($tempT);
                }

                echo '<table class="table">';
                echo '<tr>';
                foreach ($columns as $c) {
                    echo '<th>' . $c . '</th>';
                }
                echo '</tr>';
                foreach ($t as $tRow) {

                    echo '<tr>';
                    foreach ($tRow as $tVal) {
                        echo '<td>' . $tVal . '</td>';
                    }
                    echo '</tr>';
                }
                echo '</table>';
            }
            ?>

        </div>
    </div>
</div>

<script src="/Proyecto-Omnitus/js/script.js"></script>
<script src="/Proyecto-Omnitus/js/LogUsu.js"></script>