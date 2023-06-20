<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Laxmidahiwadi | online </title>
    <link rel="icon" type="image/x-icon" href="images/icons8-house-with-garden-16.png">
    <link rel="stylesheet" href="index.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">


</head>

<body onclick="hide()">



    <header style="position: sticky; top: 0%;">
        <p class="maintext" style="background-image: url('images/tric.jpg');">
            <a style="text-decoration-line: none; color: red;" href="index.php">Grampanchayat, <br> Laxmi Dahiwadi</a>
        </p>
        <nav>
            <ul class="menu">

                <li><a href="index.php">Home</a></li>
                <li><a href="work.php">Work</a></li>
                <li><a href="community.php">Community</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="gallery.php">Gallery</a></li>

                <?php
                if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
                    echo '   <li><a href="login.php">Login</a></li>';
                }
                ?>
                <li><a href="schemes.php">Schemes</a></li>
                <?php
                if ($_SESSION['role'] == 'admin')

                    echo ' <li><a href="admin_dashboard.php">Admin</a></li>';

                ?>


            </ul>


        </nav>



</html>