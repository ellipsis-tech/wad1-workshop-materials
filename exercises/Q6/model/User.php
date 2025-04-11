<?php
// User class definition
class User
{
  private $username;
  private $is_admin;
  private $hashed_password;

  public function __construct($username, $is_admin)
  {
    $this->username = $username;
    $this->is_admin = $is_admin;
    $this->hashed_password = $hashed_password;
  }

  public function getUsername()
  {
    return $this->username;
  }

  public function isAdmin()
  {
    return $this->is_admin;
  }
}
