<?php
class pedido_model{
    private $db;
    private $pedido;

    public function __construct(){
        $this->db = db::connect();
        $this->pedido = array();
    }
    public function getPedido(){
        $sql = "SELECT * FROM Pedido";
        $consulta = $this->db->query($sql);

        while($filas=$consulta->fetch_assoc()){
            $this->pedido[]=$filas;
        }
        return $this->pedido;
    }
    public function insertPedido($idC, $rec, $imp, $mP, $est, $fP, $fE, $hPrefI, $hPrefF,  $recib){
        # rec
        #fE
        #hPrefI
        #hPrefF
        #recib
        $sql = "INSERT INTO `Pedido` (`numPedido`, `idCliente`, `reclamo`, `importe`, `metodoPago`, `estadoPedido`, `fechaPedido`, `fechaEntrega`, `horaPrefInicio`, `horaPrefFinal`, `recibidor`) VALUES (NULL, '$idC', '$rec', '$imp', '$mP', '$est', '$fP', '$fE', '$hPrefI', '$PrefF', '$recib') ";
        if($this->db->query($sql)){
            return true;
        }else{
            return false;
        }
    }
}