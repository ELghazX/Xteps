<?php
require_once '../config/Database.php';
$conn = new Database();
$query = "SELECT orders.id as order_id, 
                         orders.status, 
                         users.first_name as customer_name, 
                         products.name as product_name, 
                         products.brand, 
                         products.price, 
                         product_variants.stock, 
                         product_images.file_path
                  FROM orders
                  JOIN users ON users.id = orders.user_id
                  JOIN order_items ON orders.id = order_items.order_id
                  JOIN product_variants ON product_variants.id = order_items.variant_id
                  JOIN products ON product_variants.product_id = products.id
                  JOIN product_images ON products.id = product_images.product_id
                  WHERE orders.status = 'Shipped'";
$conn->query($query);
$completedOrders = $conn->resultSet();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirm Order</title>
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
                <div class="completed-orders">
                    <h2>Completed Orders</h2>
                    <table>
                        <thead>
                            <tr>
                                <th>Order ID</th>
                                <th>Product</th>
                                <th>Brand Name</th>
                                <th>Customer Name</th>
                                <th>Price</th>
                                <th>In Stock</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (empty($completedOrders)) : ?>
                                <tr>
                                    <td colspan="7">No completed orders found</td>
                                </tr>
                            <?php else : ?>
                                <?php foreach ($completedOrders as $order) : ?>
                                    <tr>
                                        <td><?php echo $order['order_id']; ?></td>
                                        <td><img src="<?php echo $order['file_path']; ?>" alt="Product"></td>
                                        <td><?php echo $order['brand']; ?></td>
                                        <td><?php echo $order['customer_name']; ?></td>
                                        <td>Rp <?php echo $product['price']; ?></td>
                                        <td><?php echo $order['stock_quantity']; ?></td>
                                        <td><?php echo $order['status']; ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php endif; ?>
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
        </div>

        <!-- footer -->
        <footer>
            &copy; 2024 copyright
        </footer>
    </main>
</body>

</html>