<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Welcome to Admin Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

  <?php

  session_start();
  if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true || $_SESSION["role"] !== "admin") {
    header("Location: login.php");
    exit;
  }

  echo "Welcome " . $_SESSION["username"] . "!";
  echo "Welcome " . $_SESSION["role"];
  // echo "Welcome " . $_SESSION["phone"];
  // echo "Welcome " . $_SESSION["name"];
  
  ?>
  <?php
  include('nav.php');

  ?>

  <div class="container">
    <div class="row">
      <div class="col-6 col-sm-4 col-md-2">
        <button class="btn btn-primary btn-block">Registered users</button>
      </div>
      <div class="col-6 col-sm-4 col-md-2">
        <button class="btn btn-primary btn-block">Admins</button>
      </div>
      <div class="col-6 col-sm-4 col-md-2">
        <button class="btn btn-primary btn-block"><a href="add_schemes.php">ADD schems</a></button>
      </div>
      <div class="col-6 col-sm-4 col-md-2">
        <button class="btn btn-primary btn-block">Button 4</button>
      </div>
      <div class="col-6 col-sm-4 col-md-2">
        <button class="btn btn-primary btn-block">Button 5</button>
      </div>
      <div class="col-6 col-sm-4 col-md-2">
        <button class="btn btn-primary btn-block">Button 6</button>
      </div>
    </div>
  </div>






  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w74AqPfDkMBDXo30jS1Sgez4pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
    crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.4/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz4ATKxIep4tiCxS/Z4fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
    integrity="sha384-mQ43GR44B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe4d5Y3eG5eD"
    crossorigin="anonymous"></script>

</body>

</html>