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
                    <div class="ordered-product">
                        <img src="..\Assets/images/Kanky_x_dr._Tirta_Story_Sensu.png" alt="Shoe" class="ordered-img">
                        <img src="..\Assets/images/OIP.jpeg" alt="Receipt">
                        <div>
                            <p>Product Name: Kanky x Dr. Tirta Story Sensu</p>
                            <br>
                            <p>Price : Rp 350.000</p>
                            <br>
                            <p>Quantity: 1</p>
                        </div>
                        <div class="confirm-order">
                            <button>Upload</button>
                            <button>Confirm</button>
                        </div>
                    </div>
                    <div class="ordered-product">
                        <img src="..\Assets/images/Kanky_x_dr._Tirta_Story_Sensu.png" alt="Shoe" class="ordered-img">
                        <img src="..\Assets/images/OIP.jpeg" alt="Receipt">
                        <div>
                            <p>Product Name: Kanky x Dr. Tirta Story Sensu</p>
                            <br>
                            <p>Price : Rp 350.000</p>
                            <br>
                            <p>Quantity: 1</p>
                        </div>         
                        <div class="confirm-order">
                            <button>Upload</button>
                            <button>Confirm</button>
                        </div>               
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