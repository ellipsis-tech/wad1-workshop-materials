<?php
session_start();
if (!isset($_SESSION['user'])) {
  header('Location: index.php');
  exit();
}

require_once 'PostDAO.php';
$postError = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $content = $_POST['content'] ?? '';
  if (trim($content)) {
    $user = $_SESSION['user'];
    $postDAO = new PostDAO();
    $postDAO->createPost($user->getId(), $content);
    header('Location: dashboard.php');
    exit();
  } else {
    $postError = 'Post content cannot be empty.';
  }
}
?>
<!DOCTYPE html>
<html>

<head>
  <title>Create Post</title>
</head>

<body>
  <h1>Create a New Post</h1>

  <?php if ($postError) : ?>
    <p style="color:red;"><?php echo htmlspecialchars($postError); ?></p>
  <?php endif; ?>

  <form action="create_post.php" method="post">
    <textarea name="content" rows="4" cols="50" required></textarea><br>
    <button type="submit">Post</button>
  </form>

  <p><a href="dashboard.php">Back to Dashboard</a></p>
</body>

</html>