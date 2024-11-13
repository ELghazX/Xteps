<?php
// class Database
// {
//     private $host = "localhost";
//     private $db_name = "express";
//     private $username = "root";
//     private $password = "";
//     public $conn;

//     public function getconnection()
//     {
//         $this->conn = null;
//         try {
//             $this->conn = new pdo("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
//             $this->conn->setattribute(pdo::attr_errmode, pdo::errmode_exception);
//         } catch (pdoexception $exception) {
//             echo "connection error: " . $exception->getmessage();
//         }
//         return $this->conn;
//     }
// }
// $database = new database();
// $db = $database->getconnection();

$host = "localhost";
$db_name = "express";
$username = "root";
$password = "";

try {
    $db = new PDO("mysql:host=$host;dbname=$db_name", $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Periksa Koneksi database " . $e->getMessage();
}
