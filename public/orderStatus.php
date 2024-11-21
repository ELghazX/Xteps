<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Status</title>
    <link rel="stylesheet" href="..\Assets/css/public.css?v=<?php echo time(); ?>">
</head>

<body>
    <!-- navigation -->
    <?php include '../resources/navbar.php'; ?>
    <main>
        <div class="order-status">
            <div class="status-card">
                <img src="..\Assets/images/Ardiles_Nfinity_Flash.png" alt="EXC 2">
                <div class="status-details">
                    <h2>EXC 2</h2>
                    <p>Kanky</p>
                    <p>Rp 300.000</p>
                    <p>Size 5</p>
                </div>
                <div class="status-buttons">
                    <button class="processed">Processed</button>
                    <a href="#" class="receipt">Shipping receipt</a>
                </div>
            </div>

            <div class="status-card">
                <img src="..\Assets/images/Unerd_DHIGH.png" alt="Story Kitadake">
                <div class="status-details">
                    <h2>Story Kitadake</h2>
                    <p>Kanky</p>
                    <p>Rp 300.000</p>
                    <p>Size 5</p>
                </div>
                <div class="status-buttons">
                    <button class="processed">Processed</button>
                    <a href="#" class="receipt">Shipping receipt</a>
                </div>
            </div>
        </div>

        <!-- footer -->
        <?php include '..\resources/footer.php'; ?>
    </main>
</body>

</html>