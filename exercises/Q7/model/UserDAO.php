<?php

class UserDAO
{
  public function login($username, $password)
  {
    $connMgr = new ConnectionManager();
    $pdo = $connMgr->getConnection();

    $sql = "SELECT * FROM users WHERE username = :username AND password = MD5(:password)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':password', $password);
    $stmt->execute();

    $user = null;
    if ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
      if ($row['is_admin']) {
        $user = new AdminUser($row['username'], $row['is_admin']);
      } else {
        $user = new User($row['username'], $row['is_admin']);
      }
    }

    $stmt = null;
    $pdo = null;

    return $user;
  }
}
