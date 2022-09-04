<?php
class variedad_model{
    private $db;
    private $variedad;

    public function __construct(){
        $this->db = db::connect();
        $this->variedad = array();
    }
    public function getVariedad($id){
        $sql = "SELECT * FROM Variedad WHERE idVariedad = $id";
        $consulta = $this->db->query($sql);

        while($filas=$consulta->fetch_assoc()){
            $this->variedad[]=$filas;
        }
        return $this->variedad[0];
    }
}