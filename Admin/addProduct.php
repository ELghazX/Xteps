<?php
// Include database connection
require_once '../config/Database.php';
$conn = new Database();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['productName'];
    $brand = $_POST['brand'];
    $price = $_POST['price'];
    $description = $_POST['description'];

    $conn->query("INSERT INTO products (name, brand, price, description) VALUES(:name, :brand, :price, :description)");
    $conn->bind(':name', $name);
    $conn->bind(':brand', $brand);
    $conn->bind(':price', $price);
    $conn->bind(':description', $description);
    $conn->execute();


    $product_id = $conn->lastInsertId();

    if (!empty($_FILES['images']['name'][0])) {
        $image_folder = "../uploads/products/";
        foreach ($_FILES['images']['tmp_name'] as $key => $tmp_name) {
            $image_name = basename($_FILES['images']['name'][$key]);
            $image_path = $image_folder . uniqid() . "_" . $image_name;
            move_uploaded_file($tmp_name, $image_path);

            $conn->query("INSERT INTO product_images (product_id, file_name, file_path) VALUES(:product_id, :image_name, :image_path)");
            $conn->bind(':product_id', $product_id);
            $conn->bind(':image_name', $image_name);
            $conn->bind(':image_path', $image_path);
            $conn->execute();
        }
    }

    if (isset($_POST['size']) && isset($_POST['color']) && isset($_POST['stock'])) {
        foreach ($_POST['size'] as $key => $size) {
            $color = $_POST['color'][$key];
            $stock = $_POST['stock'][$key];
            $conn->query("INSERT INTO product_variants (product_id, size, color, stock) VALUES(:product_id, :size, :color, :stock)");
            $conn->bind(':product_id', $product_id);
            $conn->bind(':size', $size);
            $conn->bind(':color', $color);
            $conn->bind(':stock', $stock);
            $conn->execute();
        }
    }

    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
    <link rel="stylesheet" href="..\Assets/css/style.css?v=<?php echo time(); ?>">
    <script type="text/javascript" src="..\Assets/javascript/app.js" defer></script>
</head>

<body>
    <!-- navigation -->
    <?php include '../resources/sidebar.php'; ?>

    <!-- main content -->
    <main>
        <div class="top-head">
            <button><a href="notification.php"><img src="..\Assets/icon/notifications.svg" alt="notification"></a></button>
            <!-- <a href="login.php"><img src="..\Assets/icon/account_circle.svg" alt="account"></a> -->
        </div>

        <div class="content">
            <h2>Add Product</h2>
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="form-layout">
                    <div class="main-drag-drop-area" id="mainImage">
                        <label for="image"></label>
                        <input type="file" name="images[]" id="images" multiple accept="image/*" required>
                    </div>

                    <div class="product-details">
                        <label for="brand">Brand:</label>
                        <input type="text" name="brand" id="brand" required>

                        <label for="productName">Product Name</label>
                        <input type="text" name="productName" id="productName" placeholder="Enter product name">

                        <label for="price">Price</label>
                        <input type="number" name="price" id="price" placeholder="Enter price">

                        <label for="description">Description</label>
                        <textarea id="description" name="description" placeholder="Enter description" required></textarea>
                    </div>
                </div>
                <h3>Product Variants</h3>
                <table id="variants_table">
                    <thead>
                        <tr>
                            <th>Size</th>
                            <th>Color</th>
                            <th>Stock</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input type="text" name="size[]" required></td>
                            <td><input type="text" name="color[]" required></td>
                            <td><input type="number" name="stock[]" min="0" required></td>
                            <td><button type="button" onclick="removeRow(this)">Remove</button></td>
                        </tr>
                    </tbody>
                </table>
                <button type="button" onclick="addRow()">Add Row</button>


                <div class="form-buttons">
                    <a style="text-decoration:none;color:black" href='index.php' class="cancel-btn">Cancel</a>
                    <button type="submit" name="submit" class="save-btn">Save</button>
                </div>
            </form>
        </div>

        <!-- footer -->
        <footer>
            &copy; 2024 copyright
        </footer>
    </main>
    <script>
        function addRow() {
            const table = document.getElementById('variants_table').getElementsByTagName('tbody')[0];
            const newRow = document.createElement('tr');

            newRow.innerHTML = `
            <td><input type="text" name="size[]" required></td>
            <td><input type="text" name="color[]" required></td>
            <td><input type="number" name="stock[]" min="0" required></td>
            <td><button type="button" onclick="removeRow(this)">Remove</button></td>
        `;

            table.appendChild(newRow);
        }

        function removeRow(button) {
            const row = button.parentElement.parentElement;
            row.remove();
        }
    </script>
    </script>
</body>

</html>