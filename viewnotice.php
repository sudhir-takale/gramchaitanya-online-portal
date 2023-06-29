<?php
include 'database.php';
session_start();

if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("Location: login.php");
    exit;
}

// Assuming you have already established a database connection
// ...

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the delete button was clicked
    if (isset($_POST['delete'])) {
        $noticeId = $_POST['notice_id']; // Assuming the notice ID is passed as a hidden input field

        // Prepare the delete query
        $deleteQuery = "DELETE FROM notices WHERE id = $noticeId";

        // Execute the delete query
        if (mysqli_query($conn, $deleteQuery)) {
            // Deletion successful
            echo "<script> alert('Notice Deleted Successfully') </script>";
        } else {
            // Error deleting notice
            echo "Error deleting notice: " . mysqli_error($conn);
        }
    }
}

$query = "SELECT * FROM notices";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Notices</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            text-align: center;
            /* background-color: paleturquoise; */
        }

        h1 {
            font-size: 40px;
            font-weight: bold;
            margin: 10px;
            background-color: paleturquoise;
            padding: 40px;
            border-radius: 5px;
            color: #003366;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        li {
            text-align: left;
            /* color: black; */
            /* background-color: pink; */
            font-size: 17px;
            height: auto;
        }

        ul {
            border: 2px solid black;

            display: inline-block;
            width: 800px;
            padding: 10px;
            margin: 20px;
        }

        .scheme-details {
            margin-left: 45px;
            margin-bottom: 20px;
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 4px;
            padding: 10px;
        }

        .scheme-details li {
            list-style: none;
            margin-bottom: 10px;
        }

        .scheme-details h5 {
            font-size: 17px;
            margin-bottom: 5px;
        }
    </style>

</head>

<body>
    <h1>Notices Added Till Now</h1>

    <?php
    if ($_SESSION['role'] == 'admin') {
        echo '<div class="d-flex justify-content-end" style="margin-right: 2%;">
        <button type="submit" class="btn btn-primary mt-4 "><a style="font-size:17px;font-weight:600; width:auto;color:white; text-decoration:none;" href="add_notice.php">Add New Notice</a></button>
    </div>';
    }
    ?>

    <div style="margin-left: 350px;">
        <?php
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo '<ul class="list-group list-group-flush scheme-details">';
                echo '<li class="list-group-item"><h5> Notice Number:</h5>' . $row["id"] . '  <div style="float:right; margin-top:-21px;">
            <form action="" method="post">
               <input type="hidden" name="notice_id" value="' . $row['id'] . '">
                 <button type="submit" name="delete" class="btn btn-primary">Delete</button>
            </form>
        </div>   </li>';
                echo '<li class="list-group-item"><h5>Added by:</h5>' . $row["username"] . '</li>';
                echo '<li class="list-group-item"><h5>Notice:</h5>' . $row["notice"] . '</li>';
                echo '<li class="list-group-item"><h5>Posted on:</h5>' . $row["added_time"] . '</li>';
                echo '</ul>';
            }
            echo '</ul>';
        }
        ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.4/dist/umd/popper.min.js"></script>
</body>

</html>