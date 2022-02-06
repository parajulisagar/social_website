<?php
if (isset($_SESSION['user'])) {
  $sql = 'SELECT * FROM users WHERE email=:user';
  $stmt = $conn->prepare($sql);
  $stmt->execute(['user'=>$_SESSION['user']]);

  $user_details = $stmt->fetch(PDO::FETCH_ASSOC);

  if ($user_details['admin'] == 1) {
    echo '
    <li class="menu-item current-menu-item"><a href="index.php">Home</a></li>
    <li class="menu-item"><a href="post_campaign.php">Post Campaign</a></li>
    <li class="menu-item"><a href="my_campaigns.php">Campaigns</a></li>
    <li class="menu-item"><a href="admin_dash.php">Admin Dash</a></li>
    <li class="menu-item"><a href="about.php">About</a></li>
    <li class="menu-item"><a href="blog.php">Blog</a></li>
    <li class="menu-item"><a href="contact.php">Contact</a></li>
    <li class="menu-item"><a href="logout.php">Logout</a></li>
    ';
  }
  else {
    echo '
    <li class="menu-item current-menu-item"><a href="index.php">Home</a></li>
    <li class="menu-item"><a href="post_campaign.php">Post Campaign</a></li>
    <li class="menu-item"><a href="my_campaigns.php">Campaigns</a></li>
    <li class="menu-item"><a href="about.php">About</a></li>
    <li class="menu-item"><a href="blog.php">Blog</a></li>
    <li class="menu-item"><a href="contact.php">Contact</a></li>
    <li class="menu-item"><a href="logout.php">Logout</a></li>
    ';
  }
}
else {
  echo '
  <li class="menu-item current-menu-item"><a href="index.php">Home</a></li>
  <li class="menu-item"><a href="about.php">About</a></li>
  <li class="menu-item"><a href="blog.php">Blog</a></li>
  <li class="menu-item"><a href="contact.php">Contact</a></li>
  <li class="menu-item"><a href="login.php">Login</a></li>
  ';
}
 ?>
