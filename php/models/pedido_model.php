<?php
class pedido_model
{
    private $db;
    private $pedido;

    public function __construct()
    {
        $this->db = db::connect();
        $this->pedido = array();
    }
    public function getPedido()
    {
        $sql = "SELECT * FROM Pedido";
        $consulta = $this->db->query($sql);

        while ($filas = $consulta->fetch_assoc()) {
            $this->pedido[] = $filas;
        }
        return $this->pedido;
    }
    public static function getOnePedido($nP)
    {
        $db = db::connect();
        $sql = "SELECT * FROM Pedido WHERE numPedido = '$nP'";
        $consulta = $db->query($sql);

        while ($filas = $consulta->fetch_assoc()) {
            $pedido[] = $filas;
        }
        return $pedido[0];
    }
    public static function entregar($numPedido, $recibidor)
    {
        $db = db::connect();
        $fechaActual = date('Y-m-d');


        $sql = "UPDATE Pedido 
        SET 
            fechaEntrega = '$fechaActual',
            recibidor = '$recibidor'
        WHERE
            numPedido = '$numPedido'";
        $db->query($sql);
        $sql = "UPDATE estadosPedido 
        SET 
            fechaFin = '$fechaActual'
        WHERE
            numPedido = '$numPedido'
            AND
            estado = 'Ruta'";
        $db->query($sql);
        $sql = "INSERT INTO `estadosPedido` (`estado`, `numPedido`, `fechaInicio`,`fechaFin`) VALUES ('Entregado', '$numPedido', '$fechaActual','$fechaActual')";
        $db->query($sql);
        // VERIFICAR SI ES EL ÚLTIMO PEDIDO A ENTREGAR EN EL TRASLADO

        // vvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvv

        // SELECCIONA LOS PEDIDOS ASOCIADOS AL TRASLADO QUE NO SE HAN ENTREGADO
        $sql = "SELECT * FROM pedidoTraslado, estadosPedido WHERE pedidoTraslado.numPedido = estadosPedido.numPedido AND ISNULL(fechaFin)";

        $query = $db->query($sql);
        while ($filas = $query->fetch_assoc()) {
            $traslado[] = $filas;
        }
        // SI NO SE ENCONTRARON PEDIDOS POR ENTREGAR EN EL TRASLADO
        if (is_null($traslado)) {

            //SELECCIONA EL ID DEL TRASLADO ASOCIADO AL PEDIDO

            $fetchIdTraslado = $db->query("SELECT idTraslado FROM pedidoTraslado WHERE numPedido = '$numPedido'");
            while ($filas = $fetchIdTraslado->fetch_assoc()) {
                $traslado[] = $filas;
            }
            $idTraslado = $traslado[0]["idTraslado"];

            //ACTUALIZA EL ESTADO DEL TRASLADO A "Finalizado"
            $sql = "UPDATE Traslado 
            SET 
                estadoTraslado = 'Finalizado'
            WHERE
                idTraslado = '$idTraslado'";
            $db->query($sql);
        }
    }
    public static function aprobar($numPedido)
    {
        $db = db::connect();
        $fechaActual = date('Y-m-d');
        $sql = "UPDATE estadosPedido 
        SET 
            fechaFin = '$fechaActual'
        WHERE
            numPedido = '$numPedido'
            AND
            estado = 'Pendiente'";
        $db->query($sql);
        $sql = "INSERT INTO `estadosPedido` (`estado`, `numPedido`, `fechaInicio`) VALUES ('Armado', '$numPedido', '$fechaActual')";
        $db->query($sql);
    }
    public static function pendientes()
    {
        $db = db::connect();
        $sql = "SELECT numPedido FROM estadosPedido WHERE estado = 'Pendiente' AND ISNULL(fechaFin)";
        $consulta = $db->query($sql);

        while ($filas = $consulta->fetch_assoc()) {
            $pedido[] = $filas;
        }
        return $pedido;
    }
    public static function listarPedidosCliente($idCliente)
    {
        $db = db::connect();
        $sql = "SELECT * FROM Pedido WHERE idCliente = '$idCliente'";
        $consulta = $db->query($sql);

        while ($filas = $consulta->fetch_assoc()) {
            $pedido[] = $filas;
        }
        return $pedido;
    }
    public static function listarPedidosSinTraslasdo()
    {
        $db = db::connect();
        $sql = "SELECT * FROM Pedido, estadosPedido WHERE Pedido.numPedido NOT IN(SELECT numPedido FROM pedidoTraslado) AND estadosPedido.estado = 'Armado' AND Pedido.numPedido = estadosPedido.numPedido ";
        $consulta = $db->query($sql);

        while ($filas = $consulta->fetch_assoc()) {
            $pedido[] = $filas;
        }
        return $pedido;
    }
    public static function ultimoEstado($numPedido)
    {
        $db = db::connect();
        $sql = "SELECT estado FROM estadosPedido WHERE numPedido = '$numPedido' AND ISNULL(fechaFin)";
        $consulta = $db->query($sql);

        while ($filas = $consulta->fetch_assoc()) {
            $pedido[] = $filas;
        }
        if (!is_null($pedido)) {
            return $pedido[0]["estado"];
        } else {
            return 'Entregado';
        }
    }
    public static function getRepartidor($numPedido)
    {
        $db = db::connect();
        $sql = "SELECT repartidor FROM Traslado, pedidoTraslado WHERE numPedido = '$numPedido' AND Traslado.idTraslado = pedidoTraslado.idTraslado";
        $consulta = $db->query($sql);

        while ($filas = $consulta->fetch_assoc()) {
            $pedido[] = $filas;
        }
        return $pedido[0]["repartidor"];
    }
    public static function ruta($numPedido)
    {
        $db = db::connect();
        $fechaActual = date('Y-m-d');
        $sql = "UPDATE estadosPedido 
        SET 
            fechaFin = '$fechaActual'
        WHERE
            numPedido = '$numPedido'
            AND
            estado = 'Armado'";
        $db->query($sql);
        $sql = "INSERT INTO `estadosPedido` (`estado`, `numPedido`, `fechaInicio`) VALUES ('Ruta', '$numPedido', '$fechaActual')";

        $db->query($sql);
    }
    public static function listarPedidosRepartidor($nom)
    {
        $db = db::connect();
        $sql = "SELECT pedidoTraslado.numPedido FROM Traslado, pedidoTraslado, estadosPedido WHERE repartidor = '$nom' AND Traslado.idTraslado = pedidoTraslado.idTraslado AND pedidoTraslado.numPedido = estadosPedido.numPedido AND ISNULL(fechaFin)";
        $consulta = $db->query($sql);

        while ($filas = $consulta->fetch_assoc()) {
            $pedido[] = $filas;
        }
        return $pedido;
    }

