<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Laxmidahiwadi | online </title>
    <link rel="icon" type="image/x-icon" href="images/icons8-house-with-garden-16.png">
    <link rel="stylesheet" href="index.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">


</head>

<body onclick="hide()">


    <?php
    session_start();
    if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
        header("Location: login.php");
        exit;
    }

    echo "
    <script>console.log('Debug Objects: " . $_SESSION["role"] . "');</script>";
    echo "Welcome " . $_SESSION["role"] . "!";

    ?>
    <header style="position: sticky; top: 0%;">
        <p class="maintext" style="background-image: url('images/tric.jpg');">
            <a style="text-decoration-line: none; color: red;" href="index.php">Grampanchayat, <br> Laxmi Dahiwadi</a>
        </p>
        <nav>
            <ul class="menu">
                <li><a href="index.php">Home</a></li>
                <li><a href="work.php">Work</a></li>
                <li><a href="community.php">Community</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="gallery.php">Gallery</a></li>
                <li><a href="login.php">Login</a></li>
                <li><a href="scheme.php">Schemes</a></li>
                <li><a href="admin_dashboard.php">Admin</a></li>
                <div>
                    <div
                        style="display: inline;position: absolute;top: 50%;-ms-transform: translateY(-50%); transform: translateY(-50%);">
                        <span id="Login" style="color: red; font-weight: bold;width: 50px; margin-right: 34px;">
                            <?php echo $_SESSION['role'] ?>
                        </span>
                    </div>
                </div>
                <div style="text-align: end;">
                    <a style="text-decoration: none;color: red; cursor: pointer;" href="#" onclick="makeVisible()">
                        <span id="dot"
                            style=" margin-top: 3px; margin-right:80px; font-size: 30px; background-color: rgb(0, 0, 0); text-align: center; font-weight: bold; border: 1px solid green;">S</a>
                    </span>
                </div>
            </ul>
        </nav>
<<<<<<< HEAD
=======

        <!-- <nav>
            <div class="menu-toggle">
                <a href="#" onclick="toggleMenu()">Menu</a>
            </div>
            <ul class="menu">
                <li><a href="index.php">Home</a></li>
                <li><a href="work.php">Work</a></li>
                <li><a href="community.php">Community</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="gallery.php">Gallery</a></li>
                <li><a href="login.php">Login</a></li>
                <li><a href="scheme.php">Schemes</a></li>
                <li><span id="site-name">Laxmi-Dahiwadi</span></li>
            </ul>
        </nav>
        <script>
            function toggleMenu() {
                var menuToggle = document.querySelector('.menu-toggle');
                menuToggle.classList.toggle('active');
            }

            function makeVisible() {
                var nav = document.querySelector('nav');

                nav.style.position = 'fixed';
                nav.style.top = '0';
                nav.style.left = '0';
                nav.style.width = '100%';
                nav.style.zIndex = '9999';



            }
        </script> -->

