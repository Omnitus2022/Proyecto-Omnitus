<?php
class cliente_model
{
    private $db;
    private $cliente;

    public function __construct()
    {
        $this->db = db::connect();
        $this->cliente = array();
    }
    public function getCliente()
    {
        $sql = "SELECT * FROM Cliente";
        $consulta = $this->db->query($sql);

        while ($filas = $consulta->fetch_assoc()) {
            $this->cliente[] = $filas;
        }
        return $this->cliente;
    }
    public static function listarClientes()
    {
        $db = db::connect();
        $sql = "SELECT * FROM listaClientes";
        $consulta = $db->query($sql);

        while ($filas = $consulta->fetch_assoc()) {
            $cliente[] = $filas;
        }
        return $cliente;
    }
    public static function getOneCliente($id)
    {
        $db = db::connect();
        $sql = "SELECT * FROM Cliente WHERE idCliente = '$id'";
        $consulta = $db->query($sql);

        while ($filas = $consulta->fetch_assoc()) {
            $cliente[] = $filas;
        }
        return $cliente[0];
    }
    public function insertCliente($m, $nP, $c, $esq)
    {
        $sql = "INSERT INTO `Cliente` (`idCliente`, `email`, `numeroPuerta`, `calle`, `esquina`) VALUES (NULL, '$m', $nP, '$c', '$esq')";
        if ($this->db->query($sql)) {
            return true;
        } else {
            return false;
        }
    }
    public static function esEmpresa($id)
    {
        $db = db::connect();
        $sql = "SELECT idCliente FROM cEmpresa WHERE idCliente = '$id'";
        $consulta = $db->query($sql);

        while ($filas = $consulta->fetch_assoc()) {
            $cliente[] = $filas;
        }
        return $cliente[0];
    }
}
