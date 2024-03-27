<?php
require_once "autoload.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $username = $_POST['username'];
  $password = $_POST['password'];

  // TO DO: call login method in UserDAO

  // TO DO: if there is a user, display welcome message and secret message if user is an admin
  // TO DO: if there is no user, display "Invalid username or password."
}
