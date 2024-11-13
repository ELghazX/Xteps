<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <link rel="stylesheet" href="Assets/css/dashboard.css">
  <link rel="stylesheet" href="Assets/css/sidebar.css">
  <link rel="stylesheet" href="Assets/css/style.css">
</head>

<body>
  <!-- Header -->
  <?php include 'sidebar.php' ?>
  
  <main>
    <div class="navbar">
      <img src="Assets/icon/bell.png" alt="notifikasi" class="image-navbar">
      <img src="Assets/icon/akun.png" alt="profil" class="image-navbar">
    </div>
    <div class="main-contain">
      <div class="top-section">
        <div class="top-selling">
          <h3>
            Top Selling Products
          </h3>
          <div class="product-list">
            <div class="product-card">
              <img src="Assets/images/Heiden_Heritage_-_Fender-white.png" alt="sepatu1">
              <p>Dr Tirta</p>
              <p>RP 350.000</p>
              <p>KANKY</p>
            </div>
            <div class="product-card">
              <img src="Assets/images/Kanky_-_Story_Kitadake_-_pink 2.png" alt="sepatu2">
              <p>Hiro Musashi</p>
              <p>RP 350.000</p>
              <p>KANKY</p>
            </div>
          </div>
          <div class="page">
            <button>1</button>
            <button>2</button>
            <button>3</button>
          </div>
        </div>
      <div class="top-selling-brands">
        <h3>
          Top Selling Brands
        </h3>
        <div class="brand-lists">
          <div class="brand-card">
            <img src="Assets/images/Heiden_Heritage_-_Fender-white.png" alt="brand1">
            <p>Story Kitadake</p>
            <p>RP 300.000</p>
            <p>KANKY</p>
          </div>
          <div class="brand-card">
            <img src="Assets/images/Kanky_-_Story_Kitadake_-_pink 2.png" alt="brand2">
            <p>Story Kitadake</p>
            <p>RP 300.000</p>
            <p>KANKY</p>
          </div>
        </div>
        <div class="page">
          <button>1</button>
          <button>2</button>
          <button>3</button>
        </div>
      </div>
    </div>
    <div class="recent-orders">
      <h3>Recents Orders</h3>
      <input type="text" placeholders="search" class="search-bar">
      <table>
        <thead>
          <tr>
            <th>Order ID</th>
            <th>Product</th>
            <th>Brand Name</th>
            <th>Customer Name</th>
            <th>Price</th>
            <th>In Stock</th>
            <th>Status</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1234567</td>
            <td><img src="Assets/images/Heiden_Heritage_-_Fender-white.png" alt="product"></td>
            <td>KANKY</td>
            <td>Nandaloeth</td>
            <td>RP 350.000</td>
            <td>100</td>
            <td>Done</td>
          </tr>
          <tr>
            <td>1324568</td>
            <td><img src="Assets/images/Kanky - Story_Kitadake 1.png" alt="product"></td>
            <td>KANKY</td>
            <td>Elghazz</td>
            <td>RP 350.000</td>
            <td>50</td>
            <td>Pending</td>
          </tr>
          <tr>
            <td>5678943</td>
            <td><img src="Assets/images/Heiden_Heritage_-_Fender-blue.png" alt="product"></td>
            <td>KANKY</td>
            <td>Rifikikul</td>
            <td>RP 350.000</td>
            <td>200</td>
            <td>Pending</td>
          </tr>
        </tbody>
      </table>
      <div class="page">
        <button>1</button>
        <button>2</button>
        <button>3</button>
      </div>
    </div>
  </div>
  <div class="footer">
      &copy; 2024 copyright
  </div>
  </main>
  <script type="text/javascript" src="Assets/javascript/app.js" defer></script>
</body>
</html>