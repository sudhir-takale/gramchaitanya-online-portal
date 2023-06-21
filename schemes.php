<?php

include 'database.php';
session_start();

if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("Location: login.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New schemes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            text-align: center;
            background-color: paleturquoise;
        }

        li {
            text-align: left;
            color: black;
            background-color: pink;
            font-size: 20px height:30px
        }

        ul {
            border: 2px solid black;

            display: inline-block;
            width: 700px;
            padding: 40px;
            margin: 30px;
        }
    </style>

</head>

<body>
    <h1>available schemes are</h1>


    <div style="margin-left:450px">
        <?php
        $query = "select * from scheme";
        $result = mysqli_query($conn, $query);
        if (mysqli_num_rows($result) > 0) {

            while ($row = mysqli_fetch_assoc($result)) {

                echo '<ul class="list-group list-group-flush" >';
                echo '<li class="list-group-item" style="margin-left: 45px; ">  <h5>scheme no</h5> ' . $row["id"] . '</li>';
                echo '<li class="list-group-item" style="margin-left: 45px;"> <h5>scheme name</h5>' . $row["name"] . '</li>';
                echo '<li class="list-group-item" style="margin-left: 45px;"> <h5>about scheme</h5>' . $row["description"] . '</li>';
                echo '<li class="list-group-item" style="margin-left: 45px;"> <h5>scheme start date</h5>' . $row["startdate"] . '</li>';
                echo '<li class="list-group-item" style="margin-left: 45px; "> <h5>scheme end date</h5>' . $row["enddate"] . '</li>';
                echo '</ul>';




            }

            echo '</ul>';
        }

        ?>


    </div>











</body>


</html>