<?php
require_once "autoload.php";
?>
<!DOCTYPE html>
<html>

<head>
  <title>Login</title>
</head>

<body>
  <form action="dashboard.php" method="post">
    <label for="username">Username:</label>
    <input type="text" name="username" id="username" required><br>
    <label for="password">Password:</label>
    <input type="password" name="password" id="password" required><br>
    <button type="submit">Login</button>
  </form>
</body>

</html>