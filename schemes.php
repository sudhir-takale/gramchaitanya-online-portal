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
            /* background-color: paleturquoise; */
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

    <h1>New Schemes</h1>


    <?php
    if (($_SESSION['role'] == 'admin')) {

        echo '<div class="d-flex justify-content-end" style = "margin-right: 2%;">
        <button type="submit" class="btn btn-primary mt-4 "><a
                style="font-size:17px;font-weight:600; width:auto;color:white; text-decoration:none;"
                href="add_schemes.php">Add New Scheme</a></button>
    </div>';

    }
    ?>
    <div style="margin-left:350px;">
        <?php
        $query = "select * from scheme ORDER BY id DESC";
        $result = mysqli_query($conn, $query);
        if (mysqli_num_rows($result) > 0) {

            while ($row = mysqli_fetch_assoc($result)) {

                echo '<ul class="list-group list-group-flush scheme-details">';
                echo '<li class="list-group-item"><h5>Scheme name :</h5>' . $row["name"] . '</li>';
                echo '<li class="list-group-item"><h5>Description of Scheme :</h5>' . $row["description"] . '</li>';
                echo '<li class="list-group-item"><h5>Scheme Starting date:</h5>' . $row["startdate"] . '</li>';
                echo '<li class="list-group-item"><h5>Scheme will end on:</h5>' . $row["enddate"] . '</li>';
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