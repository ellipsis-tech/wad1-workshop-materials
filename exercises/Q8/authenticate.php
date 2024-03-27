<?php
session_start();

$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

$userDAO = new UserDAO();
$user = $userDAO->getUserByUsernameAndPassword($username, $password);

if ($user) {
  $_SESSION['user'] = $user;
  header('Location: home.php');
} else {
  $_SESSION['login_error'] = 'Invalid username or password';
  header('Location: index.php');
}
exit();
