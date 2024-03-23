<?php
session_start();
if (!isset($_SESSION['user'])) {
  header('Location: index.php');
  exit();
}

require_once 'PostDAO.php';
$user = $_SESSION['user'];
$postDAO = new PostDAO();
$posts = $postDAO->getPostsByUserId($user->getId());
?>
<!DOCTYPE html>
<html>

<head>
  <title>Dashboard</title>
</head>

<body>
  <h1>Welcome, <?php echo htmlspecialchars($user->getUsername()); ?></h1>
  <a href="create_post.php">Create Post</a>
  <a href="logout.php">Logout</a>

  <h2>Your Posts</h2>
  <?php foreach ($posts as $post) : ?>
    <div>
      <p><?php echo htmlspecialchars($post->getContent()); ?></p>
      <p>Posted on: <?php echo htmlspecialchars($post->getCreatedAt()); ?></p>
    </div>
  <?php endforeach; ?>
</body>

</html>