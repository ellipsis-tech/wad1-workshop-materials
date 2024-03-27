<?php
session_start();
require_once 'autoload.php';

$username = $_POST['username'];
$password = $_POST['password'];

$userDAO = new UserDAO();
$user = $userDAO->login($username, $password);

if ($user) {
  $_SESSION['username'] = $user->getUsername();
  $_SESSION['is_admin'] = $user->isAdmin();
  header('Location: dashboard.php');
} else {
  header('Location: index.php');
}
exit();
