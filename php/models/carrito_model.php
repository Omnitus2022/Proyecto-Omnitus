<?php
// class carrito_model
// {
//     private $db;
//     private $carrito;

//     public function __construct()
//     {
//         $this->db = db::connect();
//         $this->carrito = array();
//     }
//     public function getProductos()
//     {
//         $sql = "SELECT * FROM CEmpresa";
//         $consulta = $this->db->query($sql);

//         while ($filas = $consulta->fetch_assoc()) {
//             $this->carrito[] = $filas;
//         }
//         return $this->carrito;
//     }
//     public function getProducto($idP)
//     {
//         $sql = "SELECT * FROM CEmpresa";
//         $consulta = $this->db->query($sql);

//         while ($filas = $consulta->fetch_assoc()) {
//             $this->carrito[] = $filas;
//         }
//         return $this->carrito;
//     }
//     public function insertCEmpresa($idC, $RUT, $nom)
//     {
//         $sql = "INSERT INTO `cEmpresa` (`idCliente`, `RUT`, `nombreEmpresa`) VALUES ('$idC', '$RUT', '$nom') ";
//         if ($this->db->query($sql)) {
//             return true;
//         } else {
//             return false;
//         }
//     }
// }