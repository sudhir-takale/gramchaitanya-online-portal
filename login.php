<?php
session_start(); // Start the session

include 'database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST["username"];
    $password = $_POST["password"];

    $adminSql = "SELECT * FROM admins WHERE adharno = '$username' AND password ='$password'";
    $adminResult = mysqli_query($conn, $adminSql);

    if ($adminResult && mysqli_num_rows($adminResult) == 1) {

        $adminRow = mysqli_fetch_assoc($adminResult);
        $_SESSION["username"] = $adminRow["adharno"];
        $_SESSION["role"] = $adminRow["role"];
        
        $_SESSION["loggedin"] = true;

        mysqli_free_result($adminResult);
        mysqli_close($conn);

        header("Location: admin_dashboard.php");
        exit;
    }

    // Perform user login validation
    $userSql = "SELECT * FROM users WHERE adharno = '$username' AND password = '$password'";
    $userResult = mysqli_query($conn, $userSql);

    if ($userResult && mysqli_num_rows($userResult) == 1) {
        // User login successful
        $userRow = mysqli_fetch_assoc($userResult);
        $_SESSION["username"] = $userRow["adharno"];
        $_SESSION["role"] = $userRow["role"];
        $_SESSION["loggedin"] = true;

        mysqli_free_result($userResult);
        mysqli_close($conn);

        header("Location: index.php");
        exit;
    }

    mysqli_close($conn);

    echo "Invalid username or password";
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Login Please | Laxmi - Dahiwadi</title>
</head>


<body style="background-color:steelblue;">




    <form class="vh-100 container " action="login.php" method="POST" style="position: fixed; margin-left:10%;">


        <div class=" h-custom " style="margin-top:5%">

            <div class="row d-flex justify-content-center align-items-center h-100">

                <div class="col-md-8 col-lg-6 col-xl-4 "
                    style=" border: 3px solid black; width: 38%; height: 70%; background-color: white; border-radius: 17px; box-shadow: 2px 2px 25px 1px black;">

                    <div style="text-align: center;"
                        class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
                        <img src="images/user.png" alt=""
                            style="width: 25%; height: 25%;   margin-top:6%; display: block; margin-left: auto; margin-right: auto">

                    </div>

                    <div class="form-outline mb-4">
                        <label class="form-label" for="form3Example3">Adhar no.</label>

                        <input type="text" maxlength="12" id="form3Example3" name="username"
                            class="form-control form-control-lg" placeholder="Enter Adhar number" />
                    </div>


                    <div class="form-outline mb-3">
                        <label class="form-label" for="form3Example4">Password</label>

                        <input type="password" id="form3Example4" class="form-control form-control-lg"
                            placeholder="Enter password" name="password" />
                    </div>


                    <div class="text-center mt-5">
                        <button type="submit" class="btn btn-primary w-50 " style="margin-top: -20px;">Submit</button>
                        <p class="fw-bold" style=" margin-left:50%; font-size: 14px; margin-top: 3%;">Not have
                            account?
                            <a href="register.php" style="color: blue;">Register</a>
                        </p>
                    </div>


                </div>
            </div>
        </div>





    </form>







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w74AqPfDkMBDXo30jS1Sgez4pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.4/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz4ATKxIep4tiCxS/Z4fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
        integrity="sha384-mQ43GR44B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe4d5Y3eG5eD"
        crossorigin="anonymous"></script>

</body>



</html>