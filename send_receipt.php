<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirm</title>
    <link rel="stylesheet" href="Assets/css/send_receipt.css">
    <link rel="stylesheet" href="Assets/css/sidebar.css">
</head>
<body>
  <!-- Sidebar -->
  <?php include 'sidebar.php' ?>

  <main>
    <div class="navbar">
      <img src="Assets/icon/bell.png" alt="Notification" class="image-navbar">
      <img src="Assets/icon/akun.png" alt="Profile" class="image-navbar">
    </div>

    <div class="content">
      <div class="order-list">
        <!-- Order Card 1 -->
        <div class="order-card">
          <div class="order-item">
            <img src="Assets/images/Heiden_Heritage_-_Fender-white.png" alt="Shoes 1">
            <img src="Assets/images/6c.png" alt="">
            <div class="order-info">
              <p>EXC 2</p>
              <p>Rp. 300.000</p>
              <p>Quantity: 1</p>
            </div>
          </div>
          <div class="order-details">
            <button>Upload</button>
            <button>Confirm</button>
          </div>
        </div>

        <!-- Order Card 2 -->
        <div class="order-card">
          <div class="order-item">
            <img src="Assets/images/Heiden_Heritage_-_Fender-white-streak.png" alt="Shoes 2">
            <img src="Assets/images/OIP.jpeg" alt="">
            <div class="order-info">
              <p>Story Kitadake</p>
              <p>Rp. 300.000</p>
              <p>Quantity: 1</p>
            </div>
          </div>
          <div class="order-details">
            <button>Upload</button>
            <button>Confirm</button>
          </div>

        <!-- Order Card 3 -->
        <div class="order-card">
          <div class="order-item">
            <img src="Assets/images/Heiden_Heritage_-_Fender-white-streak.png" alt="Shoes 2">
            <img src="Assets/images/OIP.jpeg" alt="">
            <div class="order-info">
              <p>Story Kitadake</p>
              <p>Rp. 300.000</p>
              <p>Quantity: 1</p>
            </div>
          </div>
          <div class="order-details">
            <button>Upload</button>
            <button>Confirm</button>
          </div>
        </div>
      </div>
    </div>
  </main>

  <div class="footer">&copy; 2024 Copyright</div>

  <script type="text/javascript" src="Assets/javascript/app.js" defer></script>
</body>
</html>
