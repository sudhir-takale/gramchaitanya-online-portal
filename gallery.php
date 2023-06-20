<?php


include 'database.php';
session_start();
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("Location: login.php");
    exit;
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

    div.gallery {
        margin-left: 1.5%;
        margin-right: 0.6%;
        margin-top: 1%;
        border: 1px solid #ccc;
        float: left;
        width: 180px;

    }

    div.gallery:hover {
        border: 1px solid #610948;
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
            <button type="button" class="btn btn-primary button-glow border-dark fw-bolder" onclick="makeVisible()">Add
                images</button>
        </div>


    </div>


    <div id="add-image" class="newclass"
        style="width:23%; z-index: auto; height: 20%;  font-weight: bold; float: right; margin-right: 4%; display: none;">

        <form action="not given" class="p-3"
            style="position: absolute; border: 2px solid black; background-image:linear-gradient(#e9e96b, rgb(118, 226, 125), rgb(197, 96, 192));">

            <div class="mb-4 mt-3 ">
                <label for="formFileMultiple" class="form-label mb-2 bg-gradient">Please choose images</label>
                <input class="form-control bg-gradient" type="file" id="formFileMultiple" multiple>

                <button type="button" class="btn btn-primary w-25 mt-3" style="text-align: center
                ; margin-left: 30%; margin-bottom: -7%;">submit</button>

            </div>


        </form>

    </div>



    <div class="gallery">
        <a target="_blank" href="img_lights.jpg">
            <img src="images/flag.jpg" alt="" width="auot" height="120px">
        </a>

    </div>

    <div class="gallery">
        <a target="_blank" href="">
            <img src="images/image.webp" alt="Mountains" width="auto" height="120px">
        </a>

    </div>
    <div class="gallery">
        <a target="_blank" href="img_mountains.jpg">
            <img src="images/gram.jpg" alt="Mountains" width="auto" height="120px">
        </a>

    </div>
    <div class="gallery">
        <a target="_blank" href="img_mountains.jpg">
            <img src="images/gram.jpg" alt="Mountains" width="auto" height="120px">
        </a>

    </div>


    <div class="gallery">
        <a target="_blank" href="img_mountains.jpg">
            <img src="images/gram.jpg" alt="Mountains" width="auto" height="120px">
        </a>

    </div>
    <div class="gallery">
        <a target="_blank" href="img_mountains.jpg">
            <img src="images/gram.jpg" alt="Mountains" width="auto" height="120px">
        </a>

    </div>
    <div class="gallery">
        <a target="_blank" href="img_mountains.jpg">
            <img src="images/gram.jpg" alt="Mountains" width="auto" height="120px">
        </a>

    </div>
    <div class="gallery">
        <a target="_blank" href="img_mountains.jpg">
            <img src="images/gram.jpg" alt="Mountains" width="auto" height="120px">
        </a>

    </div>





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