<?php require_once ('connect.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hytec Power Inc. Login</title>
  <link rel="stylesheet" href="css/login_styles.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,300;0,500;0,700;1,500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<body>


  <div class="container">
    <div class="login-form">
      <div class="header">
        <img src="images/hytec-logo.png" alt="Hytec Power Inc. Logo">
      </div>
      <h2>LOGIN</h2>
      <form method="post" action="signin.php">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" placeholder="Enter username" required>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" maxlength="15" placeholder="Enter password" required>
        <label for="username">Select Department:</label>
        <button type="submit" class="submit-btn" name="signIn">Sign In <i class="fa-solid fa-right-to-bracket"></i></button>
      </form>
    </div>
  </div>
  <script src="script.js"></script>
</body>

</html>