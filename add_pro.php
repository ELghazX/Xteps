<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add Product</title>
  <link rel="stylesheet" href="Assets/css/add_pro.css">
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

    <div>
      <h2>Add Product</h2>
    </div>
    <div class="product-form">
      <!-- Main Image Drop Zone -->
      <div class="main-image">
        <p>Drag and Drop files</p>
      </div>
      
      <!-- Other Images Drop Zone -->
      <div class="other-images">
        <label>Other</label>
        <div class="image-grid">
          <div class="image-box"><p>Drag and Drop files</p></div>
          <div class="image-box"><p>Drag and Drop files</p></div>
          <div class="image-box"><p>Drag and Drop files</p></div>
          <div class="image-box"><p>Drag and Drop files</p></div>
          <div class="image-box"><p>Drag and Drop files</p></div>
          <div class="image-box"><p>Drag and Drop files</p></div>
        </div>
      </div>

      <!-- Product Details Form -->
      <div class="form-inputs">
        <div class="input-field">
          <label for="product-name">Product Name</label>
          <input type="text" id="product-name" placeholder="Enter product name">
        </div>
        <div class="input-field">
          <label for="price">Price</label>
          <input type="number" id="price" placeholder="Enter price">
        </div>
        <div class="input-field">
          <label for="description">Description</label>
          <textarea id="description" placeholder="Enter description"></textarea>
        </div>
        
        <!-- Categories -->
        <div class="categories">
          <label>Category</label>
          <div class="category-option">
            <button type="button">Low Top</button>
            <button type="button">High Top</button>
            <button type="button">Dunks</button>
          </div>
        </div>
        
        <!-- Colors -->
        <div class="colors">
          <label>Colors</label>
          <div class="color-option">
            <button type="button">Colors 1</button>
            <button type="button">Colors 2</button>
            <button type="button">Colors 3</button>
            <button type="button">Colors 4</button>
          </div>
        </div>

        <!-- Sizes -->
        <div class="sizes">
          <label>Size</label>
          <div class="size-option">
            <button type="button">Size 1</button>
            <button type="button">Size 2</button>
            <button type="button">Size 3</button>
            <button type="button">Size 4</button>
          </div>
        </div>
        
        <!-- Tags -->
        <div class="tags">
          <label>Tag</label>
          <div class="tag-options">
            <button type="button">Best Seller</button>
            <button type="button">New Release</button>
            <button type="button">Lorem</button>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Buttons -->
    <div class="buttons">
      <button class="cancel">Cancel</button>
      <button class="save">Save</button>
    </div>
  </main>

  <!-- Footer -->
  <div class="footer">&copy; 2024 copyright</div>
  <script type="text/javascript" src="Assets/javascript/app.js" defer></script>
</body>
</html>
