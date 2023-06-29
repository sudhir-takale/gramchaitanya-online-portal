<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include('database.php');

// Fetch registered users
// Fetch registered users
$sql = "SELECT COUNT(*) AS count FROM users WHERE adharno IS NOT NULL";
$result = $conn->query($sql);



$row = $result->fetch_assoc();
$registeredUsers = $row['count'];

// Fetch Complaints
$sql = "SELECT COUNT(*) AS count FROM complaint WHERE id IS NOT NULL";
$result = $conn->query($sql);


$row = $result->fetch_assoc();
$complaints = $row['count'];




if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Retrieve the message from the form
  $message = $_POST['message'];

  // Perform any necessary processing, such as sending the notification to recipients
  // You can implement the logic to send the notification to the desired recipients here

  // For demonstration purposes, let's assume we are storing the notifications in a database
  // You would need to adjust the database connection details accordingly


  // Insert the notification into the database
  $sql = "INSERT INTO notifications (message) VALUES ('$message')";

  if ($conn->query($sql) === TRUE) {
    // Get the list of recipients from the database or any other source
    $recipientEmails = ['sudhirtakale99@gmail.com', 'shtakale1111@gmail.com'];

    // Send the notification to each recipient via email
    foreach ($recipientEmails as $recipientEmail) {
      $to = $recipientEmail;
      $subject = "New Notification";
      $emailMessage = "A new notification has been sent: $message";
      $headers = "From: sudhirtakale.sknscoe.comp@gmail.com\r\n";
      $headers .= "Reply-To: your_email@example.com\r\n";
      $headers .= "Content-Type: text/html\r\n";

      // Send the email
      if (mail($to, $subject, $emailMessage, $headers)) {
        echo "<p>Notification sent successfully to $recipientEmail!</p>";
      } else {
        echo "<p>Failed to send notification to $recipientEmail.</p>";
      }
    }
  }
  // Close the database connection
  $conn->close();
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Welcome to Admin Dashboard</title>
  <link rel="stylesheet" href="admin_style.css">
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"> -->

</head>
<style>
  .container2 {
    max-width: 500px;
    margin: 0 auto;
    padding: 10px;
  }

  .p {
    text-align: center;
    margin-bottom: 2%;
    font-weight: bold;
  }

  .notification-form {
    margin-top: 2%;
    background-color: #f2f2f2;
    padding: 20px;
    border-radius: 5px;
  }

  .notification-form label {
    display: block;
    margin-bottom: 10px;
  }

  .notification-form textarea {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    resize: vertical;
  }

  .notification-form button {
    background-color: #007bff;
    color: #fff;
    margin-top: 1%;
    padding: 10px 15px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
  }

  .notification-form button:hover {
    background-color: #0056b3;
  }
</style>

<body>

  <?php

  session_start();
  if (!($_SESSION['role'] == 'admin') && ($_SESSION['loggedin'] == true)) {

    header("Location:login.php");
    exit();
  }
  ?>
  <div id="mySidenav" class="sidenav">
    <!-- <p class="logo"><span>M</span>-SoftTech</p> -->
    <a href="#" class="icon-a"><i class="fa fa-dashboard icons"></i> Dashboard</a>
    <a href="registered_users.php" class="icon-a"><i class="fa fa-users icons"></i> Registered Users</a>
    <a href="complaint.php" class="icon-a"><i class="fa fa-list icons"></i> Complaints</a>
    <a href="viewnotice.php" class="icon-a"><i class="fa fa-list icons"></i>View Notices</a>
    <!-- <a href="#" class="icon-a"><i class="fa fa-shopping-bag icons"></i> Orders</a>
    <a href="#" class="icon-a"><i class="fa fa-tasks icons"></i> Inventory</a>
    <a href="#" class="icon-a"><i class="fa fa-user icons"></i> Accounts</a>
    <a href="#" class="icon-a"><i class="fa fa-list-alt icons"></i> Tasks</a> -->

  </div>
  <div id="main">

    <div class="head">
      <div class="col-div-6">
        <span style="font-size:30px;cursor:pointer; color: white;" class="nav">☰ Dashboard</span>
        <span style="font-size:30px;cursor:pointer; color: white;" class="nav2">☰ Dashboard</span>
      </div>


      <div class="clearfix"></div>
      <br />

      <div class="col-div-3">
        <div class="box">
          <p>
            <?php echo $registeredUsers; ?><br /><span>Registered Users</span>
          </p>
          <i class="fa fa-users box-icon"></i>
        </div>
      </div>
      <div class="col-div-3">
        <div class="box">
          <p>
            <?php echo $complaints; ?><br /><span>Complaints</span>
          </p>
          <i class="fa fa-list box-icon"></i>
        </div>
      </div>

      <div class="clearfix"></div>
      <br /><br />
      <div class="col-div-8">
        <div class="box-8">
          <div class="content-box">




            <div class="container2">
              <p class="h">Communication and Notification</p>

              <form method="POST" action="" class="notification-form">
                <label for="message">Message:</label>
                <textarea name="message" id="message" rows="5" placeholder="Enter your message"></textarea>

                <button type="submit">Send Notification</button>
              </form>
            </div>


          </div>
        </div>
      </div>

      <div class="col-div-4">
        <div class="box-4">
          <div class="content-box">
            <p>Solved Queries <span></span></p>

            <div class="circle-wrap">
              <div class="circle">
                <div class="mask full">
                  <div class="fill"></div>
                </div>
                <div class="mask half">
                  <div class="fill"></div>
                </div>
                <div class="inside-circle"> 70% </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="clearfix"></div>
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
      $(".nav").click(function () {
        $("#mySidenav").css('width', '70px');
        $("#main").css('margin-left', '70px');
        $(".logo").css('visibility', 'hidden');
        $(".logo span").css('visibility', 'visible');
        $(".logo span").css('margin-left', '-10px');
        $(".icon-a").css('visibility', 'hidden');
        $(".icons").css('visibility', 'visible');
        $(".icons").css('margin-left', '-8px');
        $(".nav").css('display', 'none');
        $(".nav2").css('display', 'block');
      });

      $(".nav2").click(function () {
        $("#mySidenav").css('width', '300px');
        $("#main").css('margin-left', '300px');
        $(".logo").css('visibility', 'visible');
        $(".icon-a").css('visibility', 'visible');
        $(".icons").css('visibility', 'visible');
        $(".nav").css('display', 'block');
        $(".nav2").css('display', 'none');
      });

    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.4/dist/umd/popper.min.js"></script>


</body>

</html>