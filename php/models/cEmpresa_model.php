<?php
class cEmpresa_model
{
    private $db;
    private $cEmpresa;

    public function __construct()
    {
        $this->db = db::connect();
        $this->cEmpresa = array();
    }
    public static function actualizarPerfil($idCliente, $rut, $nombreEmpresa)
    {
        $db = db::connect();
        $sql = "UPDATE cEmpresa 
        SET 
            RUT = '$rut',
            nombreEmpresa = '$nombreEmpresa'
        WHERE
            idCliente = '$idCliente'";
        $db->query($sql);
    }

    public static function getOneCEmpresa($id)
    {
        $db = db::connect();
        $sql = "SELECT * FROM cEmpresa WHERE idCliente = $id";
        $consulta = $db->query($sql);

        while ($filas = $consulta->fetch_assoc()) {
            $cEmpresa[] = $filas;
        }
        return $cEmpresa[0];
    }
    public function getCEmpresa($idC)
    {
        $sql = "SELECT * FROM cEmpresa WHERE idCliente = $idC";
        $consulta = $this->db->query($sql);

        while ($filas = $consulta->fetch_assoc()) {
            $this->cEmpresa[] = $filas;
        }
        return $this->cEmpresa;
    }
    public function insertCEmpresa($idC, $RUT, $nom)
    {
        $sql = "INSERT INTO `cEmpresa` (`idCliente`, `RUT`, `nombreEmpresa`) VALUES ('$idC', '$RUT', '$nom') ";
        if ($this->db->query($sql)) {
            return true;
        } else {
            return false;
        }
    }
}
