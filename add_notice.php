<?php
include 'database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $notice = $_POST['notice'];

    $query = "INSERT INTO notices (username,notice) VALUES ('$username','$notice')";

    if (mysqli_query($conn, $query)) {
        echo "<script>alert('New notice added successfully');</script>";
        header("location:viewnotice.php");
    } else {
        echo "Error: " . $error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Add new Notice | laxmi dahiwadi</title>
    <style>
        .form-container {
            border: 0.5px solid black;
            width: 500px;
            margin: 100px auto;
            padding: 20px;

            box-shadow: 2px 2px 10px black;
        }

        .form-container h2 {
            margin-bottom: 20px;
            text-align: center;
        }

        .form-label {
            margin-bottom: 5px;
        }

        .form-control {
            width: 100%;
            padding: 8px;
            border-radius: 4px;
            border: 1px solid rgba(0, 0, 0, 0.2);
        }

        .btn-submit {
            margin-top: 20px;
            width: 100%;
        }
    </style>
</head>

<body>
    <form action="add_notice.php" method="post" class="form-container">
        <h2>Add Notice</h2>
        <div class="mb-3">
            <label for="username" class="form-label">Your Name:</label>
            <input type="text" name="username" class="form-control" id="username" placeholder="Enter your name"
                required>
        </div>

        <div class="mb-3">
            <label for="notice" class="form-label">Notice:</label>
            <textarea class="form-control" name="notice" id="notice" rows="3" required></textarea>
        </div>

        <div class="d-flex justify-content-center">
            <button type="submit" class="btn btn-primary btn-submit w-25">Submit</button>
            <button type="button" class="btn btn-primary btn-submit w-25 " style="margin-left: 2%;"
                onclick="window.history.back();">Cancel</button>
        </div>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.4/dist/umd/popper.min.js"></script>
</body>

</html>