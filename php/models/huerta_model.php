<?php
class huerta_model
{
    private $db;
    private $huerta;

    public function __construct()
    {
        $this->db = db::connect();
        $this->huerta = array();
    }

    public static function listarHuertas()
    {
        $db = db::connect();
        $sql = "SELECT * FROM Huerta";
        $consulta = $db->query($sql);

        while ($filas = $consulta->fetch_assoc()) {
            $huerta[] = $filas;
        }
        return $huerta;
    }

    public static function updateHuerta($idH, $nH, $tH)
    {
        $db = db::connect();
        $sql = "UPDATE Huerta 
        SET 
            nombreHuerta = '$nH',
            tamanoHuerta = '$tH'
        WHERE
            idHuerta = '$idH'";
        $consulta = $db->query($sql);

        while ($filas = $consulta->fetch_assoc()) {
            $huerta[] = $filas;
        }
        return $huerta;
    }

    public function getHuerta()
    {
        $sql = "SELECT * FROM Huerta";
        $consulta = $this->db->query($sql);

        while ($filas = $consulta->fetch_assoc()) {
            $this->huerta[] = $filas;
        }
        return $this->huerta;
    }
    public function insertHuerta($nH, $tH)
    {
        $sql = "INSERT INTO Huerta (`idHuerta`, `nombreHuerta`, `tamanoHuerta`) VALUES (NULL, '$nH', '$tH') ";

        if ($this->db->query($sql)) {
            return true;
        } else {
            return false;
        }
    }
}
