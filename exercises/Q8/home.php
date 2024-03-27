<?php
session_start();

// TO DO: check if user is logged in, else redirect to index.php


$posts = [];
// TO DO: get ALL posts from PostDAO

?>
<!DOCTYPE html>
<html>

<head>
  <title>Dashboard</title>
</head>

<body>
  <h1>Welcome, <?php echo htmlspecialchars($user->getUsername()); ?></h1>
  <a href="create_post.php">Create Post</a>
  <a href="dashboard.php">Your Posts</a>
  <a href="logout.php">Logout</a>

  <h2>Posts</h2>
  <?php foreach ($posts as $post) : ?>
    <!-- TO DO: Display posts -->
  <?php endforeach; ?>
</body>

</html>