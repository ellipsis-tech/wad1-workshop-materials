<?php
session_start();
if (!isset($_SESSION['user'])) {
  header('Location: index.php');
  exit();
}

$posts = [];
// TO DO: get posts of current user

?>
<!DOCTYPE html>
<html>

<head>
  <title>Dashboard</title>
</head>

<body>
  <h1>Welcome, <?php
                // TO DO: display username of current user
                ?></h1>
  <a href="create_post.php">Create Post</a>
  <a href="home.php">Home</a>
  <a href="logout.php">Logout</a>

  <h2>Your Posts</h2>
  <?php foreach ($posts as $post) : ?>
    <!-- TO DO: Display posts -->
  <?php endforeach; ?>
</body>

</html>