<?php
class cliente_model{
    private $db;
    private $cliente;

    public function __construct(){
        $this->db = db::connect();
        $this->cliente = array();
    }
    public function getCliente(){
        $sql = "SELECT * FROM Cliente";
        $consulta = $this->db->query($sql);

        while($filas=$consulta->fetch_assoc()){
            $this->cliente[]=$filas;
        }
        return $this->cliente;
    }
    public function insertCliente($m, $nP, $c, $esq){
        $sql = "INSERT INTO `Cliente` (`idCliente`, `email`, `numeroPuerta`, `calle`, `esquina`) VALUES (NULL, '$m', $nP, '$c', '$esq')";
        if($this->db->query($sql)){
            return true;
        }else{
            return false;
        }
    }
}