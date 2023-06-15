<?php
require("database.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $heading = $_POST['heading'];
    $discription = $_POST['discription'];

    $query = "INSERT INTO complaint (heading,discription) VALUES ('$heading','$discription')";

    if (mysqli_query($conn, $query)) {
        echo "inserted successfully";
    } else {
        echo "error " . $conn->error;
    }
}
?>