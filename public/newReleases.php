<?php
session_start();
require_once '../config/database.php';
require_once '../config/functions.php';
$conn = new Database();
$query = "SELECT  products.*, product_images.file_path 
FROM products
JOIN product_images ON products.id = product_images.product_id
GROUP BY products.id
ORDER BY products.created_at DESC";
$conn->query($query);
$products = $conn->resultset();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Releases</title>
    <link rel="stylesheet" href="..\Assets/css/public.css?v=<?php echo time(); ?>">
    <script type="text/javascript" src="..\Assets/javascript/app.js" defer></script>
</head>

<body>
    <!-- navigation -->
    <?php include '../resources/navbar.php'; ?>

    <main>
        <section class="main-content">
            <div class="filter-section">
                <!-- Filter Header -->
                <div class="filter-header">
                    <button class="filter-toggle">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#000000">
                            <path d="M440-120v-240h80v80h320v80H520v80h-80Zm-320-80v-80h240v80H120Zm160-160v-80H120v-80h160v-80h80v240h-80Zm160-80v-80h400v80H440Zm160-160v-240h80v80h160v80H680v80h-80Zm-480-80v-80h400v80H120Z" />
                        </svg>
                        Filter
                    </button>
                </div>

                <!-- Filter Content -->
                <div class="filter-content">
                    <!-- Price Range -->
                    <div class="price-range">
                        <p class="section-title">Price Range</p>
                        <input type="text" placeholder="Maximum">
                        <input type="text" placeholder="Minimum">
                    </div>

                    <!-- Brands -->
                    <div class="brand-filter">
                        <p class="section-title">Brands</p>
                        <label><input type="checkbox"> Kanky</label>
                        <label><input type="checkbox"> Compass</label>
                        <label><input type="checkbox"> Marque</label>
                        <label><input type="checkbox"> Ardiles</label>
                        <label><input type="checkbox"> Ventela</label>
                    </div>
                </div>
            </div>

            <section class="product-section">
                <?php if (!empty($products)) : ?>
                    <?php foreach ($products as $product) : ?>
                        <div class="product-card">
                            <div class="card-image">
                                <img src="../Assets/images/Heiden_Heritage_Fender.png" alt="Fender Heritage White">
                            </div>
                            <div class="card-details">
                                <p>Fender Heritage</p>
                                <p>White</p>
                                <p>RP 499.000</p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php else : ?>
                    <p>No data found</p>
                <?php endif; ?>
                <!-- <div class="product-card">
                    <div class="card-image">
                        <img src="../Assets/images/Kanky_EXC_02png.png" alt="EXC 02 KANKY White">
                    </div>
                    <div class="card-details">
                        <p>EXC 02</p>
                        <p>KANKY White</p>
                        <p>RP 350.000</p>
                    </div>
                </div>
                <div class="product-card">
                    <div class="card-image">
                        <img src="../Assets/images/Kanky_x_dr._Tirta_Story_Sensu.png" alt="Dr Tirta KANKY White">
                    </div>
                    <div class="card-details">
                        <p>Dr Tirta</p>
                        <p>KANKY White</p>
                        <p>RP 389.000</p>
                    </div>
                </div> -->
            </section>
            <!-- di atas ini nanti foreach -->
        </section>
        <div class="pagination">
            <span>Number of pages</span>
            <a href="#">&laquo;</a>
            <a href="#">1</a>
            <a href="#">2</a>
            <a href="#">3</a>
            <a href="#">&raquo;</a>
        </div>
    </main>
    <!-- footer -->
    <?php include '..\resources/footer.php'; ?>
</body>

</html>