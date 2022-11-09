<?php
class stock_model
{
    private $db;
    private $stock;

    public function __construct()
    {
        $this->db = db::connect();
        $this->stock = array();
    }
    public static function getOneStock($id)
    {
        $db = db::connect();
        $sql = "SELECT volumen FROM Stock WHERE idVariedad = $id";
        $consulta = $db->query($sql);
        while ($filas = $consulta->fetch_assoc()) {
            $stock[] = $filas;
        }
        return $stock[0]["volumen"];
    }

    public function getStock()
    {
        $sql = "SELECT * FROM Stock";
        $consulta = $this->db->query($sql);

        while ($filas = $consulta->fetch_assoc()) {
            $this->stock[] = $filas;
        }
        return $this->stock;
    }
    public function insertStock($idV, $v)
    {
        $sql = "INSERT INTO `Stock` (`idVariedad`, `volumen`) VALUES ($idV, $v)";
        if ($this->db->query($sql)) {
            return true;
        } else {
            return false;
        }
    }
}
