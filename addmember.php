<?php
require 'database.php';

// Process the notification form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the message from the form
    $message = $_POST['message'];

    // Perform any necessary processing, such as sending the notification to recipients
    // You can implement the logic to send the notification to the desired recipients here

    // For demonstration purposes, let's assume we are storing the notifications in a database
    // You would need to adjust the database connection details accordingly

    // Insert the notification into the database
    $sql = "INSERT INTO notifications (message) VALUES ('$message')";

    if (mysqli_query($conn, $sql)) {
        // Get the list of recipients from the database or any other source
        $recipientEmails = ['sudhirtakale99@gmail.com', 'shtakale1111@gmail.com'];

        // Send the notification to each recipient via email
        foreach ($recipientEmails as $recipientEmail) {
            $to = $recipientEmail;
            $subject = "New Notification";
            $emailMessage = "A new notification has been sent: $message";
            $headers = "From: sudhirtakale.sknscoe.comp@gmail.com\r\n";
            $headers .= "Reply-To: sudhirtakale.sknscoe.comp@gmail.com\r\n";
            $headers .= "Content-Type: text/html\r\n";

            // Send the email
            if (mail($to, $subject, $emailMessage, $headers)) {
                echo "<p>Notification sent successfully to $recipientEmail!</p>";
            } else {
                echo "<p>Failed to send notification to $recipientEmail.</p>";
            }
        }
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

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
</head>

<body>
    <?php
    session_start();
    if (!($_SESSION['role'] == 'admin') && ($_SESSION['loggedin'] == true)) {
        header("Location:login.php");
        exit();
    }
    ?>

    <div id="mySidenav" class="sidenav">
        <!-- Navigation links -->
    </div>

    <div id="main">
        <div class="head">
            <!-- Dashboard header -->
        </div>

        <div class="col-div-8">
            <div class="box-8">
                <div class="content-box">
                    <div class="container2">
                        <p class="h">Communication and Notification</p>
                        <form method="POST" action="send_notification.php" class="notification-form">
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
                    <p>Total Sale <span>Sell All</span></p>
                    <div class="circle-wrap">
                        <!-- Circle progress bar -->
                    </div>
                </div>
            </div>
        </div>

        <!-- JavaScript code -->

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>