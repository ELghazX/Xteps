<?php
include_once '../config/Database.php';
include_once '../models/Product.php';

$database = new Database();
$db = $database->getConnection();

$product = new Product($db);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $product->product_id = $_POST['product_id'];

    if ($product->deleteProduct()) {
        echo "Produk berhasil dihapus.";
    } else {
        echo "Gagal menghapus produk.";
    }
}
