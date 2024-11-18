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
    <?php include 'sidebar.php'; ?>

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
                            <tr>
                                <td>1</td>
                                <td><img src="..\Assets/images/Ardiles_Nfinity_Flash.png" alt="Product"></td>
                                <td>Ardiles</td>
                                <td>NandaLoeth</td>
                                <td>RP 350.000</td>
                                <td>100</td>
                                <td>Done</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td><img src="..\Assets/images/Spotec_Atlas.png" alt="Product"></td>
                                <td>Spotec</td>
                                <td>Elghazz</td>
                                <td>RP 350.000</td>
                                <td>50</td>
                                <td>Done</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td><img src="..\Assets/images/Fortuna_Handwelted_Sneaker.png" alt="Product"></td>
                                <td>Fortuna</td>
                                <td>Gerad</td>
                                <td>RP 350.000</td>
                                <td>200</td>
                                <td>Done</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td><img src="..\Assets/images/Fortuna_Handwelted_Sneaker.png" alt="Product"></td>
                                <td>Fortuna</td>
                                <td>Gerad</td>
                                <td>RP 350.000</td>
                                <td>200</td>
                                <td>Done</td>
                            </tr>
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