<?php
require("database.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $mail = $_POST['email'];
    $notice = $_POST['notice'];

    $query = "INSERT INTO notice (email,notice) VALUES ('$mail','$notice')";

    if (mysqli_query($conn, $query)) {
        echo "inserted successfully";
    } else {
        echo "error" . $conn->error;
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
            <label for="exampleFormControlInput1" class="form-label" style="margin: 10px;">Email address</label>
            <input type="email" name="email" class="form-control" id="exampleFormControlInput1"
                placeholder="name@example.com">
        </div>

        <div class="mb-3" style="margin-left:20px; margin-right: 20px;">
            <label for="exampleFormControlTextarea1" class="form-label">type here notice</label>
            <textarea class="form-control" name="notice" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>

        <div class="mb-3" style="margin-left:40%; margin-right: 20px; width: 100px; ">
            <input type="submit" value="submit" class="form-control" id="exampleFormControlInput1">
        </div>

    </form>
</body>

</html>