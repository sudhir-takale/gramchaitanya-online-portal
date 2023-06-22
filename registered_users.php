<?php

session_start();
if (!($_SESSION['role'] == 'admin') && ($_SESSION['loggedin'] == true)) {

    header("Location:login.php");
    exit();
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registered Users | laxmi dahiwadi</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
            font-family: Arial, sans-serif;
        }

        th,
        td {
            padding: 12px 15px;
            text-align: left;
        }

        th {
            background-color: #007bff;
            color: #fff;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #cde4ff;
        }

        p {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 15px;
            text-align: center;
        }
    </style>
</head>

<body>

    <?php

    require 'navbar.php';

    ?>
    <p>Registered Users</p>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Middle Name</th>
                <th>Last Name</th>
                <th>Aadhaar Number</th>
                <th>Mobile Number</th>
                <th>Date of Birth</th>
            </tr>
        </thead>
        <tbody>

            <?php


            require 'database.php';


            $sql = "SELECT id, firstname, middlename, lastname, adharno, mobileno, dateofbirth FROM users";
            $result = mysqli_query($conn, $sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row['id'] . "</td>";
                    echo "<td>" . $row['firstname'] . "</td>";
                    echo "<td>" . $row['middlename'] . "</td>";
                    echo "<td>" . $row['lastname'] . "</td>";
                    echo "<td>" . $row['adharno'] . "</td>";
                    echo "<td>" . $row['mobileno'] . "</td>";
                    echo "<td>" . $row['dateofbirth'] . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='7'>No data found.</td></tr>";
            }

            $conn->close();
            ?>
        </tbody>
    </table>
</body>

</html>