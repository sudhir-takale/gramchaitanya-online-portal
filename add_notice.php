<?php

include 'database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $notice = $_POST['notice'];

    $query = "INSERT INTO notices (username,notice) VALUES ('$username','$notice')";

    if (mysqli_query($conn, $query)) {
        echo "inserted successfully";
        header("location:index.php");
    } else {
        echo "error" . $error;
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

    <title>add notice</title>
</head>

<body style="background-color: rgb(107, 79, 102);">
    <form action="add_notice.php" method="post"
        style="border:2px solid black; width: 700px; height: 300px; margin-top: 15%; margin-left: 30%; background-color: rgb(165, 190, 190);">
        <div class="mb-3" style="margin-left:20px; margin-right: 20px;">
            <label for="exampleFormControlInput1" class="form-label" style="margin: 10px;">Username</label>
            <input type="text" name="username" class="form-control" id="exampleFormControlInput1"
                placeholder="username">
        </div>

        <div class="mb-3" style="margin-left:20px; margin-right: 20px;">
            <label for="exampleFormControlTextarea1" class="form-label">type here notice</label>
            <textarea class="form-control" name="notice" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>

        <div class="d-flex justify-content-center">
            <button type="submit" class="btn btn-primary mt-4 w-25 mb-4"
                style="margin-right: 10px; margin-left: 10px;">Submit</button>
        </div>

    </form>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.4/dist/umd/popper.min.js"></script>
</body>

</html>