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
    require 'navbar.php';

    ?>
    <header style="position: sticky; top: 0%;">

        <marquee behavior="side" direction="left" scrollamount="10"
            style=" position: sticky; background-color:yellow; margin-top: 0.1%;">
            <div style="font-size: 22px; font-weight: bold;  color: black;">
                <p style="padding-top: 8px;">काही निबंधाचे विषय तर इतके मजेशीर असतात कि त्यांच्याबद्दल लिहीत असताना
                    आपण
                    आपल्याच विचार विश्वात
                    हरवून जातो. काही विषय
                    आपल्या अडकलेल्या विचारचक्राला चालना देतात व अनेक सामाजिक समस्या त्यांचे समाधान यांबद्दल विचार
                    करायला
                    लावतात.

                    निबंधलेखन लेखन हि कला शाळेतील लहान मुलांच्या बुद्धीला व विचारांना एखाद्या सुंदर शिल्पाप्रमाणे
                    आकार
                    देण्याचे काम करते.</p>
            </div>
        </marquee>
    </header>
    <div class="extra" >
        <p class="headline" style="color:black;background-color:#77CDF3
">Grampanchayat Laxmi Dahiwadi Welcomes You !</p>

        <div class="maincontainer" style="display: flexbox;">

            <div class="sidebar" style="max-height:12px; ">
                <div class="notice" style="border:1px solid black; width: auto;  margin-top: -1%;  height: 600px;box-shadow:1px 2px 5px black; border-radius:15px;">
                    <p style = "background-color:cadetblue;border-radius:15px; box-shadow: 2px 1px 8px cadetblue; "> Notices</p>
                    <div class="list">


                        <?php
                        require 'database.php';

                        $sql = "SELECT * FROM notices order by id DESC limit 4";
                        $result = mysqli_query($conn, $sql);

                        if ($result) {
                            $notices = mysqli_fetch_all($result, MYSQLI_ASSOC);
                        } else {
                            $notices = array(); // Initialize an empty array if there's an error or no notices found
                        }
                        ?>
                        <marquee behavior="sidebar" direction="up">
                            <ul style="height: 500px;">
                                <?php foreach ($notices as $notice): ?>
                                    <li>
                                        <?php echo $notice['notice']; ?>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </marquee>

                    </div>


                </div>


                <a class="mapimage" target="_blank"
                    href="https://www.google.com/maps/place/Laxmidahiwadi,+Maharashtra+413305/@17.4776098,75.2994298,616m/data=!3m1!1e3!4m6!3m5!1s0x3bc6a063c76d6e3b:0x6e8c7795b2d6306b!8m2!3d17.4775118!4d75.2985785!16s%2Fg%2F1hhvxpky8"><img
                        style="width: 89%; height: 15%; margin-top: 10%; margin-left: 4%;" src="images/map.jpg" alt="">
                </a>

            </div>

            <div>
                <div class="outercontainer" style="display: flex;">

                    <img style="width: 399px; margin-top: 0%; height: 244px; margin-left: 0.7%;"
                        src="images/laxmi temple.jfif" alt="">



                    <div class="innercontainer" style="display: flex; margin-left: 5%;">

                        <div style="margin-right: 2px;" class="information"><img src="images/Dummy1.jpeg" alt="">
                            <p class="postinfo" style="margin-left: 3%; text-overflow: ellipsis;">Name - Saurabh Patil
                                <br>
                                Post - Sarpanch <br>

                                Adress - Patil Wasti <br>
                                Phone - 9763302259 <br>

                            </p>
                        </div>

                        <div class="information"><img src="images/Dummy1.jpeg" alt="">
                            <p style="margin-left: 25px; " class="postinfo">Name - Ajit Shinde <br>
                                Post - Deputy Sarpanch <br>

                                Adress - Takale Wasti <br>
                                Phone - 8432414111<br>

                            </p>
                        </div>

                        <div class="information"><img src="images/Dummy1.jpeg" alt="">
                            <p style="margin-left: 25px;" class="postinfo"> Name - Prakash Rajge<br>
                                Post - Gramsevak <br>
                                Adress - Mali Wasti <br>
                                Phone - 9756895465<br>

                            </p>
                        </div>
                        <div class="information"><img src="images/Dummy1.jpeg" alt="">
                            <p style=" margin-left: 25px;" class="postinfo"> Name - Ramesh Sutar <br>
                                Post - Talathi <br>
                                Adress - Laxmidahiwadi <br>
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
                                    <td>20/12/1963</td>

                                </tr>
                                <tr>
                                    <td>ग्रा.प.फोन नं. </td>
                                    <td>8998521245</td>

                                </tr>
                                <tr>
                                    <td>सदस्य संख्या</td>
                                    <td>6</td>

                                </tr>
                                <tr>
                                    <td>कर्मचारी संख्या </td>
                                    <td>12</td>

                                </tr>
                                <tr>
                                    <td>लोकसंख्या</td>
                                    <td>5,628 </td>

                                </tr>
                                <tr>
                                    <td>क्षेत्रफळ </td>
                                    <td>2755.82 hectares</td>

                                </tr>
                                <tr>
                                    <td>एकुण मिळकती</td>
                                    <td>date</td>

                                </tr>
                                <tr>
                                    <td> Annual income </td>
                                    <td>15 lakh</td>

                                </tr>
                                <tr>
                                    <td>पोष्ट ऑफिस</td>
                                    <td>1</td>

                                </tr>
                                <tr>
                                    <td>गटार लांबी</td>
                                    <td>5 km</td>

                                </tr>
                                <tr>
                                    <td>रस्ता लांबी</td>
                                    <td>18 km</td>

                                </tr>
                                <tr>
                                    <td>गॅस एजन्सी</td>
                                    <td>1</td>

                                </tr>
                                <tr>
                                    <td>महिला मंडळ</td>
                                    <td>1</td>

                                </tr>
                                <tr>
                                    <td>सहकारी सोसायटी</td>
                                    <td>2</td>

                                </tr>
                                <tr>
                                    <td>बचत गट</td>
                                    <td>10</td>

                                </tr>
                                <tr>
                                    <td>Bank</td>
                                    <td>1</td>

                                </tr>


                                <tr>
                                    <td>Wards</td>
                                    <td>5</td>

                                </tr>
                                <tr>
                                    <td>Schools</td>
                                    <td>8</td>

                                </tr>
                                <tr>
                                    <td>Temples</td>
                                    <td>19</td>

                                </tr>
                                <tr>
                                    <td>Hospitals</td>
                                    <td>9</td>

                                </tr>


                                <tr>
                                    <td>Animal's Hospital</td>
                                    <td>1</td>

                                </tr>
                                <tr>
                                    <td>Library</td>
                                    <td>4</td>

                                </tr>
                                <tr>
                                    <td>Weekly Market</td>
                                    <td>Friday</td>

                                </tr>
                                <tr>
                                    <td>Mangal Karyalay</td>
                                    <td>1</td>

                                </tr>
                            </tbody>
                        </table>

                    </div>


                </div>
                <hr style="height: 2px; margin-left: 1.5%; margin-right: 1.5%;">

                <div class="services p-3" id="services">

                    <p
                        style="background-color: rgb(25, 24, 24); color: yellow; font-weight: 700;margin-left: 1.5%;margin-right: 1%; font-size: 17px;">
                        <span style="margin-left: 5%; font-size: 23px; padding: 4px;">Services</span>
                    </p>
                    <div class="container" id="servicess">
                        <div class="grid-item"><a href="/documentrequest.php">Online Payment</a>
                        </div>
                        <div class="grid-item"><a href="/documentrequest.php">मिळकत माहिती</a></div>
                        <div class="grid-item"><a href="documentrequest.php"> रहिवासी प्रमाणपत्र</a></div>
                        <div class="grid-item"><a href="community.php">सरपंच कार्यकाल</a></div>
                        <div class="grid-item"><a href="community.php">कर्मचारी माहिती</a></div>
                        <div class="grid-item"><a href="#">सदस्य कार्यकारणी</a></div>
                        <div class="grid-item"><a href="#">उपसरपंच कार्यकाल</a></div>
                        <div class="grid-item"><a href="documentrequest.php">सभेची माहिती</a></div>
                        <div class="grid-item"><a href="/documentrequest.php">जन्म दाखला</a></div>
                        <div class="grid-item"><a href="/documentrequest.html">विवाह दाखला</a></div>
                        <div class="grid-item"><a href="/documentrequest.php">मृत्यू दाखला</a></div>
                        <div class="grid-item"><a href="/documentrequest.php">उत्पन्न प्रमाणपत्र</a></div>
                        <div class="grid-item"><a href="/work.pho">नियोजीत विकास कामे</a></div>
                        <div class="grid-item"><a href="/documentrequest.php">घरभाडे</a></div>
                        <div class="grid-item"><a href="/documentrequest.php">पाणी बिल</a></div>
                        <div class="grid-item"><a href="/work.html">पुर्ण झालेली विकास कामे</a></div>
                        <div class="grid-item"><a href="/work.php">चालू असलेली विकास कामे</a></div>
                        <div class="grid-item"><a href="#">जमा-खर्च पत्रक</a></div>
                        <div class="grid-item"><a href="/documentrequest.php">ग्रामपंचायतीला पत्र</a></div>
                        <div class="grid-item"><a href="/documentrequest.php">Others</a></div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="complaint " style=" margin-left: 50px; height: 34%; ">

            <div class="secondcon p-3" style="width: 34%; height: 45%; margin-right: 0.5%; border: 1px solid black; box-shadow:4px 2px 10px black; border-radius:19px;" >

                <h5 style="text-align: end; margin-right: 9%;">If you have any query please fill below form !</h5>

                <form action="query.php" method="post" class="m-2 bg-body-primary border w-100 p-4 mx-auto">
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
                        <button type="submit" class="btn btn-primary w-25">Submit</button>
                        <button type="reset" class="btn btn-primary w-25">Clear</button>

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

                    <li><a href="index.php">Home</a></li>
                    <li><a href="servicess">Services</a></li>

                    <li><a href="community.php">Community</a></li>
                    <li><a href="register.php">Register</a></li>


                </ol>

            </div>


            <div class="service" style="margin-left: 20pc;">
                <p style="font-weight:600 ; font-size: 23px ; margin-left: 35px;color: red;">Services</p>
                <ul>
                    <li><a href="servicess">Marriage Registration</a></li>
                    <li><a href="servicess">Birth Registration</a></li>
                    <li><a href="servicess">Death Certificate</a></li>
                    <li><a href="servicess">Water Bills</a></li>
                    <li><a href="servicess">Residence Certificate</a></li>
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


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>




</body>

</html>