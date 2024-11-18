<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account Page</title>
    <link rel="stylesheet" href="..\Assets/css/style.css?v=<?php echo time(); ?>">
</head>

<body>
    <header>
        <?php include 'resources/header.php';?>
    </header>

        
        <div class="content">
            <h1 class="section-title">Account</h1>
            <div class="profile-info">
                <div class="profile">
                    <img src="#" alt="Profile picture of Mr. Fool" width="150" height="150">
                    <h2>Mr. Fool</h2>
                </div>
                <div class="info-container">
                    <h2>Personal Information</h2>
                    <div class="info">
                        <div class="details">
                            <div>
                                <p><strong>First Name</strong><br/>Kleinn</p>
                                <p><strong>E-mail</strong><br/>thefool@gmail.com</p>
                            </div>
                            <div>
                                <p><strong>Last Name</strong><br/>Morretti</p>
                                <p><strong>Phone</strong><br/>+62 89018938805</p>
                            </div>
                        </div>
                        <h3>Address</h3>
                        <div class="address">
                            <div class="address-details">
                                <div>
                                    <p><strong>Country</strong><br/>Indonesia</p>
                                    <p><strong>City</strong><br/>Samarinda</p>
                                </div>
                                <div>
                                    <p><strong>Postal Code</strong><br/>75119</p>
                                    <p><strong>Province</strong><br/>East Kalimantan</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    <footer>
        <?php include 'resources/footer.php'; ?> 
    </footer>
</body>
</html>
