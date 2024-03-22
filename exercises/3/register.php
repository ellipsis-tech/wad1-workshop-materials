<?php
session_start();
require_once 'UserDAO.php';

$registerError = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $username = $_POST['username'] ?? '';
  $password = $_POST['password'] ?? '';

  $userDAO = new UserDAO();
  try {
    $userDAO->registerUser($username, $password);
    $_SESSION['login_error'] = 'Registration successful. Please login.';
    header('Location: index.php');
    exit();
  } catch (Exception $e) {
    $registerError = 'Username already exists or registration failed.';
  }
}
?>
<!DOCTYPE html>
<html>

<head>
  <title>Register</title>
</head>

<body>
  <?php if ($registerError) : ?>
    <p style="color:red;"><?php echo htmlspecialchars($registerError); ?></p>
  <?php endif; ?>

  <form action="register.php" method="post">
    <label for="username">Username:</label>
    <input type="text" name="username" id="username" required><br>
    <label for="password">Password:</label>
    <input type="password" name="password" id="password" required><br>
    <button type="submit">Register</button>
  </form>
</body>

</html>