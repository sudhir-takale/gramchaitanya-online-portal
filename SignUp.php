
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="SignupStyle.css">
</head>

<body>
    <div class="signupform">



        <form action="process.php" method="post">

            <div class="container">
                <h1>Register</h1>
                <p>Fill the Below Form</p>
                <label for="adhar number"><b>Adhar Number</b></label>
                <input type="text" placeholder="Enter Adhar Number" name="adharno" id="username" required />

                <label for="email"><b>First Name </b></label>
                <input type="text" placeholder="Enter First Name" name="firstname" id="email" required />

                <label for="pwd"><b>Middle Name</b></label>
                <input type="text" placeholder="Enter Middle Name" name="middlename" id="pwd" required />

                <label for="lastname"><b>Middle Name No.</b></label>
                <input type="text" placeholder="Enter last name " name="lastname" id="pwd-repeat" required />

                <label for="pwd"><b>Date of Birth</b></label>
                <input type="date" placeholder="Enter Date" name="dateofbirth" id="pwd" required />

                <label for="pwd"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="password" id="pwd" required />

                <label for="pwd"><b> Confirm Password</b></label>
                <input type="password" placeholder="Enter Password" name="conpassword" id="pwd" required />



                <button type="submit" name="save"><a href="Navbar.html"></a>Register</button>
            </div>

            <div>
                <p>Already have an account? <a href="Login.html">Log in</a>.</p>
            </div>
        </form>
</body>

</html>