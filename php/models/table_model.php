<?php
class table_model
{
    private $db;
    private $table;

    public function __construct()
    {
        $this->db = db::connect();
        $this->table = array();
    }
    public function getTable($tN)
    {
        echo $tN;
        $sql = "SELECT * FROM $tN";
        $consulta = $this->db->query($sql);

        while ($filas = $consulta->fetch_assoc()) {
            $this->table[] = $filas;
        }
        return $this->table;
    }
    public static function deleteValue($tN, $pK, $id)
    {
        $db = db::connect();
        $id = "'$id'";
        $sql = "DELETE FROM $tN WHERE $pK = $id";
        $consulta = $db->query($sql);
    }
}
