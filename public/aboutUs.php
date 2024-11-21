<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="../Assets/css/aboutUs.css?v=<?echo time(); ?>">
    <link rel="stylesheet" href="../Assets/css/public.css?v=<?echo time(); ?>">
</head>

<body>
    <!-- navigation -->
    <?php include '../resources/navbar.php'; ?> 
<h1>About Us</h1>
<main>
    <div class="story">
        <h2>STEP INTO QUALITY, CRAFTED LOCALLY</h2>
        <p>
            Welcome to XTEPS, your one-stop destination for quality local footwear. We believe that style, comfort, and quality should go hand in hand, which is why we proudly bring you shoes crafted with precision by talented local artisans.
            Our journey started with a vision to showcase the beauty and uniqueness of Indonesian-made shoes. We source our materials locally, ensuring that every pair reflects our commitment to sustainable fashion and supporting local businesses.
            Whether you're looking for casual sneakers or elegant dress shoes, we have a wide selection to suit every style and occasion. At XTEPS, we are passionate about delivering not just great products, but also a great shopping experience.
            Thank you for choosing us. Let’s step forward in style, together!
        </p>
    </div>

    <div class="member">
        <h2>Meet the Team</h2>
        <div class="container">
            <div class="card rounded-left">
                <div class="image-container">
                    <img alt="Profile picture of Raihan Ramadhini Putri" src="..\Assets/images/putri.jpg">
                </div>
                <div class="yellow-line"></div>
                <div class="info">
                    <p>Raihan Ramadhini Putri</p>
                    <p>2309106008</p>
                </div>
            </div>

            <div class="card">
                <div class="image-container">
                    <img alt="Profile picture of Muhammad Ghazali" src="..\Assets/images/ghazali.jpg" />
                </div>
                <div class="yellow-line"></div>
                <div class="info">
                    <p>Muhammad Ghazali</p>
                    <p>2309106041</p>
                </div>
            </div>

            <div class="card rounded-right">
                <div class="image-container">
                    <img alt="Profile picture of Ananda Luthfiah Febiani" src="..\Assets/images/nanda.jpg" />
                </div>
                <div class="yellow-line"></div>
                <div class="info">
                    <p>Ananda Luthfiah Febiani</p>
                    <p>2309106022</p>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="card rounded-left">
                <div class="image-container">
                    <img alt="Profile picture of Demosa Guardy Nugroho" src="..\Assets/images/demossjpg.jpg" />
                </div>
                <div class="yellow-line"></div>
                <div class="info">
                    <p>Demosa Guardy Nugroho</p>
                    <p>2309106026</p>
                </div>
            </div>

            <div class="card">
                <div class="image-container">
                    <img alt="Profile picture of Rifki Abiyan" src="..\Assets/images/rifki.jpg" />
                </div>
                <div class="yellow-line"></div>
                <div class="info">
                    <p>Rifki Abiyan</p>
                    <p>2309106030</p>
                </div>
            </div>

            <div class="card rounded-right">
                <div class="image-container">
                    <img alt="Profile picture of Muhammad Jahron" src="..\Assets/images/jahron.jpg" />
                </div>
                <div class="yellow-line"></div>
                <div class="info">
                    <p>Muhammad Jahron</p><br>
                    <p>2309106037</p>
                </div>
            </div>
        </div>
    </div>
</main>
<!-- footer -->
<?php include '..\resources/footer.php'; ?>
</body>
</html>