  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Completed</title>
    <link rel="stylesheet" href="Assets/css/completed.css">
    <link rel="stylesheet" href="Assets/css/sidebar.css">
    <link rel="stylesheet" href="Assets/css/style.css">
</head>
<body>
  <!-- Header -->
  <?php include 'sidebar.php' ?>

      <main>
      <div class="navbar">
        <img src="Assets/icon/bell.png" alt="notification" class="image-navbar">
        <img src="Assets/icon/akun.png" alt="profile" class="image-navbar">
      </div>

        <div class="content">
          <div class="form-section">
              <div id="form-title">
                <label for="product-id">Product ID</label>
                <label for="product-id">Product ID</label>
                <label for="brand">Brand</label>
                <label for="price">Price</label>
                <label for="quantity">Quantity</label>
                <label for="sale">Sale</label>
          </div>
        </div>

        <div class="product-list">
            <div class="product-card">
                <img src="Assets/images/Heiden_Heritage_-_Fender-white.png" alt="Product 1">
                <div class="product-details">
                    <p> 1234567</p>
                    <p>KANKY</p>
                    <p>RP 350.000</p>
                    <p>2</p>
                    <p>50</p>
                </div>
                <div class="product-actions">
                    <button>Change</button>
                    <button>Delete</button>
                </div>
            </div>

            <div class="product-card">
                <img src="Assets/images/Heiden_Heritage_-_Fender-white-streak.png" alt="Product 2">
                <div class="product-details">
                    <p> 1234567</p>
                    <p>KANKY</p>
                    <p>RP 350.000</p>
                    <p>2</p>
                    <p>50</p>
                </div>
                <div class="product-actions">
                    <button>Change</button>
                    <button>Delete</button>
                </div>
            </div>

          <div class="pagination">
            <button class="btn btn-primary"><</button>
            <span> 1 2 3 </span>
            <button class="btn btn-primary">></button>
          </div>
        </div>
      </main>

      <div class="footer">&copy; 2024 copyright</div>
      <script type="text/javascript" src="Assets/javascript/app.js" defer></script>
    </body>
</html>