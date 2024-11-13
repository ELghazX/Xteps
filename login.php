<?php
session_start();
include 'config/database.php';
require_once 'classes/Users.php';


$user = new User($db);

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  if (isset($_POST['Login'])) {
    if ($user->login()) {
      $_SESSION['username'] = $user->username;
      $_SESSION['role'] = $user->role;
      $_SESSION['email'] = $user->email;

      if ($user->role === 'admin') {
        header("Location: dashboard.php");
      } else {
        header("Location: index.php");
      }
      exit();
    } else {
      echo "
      <script>
      alert('Login Failed wrong username or password');
      </script>";
    }
  } elseif (isset($_POST['Register'])) {
    $user->username = $_POST['username'];
    $user->password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $user->email = $_POST['email'];
    $user->role = $_POST['role'] ?? 'user';

    if ($user->register()) {
      echo "
      <script>
      alert('Registrasi Successful!');
      </script>";
    } else {
      echo "
      <script>
      alert('Username or email Already exist');
      </script>";
    }
  }
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="icon" type="image/jpeg" href="img/icon.ico">
  <link rel="stylesheet" href="Assets/css/login.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body class="posisi">
  <header>
    <div>
      <img src="Assets/icon/logo.png" alt="Logo">
    </div>
    <nav>
      <a href="#">Best Sellers</a>
      <a href="#">New Releases</a>
      <a href="#">Collections</a>
      <a href="#">About</a>
    </nav>
    <div class="search-bar">
      <input type="text" placeholder="Search" class="search-input">
      <img src="Assets/icon/bag.png" alt="Cart Icon">
      <img src="Assets/icon/akun.png" alt="akun Icon">
    </div>
  </header>

  <div class="container">
    <input type="checkbox" id="flip">

    <div class="cover">
      <div class="front">
        <img src="Assets/images/login.jpg" alt="Login Image">
      </div>
      <div class="back">
        <img class="backImg" src="Assets/images/login.jpg" alt="Back Image">
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
                <input type="text" id="username" name="username" placeholder="Enter your email or username" required>
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
            <form action="" method="POST">
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
</body>

</html>