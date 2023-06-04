<?php
include 'database.php';

echo "Welcome to process page";

$name = $email = $adharno = $password = $confirm_password = "";

// Define variables to store error messages
$first_name_err = $middle_name_err = $mobile_number_err = $last_name_err = $adharno_err = $dob_err = $adhar_err = $password_err = $confirm_password_err = "";
// Process the form when it is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate first_name field
    if (empty($_POST["first_name"])) {
        $first_name_err = "Name is required";
    } else {
        // Remove any unwanted characters
        $first_name = test_input($_POST["first_name"]);
        // Additional validation for name (if needed)
        if (!preg_match("/^[a-zA-Z-' ]*$/", $first_name)) {
            $first_name_err = "Only letters and white space allowed";
        }
    }

    // middle_name validation


    if (empty($_POST["middle_name"])) {
        $middle_name_err = "Name is required";
    } else {
        // Remove any unwanted characters
        $middle_name = test_input($_POST["middle_name"]);
        // Additional validation for name (if needed)
        if (!preg_match("/^[a-zA-Z-' ]*$/", $middle_name)) {
            $midddle_name_err = "Only letters and white space allowed";
        }
    }

    // last_name validation

    if (empty($_POST["last_name"])) {
        $last_name_err = "Name is required";
    } else {
        // Remove any unwanted characters
        $last_name = test_input($_POST["last_name"]);
        // Additional validation for name (if needed)
        if (!preg_match("/^[a-zA-Z-' ]*$/", $last_name)) {
            $last_name_err = "Only letters and white space allowed";
        }
    }

    // Validate email field

    if (empty($_POST["adharno"])) {
        $adhar_err = "Adhar no is required";
    } else {
        $adharno = test_input($_POST["adharno"]);
        // Additional validation for email (if needed)
        if (!filter_var($adharno, FILTER_VALIDATE_EMAIL)) {
            $adhar_err = "Invalid Adhar no format";
        }
    }
    //mobile number validation

    if (empty($_POST["mobile_number"])) {
        $mobile_number_err = "Mobile number is required";
    } else {
        $mobile_number = test_input($_POST["mobile_number"]);

        // Validate mobile number format
        if (!validateMobileNumber($mobile_number)) {
            $mobile_number_err = "Invalid mobile number";
        }
    }

    // validating date of birth
    if (empty($_POST["dob"])) {
        $dob_err = "Date of birth  is required";
    } else {
        $dob = test_input($_POST["dob"]);
        // Additional validation for email (if needed)
        if (!filter_var($dob, FILTER_VALIDATE_EMAIL)) {
            $dob_err = "Invalid Adhar no format";
        }
    }

    // Validate password field
    if (empty($_POST["password"])) {
        $password_err = "Password is required";
    } else {
        $password = test_input($_POST["password"]);
        // Additional validation for password (if needed)
    }

    // Validate confirm password field
    if (empty($_POST["confirm_password"])) {
        $confirm_password_err = "Please confirm password";
    } else {
        $confirm_password = test_input($_POST["confirm_password"]);
        // Additional validation for confirm password (if needed)
        if ($password !== $confirm_password) {
            $confirm_password_err = "Passwords do not match";
        }
    }

    // If there are no errors, you can proceed with further actions (e.g., database operations, sending emails, etc.)
    if (empty($dob_err) && empty($mobile_number_err) && empty($first_name_err) && empty($last_name_err) && empty($middle_name_err) && empty($adharno_err) && empty($password_err) && empty($confirm_password_err)) {
        // Process the form data (e.g., store in a database, send email, etc.)
        // ...
        // After processing, you can redirect the user to a success page
        header("Location: index.php");
        exit();
    }
}

// Helper function to trim the input and remove any unwanted characters
function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}


function validateMobileNumber($mobile_number)
{
    // Regular expression pattern for mobile number validation
    $pattern = "/^[0-9]{10}$/"; // Assuming 10-digit mobile number format

    return preg_match($pattern, $mobile_number);
}






?>