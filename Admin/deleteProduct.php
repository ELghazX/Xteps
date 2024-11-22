<?php
require_once '../config/Database.php';

if (isset($_GET['id'])) {
    $product_id = intval($_GET['id']);
    $conn = new Database();

    $query = "SELECT file_path FROM product_images WHERE product_id = :product_id";
    $conn->query($query);
    $conn->bind(':product_id', $product_id);
    $conn->execute();
    $image = $conn->resultSet();
    if (!empty($image)) {
        foreach ($image as $images) {
            $imagePath = $images['file_path'];
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }
    }

    $query2 = "DELETE FROM product_images WHERE product_id = :product_id";
    $conn->query($query2);
    $conn->bind(':product_id', $product_id);
    $conn->execute();

    $query2 = "DELETE FROM product_variants WHERE product_id = :product_id";
    $conn->query($query2);
    $conn->bind(':product_id', $product_id);
    $conn->execute();

    $query3 = "DELETE FROM products WHERE id = :product_id";
    $conn->query($query3);
    $conn->bind(':product_id', $product_id);
    $conn->execute();

    echo "Data berhasil dihapus.";
    header("Location: productList.php");
    exit();
} else {
    echo "ID produk tidak ditemukan.";
}
