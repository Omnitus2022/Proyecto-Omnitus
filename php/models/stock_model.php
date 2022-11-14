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
    public static function bajarStock($idV, $vol, $max)
    {
        $db = db::connect();
        $calc = $max - $vol;
        if ($vol >= $max) {
            $sql = "DELETE FROM Stock WHERE idVariedad = $idV";
        } else {
            $sql = "UPDATE Stock 
            SET 
                volumen = '$calc'
            WHERE
                idVariedad = '$idV'";
        }
        $db->query($sql);
    }

    public static function sinStock()
    {
        $db = db::connect();
        $sql = "SELECT idVariedad, nombre FROM infoVariedad WHERE idVariedad NOT IN (SELECT idVariedad FROM Stock)";
        $consulta = $db->query($sql);
        while ($filas = $consulta->fetch_assoc()) {
            $variedad[] = $filas;
        }
        return $variedad;
    }
    public static function listarStock()
    {
        $db = db::connect();
        $sql = "SELECT Stock.idVariedad, infoVariedad.nombre, Stock.volumen FROM infoVariedad, Stock WHERE infoVariedad.idVariedad = Stock.idVariedad";
        $consulta = $db->query($sql);

        while ($filas = $consulta->fetch_assoc()) {
            $variedad[] = $filas;
        }
        return $variedad;
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
        $sql = "INSERT INTO `Stock` (`idVariedad`, `volumen`) VALUES ('$idV', '$v')";
        if ($this->db->query($sql)) {
            return true;
        } else {
            return false;
        }
    }
    public static function addStock($idV, $vol)
    {
        $db = db::connect();
        $sql = "UPDATE Stock 
            SET 
                volumen = volumen + '$vol'
            WHERE
                idVariedad = '$idV'";
        $db->query($sql);
    }
}
