<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="..\Assets/css/style.css?v=<?php echo time(); ?>">
    <script type="text/javascript" src="..\Assets/javascript/app.js" defer></script>
</head>
<body>
    <!-- navigation -->
    <?php include 'sidebar.php'; ?>

    <!-- Main Content -->
    <main>
        <div class="top-head">
            <button><a href="notification.php"><img src="..\Assets/icon/notifications.svg" alt="notification"></a></button>
            <a href="login.php"><img src="..\Assets/icon/account_circle.svg" alt="account"></a>
        </div>

        <div class="content">
            <div class="top-section">

                <div class="box">
                    <h2>Top Selling Products</h2>
                    <div class="product">
                        <img src="..\Assets/images/Kanky_Story_Kitadakepng.png" alt="story kitadake">
                        <div>
                            <h4>Story Kitadake</h4>
                            <p>RP 350.000</p>
                            <p>KANKY</p>
                        </div>
                    </div>
                    <div class="product">
                        <img src="..\Assets/images/Heiden_Heritage_Fender-white.png" alt="Heritage">
                        <div>
                            <h4>Fender</h4>
                            <p>RP 350.000</p>
                            <p>Heiden Heritage</p>
                        </div>
                    </div>
                    <div class="pagination">
                        <span>Number of pages</span>    
                        <a href="#">&laquo;</a>
                        <a href="#">1</a>
                        <a href="#">2</a>
                        <a href="#">3</a>
                        <a href="#">&raquo;</a>
                    </div>
                </div>

                <div class="box">
                    <h2>Top Selling Brands</h2>
                    <div class="product">
                        <img src="..\Assets/images/Kanky_klasik_Story_Kitadake.png" alt="Story Tsunagari">
                        <div>
                            <h4>Story Tsunagari</h4>
                            <p>RP 350.000</p>
                            <p>KANKY</p>
                        </div>
                    </div>
                    <div class="product">
                        <img src="..\Assets/images/Kanky_-_Story_Kitadake_-_pink 2.png" alt="Story Kitadake">
                        <div>
                            <h4>Story Kitadake</h4>
                            <p>RP 300.000</p>
                            <p>KANKY</p>
                        </div>
                    </div>
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
            
            <div class="recent-orders">
                <h2>Recent Orders</h2>
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
                            <td>Pending</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td><img src="..\Assets/images/Fortuna_Handwelted_Sneaker.png" alt="Product"></td>
                            <td>Fortuna</td>
                            <td>Gerad</td>
                            <td>RP 350.000</td>
                            <td>200</td>
                            <td>Pending</td>
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

        <!-- footer -->
        <footer>
            &copy; 2024 copyright
        </footer>
    </main>
</body>
</html>