    public static function listarEnRuta($nom)
    {
        $db = db::connect();
        $sql = "SELECT pedidoTraslado.numPedido FROM Traslado, pedidoTraslado, estadosPedido WHERE repartidor = '$nom' AND Traslado.idTraslado = pedidoTraslado.idTraslado AND pedidoTraslado.numPedido = estadosPedido.numPedido AND ISNULL(fechaFin) AND estadosPedido.estado = 'Ruta'";
        $consulta = $db->query($sql);

        while ($filas = $consulta->fetch_assoc()) {
            $pedido[] = $filas;
        }
        return $pedido;
    }

    public static function listarVariedades($nP)
    {
        $db = db::connect();
        $sql = "SELECT * FROM pedidoVariedad WHERE numPedido = '$nP'";
        $consulta = $db->query($sql);

        while ($filas = $consulta->fetch_assoc()) {
            $pedido[] = $filas;
        }
        return $pedido;
    }

    public static function insertVariedad($numP, $idV, $cant)
    {
        $db = db::connect();
        $sql = "INSERT INTO `pedidoVariedad` (`idVariedad`, `numPedido`, `cantidad`) VALUES ('$idV', '$numP', '$cant') ";
        $db->query($sql);
    }
    public static function insertPedido($numP, $idC, $rec, $imp, $mP, $fE, $hPrefI, $hPrefF,  $recib)
    {
        $db = db::connect();
        $fP = date('Y-m-d');
        if ($mP == 0) {
            $mP = "Tarjeta de Crédito";
        } elseif ($mP == 1) {
            $mP = "Tarjeta de Débito";
        } else {
            $mP = "Efectivo";
        }

        if ($rec == "") {
            $rec = "NULL";
        }
        if ($fE == "") {
            $fE = "NULL";
        }
        if ($hPrefI == "") {
            $hPrefI = "NULL";
        } else {
            $hPrefI = "'$hPrefI'";
        }
        if ($hPrefF == "") {
            $hPrefF = "NULL";
        } else {
            $hPrefF = "'$hPrefF'";
        }
        if ($recib == "") {
            $recib = "NULL";
        } else {
            $recib = "'$recib'";
        }
        $sql = "INSERT INTO `Pedido` (`numPedido`, `idCliente`, `reclamo`, `importe`, `metodoPago`, `fechaPedido`, `fechaEntrega`, `horaPrefInicio`, `horaPrefFinal`, `recibidor`) VALUES ('$numP', '$idC', $rec, $imp, '$mP', '$fP', $fE, $hPrefI, $hPrefF, $recib) ";
        $db->query($sql);
        $sql = "INSERT INTO `estadosPedido` (`numPedido`,`fechaInicio`) VALUES ('$numP', '$fP')";
        $db->query($sql);
    }
}
