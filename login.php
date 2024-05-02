<?php require_once('connect.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hytec Power Inc. Login</title>
    <link rel="stylesheet" href="css/login_styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,300;0,500;0,700;1,500&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.8/dist/sweetalert2.all.min.js"></script>
</head>

<body>
    <div class="container">
        <div class="login-form">
            <div class="header">
                <img src="hytec-logo.png" alt="Hytec Power Inc. Logo">
            </div>
            <h2>LOGIN</h2>
            <form method="post" id="loginForm">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" placeholder="Enter username" required>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" maxlength="15" placeholder="Enter password"
                    required>
                <button type="submit-login" class="submit-btn" name="signIn">Sign In <i
                        class="fa-solid fa-right-to-bracket"></i></button>
            </form>
            <?php
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve form data
        $username = $_POST['username'];
        $password = $_POST['password'];
        // You can perform further validation here if needed
        // Example: Check if username and password are not empty
        if (!empty($username) && !empty($password)) {
          // Query to check if the username and password match a record in the database
          $query = "SELECT * FROM tbl_login WHERE user='$username' AND pass='$password'";
          $result = mysqli_query($conn, $query);
          // Check if query was successful
          if ($result) {
            // Check if any rows were returned
            if (mysqli_num_rows($result) > 0) {
              // Authentication successful
              echo "<script>
                                    Swal.fire({
                                        position: 'center',
                                        icon: 'success',
                                        title: 'Login Successful!',
                                        showConfirmButton: false,
                                        timer: 1500
                                    }).then(() => {
                                        window.location.href = 'index.php'; // Redirect after showing the success message
                                    });
                                </script>";
              exit();
            } else {
              // Authentication failed
              echo "<script>
                  Swal.fire({
                      icon: 'error',
                      title: 'Oops...',
                      text: 'Invalid username or password, Please Try Again.',
                  });
              </script>";
            }
          } else {
            // Query execution failed
            echo "Query failed: " . mysqli_error($conn);
          }
        } else {
          // Username or password is empty
          echo "Username or password cannot be empty!";
        }
      }
      ?>
        </div>
    </div>
</body>

</html>