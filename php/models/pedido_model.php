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
    public function insertPedido($numP, $idC, $rec, $imp, $mP, $fP, $fE, $hPrefI, $hPrefF,  $recib)
    {
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
        if ($this->db->query($sql)) {
            return true;
        } else {
            return false;
        }
    }
}
