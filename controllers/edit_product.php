<?php
include_once '../config/Database.php';
include_once '../models/Product.php';

$database = new Database();
$db = $database->getConnection();

$product = new Product($db);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $product->product_id = $_POST['product_id'];
    $product->name = $_POST['name'];
    $product->description = $_POST['description'];
    $product->price = $_POST['price'];
    $product->stock_quantity = $_POST['stock_quantity'];

    if ($product->updateProduct()) {
        echo "Produk berhasil diubah.";
    } else {
        echo "Gagal mengubah produk.";
    }
}
