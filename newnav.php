<?php
include 'database.php';
session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
nav {
  background-color: #f0f0f0;
  padding: 10px;
}

.menu-container {
  max-width: 960px;
  margin: 0 auto;
}

.menu {
  list-style-type: none;
  margin: 0;
  padding: 0;
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.menu li {
  margin-right: 10px;
}

.menu li a {
  text-decoration: none;
  color: #333;
  padding: 5px;
}

.profile {
  position: relative;
}

.profile .profile-link {
  text-decoration: none;
  color: #333;
  padding: 5px;
}

.profile .profile-menu {
  position: absolute;
  top: 100%;
  right: 0;
  background-color: #f0f0f0;
  border: 1px solid #ccc;
  display: none;
}

.profile .profile-menu ul {
  list-style-type: none;
  padding: 0;
  margin: 0;
}

.profile .profile-menu ul li {
  padding: 5px;
}

.profile:hover .profile-menu {
  display: block;
}

/* Responsive Styles */
@media (max-width: 768px) {
  .menu-container {
    padding: 0 10px;
  }

  .menu {
    flex-wrap: wrap;
  }

  .menu li {
    margin-bottom: 10px;
  }

  .profile {
    order: 1;
    margin-left: auto;
  }

  .profile .profile-menu {
    top: auto;
    bottom: 100%;
    right: 0;
    width: auto;
  }

  .profile:hover .profile-menu {
    display: block;
  }
}

</style>


<body>
<nav>
  <div class="menu-container">
    <ul class="menu">
      <li><a href="index.php">Home</a></li>
      <li><a href="work.php">Work</a></li>
      <li><a href="community.php">Community</a></li>
      <li><a href="#">Services</a></li>
      <li><a href="gallery.php">Gallery</a></li>
      <li><a href="schemes.php">Schemes</a></li>
      <?php if (!$_SESSION['loggedin']): ?>
                <li><a href="login.php">Login</a></li>
            <?php endif; ?>
            <?php if ($_SESSION['role'] == 'admin'): ?>
                <li><a href="admin_dashboard.php">Admin</a></li>
            <?php endif; ?>
            <li class="profile">
                <a href="#" class="profile-link">
                    <?php echo $_SESSION['role']; ?>
                </a>
                <div class="profile-menu">
                    <ul>
                        <li><a href="viewprofile.php">View Profile</a></li>
                        <li><a href="logout.php">Log Out</a></li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
</nav>

</body>

</html>