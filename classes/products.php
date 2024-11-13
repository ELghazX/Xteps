<?php
class products
{
    private $conn;
    private $table_name = "products";
    public $id;
    public $name;
    public $description;
    public $price;
    public $stock;




    public function __construct($db)
    {
        $this->conn = $db;
    }

    public function addProduct()
    {
        $query = "INSERT INTO " . $this->table_name . " (name, description, price, stock) VALUES (:name, :description, :price, :stock)";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":name", $this->name);
        $stmt->bindParam(":description", $this->description);
        $stmt->bindParam(":price", $this->price);
        $stmt->bindParam(":stock", $this->stock);
        if ($stmt->execute()) {
            return true;
        }
        return false;
    }

    public function updateProduct()
    {
        $query = "UPDATE " . $this->table_name . " SET name = :name, description = :description, price = :price, stock = :stock WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":name", $this->name);
        $stmt->bindParam(":description", $this->description);
        $stmt->bindParam(":price", $this->price);
        $stmt->bindParam(":stock", $this->stock);
        $stmt->bindParam(":id", $this->id);
        if ($stmt->execute()) {
            return true;
        }
        return false;
    }
}
$product = new products($db);
