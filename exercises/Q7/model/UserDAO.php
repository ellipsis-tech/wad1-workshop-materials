<?php

class UserDAO
{
  public function login($username, $password)
  {
    $connMgr = new ConnectionManager();
    $pdo = $connMgr->getConnection();

    $sql = "SELECT * FROM users WHERE username = :username";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':username', $username);
    $stmt->execute();

    $user = null;
    if ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
      $user = new User($row['username'], $row['is_admin'], $row['password']);
    }

    $stmt = null;
    $pdo = null;

    if ($user) {
      if (password_verify($password, $user->getHashedPassword())) {
        return $user;
      }
    }

    return null;
  }
}
