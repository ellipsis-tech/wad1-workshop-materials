<?php

class UserDAO
{
  public function login($username, $password)
  {
    // TO DO: call connection manager to get PDO connection

    // TO DO: execute SQL to retrieve user with username = $username and password = $password

    // TO DO: return User object if found, else return null

    $user = null;

    // TO DO: if user is an admin, return AdminUser object and if not, return User object

    // TO DO: free up resources

    return $user;
  }
}
