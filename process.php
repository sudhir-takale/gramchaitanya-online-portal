<?php
echo "welcome to register";
$link = mysqli_connect("127.0.0.1", "root", "", "laxmidahiwadi");

if ($link === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

if (isset($_POST['save'])) {

    $fname = $_POST['firstname'];
    $mname = $_POST['middlename'];
    $lname = $_POST['lastname'];
    $adhar = $_POST['adharno'];
    $dob = $_POST['dateofbirth'];
    $pwd = $_POST['password'];
    $cpwd = $_POST['conpassword'];

    $sql = "insert into users values ('$fname','$mname','$lname','$adhar','$dob','$pwd','$cpwd',)";


    $check = mysqli_query($link, $sql);
}
// if ($check) {

//     echo "inserted";

// } else {
//     echo "Not inserted";
// }



mysqli_close($link);
