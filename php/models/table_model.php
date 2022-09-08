<?php
class table_model{
    private $db;
    private $table;

    public function __construct(){
        $this->db = db::connect();
        $this->table = array();
    }
    public function getTable($tN){
        echo $tN;
        $sql = "SELECT * FROM $tN";
        $consulta = $this->db->query($sql);

        while($filas=$consulta->fetch_assoc()){
            $this->table[]=$filas;
        }
        return $this->table;
    }
}