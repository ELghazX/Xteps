<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Shopping Cart</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <div class="shopping-cart">
    <h1>Shopping Cart</h1>
    <div class="cart-container">
      <div class="items">
        <h2>2 items in your bag</h2>
        <div class="item">
          <img src="https://via.placeholder.com/80" alt="EXC 2 Kankey">
          <div class="details">
            <p><strong>EXC 2</strong></p>
            <p>Kankey</p>
            <p>Rp 300,000</p>
            <p>Size 5</p>
          </div>
          <div class="quantity">
            <button>-</button>
            <span>1</span>
            <button>+</button>
          </div>
        </div>
        <div class="item">
          <img src="https://via.placeholder.com/80" alt="Story Kitadake Kankey">
          <div class="details">
            <p><strong>Story Kitadake</strong></p>
            <p>Kankey</p>
            <p>Rp 300,000</p>
            <p>Size 5</p>
          </div>
          <div class="quantity">
            <button>-</button>
            <span>1</span>
            <button>+</button>
          </div>
        </div>
      </div>
      <div class="summary">
        <h2>Summary</h2>
        <div class="summary-item">
          <div>
            <img src="https://via.placeholder.com/50" alt="EXC 2 Kankey">
            <p>EXC 2 Kankey Size 5</p>
          </div>
          <p>Rp 300,000</p>
        </div>
        <div class="summary-item">
          <div>
            <img src="https://via.placeholder.com/50" alt="Story Kitadake Kankey">
            <p>Story Kitadake Kankey Size 5</p>
          </div>
          <p>Rp 300,000</p>
        </div>
        <div class="total">
          <p>Sub Total</p>
          <p>Rp 600,000</p>
        </div>
        <button class="checkout">Checkout</button>
      </div>
    </div>
  </div>
</body>
</html>
