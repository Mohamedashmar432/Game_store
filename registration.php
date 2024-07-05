<?php
include 'database.class.php';
include "user.class.php";
error_reporting(0);
if (isset($_POST['username']) && isset($_POST["password"]) && isset($_POST["fullname"]) && isset($_POST["dob"]) && isset($_POST["mobile"]) && isset($_POST["email"])) {
  $user = stripslashes(trim(htmlspecialchars($_POST['username'])));
  $pass = stripslashes(trim(htmlspecialchars($_POST['password'])));
  $fullname = stripslashes(trim(htmlspecialchars($_POST["fullname"])));
  $email = stripslashes(trim(htmlspecialchars($_POST["email"])));
  $dob = stripslashes(trim(htmlspecialchars($_POST["dob"])));
  $mobile = stripslashes(trim(htmlspecialchars($_POST["mobile"])));

  $sign = user::signup($fullname, $user, $mobile, $email, $pass, $dob);
  if ($sign) { ?>
    <script>
      alert("signup success")
    </script> <?php
              header("location:login.php");
            } else {
              echo "something went wrong,try again signing up";
            }
          } else
              ?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Form</title>
  <link rel="stylesheet" href="registration.css">
</head>

<body>
  <div class="wrapper">
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
      <h1>Sign Up</h1>
      <div class="input-box">
        <input type="text" placeholder="Full Name" name="fullname" required>
        <i class='bx bxs-user'></i>
      </div>
      <div class="input-box">
        <input type="text" placeholder="Username" name="username" required>
        <i class='bx bxs-user'></i>
      </div>
      <div class="input-box">
        <input type="date" placeholder="Date of Birth" name="dob" required>
        <i class='bx bxs-user'></i>
      </div>
      <div class="input-box">
        <input type="text" placeholder="Mobile Number" name="mobile" required>
        <i class='bx bxs-user'></i>
      </div>
      <div class="input-box">
        <input type="email" placeholder="Email Id" name="email" required>
        <i class='bx bxs-user'></i>
      </div>
      <div class="input-box">
        <input type="password" placeholder="Password" name="password" required>
        <i class='bx bxs-lock-alt'></i>
      </div>
      <div class="remember-forgot">
        <label><input type="checkbox">Remember Me</label>
      </div>
      <button type="submit" class="btn">Login</button>
      <div class="register-link">
        <p>have an account? <a href="login.php">Sign In</a></p>
      </div>
    </form>
  </div>
</body>

</html>