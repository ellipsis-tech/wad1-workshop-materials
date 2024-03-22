<?php
require_once 'ConnectionManager.php';
require_once 'User.php';

class UserDAO
{
  public function getUserByUsernameAndPassword($username, $password)
  {
    $connMgr = new ConnectionManager();
    $pdo = $connMgr->getConnection();
    $sql = "SELECT * FROM users WHERE username=:username AND password=:password";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':username', $username, PDO::PARAM_STR);
    $stmt->bindParam(':password', md5($password), PDO::PARAM_STR);
    $stmt->execute();
    $user = null;
    if ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
      $user = new User($row['id'], $row['username']);
    }
    $stmt = null;
    $pdo = null;
    return $user;
  }

  public function registerUser($username, $password)
  {
    $connMgr = new ConnectionManager();
    $pdo = $connMgr->getConnection();
    $sql = "INSERT INTO users (username, password) VALUES (:username, :password)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':username', $username, PDO::PARAM_STR);
    $stmt->bindParam(':password', md5($password), PDO::PARAM_STR);
    $stmt->execute();
    $stmt = null;
    $pdo = null;
  }
}
