<?php
require('database.php');

$errors = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname = $_POST['fname'];
    $designation = $_POST['designation'];
    $mobile = $_POST['mobile'];
    $adharno = $_POST['adharno'];
    $password = $_POST['password'];

    // Validate form inputs
    if (empty($fname)) {
        $errors[] = "Name is required.";
    }

    if (empty($designation)) {
        $errors[] = "Designation is required.";
    }

    if (empty($mobile)) {
        $errors[] = "Mobile number is required.";
    } elseif (!preg_match("/^[0-9]{10}$/", $mobile)) {
        $errors[] = "Mobile number must be 10 digits.";
    }

    if (empty($adharno)) {
        $errors[] = "Aadhar number is required.";
    } elseif (!preg_match("/^[0-9]{12}$/", $adharno)) {
        $errors[] = "Aadhar number must be 12 digits.";
    }

    if (empty($password)) {
        $errors[] = "Password is required.";
    }

    if (empty($_FILES['photo']['name'])) {
        $errors[] = "Photo is required.";
    }

    // If there are no validation errors, proceed with inserting data into the database
    if (empty($errors)) {
        $photo = $_FILES['photo']['tmp_name'];
        $photoData = file_get_contents($photo);
        $photoData = mysqli_real_escape_string($conn, $photoData);

        $query = "INSERT INTO admins (name, adharno, designation, mobilenumber, password, photo) VALUES ('$fname', '$adharno', '$designation', '$mobile', '$password', '$photoData')";

        if (mysqli_query($conn, $query)) {
            echo "<script>window.alert('New member added Successfully!')</script>";
            header("Location: community.php");
            exit;
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add member</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <form action="addmember.php" class="mt-3 bg-primary-subtle  border w-50 p-4 mx-auto col-10 col-md-8 col-lg-6 "
        method="post" enctype="multipart/form-data">
        <p class="align-center"
            style="text-align: center; font-size: 30px; font-weight: 800; font-family: Verdana, Geneva, Tahoma, sans-serif;">
            Add Member</p>

        <?php if (!empty($errors)): ?>
            <div class="alert alert-danger">
                <ul>
                    <?php foreach ($errors as $error): ?>
                        <li>
                            <?php echo $error; ?>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endif; ?>

        <div class="mb-2 ">
            <label for="exampleFormControlInput1" class="form-label">Enter Name</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="fname"
                placeholder="Enter member name" value="<?php echo isset($_POST['fname']) ? $_POST['fname'] : ''; ?>">
        </div>

        <div class="mb-2 ">
            <label for="exampleFormControlInput1" class="form-label">Enter Adhar Number</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="adharno"
                placeholder="Enter adhar number"
                value="<?php echo isset($_POST['adharno']) ? $_POST['adharno'] : ''; ?>">
        </div>

        <div class="mb-2 ">
            <label for="exampleFormControlInput1" class="form-label">Enter designation</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="designation"
                placeholder="Enter member designation"
                value="<?php echo isset($_POST['designation']) ? $_POST['designation'] : ''; ?>">
        </div>

        <div class="mb-2 ">
            <label for="exampleFormControlInput1" class="form-label">Enter mobile number</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="mobile" maxlength="10"
                placeholder="Enter mobile number"
                value="<?php echo isset($_POST['mobile']) ? $_POST['mobile'] : ''; ?>">
        </div>

        <div class="mb-2 ">
            <label for="formFileMultiple" class="form-label">Enter your password</label>
            <input class="form-control" type="password" id="formFileMultiple" name="password" multiple
                placeholder="Enter your password">
        </div>

        <div class="mb-2 ">
            <label for="formFileMultiple" class="form-label">Upload photo</label>
            <input class="form-control" type="file" id="formFileMultiple" name="photo" multiple>
        </div>

        <div class="text-center">
            <button type="submit" class="btn btn-primary w-50 ">Submit</button>
        </div>

    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
</body>

</html>