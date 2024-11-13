<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Confirmation</title>
    <link rel="stylesheet" href="Assets/css/confirm.css">
    <link rel="stylesheet" href="Assets/css/sidebar.css">
    <link rel="stylesheet" href="Assets/css/style.css">
</head>
<body>
    <!-- Sidebar -->
    <?php include 'sidebar.php'; ?>

    <main>
        <div class="navbar">
            <img src="Assets/icon/bell.png" alt="Notification" class="image-navbar">
            <img src="Assets/icon/akun.png" alt="Profile" class="image-navbar">
        </div>

        <div class="content">
            <div class="order-list">
                <!-- Order 1 -->
                <div class="order-card">
                    <div class="order-item">
                        <img src="Assets/images/Heiden_Heritage_-_Fender-white.png" alt="Product Image">
                        <img src="Assets/images/6c.png" alt="Product Thumbnail">
                        <div class="order-info">
                            <h2>EXC 2</h2>
                            <p>Rp. 300.000</p>
                            <p>Quantity: 1</p>
                        </div>
                    </div>
                    <div class="order-details">
                        <div class="order-summary">
                            <p>Order Date</p>
                            <p>5 September 2021</p>
                            <button>Confirm</button>
                        </div>
                    </div>
                </div>

                <!-- Order 2 -->
                <div class="order-card">
                    <div class="order-item">
                        <img src="Assets/images/Heiden_Heritage_-_Fender-white-streak.png" alt="Product Image">
                        <img src="Assets/images/OIP.jpeg" alt="Product Thumbnail">
                        <div class="order-info">
                            <h2>Story Kitadake</h2>
                            <p>Rp. 300.000</p>
                            <p>Quantity: 1</p>
                        </div>
                    </div>
                    <div class="order-details">
                        <div class="order-summary">
                            <p>Order Date</p>
                            <p>5 September 2021</p>
                            <button>Confirm</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer class="footer">
        &copy; 2024 copyright
    </footer>

    <script src="Assets/javascript/app.js" defer></script>
</body>
</html>
