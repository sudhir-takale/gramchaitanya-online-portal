<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    include("process.php");

    $USERNAME = $_POST['USERNAME'];
    $PASSWORD = $_POST['PASSWORD'];
    $query = "select * USERS where USERNAME = '$USERNAME'and PASSWORD = '$PASSWORD'";
    $result = mysqli_query($conn, $query);



    if ($result && mysqli_num_rows($result) > 0) {
        $_SESSION['USERNAME'] = $USERNAME;

        header("Location: Navbar.php");
        die;
    } 


}


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="LoginStyle.css">
    <title>login please</title>
</head>

<body>

    <form action="Login.php" method="POST">

        <div class="container">
            <h1>Login</h1>
            <label for="adhar number"><b>Adhar Number</b></label>
            <input type="text" placeholder="Enter Adhar Number" name="USERNAME" required />

            <label for="password"><b>Password </b></label>
            <input type="password" placeholder="Enter your Password" name="PASSWORD" id="email" required />
            <button type="submit" name="login"
                style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">Login</button>
            <div>
                <p style="text-decoration: none;  font-size: 16px;">Not have an account? <a href="SignUp.php"
                        style="color: blue; text-align: right;">Sign up</a></p>
            </div>
        </div>
    </form>
</body>



</html>