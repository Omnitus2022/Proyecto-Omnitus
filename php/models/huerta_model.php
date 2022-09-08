<?php
class huerta_model{
    private $db;
    private $huerta;

    public function __construct(){
        $this->db = db::connect();
        $this->huerta = array();
    }
    public function getHuerta(){
        $sql = "SELECT * FROM Huerta";
        $consulta = $this->db->query($sql);

        while($filas=$consulta->fetch_assoc()){
            $this->huerta[]=$filas;
        }
        return $this->huerta;
    }
    public function insertHuerta($nH, $tH, $m){
        $sql = "INSERT INTO `Huerta` (`idHuerta`, `nombreHuerta`, `tamanoHuerta`, `metaKg`) VALUES (NULL, '$nH', '$tH', $m) ";
        if($this->db->query($sql)){
            return true;
        }else{
            return false;
        }
    }
}