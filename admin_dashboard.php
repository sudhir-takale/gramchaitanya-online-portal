<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Admin Dashboard</title>
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

    ?>


</body>

</html>