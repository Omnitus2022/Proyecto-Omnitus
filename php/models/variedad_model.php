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
        return $this->variedad[$id-1];
    }
    public function insertVariedad($idH, $nV, $p, $img){
        $sql = "INSERT INTO `Variedad` (`idVariedad`, `idHortaliza`, `nombreVariedad`, `precio`, `imgUrl`) VALUES (NULL, $idH, $nV, $p, $img) ";
        if($this->db->query($sql)){
            return true;
        }else{
            return false;
        }
    }
}