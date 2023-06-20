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



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>view photos | gram</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<style>
    body {
        background-color: #139aa9;
    }

    .js-js-hidden {
        display: none;
    }

    .gallery {


        float: left;
        margin-left: 11.5%;



    }

    .gallery img:hover {
        transform: scale(1.5);
        transition: 0.5s ease;
        margin: 5%;
    }

    p {
        background: linear-gradient(to left, #f32170,
                #e354cd, #141114, #19c4ca);
        -webkit-text-fill-color: transparent;
        -webkit-background-clip: text;
        background-clip: text;

    }



    .btn-primary {
        background-color:
            #c649df;
        color: #ece9e9;
    }

    @keyframes glowing {
        0% {
            box-shadow: 1 -10px #e4e40f;
        }

        40% {
            box-shadow: 0 0 20px #e2d009;
        }

        60% {
            box-shadow: 0 0 20px #debb09;
        }

        100% {
            box-shadow: 0 0 -10px #e4e40f;
        }
    }

    .button-glow {
        animation: glowing 2000ms infinite;
        box-shadow: 2px 1px 1px rgb(224, 178, 10);
    }
</style>

<body>


    <div style="background-color: whitesmoke; border: 2px solid black;">
        <p style="text-align: center; font-size: 44px; font-weight: bolder;
     margin-bottom: -1.7% ;">See the photos of village</p>

        <div style="text-align:end;margin-right: 4%;">
            <button type="button" class="btn btn-primary button-glow border-dark fw-bolder mb-2"
                onclick="makeVisible()">Add photos from your Device</button>
        </div>


    </div>


    <div id="add-image" class="newclass"
        style="width:23%; z-index: auto; height: 20%;  font-weight: bold; float: right; margin-right: 4%; display: none;">

        <form action="gallery.php" enctype="multipart/form-data" method="POST" class="p-3"
            style="position: absolute; border: 2px solid black; background-image:linear-gradient(#e9e96b, rgb(118, 226, 125), rgb(197, 96, 192));">

            <div class="mb-4 mt-3 ">
                <label for="formFileMultiple" class="form-label mb-2 bg-gradient">Please choose images</label>
                <input class="form-control bg-gradient" name="image" type="file" id="formFileMultiple" multiple>

                <button type="submit" class="btn btn-primary w-25 mt-3" style="text-align: center
                ; margin-left: 30%; margin-bottom: -7%;">submit</button>

            </div>


        </form>

    </div>

    <?php

    include 'database.php';
    $query = "SELECT * FROM photos ORDER BY id DESC";
    $result = mysqli_query($conn, $query);

    if ($result) {
        while ($row = mysqli_fetch_assoc($result)) {
            $imagePath = $row['photo'];
            ?>
            <div class="gallery" style="margin:9px;">
                <img src="<?php echo $imagePath; ?>" alt="" width="auto" height="120px">
            </div>
            <?php
        }
    } else {
        echo 'No images found.';
    }



    mysqli_close($conn);
    ?>


    <script>




        let x = document.getElementById("add-image");

        let disp = 0;
        function makeVisible() {


            if (disp == 1) {
                x.style.display = "none";
                disp = 0;
            }
            else {
                x.style.display = "block ";
                disp = 1;
            }

        }



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