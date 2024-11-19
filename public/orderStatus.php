<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mockup Design</title>
  <link rel="stylesheet" href="../Assets/css/style.css">
</head>
<body>
  <header>
    <?php include '../resources/header.php' ?>
  </header>
  <main>
    <section class="orders">
      <div class="order">
        <img src="../Assets/images/Kanky_EXC_02png.png" alt="EXC 2">
        <div class="details">
          <h3>EXC 2</h3>
          <p>Kanky</p>
          <p>Rp 300.000</p>
          <p>Size 5</p>
        </div>
        <div class="status">
          <button class="processed">Processed</button>
          <a href="#">Shipping receipt</a>
        </div>
      </div>

      <div class="order">
        <img src="../Assets/images/Kanky_Story_Kitadakepng.png" alt="Story Kitadake">
        <div class="details">
          <h3>Story Kitadake</h3>
          <p>Kanky</p>
          <p>Rp 300.000</p>
          <p>Size 5</p>
        </div>
        <div class="status">
          <button class="processed">Processed</button>
          <a href="#">Shipping receipt</a>
        </div>
      </div>
    </section>
  </main>

  <footer>
    <?php include '../resources/footer.php' ?>
  </footer>
</body>
</html>
