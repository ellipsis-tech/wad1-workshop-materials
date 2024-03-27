<?php
session_start();
if (isset($_SESSION['username'])) {
  header('Location: dashboard.php');
  exit();
}
?>
<!DOCTYPE html>
<html>

<head>
  <title>Login</title>
</head>

<body>
  <form action="authenticate.php" method="post">
    <label for="username">Username:</label>
    <input type="text" name="username" id="username" required><br>
    <label for="password">Password:</label>
    <input type="password" name="password" id="password" required><br>
    <button type="submit">Login</button>
  </form>
</body>

</html>