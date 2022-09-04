<?php
class stock_model{
    private $db;
    private $stock;

    public function __construct(){
        $this->db = db::connect();
        $this->stock = array();
    }
    public function getStock(){
        $sql = "SELECT * FROM Stock";
        $consulta = $this->db->query($sql);

        while($filas=$consulta->fetch_assoc()){
            $this->stock[]=$filas;
        }
        return $this->stock;
    }
}