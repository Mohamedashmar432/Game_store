<?php
session_start();
ob_start();
error_reporting(0);
include "user.class.php";
if ($_POST['username'] != null && $_POST['password'] != null && !empty($_POST['username']) && !empty($_POST['password'])) {
  $username = stripslashes(trim(htmlspecialchars($_POST['username'])));
  $password = stripslashes(trim(htmlspecialchars($_POST['password'])));
  $result = user::login($username, $password);
  if ($result) {
    header("Location:index.php");
    exit;
  } else {
?> <script>
      alert("user not exits")
      window.location.replace("http://localhost/Game_Store/login.php")
    </script>
  <?php

  }
} else {
  ?>


  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="login.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  </head>

  <body>
    <div class="wrapper">
      <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        <h1>Login</h1>
        <div class="input-box">
          <input type="text" placeholder="Username" name="username">
          <i class='bx bxs-user'></i>
        </div>
        <div class="input-box">
          <input type="password" placeholder="Password" name="password">
          <i class='bx bxs-lock-alt'></i>
        </div>
        <div class="remember-forgot">
          <label><input type="checkbox">Remember Me</label>
        </div>
        <button type="submit" class="btn">Login</button>
        <div class="register-link">
          <p>Dont have an account? <a href="registration.php">Register</a></p>
        </div>
      </form>
    </div>
  </body>

  </html>
<?php } ?>