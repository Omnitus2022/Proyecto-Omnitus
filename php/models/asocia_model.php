<?php
class asocia_model
{
    private $db;
    private $asocia;

    public function __construct()
    {
        $this->db = db::connect();
        $this->asocia = array();
    }
    public function getAsocia()
    {
        $sql = "SELECT * FROM Asocia";
        $consulta = $this->db->query($sql);

        while ($filas = $consulta->fetch_assoc()) {
            $this->asocia[] = $filas;
        }
        return $this->asocia;
    }
    public function insertAsocia($idH, $idA)
    {
        $sql = "INSERT INTO `Asocia` (`idHortaliza`, `idAsociada`) VALUES ($idH, $idA)";
        if ($this->db->query($sql)) {
            return true;
        } else {
            return false;
        }
    }
}
