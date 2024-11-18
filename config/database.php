<?php
class Database
{
    private $host = "localhost";
    private $db_name = "nama_database";
    private $username = "root";
    private $password = "";
    public $conn;

    public function getConnection()
    {
        $this->conn = null;
        try {
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $exception) {
            echo "Connection error: " . $exception->getMessage();
        }
        return $this->conn;
    }
}

// $host = "localhost";
// $db_name = "express";
// $username = "root";
// $password = "";

// try {
// $db = new PDO("mysql:host=$host;dbname=$db_name", $username, $password);
// $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// } catch (PDOException $e) {
// echo "Periksa Koneksi database " . $e->getMessage();
// }