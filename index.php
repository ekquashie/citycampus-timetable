<?php 
  session_start();
  if(isset($_SESSION['username'])) {
    header("location: dashboard.php");
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <title>Login Page</title>
</head>
<body>
  <section class="login-container">
    <div class="imgBox">
      <img src="assets/img/cutie1.jpg" alt="bg">
    </div>
    <div class="contentBox">
      <div class="formBox">
        <h2>Login</h2>
        <form method="POST" action="db/login.php">
          <div class="inputBox">
            <span>Username</span>
            <input type="text" name="username">
          </div>
          <div class="inputBox">
            <span>Password</span>
            <input type="password" name="password">
          </div>
          <div class="inputBox">
            <input type="submit" value="Sign in" name="">
          </div>
        </form>
      </div>
    </div>
  </section>
  
</body>
</html>