<?php

include 'database.php';
session_start();

if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("Location: login.php");
    exit;
}
$query = "select * from scheme";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New schemes</title>
    <style>
        body {
            text-align: center;
            background-color: paleturquoise;
        }

        li {
            text-align: left;
            color: black;
            background-color: pink;
            font-size: 20px;
            padding: 3px;
        }

        ul {
            border: 2px solid black;
            display: inline-block;
            width: 600px;
            padding: 40px;
        }
    </style>

</head>

<body>
    <h1>availabel schemes are</h1>
    <?php
    while ($row = mysqli_fetch_assoc($result)) {
        ?>
        <ul type='none'>
            <li>
                Scheme No:
                <?php echo $row['id']; ?>
            </li>
            <li>
                Scheme Name:
                <?php echo $row['name']; ?>
            </li>
            <li>
                <dl>
                    <dt>Scheme Description:</dt>
                    <dd>
                        <?php echo $row['description']; ?>
                    </dd>
                </dl>

            </li>
            <li>
                Scheme Start Date:
                <?php echo $row['startdate']; ?>
            </li>
            <li>
                Scheme End Date:
                <?php echo $row['enddate']; ?>
            </li>
        </ul>
        <br>
        <?php
    }
    ?>


</html>