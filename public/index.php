<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="..\Assets/css/public.css?v=<?php echo time(); ?>">
    <script type="text/javascript" src="..\Assets/javascript/app.js" defer></script>
</head>

<body>
    <!-- navigation -->
    <?php require_once '../resources/navbar.php'; ?>
    <!-- Main Content -->
    <main>
        <section class="product-highlight">
            <div class="product-info">
                <h1>Kanky Story Kitadake</h1>
                <p class="price">Rp 299.000</p>
                <div class="colors">
                    <span>Colors:</span>
                    <div class="color-options">
                        <span class="color green"></span>
                        <span class="color black"></span>
                        <span class="color white"></span>
                        <span class="color red"></span>
                    </div>
                </div>

                <div class="sizes">
                    <span>Size:</span>
                    <div class="size-options">
                        <span class="size">5</span>
                        <span class="size">7</span>
                        <span class="size">9</span>
                    </div>
                </div>

            </div>
            <div class="product-image">
                <img src="..\Assets/images/Kanky_-_Story_Kitadake_-_pink 2.png" alt="Kanky Story Kitadake">
            </div>
        </section>

        <!-- footer -->
        <?php include '..\resources/footer.php'; ?>
    </main>
</body>

</html>