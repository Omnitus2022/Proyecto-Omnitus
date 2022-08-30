<?php
class db{
    public static function connect(){
        $conn = new mysqli("localhost","root","","omnitus");
        $conn->query("SET NAMES 'utf8'");

        if ($conn -> connect_errno) {
            echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
            exit();
          }
        return $conn;
    }

}

?>