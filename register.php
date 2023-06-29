<!--  Purpose: Displays the registration form and processes the registration data. -->


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup please</title>
    <link rel="stylesheet" href="register.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body style="background-color:steelblue;">



    <form class="row g-0 w-50 d-block p-3 mx-auto mt-4 col-10 col-md-4 col-lg-4" method="POST"
        action="registration_process.php">
        <div class=" container h-custom"
            style=" width: 120%;  border-radius: 17px; box-shadow: 2px 2px 16px 1px black;">
            <h1>Please register</h1>

            <div style="text-align: center;"
                class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
                <img src="images/user.png" alt=""
                    style="width: 12%; height: 12%;   margin-top:1%; display: block; margin-left: auto; margin-right: auto">

            </div>
            <div class="row mt-1">
                <div class="col-md-4 mt-1">
                    <label for="validationServer01" class="form-label">First name</label>
                    <input type="text" placeholder="Enter first name" class="form-control " id="validationServer01"
                        name="first_name" value="">

                </div>
                <div class="col-md-4 mt-1">
                    <label for="validationServer01" class="form-label">Middle name</label>
                    <input type="text" placeholder="Enter middle name" class="form-control " id="validationServer01"
                        name="middle_name" value="">

                </div>
                <div class="col-md-4 mt-1">
                    <label for="validationServer01" class="form-label">Last name</label>
                    <input type="text" placeholder="Enter last name" class="form-control " id="validationServer01"
                        name="last_name" value="">

                </div>
            </div>
            <div class="row mt-1">
                <div class="col-md-6 mt-1">
                    <label for="validationServer01" class="form-label">Enter Address</label>
                    <input type="text" placeholder="Enter your address" class="form-control " id="validationServer01"
                        name="address" value="">

                </div>
                <div class="col-md-6 mt-1">
                    <label for="validationServer01" class="form-label">Enter city</label>
                    <input type="text" placeholder="Enter your city" class="form-control " id="validationServer01"
                        value="">

                </div>
            </div>
            <div class="row mt-1">
                <div class="col-md-6 mt-1">
                    <label for="validationServer01" class="form-label">Enter Mobile number</label>
                    <input type="text" maxlength="10" placeholder="Enter mobile number" class="form-control"
                        name="mobile_number" id="validationServer01" value="">
                    <div class="valid-feedback" style="display: none">
                        Looks good!
                    </div>
                </div>
                <div class="col-md-6 mt-1">
                    <label for="validationServer01" class="form-label">Enter adhar no</label>
                    <input type="text" placeholder="Enter adhar no" class="form-control" id="validationServer01"
                        name="adharno" value="">
                    <div class="valid-feedback " style="display: none">
                        Looks good!
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mt-1">
                    <label for="validationServer01" class="form-label">Date of Birth</label>
                    <input type="date" placeholder="Enter date of birth" class="form-control " id="validationServer01"
                        name="dob" value="">

                </div>
                <div class="col-md-6 mt1">
                    <label for="validationServer01" class="form-label">Pin code</label>
                    <input type="text" placeholder="Enter pin code" class="form-control " id="validationServer01"
                        name="pincode" value="">

                </div>

            </div>
            <div class="row">
                <div class="col-md-6">
                    <label for="validationServer01" class="form-label">Enter password</label>
                    <input type="text" placeholder="Enter your password" class="form-control" id="validationServer01"
                        name="password" value="">
                    <div class="valid-feedback" style="display: none">
                        Looks good!
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="validationServer01" class="form-label">Confirm password</label>
                    <input type="text" placeholder="Renter the password" class="form-control " id="validationServer01"
                        name="confirm_password" value="">
                    <div class="valid-feedback" style="display: none">
                        Looks good!
                    </div>
                </div>

                <div class="text-center mt-2">
                    <button type="submit" class="btn btn-primary w-50 ">submit</button>
                    <p style=" margin-left:60%; font-size: 14px; font-weight: bold;">Already have an account? <a
                            href="login.php" style="color: blue;">Log
                            in</a></p>
                </div>


            </div>

    </form>

    <script>
        (() => {
            'use strict'

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            const forms = document.querySelectorAll('.needs-validation')

            // Loop over them and prevent submission
            Array.from(forms).forEach(form => {
                form.addEventListener('submit', event => {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }

                    form.classList.add('was-validated')
                }, false)
            })
        })()

    </script>


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