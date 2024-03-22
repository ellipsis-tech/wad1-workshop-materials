<?php
require_once "autoload.php";

session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $username = $_POST['username'];
  $password = $_POST['password'];

  $userDAO = new UserDAO();
  $user = $userDAO->login($username, $password);

  if ($user) {
    echo "<p>Welcome, " . htmlspecialchars($user->getUsername()) . "!</p>";
    if ($user instanceof AdminUser) {
      echo "<p>" . $user->getSecretMessage() . "</p>";
    }
  } else {
    echo "<p>Invalid username or password.</p>";
  }
}
