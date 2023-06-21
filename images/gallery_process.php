<?php
include 'database.php';
session_start();
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("Location: login.php");
    exit;
}

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $user = $_SESSION['role'];
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    $uploadOk = 1;

    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if ($check === false) {
        echo '<script>alert("File is not an image.")</script>';
        $uploadOk = 0;
    }

    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
        echo '<script>alert("Sorry, only JPG, JPEG, PNG & GIF files are allowed.")</script>';
        $uploadOk = 0;
    }

    if ($uploadOk == 0) {
        echo '<script>alert("Sorry, your file was not uploaded.")</script>';
    } else {
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
            $query = "INSERT INTO photos (photo ) VALUES (?)";
            $stmt = mysqli_prepare($conn, $query);
            mysqli_stmt_bind_param($stmt, "s", $target_file);

            if (mysqli_stmt_execute($stmt)) {
                echo '<script>alert("Photo added successfully"); window.location.href = "gallery.php";</script>';
                exit;
            } else {
                echo '<script>alert("Error adding photo. Please try again.")</script>';
            }
        } else {
            echo '<script>alert("Sorry, there was an error uploading your file.")</script>';
        }
    }

}
?>