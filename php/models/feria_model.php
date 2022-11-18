<?php
class feria_model
{
    private $db;
    private $feria;

    public function __construct()
    {
        $this->db = db::connect();
        $this->feria = array();
    }
    public function getFeria()
    {
        $sql = "SELECT * FROM Feria";
        $consulta = $this->db->query($sql);

        while ($filas = $consulta->fetch_assoc()) {
            $this->feria[] = $filas;
        }
        return $this->feria;
    }
    public function insertFeria($nom, $c)
    {
        $sql = "INSERT INTO `Feria` (`idFeria`, `nombre`, `calle`) VALUES (NULL, '$nom', '$c')";
        if ($this->db->query($sql)) {
            return true;
        } else {
            return false;
        }
    }
}
