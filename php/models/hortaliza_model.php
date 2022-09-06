<?php
class hortaliza_model{
    private $db;
    private $hortaliza;

    public function __construct(){
        $this->db = db::connect();
        $this->hortaliza = array();
    }
    public function getHortaliza($id){
        $sql = "SELECT * FROM Hortaliza WHERE idHortaliza = $id";
        $consulta = $this->db->query($sql);

        while($filas=$consulta->fetch_assoc()){
            $this->hortaliza[]=$filas;
        }
        return $this->hortaliza[$id-1];
    }
    public function insertHortaliza($n, $u, $tG, $tC, $mI, $mF){
			
        $sql = "INSERT INTO `Hortaliza` (`idHortaliza`, `nombre`, `unidad`, `tGerminacion`, `tCosecha`, `mesInicio`, `mesFin`) VALUES (NULL, $n, $u, $tG, $tC, $mI, $mF)";
        if($this->db->query($sql)){
            return true;
        }else{
            return false;
        }
        
    }
}