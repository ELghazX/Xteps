<?php

class Image
{
    private $conn;
    private $table = 'images';

    public $image_id;
    public $product_id;
    public $image_url;
    public $image_type;

    public function __construct($db)
    {
        $this->conn = $db;
    }

    public function uploadImage($file)
    {
        $upload_dir = 'uploads/';
        $target_file = $upload_dir . basename($file['name']);
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        if (move_uploaded_file($file["tmp_name"], $target_file)) {
            $this->image_url = $target_file;
            return true;
        }

        return false;
    }

    public function addImage()
    {
        $query = "INSERT INTO " . $this->table . " 
            (product_id, image_url, image_type) 
            VALUES (:product_id, :image_url, :image_type)";

        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(':product_id', $this->product_id);
        $stmt->bindParam(':image_url', $this->image_url);
        $stmt->bindParam(':image_type', $this->image_type);

        return $stmt->execute();
    }
}
