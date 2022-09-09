<?php
class cEmpresa_model{
    private $db;
    private $cEmpresa;

    public function __construct(){
        $this->db = db::connect();
        $this->cEmpresa = array();
    }
    public function getCEmpresa(){
        $sql = "SELECT * FROM CEmpresa";
        $consulta = $this->db->query($sql);

        while($filas=$consulta->fetch_assoc()){
            $this->cEmpresa[]=$filas;
        }
        return $this->cEmpresa;
    }
    public function insertCEmpresa($idC, $RUT, $nom){
        $sql = "INSERT INTO `cEmpresa` (`idCliente`, `RUT`, `nombreEmpresa`) VALUES ('$idC', '$RUT', '$nom') ";
        if($this->db->query($sql)){
            return true;
        }else{
            return false;
        }
    }
}
