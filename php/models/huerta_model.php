<?php
class huerta_model
{
    private $db;
    private $huerta;

    public function __construct()
    {
        $this->db = db::connect();
        $this->huerta = array();
    }

    public static function listarHuertas()
    {
        $db = db::connect();
        $sql = "SELECT * FROM Huerta";
        $consulta = $db->query($sql);

        while ($filas = $consulta->fetch_assoc()) {
            $huerta[] = $filas;
        }
        return $huerta;
    }
    public static function updateMeta($idHuerta, $metaAnual)
    {
        $db = db::connect();
        $sql = "UPDATE Huerta 
        SET 
            metaAnual = '$metaAnual'
        WHERE
            idHuerta = '$idHuerta'";
        $db->query($sql);
    }
    public static function updateHuerta($idH, $nH, $tH)
    {
        $db = db::connect();
        $sql = "UPDATE Huerta 
        SET 
            nombreHuerta = '$nH',
            tamanoHuerta = '$tH'
        WHERE
            idHuerta = '$idH'";
        $db->query($sql);
    }

    public function getHuerta()
    {
        $sql = "SELECT * FROM Huerta";
        $consulta = $this->db->query($sql);

        while ($filas = $consulta->fetch_assoc()) {
            $this->huerta[] = $filas;
        }
        return $this->huerta;
    }
    public static function insertVariedadCultivo($idCultivo, $idHuerta, $idVariedad, $cantidadPlantada, $metaCantidad)
    {
        $db = db::connect();
        $fecha = date('Y-m-d');
        $sql = "INSERT INTO `huertaCultivo` (`idCultivo`, `idHuerta`, `idVariedad`, `fecha`, `cantidadPlantada`, `estadoCultivo`, `metaCantidad`) VALUES ('$idCultivo', '$idHuerta', '$idVariedad', '$fecha', '$cantidadPlantada', 'Trasplante','$metaCantidad') ";
        $db->query($sql);
    }
    public static function insertVariedadCosecha($idCosecha, $idHuerta, $idVariedad, $cantidadCosecha)
    {
        $db = db::connect();
        $fecha = date('Y-m-d');
        $sql = "INSERT INTO `huertaCosecha` (`idCosecha`, `idHuerta`, `idVariedad`, `fecha`, `cantidadCosecha`) VALUES ('$idCosecha', '$idHuerta', '$idVariedad', '$fecha', '$cantidadCosecha') ";
        $db->query($sql);
    }
    public function insertHuerta($nH, $tH)
    {
        $sql = "INSERT INTO Huerta (`idHuerta`, `nombreHuerta`, `tamanoHuerta`) VALUES (NULL, '$nH', '$tH') ";

        if ($this->db->query($sql)) {
            return true;
        } else {
            return false;
        }
    }
}
