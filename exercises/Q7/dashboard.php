<?php
session_start();
if (!isset($_SESSION['username'])) {
  header('Location: index.php');
  exit();
}

echo "<p>Welcome, " . htmlspecialchars($_SESSION['username']) . "</p>";
if ($_SESSION['is_admin']) {
  echo "<p>Access to admin content.</p>";
}
?>
<p><a href="logout.php">Logout</a></p>