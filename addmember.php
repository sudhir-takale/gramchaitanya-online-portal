<?php
require('database.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {


    $fname = $_POST['fname'];
    $designation = $_POST['designation'];
    $mobile = $_POST['mobile'];
    $adharno = $_POST['adharno'];
    $password = $_POST['password'];
    // $date = $_POST['date'];
    $photo = $_POST['photo'];

    $query = "INSERT INTO admins (name,adharno,role,mobilenumber,password,photo) VALUES ('$fname','$adharno','$designation','$mobile','$password','$photo')";

    if (mysqli_query($conn, $query)) {
        echo "<script>window.alert('New member successfully'); </script>";
        header("Location:community.php");

    } else {
        echo "error" . $conn->$error;
    }


}
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add member | laxmi Dahiwadi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <form action="addmember.php" class="m-5 bg-primary-subtle  border w-50 p-4 mx-auto col-10 col-md-8 col-lg-6 "
        method="post">
        <p class="align-center"
            style="text-align: center; font-size: 30px; font-weight: 800; font-family: Verdana, Geneva, Tahoma, sans-serif;">
            Add Member</p>
        <div class="mb-3 ">
            <label for="exampleFormControlInput1" class="form-label">Enter Name </label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="fname"
                placeholder="Enter member name">

        </div>
        <div class="mb-3 ">
            <label for="exampleFormControlInput1" class="form-label">Enter Adhar Number </label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="adharno"
                placeholder="Enter adhar number">

        </div>
        <div class="mb-3 ">
            <label for="exampleFormControlInput1" class="form-label">Enter designation </label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="designation"
                placeholder="Enter member designation">

        </div>
        <!-- <div class="mb-3 ">
            <label for="exampleFormControlInput1" class="form-label">Enter joined date </label>
            <input type="date" class="form-control" name="date" id="exampleFormControlInput1"
                placeholder="Enter date joined">

        </div> -->

        <div class="mb-3 ">
            <label for="exampleFormControlInput1" class="form-label">Enter mobile number </label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="mobile" maxlength="10"
                placeholder="Enter mobile number">

        </div>

        <div class="mb-3 ">
            <label for="formFileMultiple" class="form-label">Enter your password</label>
            <input class="form-control" type="password" id="formFileMultiple" name="password"
                placeholder="Enter your password" multiple>
        </div>

        <div class="mb-3 ">
            <label for="formFileMultiple" class="form-label">Upload photo</label>
            <input class="form-control" type="file" id="formFileMultiple" name="photo" multiple>
        </div>



        <div class="d-flex justify-content-center">
            <button type="submit" class="btn btn-primary mt-4 w-25 mb-4"
                style="margin-right: 10px; margin-left: 10px;">Submit</button>
            <button type="reset" class="btn btn-primary mt-4 w-25 mb-4"
                style="margin-right: 10px; margin-left: 10px;">Reset</button>
        </div>

    </form>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>


</body>


</html>