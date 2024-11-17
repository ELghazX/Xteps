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
                    <div class="product">
                        <img src="..\Assets/images/Kanky_EXC_02png.png" alt="Shoe">
                    </div>
                    <div class="receipt-proof">
                        <img src="..\Assets/images/OIP.jpeg" alt="Receipt">
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