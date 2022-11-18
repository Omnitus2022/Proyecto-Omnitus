<?php
class db
{
    public static function connect()
    {
        $conn = new mysqli("127.0.0.1", "omnitus", "12345678", "omnitus", 3333);
        $conn->query("SET NAMES 'utf8'");

        if ($conn->connect_errno) {
            echo "Failed to connect to MySQL: " . $conn->connect_error;
            exit();
        }
        return $conn;
    }
}
