<?php
class usuario_model
{
    private $db;
    private $usuario;

    public function __construct()
    {
        $this->db = db::connect();
        $this->usuario = array();
    }
    public function getUsuario()
    {
        $sql = "SELECT * FROM Usuario";
        $consulta = $this->db->query($sql);

        while ($filas = $consulta->fetch_assoc()) {
            $this->usuario[] = $filas;
        }
        return $this->usuario;
    }

    public static function getOneUsuario($nom)
    {
        $db = db::connect();
        $sql = "SELECT * FROM Usuario WHERE nom = '$nom'";
        $consulta = $db->query($sql);

        while ($filas = $consulta->fetch_assoc()) {
            $usuario[] = $filas;
        }
        return $usuario[0];
    }

    public function update($nom, $pwd)
    {   //  RETURN SUCCESS
        $sql = "UPDATE Usuario 
        SET 
            pwd = $pwd
        WHERE
            nom = $nom;";
        $this->db->query($sql);
    }
    public function insertUsuario($idC, $nom, $pwd, $esEmp, $esDir, $esAdm, $esHue, $esRep, $esInf)
    {
        $pwdSec = MD5($pwd);
        if (!$esEmp) {
            $esEmp = "NULL";
        } else {
            $esEmp = 1;
        }
        if (!$esDir) {
            $esDir = "NULL";
        } else {
            $esDir = 1;
        }
        if (!$esAdm) {
            $esAdm = "NULL";
        } else {
            $esAdm = 1;
        }
        if (!$esHue) {
            $esHue = "NULL";
        } else {
            $esHue = 1;
        }
        if (!$esRep) {
            $esRep = "NULL";
        } else {
            $esRep = 1;
        }
        if (!$esInf) {
            $esInf = "NULL";
        } else {
            $esInf = 1;
        }

        $sql = "INSERT INTO `Usuario` (`idCliente`, `nom`, `pwd`, `esEmpresa`, `esDirectivo`, `esAdmin`, `esHuerta`, `esRepartidor`, `esInformatico`) VALUES ('$idC', '$nom', '$pwdSec', $esEmp, $esDir, $esAdm, $esHue, $esRep, $esInf) ";
        if ($this->db->query($sql)) {
            return true;
        } else {
            return false;
        }
    }
}
