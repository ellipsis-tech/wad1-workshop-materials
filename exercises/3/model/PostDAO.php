<?php
require_once 'ConnectionManager.php';
require_once 'Post.php';

class PostDAO
{
  public function createPost($userId, $content)
  {
    $connMgr = new ConnectionManager();
    $pdo = $connMgr->getConnection();
    $sql = "INSERT INTO posts (user_id, content) VALUES (:userId, :content)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':userId', $userId, PDO::PARAM_INT);
    $stmt->bindParam(':content', $content, PDO::PARAM_STR);
    $stmt->execute();
    $stmt = null;
    $pdo = null;
  }

  public function getPostsByUserId($userId)
  {
    $connMgr = new ConnectionManager();
    $pdo = $connMgr->getConnection();
    $sql = "SELECT * FROM posts WHERE user_id = :userId ORDER BY created_at DESC";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':userId', $userId, PDO::PARAM_INT);
    $stmt->execute();
    $posts = [];
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
      $posts[] = new Post($row['post_id'], $row['user_id'], $row['content'], $row['created_at']);
    }
    $stmt = null;
    $pdo = null;
    return $posts;
  }
}
