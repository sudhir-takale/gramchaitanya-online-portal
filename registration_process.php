<?php
session_start();
include('database.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $errors = array(); // Initialize an error array

    // Validate adharno
    $adharno = $_POST["adharno"];
    if (empty($adharno)) {
        $errors[] = "Adhar Number is required";
    } elseif (!preg_match("/^\d{12}$/", $adharno)) {
        $errors[] = "Invalid Adhar Number";
    }

    // Validate mobilenumber
    $mobilenumber = $_POST["mobile_number"];
    if (empty($mobilenumber)) {
        $errors[] = "Mobile Number is required";
    } elseif (!preg_match("/^[0-9]{10}$/", $mobilenumber)) {
        $errors[] = "Invalid Mobile Number";
    }

    // Validate first_name
    $first_name = $_POST["first_name"];
    if (empty($first_name)) {
        $errors[] = "First Name is required";
    }
    $middle_name = $_POST["middle_name"];
    if (empty($middle_name)) {
        $errors[] = "middle Name is required";
    }

    // Validate last_name
    $last_name = $_POST["last_name"];
    if (empty($last_name)) {
        $errors[] = "Last Name is required";
    }

    // Validate dob
    $dob = $_POST["dob"];
    if (empty($dob)) {
        $errors[] = "Date of Birth is required";
    }

    // Validate password
    $password = $_POST["password"];
    if (empty($password)) {
        $errors[] = "Password is required";
    } elseif (strlen($password) < 6) {
        $errors[] = "Password should be at least 6 characters long";
    }

    // Validate confirm_password
    $confirm_password = $_POST["confirm_password"];
    if (empty($confirm_password)) {
        $errors[] = "Confirm Password is required";
    } elseif ($password !== $confirm_password) {
        $errors[] = "Passwords do not match";
    }

    // If there are no validation errors, proceed with database insertion
    if (empty($errors)) {
        $sql = "INSERT INTO users (adharno, firstname, middlename, lastname, dateofbirth, mobileno, password) VALUES ('$adharno', '$first_name', '$middle_name', '$last_name', '$dob', '$mobilenumber', '$password')";

        $result = mysqli_query($conn, $sql);

        if ($result === true) {
            echo "<script>alert('Registration Successful')</script>";
            $_SESSION['username'] = $adharno; // Set the username session variable
            $_SESSION['role'] = 'user'; // S
            header("Location: index.php");
            exit;
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    } else {
        // Display validation errors
        foreach ($errors as $error) {
            // header("Location: registration.php");
            echo $error . "<br>";
        }
    }

    mysqli_close($conn);
}
?>