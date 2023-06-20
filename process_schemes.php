<?php
include_once 'database.php';

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST["scheme_name"];
    $decription = $_POST["decription"]; // Corrected variable name
    $startdate = $_POST["start_date"];
    $enddate = $_POST["end_date"];

    $query = "INSERT INTO scheme (name, description, startdate, enddate) VALUES ('$name', '$decription', '$startdate', '$enddate')";

    $result = mysqli_query($conn, $query);
    if ($result == true) {
        echo '<script>alert("Scheme added successfully")</script>';
        header("Location: schemes.php");
    } else {
        echo 'Error';
    }
}
?>