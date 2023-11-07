<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Laxmidahiwadi | online</title>
    <link rel="icon" type="image/x-icon" href="images/icons8-house-with-garden-16.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        nav {
            background-color: #de1912;

        }

        .navbar-nav .nav-link {
            font-size: 19px;
            font-weight: 700;
            margin: 4px;
            position: relative;
            color: #010617;
            transition: color 0.3s ease;
        }

        .navbar-nav .nav-link:hover {
            color: white;
        }

        .navbar-nav .nav-link::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: -2px;
            width: 100%;
            height: 2px;
            background-color: red;
            transform: scaleX(0);
            transition: transform 0.3s ease;
        }

        .navbar-nav .nav-link:hover::after {
            transform: scaleX(1);
        }

        .navbar .dropdown .dropdown-toggle::after {
            /* margin-left: 0.5rem; */
            /* display: hidden; */
            visibility: hidden;
        }

        .navbar .dropdown-menu {
            margin-top: 0;
            width: 110px;
        }

        .navbar .dropdown-menu-right {
            right: 0;
            margin-top: 1rem;
            margin-right: 30rem;

        }

        .navbar .dropdown-menu a.dropdown-item {
            padding: 0.5rem 1rem;
        }

        .navbar .profile-image {
            margin-right: 7rem;


            border-color: 2px solid black;

            border-radius: 50%;
            width: 45px;
            height: 45px;
            overflow: hidden;

        }

        .navbar .profile-image img {
            object-fit: cover;
            width: 100%;
            height: 100%;
        }
    </style>
</head>

<body>
    <header class="sticky-top">
        <p class="maintext mb-0" style="background-image: url('images/background.jpg'); text-align: center;">
            <a style="text-decoration-line: none; text-align: center; font-size: 55px; color: #ec1381; "
                href="index.php">Grampanchayat,
                <br> Laxmi Dahiwadi</a>
        </p>
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="work.php">Work</a></li>
                        <li class="nav-item"><a class="nav-link" href="community.php">Community</a></li>
                        <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
                        <li class="nav-item"><a class="nav-link" href="gallery.php">Gallery</a></li>
                        <?php

                        if ($_SESSION['loggedin'] != true) {
                            echo '   <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>';
                        }

                        ?>
                        <li class="nav-item"><a class="nav-link" href="schemes.php">Schemes</a></li>
                        <?php


                        if ($_SESSION['role'] == 'admin') {



                            echo ' <li class="nav-item"><a class="nav-link" href="admin_dashboard.php">Admin</a></li> ';

                        }

                        ?>
                    </ul>
                    <div class="dropdown">
                        <a class="nav-link dropdown-toggle profile-image" href="#" role="button" id="profileDropdown"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="images/D1.jpeg" alt="Profile Icon" width="30" height="30"
                                class="d-inline-block align-text-top">
                        </a>
                        <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="profileDropdown">
                            <li><a class="dropdown-item">Name</a></li>
                            <li><a class="dropdown-item" href="viewprofile.php">View Profile</a></li>
                            <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.4/dist/umd/popper.min.js"></script>
</body>

</html>