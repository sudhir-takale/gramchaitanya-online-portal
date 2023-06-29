<?php
require('database.php');


session_start();

if (isset($_POST['delete'])) {
    $memberId = $_POST['member_id']; // Assuming the notice ID is passed as a hidden input field

    // Prepare the delete query
    $deleteQuery = "DELETE FROM admins WHERE id = $memberId";

    // Execute the delete query
    if (mysqli_query($conn, $deleteQuery)) {
        // Deletion successful
        echo "<script> alert('Member Deleted Successfully') </script>";
    } else {
        // Error deleting notice
        echo "Error deleting Member: " . mysqli_error($conn);
    }
}


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
</head>

<style>
    .admin-list {
        width: 50%;
        margin: 0 auto;
        list-style: none;
        padding: 0;
    }

    .admin-list li {
        display: flex;
        align-items: center;
        margin-bottom: 20px;
        background-color: #f9f9f9;
        border-radius: 5px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        padding: 20px;
    }

    .admin-list img {
        width: 120px;
        height: 110px;
        margin-right: 20px;
        border-radius: 5px;
    }

    .admin-list .info {
        font-size: 16px;
        color: #333;
    }

    .admin-list .info p {
        margin-bottom: 5px;
    }

    .admin-list .info span {
        font-weight: bold;
    }

    .admin-list .info a {
        color: #0066cc;
        text-decoration: none;
    }

    .admin-list .info a:hover {
        text-decoration: underline;
    }



    .hh {
        box-sizing: border-box;

        box-shadow: 5px 2px 6px black;
    }

    .search {
        display: flex;
        justify-content: center;
        margin-bottom: 4%;
    }

    .inputbutton {
        padding: 8px;
        font-size: 16px;
        border: none;
        border-radius: 4px;
        margin-bottom: 4%;
    }

    .searchbutton {
        padding: 8px 16px;
        font-size: 16px;
        background-color: #4CAF50;
        color: white;
        border: none;
        border-radius: 4px;
        margin-bottom: 4%;

        cursor: pointer;
    }

    .add {
        cursor: pointer;
    }

    .add:hover,
    .searchbutton:hover {
        background-color: #45a049;
    }

    .admin-list .info a:hover {
        text-decoration: underline;
    }

    .admin-item:hover {
        background-color: #eaeaea;
    }

    .add-member-button {
        /* display: inline-block; */
        padding: 12px 24px;
        font-size: 16px;
        font-weight: bold;
        text-decoration: none;
        text-align: end;
        float: right;
        border: none;
        border-radius: 4px;
        background-color: #4CAF50;
        color: white;
        transition: background-color 0.3s ease;
    }

    .add-member-button:hover {
        background-color: #45a049;
        cursor: pointer;
    }
</style>

<body>
    <div style="margin-bottom: 12px; background-color: #3498db;" class="hh">
        <h1 style="font-size: 40px; font-weight: 900; text-align: center; color: white; padding: 20px;">
            Welcome to Grampanchayat Laxmi Dahiwadi
        </h1>

        <div class="search" style="margin-bottom: 30px; text-align: center;" class="hh">
            <form id="form">
                <input class="inputbutton" type="search" id="query" name="Search" placeholder="Search...">
                <button class="searchbutton">Search</button>
            </form>
        </div>


        <?php

        if ($_SESSION['role'] == 'admin') {
            echo '     <a href="addmember.php">
            <button class="add-member-button">Add Member</button>
        </a> ';
        }


        ?>

    </div>


    <div class="container">

        <?php

        $query = "SELECT * FROM ADMINS";

        $result = mysqli_query($conn, $query);

        if (mysqli_num_rows($result) > 0) {
            echo '<ul class="admin-list">'; // Add CSS class to the <ul> element
        
            while ($row = mysqli_fetch_assoc($result)) {
                echo '<li style="padding: 10px;">';

                $imageData = $row['photo'];
                $imagePath = 'community/' . $row['name'] . '.jpg';
                file_put_contents($imagePath, $imageData);

                echo '<img src="' . $imagePath . '" alt="" style="width: 120px; height: 110px;">';
                echo '<div class="info">';
                echo 'Name: ' . $row['name'] . '<br>';
                echo 'Designation: ' . $row['designation'] . '<br>';
                echo 'Joined date: ' . $row['joiningdate'] . '<br>';
                echo 'Mob no: ' . $row['mobilenumber'];
                echo '   <div style="float:right; margin-top:-21px;">
            <form action="" method="post">
               <input type="hidden" name="member_id" value="' . $row['id'] . '">
                 <button type="submit" name="delete" class="btn btn-primary" style=" margin-left:400px; background-color: green">Delete</button>
            </form>
        </div> </div>';
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