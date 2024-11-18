<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
    <link rel="stylesheet" href="..\Assets/css/style.css?v=<?php echo time(); ?>">
    <script type="text/javascript" src="..\Assets/javascript/app.js" defer></script>
</head>
<body>
    <!-- navigation -->
    <?php include 'sidebar.php'; ?>

    <!-- main content -->
    <main>
        <div class="top-head">
            <button><a href="notification.php"><img src="..\Assets/icon/notifications.svg" alt="notification"></a></button>
            <a href="login.php"><img src="..\Assets/icon/account_circle.svg" alt="account"></a>
        </div>

        <div class="content">
            <h2>Add Product</h2>
            <div class="form-layout">
                <div class="main-drag-drop-area" id="mainImage">
                    <p>Drag and Drop files</p>
                </div>

                <div class="product-details">
                    <label for="productName">Product Name</label>
                    <input type="text" id="productName" placeholder="Enter product name">

                    <label for="price">Price</label>
                    <input type="text" id="price" placeholder="Enter price">

                    <label for="description">Description</label>
                    <textarea id="description" placeholder="Enter description"></textarea>
                </div>
            </div>

            <h3>Other</h3>
                <div class="other-images">
                <div class="sub-drag-drop-area" id="otherImage1"><p>Drag and Drop files</p></div>
                <div class="sub-drag-drop-area" id="otherImage2"><p>Drag and Drop files</p></div>
                <div class="sub-drag-drop-area" id="otherImage3"><p>Drag and Drop files</p></div>
                <div class="sub-drag-drop-area" id="otherImage4"><p>Drag and Drop files</p></div>
                <div class="sub-drag-drop-area" id="otherImage5"><p>Drag and Drop files</p></div>
                <div class="sub-drag-drop-area" id="otherImage6"><p>Drag and Drop files</p></div>
            </div>

            <div class="addon-info">
                <div class="category-group">
                    <h3>Category</h3>
                    <div class="options">
                    <button class="category-btn">Low top</button>
                    <button class="category-btn">High top</button>
                    <button class="category-btn">Dunks</button>
                    </div>
                </div>

                <div class="category-group">
                    <h3>Colors</h3>
                    <div class="options">
                    <button class="category-btn">Colors 1</button>
                    <button class="category-btn">Colors 2</button>
                    <button class="category-btn">Colors 3</button>
                    <button class="category-btn">Colors 4</button>
                    </div>
                </div>

                <div class="category-group">
                    <h3>Size</h3>
                    <div class="options">
                    <button class="category-btn">Size 1</button>
                    <button class="category-btn">Size 2</button>
                    <button class="category-btn">Size 3</button>
                    <button class="category-btn">Size 4</button>
                    </div>
                </div>

                <div class="category-group">
                    <h3>Tag</h3>
                    <div class="options">
                    <button class="category-btn">Best seller</button>
                    <button class="category-btn">New Release</button>
                    </div>
                </div>
            </div>

            <div class="form-buttons">
                <button class="cancel-btn">Cancel</button>
                <button class="save-btn">Save</button>
            </div>
        </div>

        <!-- footer -->
        <footer>
            &copy; 2024 copyright
        </footer>
    </main>
</body>
</html>