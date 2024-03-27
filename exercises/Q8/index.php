<?php
session_start();

// TO DO: if user is logged in redirect to home.php

$loginError = '';

// TO DO: check if there is a login error and assign it to $loginError and unset it from $_SESSION

?>
<!DOCTYPE html>
<html>

<head>
  <title>Login</title>
</head>

<body>
  <?php if ($loginError) : ?>
    <p style="color:red;"><?php
                          // TO DO: display login error
                          ?></p>
  <?php endif; ?>

  <form action="authenticate.php" method="post">
    <label for="username">Username:</label>
    <input type="text" name="username" id="username" required><br>
    <label for="password">Password:</label>
    <input type="password" name="password" id="password" required><br>
    <button type="submit">Login</button>
  </form>

  <p>Or <a href="register.php">Register</a></p>
</body>

</html>