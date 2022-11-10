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

    public function listarHuertas()
    {
        $sql = "SELECT * FROM Huerta";
        $consulta = $this->db->query($sql);

        while ($filas = $consulta->fetch_assoc()) {
            $this->cWeb[] = $filas;
        }
        return $this->cWeb;
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
