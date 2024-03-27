<?php
session_start();

$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

// TO DO: call getUserByUsernameAndPassword method in UserDAO to get user


// TO DO: if there is a user, store in session and redirect to home.php
// TO DO: if there is no user, store error message "Invalid username or password" in session and redirect to index.php

exit();
