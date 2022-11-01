<?php
class db
{
    public static function connect()
    {
        $conn = new mysqli("192.168.1.209", "omnitus", "12345678", "omnitus");
        $conn->query("SET NAMES 'utf8'");

        if ($conn->connect_errno) {
            echo "Failed to connect to MySQL: " . $conn->connect_error;
            exit();
        }
        return $conn;
    }
}