>>>>>>> ac660f27797c1b99bdb3cfcca0111f3cf40ceb9d
        <div id="seeprofile" class="profileclicked"
            style="width: 180px ; height: auto; border: 2px solid red; z-index: 3; 
            position: absolute; float: right; right: 0.9%; opacity: 0.9; background-color: white; margin-top:0.7%; display: none; ">
            <div class="list1" style="margin-top: 4%;">

                <p> <a style="font-size: 16px; font-family: Verdana, Geneva, Tahoma, sans-serif; " href="#">View
                        Profile</a></p>
                <p style="margin-top:-12px ; font-size: 16px ; font-family: Verdana, Geneva, Tahoma, sans-serif;"><a
                        href="#">Log Out</a></p>

            </div>


        </div>
        <marquee behavior="side" direction="left" scrollamount="10"
            style=" position: sticky; background-color:yellow; margin-top: 0.1%;">
            <div style="font-size: 22px; font-weight: bold;  color: black;">
                <p style="padding-top: 8px;">काही निबंधाचे विषय तर इतके मजेशीर असतात कि त्यांच्याबद्दल लिहीत असताना आपण
                    आपल्याच विचार विश्वात
                    हरवून जातो. काही विषय
                    आपल्या अडकलेल्या विचारचक्राला चालना देतात व अनेक सामाजिक समस्या त्यांचे समाधान यांबद्दल विचार करायला
                    लावतात.

                    निबंधलेखन लेखन हि कला शाळेतील लहान मुलांच्या बुद्धीला व विचारांना एखाद्या सुंदर शिल्पाप्रमाणे आकार
                    देण्याचे काम करते.</p>
            </div>
        </marquee>
    </header>
    <div class="extra">
        <p class="headline">Grampanchayat Laxmi Dahiwadi Welcomes You !</p>

        <div class="maincontainer" style="display: flexbox;">

            <div class="sidebar">
                <div class="notice" style="border:2px solid black; width: auto;  margin-top: -1%;  height: 600px; ">
                    <p> Notices</p>
                    <div class="list">
                        <marquee behavior="sidebar" direction="up">
                            <ul style="height:500px">
                                <li>आज सकाळी वर्तमान पत्रात आलेली तुझी बातमी की, तू जिल्हास्तरीय निबंध स्पर्धेत सहभागी
                                    होऊन
                                    प्रथम क्रमांक पटकावला आहेस.</li>
                                <li>आज तुला प्रथम क्रामांकाच पारितोषिक मिळालं हे पाहून माझं आनंद गगनात मावेना सारखं
                                    झालंय.
                                    तुझ्याकडे असलेली लेखनाची कला अशीच
                                    जप . तुझ्या पुढील वाटचालीस खूप खूप शुभेच्छा.</li>
                                <li>औपचारिक वा व्यावसायिक पत्रांचे स्वरूप थोडे वेगळे असते. अशा पत्रांच्या प्रारंभी
                                    वरच्या
                                    उजव्या कोपऱ्यात पत्ता लिहिताना
                                    प्रथम आपले संपूर्ण नाव लिहावे.</li>

                                <li>आमच्या शाळेला सुमारे दोनशे रोपे हवी आहेत. आपल्याकडे उपलब्ध असलेल्या वृक्षांची रोपे
                                    आम्ही
                                    निवडू हेपत्र मी माननीय
                                    मुख्याध्यापकांच्या अनुमतीने लिहीत आहे. तसदीबद्दल क्षमस्व.</li>
                                <li>आपल्या खात्याकडून वृक्षांची रोपे विनामूल्य पुरवली जाणार आहेत, असे कळले. आमच्या
                                    शाळेलाही
                                    अशी रोपे हवी आहेत; त्यासाठी हे
                                    पत्र लिहीत आहे.</li>

                                <li>निमंत्रणे देणे, देणगी मागणे, स्थळभेटीसाठी परवानगी घेणे, अग्निशमनदलासारख्या संस्थांना
                                    मार्गदर्शनासाठी बोलावणे, 'शालेय
                                    समिती'मध्ये सहभागी होण्यासाठी नगरसेवक किंवा सरपंच यांना आमंत्रित करणे,
                                    विदयार्थ्यांच्या
                                    समस्या सोडवण्यासाठी पालकांना
                                    आवाहन करणे यांसारख्या प्रसंगांत विनंतिपत्रे लिहिली जातात.</li>


                            </ul>

                        </marquee>

                    </div>


                </div>


                <a class="mapimage" target="_blank"
                    href="https://www.google.com/maps/place/Laxmidahiwadi,+Maharashtra+413305/@17.4776098,75.2994298,616m/data=!3m1!1e3!4m6!3m5!1s0x3bc6a063c76d6e3b:0x6e8c7795b2d6306b!8m2!3d17.4775118!4d75.2985785!16s%2Fg%2F1hhvxpky8"><img
                        style="width: 89%; height: 15%; margin-top: 10%; margin-left: 4%;" src="images/map.jpg"
                        alt=""></a>

            </div>

            <div>
                <div class="outercontainer" style="display: flex;">

                    <img style="width: 399px; margin-top: 0%; height: 244px; margin-left: 0.7%;"
                        src="images/laxmi temple.jfif" alt="">



                    <div class="innercontainer" style="display: flex; margin-left: 5%;">

                        <div style="margin-right: 2px;" class="information"><img src="images/_MG_0531 c.jpg" alt="">
                            <p class="postinfo" style="margin-left: 3%; text-overflow: ellipsis;">Name - Kapil Pise <br>
                                Post - Sarpanch <br>

                                Adress - Hole <br>
                                Phone - 9763302259 <br>

                            </p>
                        </div>

                        <div class="information"><img src="images/_MG_0529 c.jpg" alt="">
                            <p style="margin-left: 25px; " class="postinfo">Name - Sudhir Takale <br>
                                Post - Deputy Sarpanch <br>

                                Adress - Laxmi dahiwadi <br>
                                Phone - 8432414111<br>

                            </p>
                        </div>

                        <div class="information"><img src="images/_MG_0528 c.jpg" alt="">
                            <p style="margin-left: 25px;" class="postinfo"> Name - Vinod Asabe<br>
                                Post - Gramsevak <br>
                                Adress - Shelve <br>
                                Phone - 9756895465<br>

                            </p>
                        </div>
                        <div class="information"><img src="images/_MG_0532 c.jpg" alt="">
                            <p style="margin-left: 25px;" class="postinfo"> Name - Ashok Pawar <br>
                                Post - Talathi <br>
                                Adress - Khedbhose <br>
                                Phone - 9325317610<br>

                            </p>
                        </div>

                    </div>

                </div>


                <hr style="height: 2px; margin-left: 0.5%; margin-right: 1.5%; background-color: black;">

                <div class="graminfo" style="display: flex;">

                    <div class="village">
                        <p
                            style="font-size:23px; text-align: center; color: red;background-color: black; font-weight: 600;">
                            Village information</p>
                        <p style="font-size: 17px; font-weight: 500;"> According to Census 2011 information the location
                            code or
                            village code of Laxami Dahiwadi village is 562625. Laxami
                            Dahiwadi village is located in Mangalvedhe tehsil of Solapur district in Maharashtra, India.
                            It
                            is
                            situated 18km away
                            from sub-district headquarter Mangalvedhe (tehsildar office) and 70km away from district
                            headquarter
                            Solapur. As per
                            2009 stats, Laxmi Dahiwadi is the gram panchayat of Laxami Dahiwadi village.

                            The total geographical area of village is 2755.82 hectares. Laxami Dahiwadi has a total
                            population
                            of 5,628 peoples, out
                            of which male population is 2,912 while female population is 2,716. Literacy rate of laxami
                            dahiwadi
                            village is 65.97%
                            out of which 73.97% males and 57.40% females are literate. There are about 1,204 houses in
                            laxami
                            dahiwadi village.
                            Pincode of laxami dahiwadi village locality is 413305.

                            When it comes to administration, Laxami Dahiwadi village is administrated by a sarpanch who
                            is
                            elected representative of
                            the village by the local elections. As per 2019 stats, Laxami Dahiwadi village comes under
                            Pandharpur assembly
                            constituency & Solapur parliamentary constituency. Mangalvedhe is nearest town to laxami
                            dahiwadi
                            for all major economic
                            activities, which is approximately 18km away.</p>




                    </div>

                    <div class="tableinfo">
                        <table class=" scrolldown" ">
             <p style=" font-size: 23px; text-align: center; font-weight: 700; background-color: black; color: red;">
                            Adarsh
                            Info
                            </p>
                            <tbody>
                                <tr>
                                    <td>स्थापना दिनांक</td>
                                    <td>date</td>

                                </tr>
                                <tr>
                                    <td>ग्रा.प.फोन नं. </td>
                                    <td>Francisco Chang</td>

                                </tr>
                                <tr>
                                    <td>सदस्य संख्या</td>
                                    <td>date</td>

                                </tr>
                                <tr>
                                    <td>कर्मचारी संख्या </td>
                                    <td>Francisco Chang</td>

                                </tr>
                                <tr>
                                    <td>लोकसंख्या</td>
                                    <td>date</td>

                                </tr>
                                <tr>
                                    <td>क्षेत्रफळ </td>
                                    <td>Francisco Chang</td>

                                </tr>
                                <tr>
                                    <td>एकुण मिळकती</td>
                                    <td>date</td>

                                </tr>
                                <tr>
                                    <td> Annual income </td>
                                    <td>Francisco </td>

                                </tr>
                                <tr>
                                    <td>पोष्ट ऑफिस</td>
                                    <td>date</td>

                                </tr>
                                <tr>
                                    <td>गटार लांबी</td>
                                    <td>Francisco Chang</td>

                                </tr>
                                <tr>
                                    <td>रस्ता लांबी</td>
                                    <td>Francisco Chang</td>

                                </tr>
                                <tr>
                                    <td>गॅस एजन्सी</td>
                                    <td>Francisco Chang</td>

                                </tr>
                                <tr>
                                    <td>महिला मंडळ</td>
                                    <td>Francisco Chang</td>

                                </tr>
                                <tr>
                                    <td>सहकारी सोसायटी</td>
                                    <td>Francisco Chang</td>

                                </tr>
                                <tr>
                                    <td>बचत गट</td>
                                    <td>Francisco Chang</td>

                                </tr>
                                <tr>
                                    <td>Bank</td>
                                    <td>Francisco Chang</td>

                                </tr>


                                <tr>
                                    <td>Wards</td>
                                    <td>Francisco Chang</td>

                                </tr>
                                <tr>
                                    <td>Schools</td>
                                    <td>Francisco Chang</td>

                                </tr>
                                <tr>
                                    <td>Temples</td>
                                    <td>Francisco Chang</td>

                                </tr>
                                <tr>
                                    <td>Hospitals</td>
                                    <td>Francisco Chang</td>

                                </tr>


                                <tr>
                                    <td>Animal's Hospital</td>
                                    <td>Francisco Chang</td>

                                </tr>
                                <tr>
                                    <td>Library</td>
                                    <td>Francisco Chang</td>

                                </tr>
                                <tr>
                                    <td>Weekly Market</td>
                                    <td>Francisco Chang</td>

                                </tr>
                                <tr>
                                    <td>Mangal Karyalay</td>
                                    <td>Francisco Chang</td>

                                </tr>
                            </tbody>
                        </table>

                    </div>


                </div>
                <hr style="height: 2px; margin-left: 1.5%; margin-right: 1.5%;">

                <div class="services" id="services"
                    style="background-image: linear-gradient(50deg,rgb(74,234,220) 5%,rgb(151,120,209) 50%,rgb(207,42,186) 10%,rgb(238,44,130) 60%,rgb(251,105,98) 80%,rgb(254,248,76) 100%);">

                    <p
                        style="background-color: rgb(25, 24, 24); color: white; font-weight: 700;margin-left: 1.5%;margin-right: 1%; font-size: 17px;">
                        <span style="margin-left: 5%; font-size: 23px; padding: 4px;">Services</span>
                    </p>
                    <div class="container" id="#">
                        <div class="grid-item"><a href="/documentrequest.html">Online Payment</a></div>
                        <div class="grid-item"><a href="/documentrequest.html">मिळकत माहिती</a></div>
                        <div class="grid-item"><a href="/documentrequest.html"> रहिवासी प्रमाणपत्र</a></div>
                        <div class="grid-item"><a href="/community.html"> सरपंच कार्यकाल</a></div>
                        <div class="grid-item"><a href="/community.html">कर्मचारी माहिती</a></div>
                        <div class="grid-item"><a href="#">सदस्य कार्यकारणी</a></div>
                        <div class="grid-item"><a href="#">उपसरपंच कार्यकाल</a></div>
                        <div class="grid-item"><a href="#">सभेची माहिती</a></div>
                        <div class="grid-item"><a href="/documentrequest.html">जन्म दाखला</a></div>
                        <div class="grid-item"><a href="/documentrequest.html">विवाह दाखला</a></div>
                        <div class="grid-item"><a href="/documentrequest.html">मृत्यू दाखला</a></div>
                        <div class="grid-item"><a href="/documentrequest.html">उत्पन्न प्रमाणपत्र</a></div>
                        <div class="grid-item"><a href="/work.html">नियोजीत विकास कामे</a></div>
                        <div class="grid-item"><a href="/documentrequest.html">घरभाडे</a></div>
                        <div class="grid-item"><a href="/documentrequest.html">पाणी बिल</a></div>
                        <div class="grid-item"><a href="/work.html">पुर्ण झालेली विकास कामे</a></div>
                        <div class="grid-item"><a href="/work.html">चालू असलेली विकास कामे</a></div>
                        <div class="grid-item"><a href="#">जमा-खर्च पत्रक</a></div>
                        <div class="grid-item"><a href="/documentrequest.html">ग्रामपंचायतीला पत्र</a></div>
                        <div class="grid-item"><a href="/documentrequest.html">Others</a></div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="complaint" style="display: flex; height: 34%;">
            <div class="slideshow-container" style="border: 2px solid black;  width: 52%; margin-left:2%;">

                <!-- Full-width images with number and caption text -->
                <div class="mySlides fade">
                    <div class="numbertext">1 / 3</div>
                    <img src="images/tricolor.jpg" style="width:100%; height: 100%;">
                    <!-- <div class="text">Caption Text</div> -->
                </div>

                <div class="mySlides fade">
                    <div class="numbertext">2 / 3</div>
                    <img src="images/tricolor.jpg" style="width:100%">
                    <!-- <div class="text">Caption Two</div> -->
                </div>

                <div class="mySlides fade">
                    <div class="numbertext">3 / 3</div>
                    <img src="images/tricolor.jpg" style="width:100%">
                    <!-- <div class="text">Caption Three</div> -->
                </div>

                <!-- Next and previous buttons -->
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>

                <div style="text-align:center;">
                    <span class="dot" onclick="currentSlide(1)"></span>
                    <span class="dot" onclick="currentSlide(2)"></span>
                    <span class="dot" onclick="currentSlide(3)"></span>
                </div>
            </div>
            <!-- <br> -->
            <div class="secondcon" style="width: 34%; height: 45%; margin-right: 0.5%;">

                <h5 style="text-align: end; margin-right: 9%;">If you have any query please fill below form !</h5>

                <form action="query.php" method="post" class="m-2 bg-body-secondary border w-100 p-4 mx-auto ">
                    <div class="mb-1 fw-bold ">
                        <label for="exampleFormControlInput1" class="form-label">Enter the heading</label>
                        <input type="text" class="form-control" name="heading" id="exampleFormControlInput1"
                            placeholder="Enter the heading of complaint">

                    </div>
                    <div class="mb-1 fw-bold ">
                        <label for="exampleFormControlTextarea1" class="form-label">Enter the decription</label>
                        <textarea class="form-control" name="discription" id="exampleFormControlTextarea1"
                            rows="3"></textarea>
                    </div>

                    <div class="text-center mt-3">
                        <!-- <button type="button" class="btn btn-primary w-50 ">Submit</button> -->
                        <input type="reset" value="reset">
                        <input type="submit" value="submit">
                    </div>

                </form>
            </div>

        </div>

        <hr>
        <div class="foot-list">

            <ul>
                <li><img src="images/digital india.webp" alt=""></li>
                <li><img src="images/flag.jpg" alt=""></li>
                <li><img src="images/digital india.webp" alt=""></li>
                <li><img src="images/flag.jpg" alt=""></li>
                <li><img src="images/digital india.webp" alt=""></li>
                <li><img src="images/flag.jpg" alt=""></li>
                <li><img src="images/digital india.webp" alt=""></li>
                <li><img src="images/flag.jpg" alt=""></li>
                <li><img src="images/digital india.webp" alt=""></li>
            </ul>
        </div>
    </div>
    <footer>

        <div class="foot" style=" height: max-content; background-color: rgb(39, 38, 38); color: white;">
            <div class="useful" style="margin-left: 10%;">
                <p style="font-weight: 600; font-size: 23px ; margin-left: 32px; color: red;">links </p>

                <ol>

                    <li><a href="service.html">Home</a></li>
                    <li><a href="service.html">Services</a></li>

                    <li><a href="service.html">Community</a></li>
                    <li><a href="service.html">Register</a></li>


                </ol>

            </div>


            <div class="service" style="margin-left: 20pc;">
                <p style="font-weight:600 ; font-size: 23px ; margin-left: 35px;color: red;">Services</p>
                <ul>
                    <li><a href="service.html">Marriage Registration</a></li>
                    <li><a href="service.html">Birth Registration</a></li>
                    <li><a href="service.html">Death Certificate</a></li>
                    <li><a href="service.html">Water Bills</a></li>
                    <li><a href="service.html">Residence Certificate</a></li>
                </ul>

            </div>
            <div class="service" style="margin-left: 20pc;">
                <h6 style="font-weight:600 ; font-size: 23px ; color: red;">contact us</h6>
                <p>
                    Laxmi dahiwadi, <br> Mangalwedha, 413305 <br>

                    Email - Laxmidahiwadi34@gmail.com, <br> ph.no.4847734984.</p>

            </div>
        </div>
        <p style=" color: rgb(111, 243, 111); text-align: center;   background-color: rgb(39, 38, 38); height:95px; ">
            <b>
                Website Designed, Developed, Hosted & maintained by Elevate Softwares , Pandharpur. Content
                provided by
                Grampanchayat
                Office, <br>
                Government of Maharashtra.
                <br>
                Copyright © 2023 Elevate Software Solutions, Pandharpur </b>
        </p>
    </footer>

    <script>
        let x = document.getElementById("seeprofile");

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
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
        integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD"
        crossorigin="anonymous"></script>


    <script>
        let slideIndex = 0;
        showSlides();

        function showSlides() {
            let i;
            let slides = document.getElementsByClassName("mySlides");
            let dots = document.getElementsByClassName("dot");
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > slides.length) { slideIndex = 1 }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
            setTimeout(showSlides, 2000); // Change image every 2 seconds
        }
    </script>

</body>

</html>