<?php
class db{
    public static function connect(){
        $conn = new mysqli("localhost","root","1234","Omnitus2022");
        $conn->query("SET NAMES 'utf8'");

        if ($conn -> connect_errno) {
            echo "Failed to connect to MySQL: " . $conn -> connect_error;
            exit();
          }
        return $conn;
    }

}

?>