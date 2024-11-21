<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kanky Story Kitadake</title>
    <link rel="stylesheet" href="../Assets/css/productdetails.css?v=<?echo time(); ?>">
    <link rel="stylesheet" href="../Assets/css/public.css?v=<?echo time(); ?>">
</head>
<body>
    <!-- navigation -->
    <?php include '../resources/navbar.php'; ?> 
<main>
    <div class=" product-section">
    <div class="product-container">
        <div class="product-image">
            <img src="../Assets/images/Kankypink 1.png" alt="Kanky Story Kitadake">
        </div>
        <div class="thumbnail-images">
            <div class="thumbnail-container">
                <img src="../Assets/images/Kanky1.png" alt="Shoe Thumbnail 1">
            </div>
            <div class="thumbnail-container">
                <img src="../Assets/images/Kanky 2.png" alt="Shoe Thumbnail 2">
            </div>
            <div class="thumbnail-container">
                <img src="../Assets/images/Kanky3.png" alt="Shoe Thumbnail 3">
            </div>
        </div>
    </div>
    </div>


    <div class="product-details">
        <h1>Kanky Story Kitadake</h1>
        <p class="price"><br>Rp 299.000</p>
        <br>
        <p class="description">
            The Kanky Story Kitadake is a casual sport style hiking shoe that combines outdoor looks with a touch of casual sports style. It's made from high quality materials.
        </p>
        <p>Colors</p>
        <div class="colors">
            <div class="color" style="background-color: #008080;"></div>
            <div class="color" style="background-color: #ff69b4;"></div>
            <div class="color" style="background-color: #000000;"></div>
            <div class="color" style="background-color: #ffffff; border: 1px solid #ccc;"></div>
        </div>
        <p>Size</p>
        <div class="sizes">
            <button>5</button>
            <button>7</button>
            <button>9</button>
        </div>
        <button class="add-to-cart">Add To Cart</button>
    </div>
    </div>
    <section class="recommendations">
        <h2>You might also like</h2><br>
        <div class="recommendation-cards">
            <div class="card">
                <img src="../Assets/images/Heiden_Heritage_-_Fender-abu.png" alt="Kanky X Dr Tirta">
                <p><strong>Kanky X Dr Tirta</strong></p>
                <p>KANKY</p>
                <p>White</p>
                <p><strong>Rp 350.000</strong></p>
            </div>
            <div class="card">
                <img src="../Assets/images/Heiden_Heritage_-_Fender-biru.png" alt="Hiro Musashi">
                <p><strong>Hiro Musashi</strong></p>
                <p>KANKY</p>
                <p>White</p>
                <p><strong>Rp 350.000</strong></p>
            </div>
            <div class="card">
                <img src="../Assets/images/Heiden_Heritage_-_Fender-removebg-preview 1.png" alt="Story Tsunagari">
                <p><strong>Story Tsunagari</strong></p>
                <p>KANKY</p>
                <p>White</p>
                <p><strong>Rp 350.000</strong></p>
            </div>
        </div>
    </section>
</main>
<!-- footer -->
<?php include '..\resources/footer.php'; ?>

</body>
</html>