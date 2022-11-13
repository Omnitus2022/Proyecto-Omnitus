<?php
class traslado_model
{
    private $db;
    private $traslado;

    public function __construct()
    {
        $this->db = db::connect();
        $this->traslado = array();
    }
    public static function listarTraslados()
    {
        $db = db::connect();
        $sql = "SELECT * FROM Traslado";
        $consulta = $db->query($sql);

        while ($filas = $consulta->fetch_assoc()) {
            $traslado[] = $filas;
        }
        return $traslado;
    }
    public static function insertTraslado($repartidor)
    {
        $db = db::connect();
        $sql = "INSERT INTO Traslado (`repartidor`) VALUES ('$repartidor') ";
        if ($db->query($sql)) {
            return true;
        } else {
            return false;
        }
    }
    public static function asignarPedido($idTraslado, $numPedido)
    {
        $db = db::connect();
        $sql = "INSERT INTO pedidoTraslado (`idTraslado`,`numPedido`) VALUES ('$idTraslado', '$numPedido') ";
        if ($db->query($sql)) {
            return true;
        } else {
            return false;
        }
    }
}
