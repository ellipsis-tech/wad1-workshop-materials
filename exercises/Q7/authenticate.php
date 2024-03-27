<?php
session_start();
require_once 'autoload.php';

$username = $_POST['username'];
$password = $_POST['password'];

// TO DO: call login method in UserDAO

// TO DO: if there is a user, store in session and redirect to dashboard.php
// TO DO: if there is no user, redirect to index.php

exit();
