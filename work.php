<!DOCTYPE html>
<html lang="en">

</body>

</html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="device-width, initial-scale=1.0">
    <title>gram | work done</title>
    <link rel="stylesheet" href="work.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

    <header>
        <div
            style=" position: sticky; border: 2px ridge black; border-left-style: dashed; background-color: rgb(200, 180, 27); height: 100px; border-radius: 13px; border-bottom-style: dotted;">



            <p class="header1"
                style="font-size: 34px;font-family: Verdana, Geneva, Tahoma, sans-serif; font-weight: 900; padding-top: 17px; ">
                Work done by our Grampanchayat</p>


        </div>
        <div style="margin-top: 2%;margin-bottom: 1%;" class="button-tags">
            <button class="mainbuttons" onclick="setVisible1()">completed Work</button>
            <button class="mainbuttons" onclick="setVisible2()">Ongoing Work</button>
            <button class="mainbuttons" onclick="setVisible3()">Approved Work</button>
            <button class="mainbuttons" onclick="setVisible3()">Add Work</button>
        </div>





    </header>




    <form action="" class="m-5 bg-primary-subtle  border w-50 p-4 mx-auto col-10 col-md-8 col-lg-6 ">
        <p class="align-center"
            style="text-align: center; font-size: 30px; font-weight: 800; font-family: Verdana, Geneva, Tahoma, sans-serif;">
            Add work</p>
        <div class="mb-3 ">
            <label for="exampleFormControlInput1" class="form-label">Enter headline </label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter headline">

        </div>
        <div class="mb-3 ">
            <label for="exampleFormControlTextarea1" class="form-label">Enter work decription </label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <label for="exampleFormControlInput1" class="form-label">Select from list</label>

        <select class="form-select mb-3 " aria-label="Default select example">
            <option selected>Select your choice</option>
            <option value="1">Ongoing work</option>
            <option value="2">Completed work</option>
            <option value="3">Approved work</option>
        </select>


        <div class="mb-3 ">
            <label for="formFileMultiple" class="form-label">Upload relevant files</label>
            <input class="form-control" type="file" id="formFileMultiple" multiple>
        </div>



        <div class="text-center">
            <button type="button" class="btn btn-primary w-50 ">Submit</button>
        </div>

    </form>


    <!-- COMPLETED WORK -->
    <div class="completed" id="completedwork"
        style="width: 60%;visibility: hidden; height: auto; margin-left: 23%; margin-right: 23%; ">

        <ul>

            <li>

                <p style="font-size: 23; color: red; "><b>Construction of the new roads.</b></p>
                <div class="decription">
                    The local development needs of the village are discussed at the Gram Sabha at village level.
                    The demands so generated are then complaints about the roads,then our Grampanchayat decide
                    the made a new road on the perticular location(from bus stop to kale vasti).
                </div>
                <div class="images">

                    <img src="Project Images/road1.jpeg" alt="">
                    <img src="Project Images/road2.jpeg" alt="">

                </div>

            </li>
            <hr style=" border: 1px solid black; background-color:black;">


            <li>

                <p class="maintext" style="font-size: 23; color: red;  color: green;"><b>Provide the water supply to
                        every home
                        in
                        village</b></p>
                <div class="decription">
                    The Grampanchayat of the village has taken a major step towards improving the
                    quality of life of its villagers by making available water supply to every
                    home in the village.Through the initiative the Grampanchayat is determined
                    to ensure that each house hold in the village has access to clean drinking
                    water.
                </div>
                <div class="images">
                    <img src="Project Images/water1.jpeg" alt="">
                    <img src="Project Images/water2.jpeg" alt="">

                </div>

            </li>

            <hr style=" border: 1px solid black; background-color:black;">


            <li>

                <p class="maintext" style="font-size: 23; color: red;  color: green;"><b>Provide new furniture and
                        electrical
                        devices
                        to school</b></p>
                <div class="decription">
                    Our Grampanchayat provide the new furiture to school as banches,tables,chairs,
                    racks,etc for free.And also provide the electronic divices as computer,sound
                    system,light tubes,etc.This initiative helps to ensure that the student have
                    access to the necessary tools for their education.
                </div>
                <div class="images">
                    <img src="Project Images/D1.jpeg" alt="">
                    <img src="Project Images/D2.jpeg" alt="">

                </div>

            </li>


            <hr style=" border: 1px solid black; background-color:black;">


            <li>

                <p class="maintext" style="font-size: 23; color: red;  color:green ;"><b>Provide the road side light</b>
                </p>
                <div class="decription">
                    Grampanchayat provide the lights on the road at night.People can travel on
                    the road at night safetly.For safety road side light important for traveling
                    on the road at night.Thats why Grampanchayat provides pole at the side of the
                    road on that pole light have fixed.
                </div>
                <div class="images">
                    <img src="Project Images/Light1.jpeg" alt="">
                    <img src="Project Images/light2.jpeg" alt="">

                </div>

            </li>
            <hr style=" border: 1px solid black; background-color:black;">



            <li>

                <p class="maintext" style="font-size: 23; color: red;  color: green;"><b>Build the Mandir and
                        Sabhamandap</b>
                </p>
                <div class="decription">
                    Grampanchayat can build a Mandir and sabhamandap for the village by utilizing
                    founds from Government.If the village does not have adequate funds for that
                    they contribuit the founds from villager.
                    Finally once the construction is completed the Grampanchayat organized the pran
                    pratishthan ceremony.
                </div>

                <div class="images">
                    <img src="Project Images/Mandir1.jpeg" alt="">
                    <img src="Project Images/mandir2.jpeg" alt="">

                </div>

            </li>



            <hr style=" border: 1px solid black; background-color:black;">

        </ul>
    </div>





    <!-- ONGOING WORK -->
    <div class="ongoing" id="ongoingwork"
        style="width:60%; visibility: hidden; height: auto; margin-left: 23%; margin-right: 23%;">

        <ul>

            <li>

                <p style="font-size: 23; color: red;  color: green;"><b>second work start</b></p>
                <div class="decription">
                    The local development needs of the village are discussed at the Gram Sabha at village level.
                    The demands so generated are then complaints about the roads,then our Grampanchayat decide
                    the made a new road on the perticular location(from bus stop to kale vasti).
                </div>
                <div class="images">

                    <img src="Project Images/road1.jpeg" alt="">
                    <img src="Project Images/road2.jpeg" alt="">

                </div>

            </li>
            <hr style=" border: 1px solid black; background-color:black;">


            <li>

                <p class="maintext" style="font-size: 23; color: red;  color: green;"><b>Provide the water supply to
                        every home
                        in
                        village</b></p>
                <div class="decription">
                    The Grampanchayat of the village has taken a major step towards improving the
                    quality of life of its villagers by making available water supply to every
                    home in the village.Through the initiative the Grampanchayat is determined
                    to ensure that each house hold in the village has access to clean drinking
                    water.
                </div>
                <div class="images">
                    <img src="Project Images/water1.jpeg" alt="">
                    <img src="Project Images/water2.jpeg" alt="">

                </div>

            </li>

            <hr style=" border: 1px solid black; background-color:black;">


            <li>

                <p class="maintext" style="font-size: 23; color: red;  color: green;"><b>Provide new furniture and
                        electrical
                        devices
                        to school</b></p>
                <div class="decription">
                    Our Grampanchayat provide the new furiture to school as banches,tables,chairs,
                    racks,etc for free.And also provide the electronic divices as computer,sound
                    system,light tubes,etc.This initiative helps to ensure that the student have
                    access to the necessary tools for their education.
                </div>
                <div class="images">
                    <img src="Project Images/D1.jpeg" alt="">
                    <img src="Project Images/D2.jpeg" alt="">

                </div>

            </li>


            <hr style=" border: 1px solid black; background-color:black;">


            <li>

                <p class="maintext" style="font-size: 23; color: red;  color:green ;"><b>Provide the road side light</b>
                </p>
                <div class="decription">
                    Grampanchayat provide the lights on the road at night.People can travel on
                    the road at night safetly.For safety road side light important for traveling
                    on the road at night.Thats why Grampanchayat provides pole at the side of the
                    road on that pole light have fixed.
                </div>
                <div class="images">
                    <img src="Project Images/Light1.jpeg" alt="">
                    <img src="Project Images/light2.jpeg" alt="">

                </div>

            </li>
            <hr style=" border: 1px solid black; background-color:black;">



            <li>

                <p class="maintext" style="font-size: 23; color: red;  color: green;"><b>Build the Mandir and
                        Sabhamandap</b>
                </p>
                <div class="decription">
                    Grampanchayat can build a Mandir and sabhamandap for the village by utilizing
                    founds from Government.If the village does not have adequate funds for that
                    they contribuit the founds from villager.
                    Finally once the construction is completed the Grampanchayat organized the pran
                    pratishthan ceremony.
                </div>
                <div class="images">
                    <img src="Project Images/Mandir1.jpeg" alt="">
                    <img src="Project Images/mandir2.jpeg" alt="">

                </div>

            </li>



            <hr style=" border: 1px solid black; background-color:black;">
        </ul>
    </div>



    <!-- APPROVED FOR DEVELOPMENT -->
    <div class="futurework" id="approvedwork"
        style="width: 60%; height: auto; visibility: hidden; margin-left: 23%; margin-right: 23%; margin-top: 23px;">

        <ul>

            <li>

                <p style="font-size: 23; color: red;  color: green;"><b>third work start</b></p>
                <div class="decription">
                    The local development needs of the village are discussed at the Gram Sabha at village level.
                    The demands so generated are then complaints about the roads,then our Grampanchayat decide
                    the made a new road on the perticular location(from bus stop to kale vasti).
                </div>
                <div class="images">

                    <img src="Project Images/road1.jpeg" alt="">
                    <img src="Project Images/road2.jpeg" alt="">

                </div>

            </li>
            <hr style=" border: 1px solid black; background-color:black;">


            <li>

                <p class="maintext" style="font-size: 23; color: red;  color: green;"><b>Provide the water supply to
                        every home
                        in
                        village</b></p>
                <div class="decription">
                    The Grampanchayat of the village has taken a major step towards improving the
                    quality of life of its villagers by making available water supply to every
                    home in the village.Through the initiative the Grampanchayat is determined
                    to ensure that each house hold in the village has access to clean drinking
                    water.
                </div>
                <div class="images">
                    <img src="Project Images/water1.jpeg" alt="">
                    <img src="Project Images/water2.jpeg" alt="">

                </div>

            </li>

            <hr style=" border: 1px solid black; background-color:black;">


            <li>

                <p class="maintext" style="font-size: 23; color: red;  color: green;"><b>Provide new furniture and
                        electrical
                        devices
                        to school</b></p>
                <div class="decription">
                    Our Grampanchayat provide the new furiture to school as banches,tables,chairs,
                    racks,etc for free.And also provide the electronic divices as computer,sound
                    system,light tubes,etc.This initiative helps to ensure that the student have
                    access to the necessary tools for their education.
                </div>
                <div class="images">
                    <img src="Project Images/D1.jpeg" alt="">
                    <img src="Project Images/D2.jpeg" alt="">

                </div>

            </li>


            <hr style=" border: 1px solid black; background-color:black;">


            <li>

                <p class="maintext" style="font-size: 23; color: red;  color:green ;"><b>Provide the road side light</b>
                </p>
                <div class="decription">
                    Grampanchayat provide the lights on the road at night.People can travel on
                    the road at night safetly.For safety road side light important for traveling
                    on the road at night.Thats why Grampanchayat provides pole at the side of the
                    road on that pole light have fixed.
                </div>
                <div class="images">
                    <img src="Project Images/Light1.jpeg" alt="">
                    <img src="Project Images/light2.jpeg" alt="">

                </div>

            </li>
            <hr style=" border: 1px solid black; background-color:black;">



            <li>

                <p class="maintext" style="font-size: 23; color: red;  color: green;"><b>Build the Mandir and
                        Sabhamandap</b>
                </p>
                <div class="decription">
                    Grampanchayat can build a Mandir and sabhamandap for the village by utilizing
                    founds from Government.If the village does not have adequate funds for that
                    they contribuit the founds from villager.
                    Finally once the construction is completed the Grampanchayat organized the pran
                    pratishthan ceremony.
                </div>
                <div class="images">
                    <img src="Project Images/Mandir1.jpeg" alt="">
                    <img src="Project Images/mandir2.jpeg" alt="">

                </div>

            </li>



            <hr style=" border: 1px solid black; background-color:black;">








        </ul>








    </div>







    <script>
        var x = document.getElementById("completedwork")
        var y = document.getElementById("ongoingwork")
        var z = document.getElementById("approvedwork")


        function setVisible1() {




            if (y.style.visibility === "visible" || z.style.visibility === "visible") {

                z.style.display = "none"
                y.style.display = "none"
            }

            if (x.style.visibility === "hidden") {
                x.style.visibility = "visible";
            }
            else {
                x.style.display = "none";
            }
        }
        function setVisible2() {




            if (x.style.visibility === "visible" || z.style.visibility === "visible" || x.style.display === "none" || z.style.display === "none") {
                x.style.display = "none"
                z.style.display = "none"
            }

            if (y.style.visibility === "hidden" || y.style.display === "none") {
                y.style.visibility = "visible";
                y.style.position = "absolute";
                y.style.top = "14%";
                y.style.zIndex = 3;
            }
            else {
                y.style.display = "none";
            }
        }
        function setVisible3() {

            let z = document.getElementById("approvedwork")
            // let x = document.getElementById("completedwork")


            if (x.style.visibility === "visible" || y.style.visibility === "visible") {
                z.style.display = "none"
                y.style.display = "none"
            }
            if (z.style.visibility === "hidden") {
                z.style.visibility = "visible";
                z.style.position = "absolute";
                z.style.top = "14%";
            }
            else {
                z.style.display = "none";
            }
        }

    </script>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
        integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD"
        crossorigin="anonymous"></script>

</body>

</html>