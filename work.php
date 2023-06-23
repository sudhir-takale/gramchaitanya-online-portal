<?php
session_start();
require 'database.php';
if (isset($_GET['type'])) {
    $type = $_GET['type'];

    if ($type === 'ongoing') {
        $table = 'ongoing';
        $workTitle = 'Ongoing Work';
    } elseif ($type === 'completed') {
        $table = 'completed';
        $workTitle = 'Completed Work';
    } elseif ($type === 'approved') {
        $table = 'approved';
        $workTitle = 'Approved Work';
    }

    $query = "SELECT * FROM $table ORDER BY id DESC";
    $result = mysqli_query($conn, $query);
    $works = mysqli_fetch_all($result, MYSQLI_ASSOC);
} else {
    $type = '';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="device-width, initial-scale=1.0">
    <title>gram | work done</title>
    <!-- <link rel="stylesheet" href="work.css"> -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"> -->
</head>
<style>
    .button-tags {
        display: flex;
        justify-content: center;
        margin-top: 2%;
        margin-bottom: 1%;
    }

    .mainbuttons {
        display: inline-block;
        padding: 10px 20px;
        background-color: #4CAF50;
        color: #fff;
        font-size: 16px;
        text-decoration: none;
        border-radius: 4px;
        margin-right: 10px;
        text-align: center;
        transition: background-color 0.3s ease;
    }

    .mainbuttons:hover {
        background-color: #45a049;
    }

    .header1 {
        font-size: 25px;
        text-align: center;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
        font-weight: 900;
        padding-top: 10px;
        color: #ffffff;
        /* Font color */
    }

    .header-container {
        background-color:  #ff9900;
        /* Background color */
        padding: 15px;
        border-radius: 10px;
    }




    .list-group {
        background-color: #f9f9f9;
        border: 1px solid #ddd;
        border-radius: 4px;
        padding: 8px;
        list-style: none;
        box-shadow: 1px 1px 2px black;


    }

    .list-group-item {
        background-color: #fff;
        border: none;
        padding: 7px;
        list-style: none;
        /* box-shadow: 1px 1px 8px black; */

    }

    h5 {
        margin-top: 0;
    }

    .work-title {
        text-align: center;
        background-color: #f2f2f2;
        /* Background color */
        padding: 20px;
        color: #333333;
        /* Text color */
        font-size: 28px;
        /* Font size */
        font-family: Arial, sans-serif;
        /* Font family */
        font-weight: bold;
        /* Font weight */
        border: 2px solid #cccccc;
        /* Border */
        border-radius: 10px;
        /* Border radius */
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        /* Box shadow */
    }
</style>

<body>
    <header>
        <div class="header-container">
            <p class="header1">Initiatives undertaken by our Grampanchayat</p>
        </div>
        <div style="margin-top: 2%; margin-bottom: 1%;" class="button-tags">
            <a href="work.php?type=completed" class="mainbuttons">Completed Work</a>
            <a href="work.php?type=ongoing" class="mainbuttons">Ongoing Work</a>
            <a href="work.php?type=approved" class="mainbuttons">Approved Work</a>
            <?php

            if ($_SESSION['role'] == 'admin') {
                echo '<a href="addwork.php" class="mainbuttons">Add New Work</a>';
            }
            ?>


        </div>
    </header>

    <?php if ($type): ?>
        <div style="margin-left:15%; margin-right:15%;">
            <h1 class="work-title">
                <?php echo $workTitle; ?>
            </h1>
            <?php if (!empty($works)): ?>
                <?php foreach ($works as $work): ?>

                    <ul class="list-group list-group-flush scheme-details">
                        <li class="list-group-item">
                            <?php echo $work["id"]; ?>
                            <h2>Scheme name :</h2>
                            <p
                                style="font-size:18px;color:#000080;font-weight:600; margin-bottom:-0.1%;font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif">
                                <?php echo $work["name"]; ?>
                            </p>
                        </li>
                        <li class="list-group-item">
                            <h3>Description of Scheme :</h3>
                            <p
                                style="font-size:18px;color:#000080;font-weight:600; font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif">
                                <?php echo $work["description"]; ?>
                            </p>
                        </li>
                    </ul>
                <?php endforeach; ?>
            <?php else: ?>
                <p>No works found.</p>
            <?php endif; ?>
        </div>
    <?php endif; ?>


</body>



</html>