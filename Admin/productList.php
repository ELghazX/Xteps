<?php
require_once '../config/Database.php';
$conn = new Database();
$query = "SELECT products.*, product_images.file_path, product_variants.size, product_variants.color, product_variants.stock
FROM products
JOIN product_images ON products.id = product_images.product_id
JOIN product_variants ON products.id = product_variants.product_id";
$conn->query($query);
$products = $conn->resultSet();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>
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
            <a href="login.php"><img src="..\Assets/icon/account_circle.svg" alt="account"></a>
        </div>

        <div class="content">
            <div class="box">
                <input type="text" class="search" placeholder="Search">
                <table class="product-list">
                    <thead>
                        <tr>
                            <th>Product</th>
                            <th>Product ID</th>
                            <th>Name</th>
                            <th>Brand</th>
                            <th>Price</th>
                            <th>Size</th>
                            <th>Stock</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php if (empty($products)) : ?>
                            <tr>
                                <td colspan="8">No data found</td>
                            </tr>
                        <?php else: ?>
                            <?php foreach ($products as $product) : ?>
                                <tr>
                                    <td><img src="<?php echo $product['file_path']; ?>" alt="Shoe"></td>
                                    <td><?php echo $product['id']; ?></td>
                                    <td><?php echo $product['name']; ?></td>
                                    <td><?php echo $product['brand']; ?></td>
                                    <td>Rp <?php echo $product['price']; ?></td>
                                    <td><?php echo $product['size']; ?></td>
                                    <td><?php echo $product['stock']; ?></td>
                                    <td><a href="changeProduct.php?id=<?php echo $product['id']; ?>">
                                            <button class="btn-change">Change</button>
                                        </a>
                                        <a href="deleteProduct.php?id=<?php echo $product['id']; ?>">
                                            <button class="btn-delete">Delete</button>
                                        </a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php endif; ?>
                        <!-- <tr>
                            <td><img src="..\Assets/images/Ardiles_Nfinity_Flash.png" alt="Shoe"></td>
                            <td>1</td>
                            <td>KANKY</td>
                            <td>Rp 350.000</td>
                            <td>2</td>
                            <td>50</td>
                            <td>
                                <a href="change_product.php"><button class="btn-change">Change</button></a>
                                <button class="btn-delete">Delete</button>
                            </td>
                        </tr>
                        <tr>
                            <td><img src="..\Assets/images/Ardiles_Nfinity_Flash.png" alt="Shoe"></td>
                            <td>2</td>
                            <td>KANKY</td>
                            <td>Rp 350.000</td>
                            <td>1</td>
                            <td>20</td>
                            <td>
                                <a href="change_product.php"><button class="btn-change">Change</button></a>
                                <button class="btn-delete">Delete</button>
                            </td>
                        </tr>
                        <tr>
                            <td><img src="..\Assets/images/Ardiles_Nfinity_Flash.png" alt="Shoe"></td>
                            <td>3</td>
                            <td>KANKY</td>
                            <td>Rp 350.000</td>
                            <td>1</td>
                            <td>20</td>
                            <td>
                                <a href="change_product.php"><button class="btn-change">Change</button></a>
                                <button class="btn-delete">Delete</button>
                            </td>
                        </tr>
                        <tr>
                            <td><img src="..\Assets/images/Ardiles_Nfinity_Flash.png" alt="Shoe"></td>
                            <td>4</td>
                            <td>KANKY</td>
                            <td>Rp 350.000</td>
                            <td>1</td>
                            <td>20</td>
                            <td>
                                <a href="change_product.php"><button class="btn-change">Change</button></a>
                                <button class="btn-delete">Delete</button>
                            </td>
                        </tr>
                        <tr>
                            <td><img src="..\Assets/images/Ardiles_Nfinity_Flash.png" alt="Shoe"></td>
                            <td>5</td>
                            <td>KANKY</td>
                            <td>Rp 350.000</td>
                            <td>1</td>
                            <td>20</td>
                            <td>
                                <a href="change_product.php"><button class="btn-change">Change</button></a>
                                <button class="btn-delete">Delete</button>
                            </td>
                        </tr>
                        <tr>
                            <td><img src="..\Assets/images/Ardiles_Nfinity_Flash.png" alt="Shoe"></td>
                            <td>6</td>
                            <td>KANKY</td>
                            <td>Rp 350.000</td>
                            <td>1</td>
                            <td>20</td>
                            <td>
                                <a href="change_product.php"><button class="btn-change">Change</button></a>
                                <button class="btn-delete">Delete</button>
                            </td>
                        </tr> -->
                    </tbody>
                </table>
                <div class="pagination">
                    <span>Number of pages</span>
                    <a href="#">&laquo;</a>
                    <a href="#">1</a>
                    <a href="#">2</a>
                    <a href="#">3</a>
                    <a href="#">&raquo;</a>
                </div>
            </div>
        </div>

        <!-- footer -->
        <footer>
            &copy; 2024 copyright
        </footer>
    </main>
</body>

</html>