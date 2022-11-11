<?php
class variedad_model
{
    private $db;
    private $variedad;

    public function __construct()
    {
        $this->db = db::connect();
        $this->variedad = array();
    }
    public static function getVariedad($id)
    {
        $db = db::connect();
        $sql = "SELECT * FROM Variedad WHERE idVariedad = $id";
        $consulta = $db->query($sql);

        while ($filas = $consulta->fetch_assoc()) {
            $variedad[] = $filas;
        }
        return $variedad[0];
    }
    public function insertVariedad($idH, $nV, $p, $img)
    {
        if ($nV == "") {
            $nV = "NULL";
        } else {
            $nV = "'" . $nV . "'";
        }
        if ($img == "") {
            $img = "NULL";
        } else {
            $img = "'" . $img . "'";
        }
        $sql = "INSERT INTO `Variedad` (`idVariedad`, `idHortaliza`, `nombreVariedad`, `precio`, `imgUrl`) VALUES (NULL, $idH, $nV, $p, $img) ";

        if ($this->db->query($sql)) {
            return true;
        } else {
            return false;
        }
    }
    public function listarVariedades()
    {
        $sql = "SELECT * FROM Variedad";
        $consulta = $this->db->query($sql);

        while ($filas = $consulta->fetch_assoc()) {
            $this->variedad[] = $filas;
        }
        return $this->variedad;
    }
}
