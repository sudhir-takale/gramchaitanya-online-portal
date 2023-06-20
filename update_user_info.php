<?php
include_once 'database.php';
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $user_id = $_POST["user_id"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];

    // Update user information in the database
    $query = "UPDATE users SET name='$name', email='$email', phone='$phone' WHERE id='$user_id'";
    $result = mysqli_query($conn, $query);

    if ($result) {
        echo "User information updated successfully.";
    } else {
        echo "Error updating user information.";
    }
}

mysqli_close($conn);
?>