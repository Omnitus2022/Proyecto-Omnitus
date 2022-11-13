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
    public static function getNombreCliente($idCliente)
    {
        $db = db::connect();
        $sql = "SELECT nombreCliente FROM listaClientes WHERE idCliente = idCliente";
        $consulta = $db->query($sql);

        while ($filas = $consulta->fetch_assoc()) {
            $cliente[] = $filas;
        }
        return $cliente[0]["nombreCliente"];
    }
    public static function actualizarPerfil($idCliente, $email, $calle, $puerta, $esq)
    {
        $db = db::connect();
        $sql = "UPDATE Cliente 
        SET 
            email = '$email',
            numeroPuerta = '$puerta',
            calle = '$calle',
            esquina = '$esq'
        WHERE
            idCliente = '$idCliente'";
        $db->query($sql);
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
}
