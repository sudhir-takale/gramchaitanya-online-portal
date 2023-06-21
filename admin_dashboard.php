<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Welcome to Admin Dashboard</title>
  <link rel="stylesheet" href="admin_style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

  <?php

  // session_start();
  if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true || $_SESSION["role"] !== "admin") {
    header("Location: login.php");
    exit;
  } else {
    include 'navbar.php';
  }
  ?>


  <!-- 
    <div>
      <ul>
        <li><a class="active" href="#home">Home</a></li>
        <li><a href="#news">News</a></li>
        <li><a href="#contact">Contact</a></li>
        <li><a href="#about">About</a></li>
      </ul>
    </div>
    <div style="margin-left:25%;padding:1px 16px;height:1000px;">
      <h2>Fixed Full-height Side Nav</h2>
      <h3>Try to scroll this area, and see how the sidenav sticks to the page</h3>
      <p>Notice that this div element has a left margin of 25%. This is because the side navigation is set to 25% width.
        If you remove the margin, the sidenav will overlay/sit on top of this div.</p>
      <p>Also notice that we have set overflow:auto to sidenav. This will add a scrollbar when the sidenav is too long
        (for example if it has over 50 links inside of it).</p>
      <p>Some text..</p>
      <p>Some text..</p>
      <p>Some text..</p>
      <p>Some text..</p>
      <p>Some text..</p>
      <p>Some text..</p>
      <p>Some text..</p>-->



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.4/dist/umd/popper.min.js"></script>


</body>

</html>