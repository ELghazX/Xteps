<?php
include_once '../config/database.php';
include_once 'models/Product.php';
include_once 'models/Image.php';

$database = new Database();
$db = $database->getConnection();

$product = new Product($db);
$image = new Image($db);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $product->name = $_POST['name'];
    $product->description = $_POST['description'];
    $product->price = $_POST['price'];
    $product->stock_quantity = $_POST['stock_quantity'];

    if ($product->createProduct()) {
        $image->product_id = $product->product_id;

        // Upload multiple images
        foreach ($_FILES['images']['name'] as $key => $value) {
            $file = [
                'name' => $_FILES['images']['name'][$key],
                'tmp_name' => $_FILES['images']['tmp_name'][$key],
                'size' => $_FILES['images']['size'][$key],
                'type' => $_FILES['images']['type'][$key],
                'error' => $_FILES['images']['error'][$key],
            ];

            if ($image->uploadImage($file)) {
                $image->image_type = 'gallery';
                $image->addImage();
            }
        }

        echo "Produk dan gambar berhasil ditambahkan!";
    } else {
        echo "Gagal menambahkan produk.";
    }
}
