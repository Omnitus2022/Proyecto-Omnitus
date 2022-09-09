<?php
class usuario_model{
    private $db;
    private $usuario;

    public function __construct(){
        $this->db = db::connect();
        $this->usuario = array();
    }
    public function getUsuario(){
        $sql = "SELECT * FROM Usuario";
        $consulta = $this->db->query($sql);

        while($filas=$consulta->fetch_assoc()){
            $this->usuario[]=$filas;
        }
        return $this->usuario;
    }
    public function insertUsuario($idC,$nom, $pwd, $esEmp, $esDir, $esAdm, $esHue, $esRep, $esInf){
        $pwdSec = MD5($pwd);
        if (!$esEmp) {
            $esEmp="NULL";
        }else {
            $esEmp=1;
        }
        if (!$esDir) {
            $esDir="NULL";
        }else {
            $esDir=1;
        }
        if (!$esAdm) {
            $esAdm="NULL";
        }else {
            $esAdm=1;
        }
        if (!$esHue) {
            $esHue="NULL";
        }else {
            $esHue=1;
        }
        if (!$esRep) {
            $esRep="NULL";
        }else {
            $esRep=1;
        }
        if (!$esInf) {
            $esInf="NULL";
        }else {
            $esInf=1;
        }
        
        $sql = "INSERT INTO `Usuario` (`idCliente`, `nom`, `pwd`, `esEmpresa`, `esDirectivo`, `esAdmin`, `esHuerta`, `esRepartidor`, `esInformatico`) VALUES ('$idC', '$nom', '$pwdSec', $esEmp, $esDir, $esAdm, $esHue, $esRep, $esInf) ";
        if($this->db->query($sql)){
            return true;
        }else{
            return false;
        }
    }
}