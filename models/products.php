<?php
class Product
{
    private $conn;
    private $table = 'products';

    public $product_id;
    public $name;
    public $description;
    public $price;
    public $stock_quantity;

    public function __construct($db)
    {
        $this->conn = $db;
    }

    // Create Product
    public function createProduct()
    {
        $query = "INSERT INTO " . $this->table . " (name, description, price, stock_quantity) 
                  VALUES (:name, :description, :price, :stock_quantity)";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(':name', $this->name);
        $stmt->bindParam(':description', $this->description);
        $stmt->bindParam(':price', $this->price);
        $stmt->bindParam(':stock_quantity', $this->stock_quantity);

        if ($stmt->execute()) {
            $this->product_id = $this->conn->lastInsertId();
            return true;
        }
        return false;
    }

    // Update Product
    public function updateProduct()
    {
        $query = "UPDATE " . $this->table . " 
                  SET name = :name, description = :description, price = :price, stock_quantity = :stock_quantity
                  WHERE product_id = :product_id";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(':name', $this->name);
        $stmt->bindParam(':description', $this->description);
        $stmt->bindParam(':price', $this->price);
        $stmt->bindParam(':stock_quantity', $this->stock_quantity);
        $stmt->bindParam(':product_id', $this->product_id);

        return $stmt->execute();
    }

    // Delete Product
    public function deleteProduct()
    {
        $query = "DELETE FROM " . $this->table . " WHERE product_id = :product_id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':product_id', $this->product_id);
        return $stmt->execute();
    }

    // Get All Products
    public function getAllProducts()
    {
        $query = "SELECT * FROM " . $this->table;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }
}
