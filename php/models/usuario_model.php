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
    public static function listarRepartidores()
    {
        $db = db::connect();
        $sql = "SELECT nom FROM Usuario WHERE esRepartidor = '1'";
        $consulta = $db->query($sql);

        while ($filas = $consulta->fetch_assoc()) {
            $usuario[] = $filas;
        }
        return $usuario;
    }
    public static function listarUsuarios()
    {
        $db = db::connect();
        $sql = "SELECT * FROM Usuario";
        $consulta = $db->query($sql);

        while ($filas = $consulta->fetch_assoc()) {
            $usuario[] = $filas;
        }
        return $usuario;
    }
    public static function pendientes()
    {
        $db = db::connect();
        $sql = "SELECT * FROM Usuario WHERE autorizado != '1'";
        $consulta = $db->query($sql);

        while ($filas = $consulta->fetch_assoc()) {
            $usuario[] = $filas;
        }
        return $usuario;
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

    public static function updatePassword($nom, $pwd)
    {
        $db = db::connect();
        $pwdSec = MD5($pwd);
        $sql = "UPDATE Usuario 
        SET 
            pwd = '$pwdSec'
        WHERE
            nom = '$nom'";
        $db->query($sql);
    }
    public static function autorizarUsuario($nom)
    {
        $db = db::connect();
        $sql = "UPDATE Usuario SET autorizado = '1'
        WHERE
            nom = '$nom'";
        $db->query($sql);
    }

    public static function updateUsuario($idC, $nom, $pwd, $esEmp, $esDir, $esAdm, $esHue, $esRep, $esInf, $idH)
    {
        $db = db::connect();
        $pwdSec = MD5($pwd);
        if (!$esEmp) {
            $esEmp = "NULL";
        } else {
            $esEmp = '1';
        }
        if (!$esDir) {
            $esDir = "NULL";
        } else {
            $esDir = '1';
        }
        if (!$esAdm) {
            $esAdm = "NULL";
        } else {
            $esAdm = '1';
        }
        if (!$esHue) {
            $esHue = "NULL";
        } else {
            $esHue = '1';
        }
        if (!$esRep) {
            $esRep = "NULL";
        } else {
            $esRep = '1';
        }
        if (!$esInf) {
            $esInf = "NULL";
        } else {
            $esInf = '1';
        }
        if (!$idH) {
            $idH = "NULL";
        } else {
            $idH = "'$idH'";
        }
        $sql = "UPDATE Usuario 
        SET 
            idCliente = '$idC',
            pwd = '$pwdSec',
            esEmpresa = $esEmp,
            esDirectivo = $esDir,
            esAdmin = $esAdm,
            esHuerta = $esHue,
            esRepartidor = $esRep,
            esInformatico = $esInf,
            idHuerta = $idH
        WHERE
            nom = '$nom'";
        $db->query($sql);
    }

    public function insertUsuario($idC, $nom, $pwd, $esEmp, $esDir, $esAdm, $esHue, $esRep, $esInf, $idH)
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
        if (!$idH) {
            $idH = "NULL";
        } else {
            $idH = 1;
        }


        $sql = "INSERT INTO `Usuario` (`idCliente`, `nom`, `pwd`, `esEmpresa`, `esDirectivo`, `esAdmin`, `esHuerta`, `esRepartidor`, `esInformatico`, `idHuerta`) VALUES ('$idC', '$nom', '$pwdSec', $esEmp, $esDir, $esAdm, $esHue, $esRep, $esInf, $idH) ";
        if ($this->db->query($sql)) {
            return true;
        } else {
            return false;
        }
    }
}
