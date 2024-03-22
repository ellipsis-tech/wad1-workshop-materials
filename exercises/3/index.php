<?php
session_start();
if (isset($_SESSION['user'])) {
  header('Location: dashboard.php');
  exit();
}

$loginError = '';
if (isset($_SESSION['login_error'])) {
  $loginError = $_SESSION['login_error'];
  unset($_SESSION['login_error']);
}
?>
<!DOCTYPE html>
<html>

<head>
  <title>Login</title>
</head>

<body>
  <?php if ($loginError) : ?>
    <p style="color:red;"><?php echo htmlspecialchars($loginError); ?></p>
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