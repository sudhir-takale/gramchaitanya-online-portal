<?php
require('database.php');


session_start();


if (!isset($_SESSION["username"]) || $_SESSION["loggedin"] !== true) {
    header("Location: login.php");
    exit;
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>community</title>
    <link rel="stylesheet" href="community.css">
</head>

<body>

    <div style=" border: 2px solid red; margin-bottom: 12px;background-color: brown;">

        <p style="font-size: 34px; font-weight: 900; text-align: center;">
            Welcome to Grampanchayat laxmi dahiwadi
        </p>

        <div class="search" style="margin-bottom: 1%;">
            <form id="form">
                <input class="inputbutton" type="search" id="query" name="Search" placeholder="Search...">
                <button class="searchbutton">Search</button>
            </form>
        </div>

    </div>

    <a href="addmember.php"><button class="add"
            style="width: 150px; height: 35px; padding: 4px; font-size: 19px; font-weight: bold;float:right; background-color: blueviolet;color: whitesmoke; border-radius: 4px; ">Add
            Member</button></a>

    <div class="container">

        <?php

        $query = "SELECT * FROM ADMINS";

        $result = mysqli_query($conn, $query);

        if (mysqli_num_rows($result) > 0) {
            echo '<ul>';

            while ($row = mysqli_fetch_assoc($result)) {
                echo '<li style = "padding:10px;">';

                $imageData = $row['photo'];
                $imagePath = 'community/' . $row['name'] . '.jpg';
                file_put_contents($imagePath, $imageData);

                echo '<img src="' . $imagePath . '" alt="" style="width: 120px; height: 110px;">';
                echo '<div class="info">';
                echo 'Name: ' . $row['name'] . '<br>';
                echo 'Designation: ' . $row['designation'] . '<br>';
                echo 'Joined date: ' . $row['joiningdate'] . '<br>';
                echo 'Mob no: ' . $row['mobilenumber'];
                echo '</div>';
                echo '</li>';
            }

            echo '</ul>';
        } else {
            echo 'No data found.';
        }

        mysqli_close($conn);










        ?>
    </div>
</body>

</html>