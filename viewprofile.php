<?php
include 'database.php';
session_start();

if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("Location: login.php");
    exit;
}
// Set initial values for the variables
$first_name = '';
$middle_name = '';
$last_name = '';
$mobile_number = '';
$date_of_birth = '';

// Get the current user ID
$username = $_SESSION['username'];

// Fetch user data from the database
$sql = "SELECT adharno, firstname, middlename,password, lastname, mobileno, dateofbirth FROM users WHERE adharno = '$username'";
if ($result = mysqli_query($conn, $sql)) {
    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $first_name = $row['firstname'];
        $username = $row['adharno'];
        $middle_name = $row['middlename'];
        $last_name = $row['lastname'];
        $mobile_number = $row['mobileno'];
        $password = $row['password'];
        $date_of_birth = $row['dateofbirth'];

        // <br /><b>Warning</b>:  Undefined variable $first_name in <b>C:\xampp\htdocs\Project\viewprofile.php</b> on line <b>50</b><br />
    }
    mysqli_free_result($result);
}

// Close the database connection
mysqli_close($conn);
?>











<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Profile | Edit Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            padding: 20px;
            background-image: url('images/backimage.jpg');
            background-size: cover;
            background-position: center;
        }

        .container {
            max-width: 500px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            margin-bottom: 30px;
            color: #999;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-label {
            font-weight: bold;
        }

        .btn-primary {
            width: 100%;
        }

        .name-inputs {
            display: flex;
            gap: 10px;
        }

        .btn-cancel {
            background-color: #ccc;
            border-color: #ccc;
            color: #fff;
        }

        .btn-cancel:hover {
            background-color: #999;
            border-color: #999;
        }
        
    </style>
</head>

<body>
    <div class="container mt-5">
        <h2>Edit Profile</h2>
        <form action="" method="post">
            <div class="form-group name-inputs">
                <div class="form-group">
                    <label class="form-label" for="first_name">First Name</label>
                    <input type="text" class="form-control" id="first_name" name="first_name"
                        value="<?php echo $first_name; ?>" required>
                </div>
                <div class="form-group">
                    <label class="form-label" for="middle_name">Middle Name</label>
                    <input type="text" class="form-control" id="middle_name" name="middle_name"
                        value="<?php echo $middle_name; ?>" required>
                </div>
                <div class="form-group">
                    <label class="form-label" for="last_name">Last Name</label>
                    <input type="text" class="form-control" id="last_name" name="last_name"
                        value="<?php echo $last_name; ?>" required>
                </div>
            </div>
            <div class="form-group">
                <label class="form-label" for="mobile_number">Aadhaar Number</label>
                <input type="text" class="form-control" id="mobile_number" name="mobile_number"
                    value="<?php echo $username; ?>" required>
            </div>
            <div class="form-group">
                <label class="form-label" for="mobile_number">Mobile Number</label>
                <input type="tel" class="form-control" id="mobile_number" name="mobile_number"
                    value="<?php echo $mobile_number; ?>" required>
            </div>

            <div class="form-group name-inputs">
                <div class="form-group">
                    <label class="form-label" for="first_name">Date of Birth</label>
                    <input type="date" class="form-control" id="first_name" name="first_name"
                        value="<?php echo $date_of_birth; ?>" required>
                </div>
                <div class="form-group">
                    <label class="form-label" for="middle_name">Password</label>
                    <input type="password" class="form-control" id="middle_name" name="password"
                        value="<?php echo $password; ?>" required>
                    <span class="password-toggle" onclick="togglePasswordVisibility()"></span>
                </div>

            </div>
            <div class="d-flex justify-content-center">

                <button type="submit" class="btn btn-primary w-50" style="margin-right: 10px; margin-left: 10px;">Save
                    Profile</button>
                <button type="button" class="btn btn-primary w-50" onclick="window.history.back();"
                    style="margin-right: 10px; margin-left: 10px;">Cancel</button>
            </div>
        </form>
    </div>
    <script>

        function togglePasswordVisibility() {
            var passwordInput = document.getElementById("password");
            var passwordToggle = document.querySelector(".password-toggle");

            if (passwordInput.type === "password") {
                passwordInput.type = "text";
                passwordToggle.classList.add("visible");
            } else {
                passwordInput.type = "password";
                passwordToggle.classList.remove("visible");
            }
        }

    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.4/dist/umd/popper.min.js"></script>
</body>

</html>