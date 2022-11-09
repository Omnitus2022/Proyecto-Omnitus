<?php
class cWeb_model
{
    private $db;
    private $cWeb;

    public function __construct()
    {
        $this->db = db::connect();
        $this->cWeb = array();
    }


    public function getCWeb($idC)
    {
        $sql = "SELECT * FROM cWeb WHERE idCliente = $idC";
        $consulta = $this->db->query($sql);

        while ($filas = $consulta->fetch_assoc()) {
            $this->cWeb[] = $filas;
        }
        return $this->cWeb;
    }
    public function listarCWeb()
    {
        $sql = "SELECT * FROM cWeb";
        $consulta = $this->db->query($sql);

        while ($filas = $consulta->fetch_assoc()) {
            $this->cWeb[] = $filas;
        }
        return $this->cWeb;
    }
    public function insertCWeb($idC, $CI, $nom, $ape)
    {
        $sql = "INSERT INTO `cWeb` (`idCliente`, `CI`, `nombre`, `apellido`) VALUES ($idC, $CI, '$nom', '$ape')";
        if ($this->db->query($sql)) {
            return true;
        } else {
            return false;
        }
    }
    public static function getOneCWeb($id)
    {
        $db = db::connect();
        $sql = "SELECT * FROM cWeb WHERE idCliente = $id";
        $consulta = $db->query($sql);
        while ($filas = $consulta->fetch_assoc()) {
            $cWeb[] = $filas;
        }
        return $cWeb[0];
    }
}
