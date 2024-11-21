<?php
session_start();
require_once '../config/database.php';
require_once '../config/functions.php';
if (isset($_SESSION['idUser'])) {
  header('Location: ../index.php');
}
$conn = new Database();

?>
<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="icon" type="image/jpeg" href="img/icon.ico">
  <link rel="stylesheet" href="..\Assets/css/login.css">
  <link rel="stylesheet" href="..\Assets/css/public.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
  <!-- navigation -->
  <?php include '../resources/navbar.php'; ?>

  <main>
    <div class="container">
      <input type="checkbox" id="flip">

      <div class="cover">
        <div class="front">
          <img src="..\Assets/images/login.jpg" alt="Login Image">
        </div>
        <div class="back">
          <img class="backImg" src="..\Assets/images/login.jpg" alt="Back Image">
        </div>
      </div>

      <div class="forms">
        <div class="form-content">
          <div class="login-form">
            <div class="form-header">
              <div class="title">Login</div>
              <div class="title"><label for="flip">Register</label></div>
            </div>
            <form action="login.php" method="POST">
              <div class="input-boxes">
                <div class="input-box">
                  <input type="text" id="username" name="input" placeholder="Enter your email or username" required>
                </div>
                <div class="input-box">
                  <input type="password" id="password" name="password" placeholder="Enter your password" required>
                </div>
                <div class="button input-box">
                  <input type="submit" name="Login" value="Login">
                </div>
              </div>
            </form>
          </div>

          <div class="signup-form">
            <div class="register-form">
              <div class="form-header">
                <div class="title"><label for="flip">Login</label></div>
                <div class="title">Register</div>
              </div>
              <form action="register.php" method="POST">
                <div class="input-boxes">
                  <div class="input-box">
                    <input type="email" id="email" name="email" placeholder="Enter your email" required>
                  </div>
                  <div class="input-box">
                    <input type="text" id="username" name="username" placeholder="Enter your username" required>
                  </div>
                  <div class="input-box">
                    <input type="password" id="password" name="password" placeholder="Enter your password" required pattern=".{8,}" title="Password must be at least 8 characters">
                  </div>
                  <div class="button input-box">
                    <input type="submit" name="Register" value="Register">
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

  </main>
</body>



</body>

</html>