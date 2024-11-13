<nav id="sidebar">
    <ul>
        <li>
            <img src="Assets/icon/logo.png" alt="logo" class="logo">
            <button onclick="toggleSidebar()" id="toggle-btn">
                <img src="Assets/icon/arrow_hamburg.png" alt="menu" class="icon">
            </button>
        </li>
        <li>
            <button onclick="toggleSubMenu(this)" class="dropdown-btn">
                <img src="Assets/icon/dashboard.png" alt="dashboard" class="icon">
                <span>Dashboard</span>
            </button>

            <button onclick="toggleSubMenu(this)" class="dropdown-btn">
                <img src="Assets/icon/cart.png" alt="E-Commerce" class="icon">
                <span>E-Commerce</span>
            </button>
              <ul class="sub-menu">
                  <li><a href="add_pro.php">Add Product</a></li>
                  <li><a href="product_list.php">Product List</a></li>
              </ul>

            <button onclick="toggleSubMenu(this)" class="dropdown-btn">
                <img src="Assets/icon/order.png" alt="Order" class="icon">
                <span>Order</span>
            </button>
              <ul class="sub-menu">
                  <li><a href="confirm.php">Confirm Order</a></li>
                  <li><a href="send_receipt.php">Send Receipt</a></li>
                  <li><a href="completed.php">Complete Order</a></li>
              </ul>

        </li>

        <li class="sidebar-footer">
            <a href="profil.php">
                <img src="Assets/icon/akun.png" alt="Profile" class="icon">
                <span>Profile</span>
            </a>
            <a href="logout.php">
                <img src="Assets/icon/log out.png" alt="Log Out" class="icon">
                <span>Log Out</span>
            </a>
        </li>
    </ul>
</nav>
