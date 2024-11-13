<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>
    <link rel="stylesheet" href="Assets/css/product_list.css">
    <link rel="stylesheet" href="Assets/css/sidebar.css">
</head>
<body>
  <!-- Header -->
  <?php include 'sidebar.php' ?>

  <main>
    <div class="navbar">
      <img src="Assets/icon/bell.png" alt="Notification" class="image-navbar">
      <img src="Assets/icon/akun.png" alt="Profile" class="image-navbar">
    </div>

    <div class="content">
      <h1>Product List</h1>


      <div class="product-list">
        <!-- Table Headers -->
        <div class="product-list-header">
          <p>Product</p>
          <p>Product ID</p>
          <p>Brand</p>
          <p>Price</p>
          <p>Quantity</p>
          <p>Sale</p>
          <p>Action</p>
        </div>

        <!-- Product Cards -->
        <?php for ($i = 0; $i < 5; $i++): ?>
        <div class="product-card">
          <img src="Assets/images/Heiden_Heritage_-_Fender-white.png" alt="Product Image">
          <div class="product-details">
            <p>1234567</p>
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
        <?php endfor; ?>

        <!-- Pagination -->
        <div class="pagination">
          <button class="btn btn-primary">&lt;</button>
          <span>1 2 3</span>
          <button class="btn btn-primary">&gt;</button>
        </div>
      </div>
    </div>
  </main>

  <div class="footer">&copy; 2024 copyright</div>
</body>
<script type="text/javascript" src="Assets/javascript/app.js" defer></script>
</html>
